
@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
    <x-slot name="subtitle">
        {{ $primaryPageHeader['community_sub_title'] }}
    </x-slot>
    <x-slot name="title">
        {{ $primaryPageHeader['community_title'] }}
    </x-slot>
    <x-slot name="bg_image">
        @php
            $image_id = $primaryPageHeader['community_header_img'];
        @endphp
        {!! App\get_image_with_alt($image_id, 'full', ['class' => 'bg-cover object-cover h-24 sm:h-28 md:h-36 lg:h-56 xl:h-52 object-center-top']) !!}
    </x-slot>
</x-primary-header>

<div>
    <x-primary-page-nav />
</div>

<section x-data="{ showMap: false }" class="relative" x-cloak>
    {{-- Mobile View - Toggle Button and Filter --}}
    @include('partials.community.mobile')
    {{-- Find your home  - Desktop--}}

    {{-- Desktopfilter --}}
    @include('partials.community.desktop-filter')


{{-- User selections --}}
<x-user-selection />
   
    <div  class="relative object-cover mt-1 w-full " style="background-image: url('@asset('images/pattern2.png')')">
         {{-- Main Content - Conditionally Render Map or Cards --}}

         
        <div  x-show="!showMap" >
            <div class="container mx-auto">
                {{-- Query loop --}}
                <div class="community-wrapper relative facetwp-template grid grid-cols-1 sm:g sm:grid-cols-2 sm:gap-3 lg:gap-5 xl:gap-10 lg:grid-cols-3 content  justify-center items-start content-center lg:pt-12">
                    @while(have_posts()) @php(the_post())
                        @include('partials.content-communities')
                    @endwhile
                </div>

                <?php
                $gallery = get_field('gallery');
                $featured_img = $gallery[0];
                $community_city = get_field('comm_city');
                $community_state = get_field('comm_state');
       
       
                $beds_array = [];
                $baths_array = [];
       
                $plans_community_group = get_field('plans_community_group');
                $plans = $plans_community_group['subdivision_plans'];
       
                $community_sqft_group = get_field('sqft');
                $comm_min_SqFt = (int)$community_sqft_group['comm_min_SqFt'];
                $comm_max_SqFt = (int)$community_sqft_group['comm_max_sqft'];
       
                $price_group = get_field('comm_price');
                $comm_min_price = $price_group['comm_min_price'];
                $comm_max_price = $price_group['comm_max_price'];
       
       
       
                if($plans) :
                  foreach ($plans as $plan) :
                    $plan_beds_group = get_field('plan_beds_group', $plan->ID);
                    $min_bedrooms     = $plan_beds_group['Plan_beds'];
                    $beds_array[] = $min_bedrooms;
       
                    $plan_baths_group = get_field('plan_baths_group', $plan->ID);
                    $baths     = $plan_baths_group['plan_full_baths'];
                    $baths_array[] = $baths;
       
                  endforeach;
                endif;
       
                $beds_array = array_unique($beds_array);
                sort($beds_array);
                if(!empty($beds_array)){
                  $min_bed = min($beds_array);
                  $max_beds = max($beds_array);
                }
       
                $baths_array = array_unique($baths_array);
                sort($baths_array);
                if(!empty($baths_array)){
                  $min_baths = min($baths_array);
                  $max_baths = max($baths_array);
                }
       
                ?>
                <article class="ccard bg-white shadow-md rounded-lg  w-60">
       
                  <div class="card_img">
                    <?php if ($featured_img) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="block h-28">
                      <img src="<?php echo esc_url($featured_img['sizes']['medium']); ?>" alt="<?php echo esc_attr($featured_img['alt']); ?>" class="h-28 w-full" />
                    </a>
                    <?php endif ?>
                  </div>
       
                  <div class="card-body">
                    <div class="card-body__title border-b-[1px] border-simms-gold py-1">
                      <h5 class="text-sm mb-0.5 px-2">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                        </a>
                      </h5>
       
                      <?php if($community_city && $community_state) : ?>
                      <span class="address text-sm px-2"><?php echo $community_city . ', ' . $community_state; ?></span>
                      <?php endif; ?>
                    </div>
                    <div class="card-body__spec flex flex-row justify-between items-center border-b-[1px] border-simms-gold py-1 px-2">
                      <?php if(isset($min_bedrooms) && isset($max_beds)) : ?>
                      <div class="bed_spec spec flex flex-row items-center">
                        <span class="spec-icon text-sm text-primary-green"> <i class="fa-solid fa-bed"></i></span>
                        <span class="spec-data text-sm text-primary-green"><?php echo (isset($min_bed) == isset($max_beds)) ? $min_bed : $min_bed .'<i class="fa-solid fa-plus"></i>' ?></span>
                        <span class="spec-data-label text-sm">Beds</span>
                      </div>
                      <?php endif; ?>
       
                      <div class="bath_spec spec flex flex-row items-center">
                        <span class="spec-icon text-sm text-primary-green"> <i class="fa-solid fa-bath"></i></span>
                        <span class="spec-data text-sm text-primary-green"><?php echo (isset($min_baths) == isset($max_baths)) ? $min_baths : $min_baths .'<i class="fa-solid fa-plus"></i>' ?></span>
                        <span class="spec-data-label text-sm text-primary-green">Baths</span>
                      </div>
       
                      <?php  if($comm_min_SqFt ) : ?>
                      <div class="sqft_spec spec flex flex-row items-center">
                        <span class="spec-icon text-sm text-primary-green"><i class="fa-solid fa-ruler-combined"></i></span>
                        <span class="spec-data text-sm text-primary-green"><?php echo ($comm_min_SqFt === $comm_max_SqFt) ? number_format($comm_min_SqFt) : number_format($comm_min_SqFt) . '<i class="fa-solid fa-plus"></i>'  ?></span>
                        <span class="spec-data-label text-sm text-primary-green">Sqft</span>
                      </div>
                      <?php endif; ?>
       
                    </div>
       
                    <?php if($comm_min_price) : ?>
                      <div class="card-body__price pb-4">
                        <span class="price text-primary-green font-semibold">
                          <?php echo 'Starting at' .' '.'$'. number_format($comm_min_price); ?></span>
                      </div>
                    <?php endif; ?>
                  </div>
                </article>





                

                <x-load-more />
            </div>

        </div>


        {{-- Map Section - only visible when showMap is true --}}
        <div class="container mx-auto">
          <div class="map-area">
            <div x-show="showMap" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 -translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 -translate-x-full"
                class="w-full"
            >

            @shortcode('[facetwp facet="community_map"]')

            {{-- {!! facetwp_display('facet', 'community_map') !!} --}}
           
            </div>
          </div>
        </div>
    </div>

      {{-- page content --}}
        <div id="dynamic-footer-content" class="w-full">
            <div class="flex flex-col lg:flex-row lg:justify-between  w-full">
                {{-- content --}}
                <div class="bg-[#00676D] bg-repeat bg-cover opacity-[1]  flex flex-col justify-center lg:w-1/2" style="background-image: url('@asset('images/pattern3.png')')">
                    <div class="container mx-auto">
                        <div id="footer-text" class="flex flex-col justify-center items-center m-4 sm:m-8">
                            <div class="text-white py-6 px-4 xl:px-6 xl:py-8 text-left">
                                <span class="block text-simms-gold text-sm mb-2 tracking-[0.015rem] uppercase font-semibold">New Home Communities</span>
                                <h1 class="font-arno_pro_subhead text-2xl mb-1"></h1>
                                <div id="footer-description"></div>
                            </div>
                        </div>
                    </div>
                
                </div>
                {{-- image --}}
                <div class="lg:w-1/2">
                    {{-- image --}}
                    <div class="w-full sm:h-96 lg:h-[460px]">
                        <img id="footer-image" src="/wp-content/uploads/2024/10/Component-27-–-14.jpg" alt="" class="w-full object-cover bg-cover h-full">
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection



