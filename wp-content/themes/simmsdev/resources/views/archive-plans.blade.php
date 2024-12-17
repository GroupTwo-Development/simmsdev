
@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
    <x-slot name="subtitle">
      {{ __('Find Your Home') }}
    </x-slot>
    <x-slot name="title">
        {{ __('Floorplans') }}
    </x-slot>
    <x-slot name="bg_image">
        @php
            $image_id = $primaryPageHeader['community_header_img'];
        @endphp
        <img src="@asset('assets/floorplan-header.jpg')" alt="">        
    </x-slot>
</x-primary-header>

<div>
    <x-primary-page-nav />
</div>

<section x-data="{ showMap: false }" class="relative" x-cloak>
    {{-- Mobile View - Toggle Button and Filter --}}
    @include('partials.plans.mobile')
    {{-- Find your home  - Desktop--}}

    {{-- Desktopfilter --}}
    @include('partials.plans.desktop-filter')


{{-- User selections --}}
<x-user-selection />
   
    <div  class="relative object-cover mt-1 w-full " style="background-image: url('@asset('images/pattern2.png')')">
         {{-- Main Content - Conditionally Render Map or Cards --}}

         
        <div  x-show="!showMap" >
            <div class="container mx-auto">
                {{-- Query loop --}}
                <div class="community-wrapper relative facetwp-template grid grid-cols-1 sm:g sm:grid-cols-2 sm:gap-3 lg:grid-cols-3 content  justify-center items-start content-center lg:pt-12">
                    @while(have_posts()) @php(the_post())
                        @include('partials.content-plans')
                    @endwhile
                </div>
                <x-load-more />
            </div>
        </div>

    </div>

      {{-- page content --}}
        <div id="dynamic-footer-content" class="w-full">
            <div class="flex flex-col lg:flex-row lg:justify-between  w-full">
                {{-- content --}}
                <div class="bg-primary-green bg-no-repeat flex flex-col justify-center lg:w-1/2" style="background-image: url('@asset('images/pattern2.png')')">
                    <div class="container mx-auto">
                        <div id="footer-text" class="flex flex-col justify-center items-center m-4 sm:m-8">
                            <div class="bg-white py-6 px-4 xl:px-6 xl:py-8 text-center">
                                <span class="block text-simms-gold text-sm mb-2 tracking-[0.015rem] uppercase font-semibold">A short lead in</span>
                                <h1 class="font-arno_pro_subhead text-2xl mb-1">This headline can be forty 40 characters</h1>
                                <div id="footer-description">
                                    <p>This body copy paragraph can be up to 500 characters. It should reflect whatever topic is written above in the headline. In home building, creativity shapes dreams into tangible sanctuaries. Each nail, each board is a step toward realizing visions—a harmonious blend of purpose and design. From foundation to finish every detail is crafted with care, transforming blueprints into havens of comfort and joy. Homes become more than structures; they’re where laughter echoes and love fills every corner.</p>
                                </div>
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



