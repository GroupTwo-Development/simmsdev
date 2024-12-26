
@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
    <x-slot name="subtitle">
        {{ $primaryPageHeader['homes_sub_title'] }}
    </x-slot>
    <x-slot name="title">
        {{ $primaryPageHeader['homes_title'] }}
    </x-slot>
    <x-slot name="bg_image">
        @php
            $image_id = $primaryPageHeader['homes_header_img'];
        @endphp
        {!! App\get_image_with_alt($image_id, 'full', ['class' => 'bg-cover object-cover h-24 sm:h-28 md:h-36 lg:h-56 xl:h-52 object-center-top']) !!}
    </x-slot>
</x-primary-header>

<div>
    <x-primary-page-nav />
</div>

<section x-data="{ showMap: false }" class="relative" x-cloak>
    {{-- Mobile View - Toggle Button and Filter --}}
    @include('partials.homes.mobile')
    {{-- Find your home  - Desktop--}}

  

    {{-- Desktopfilter --}}
    @include('partials.homes.desktop-filter')


{{-- User selections --}}
<x-user-selection />
   
    <div  class="relative object-cover mt-1 w-full " style="background-image: url('@asset('images/pattern2.png')')">
         {{-- Main Content - Conditionally Render Map or Cards --}}

         
        <div  x-show="!showMap" >
            <div class="container mx-auto">
                {{-- Query loop --}}
                <div class="community-wrapper relative facetwp-template grid grid-cols-1 sm:g sm:grid-cols-2 sm:gap-3 lg:grid-cols-3 content  justify-center items-start content-center lg:pt-12">
                    @while(have_posts()) @php(the_post())
                        @include('partials.content-homes')
                    @endwhile
                </div>
                <x-load-more />
            </div>

          
        </div>


        {{-- Map Section - only visible when showMap is true --}}
        <div class="container mx-auto">
          <div class="">
            <div x-show="showMap" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 -translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 -translate-x-full"
            >
                <h1>Google map</h1>
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
                            <div class="text-white py-6 px-4 xl:px-6 xl:py-8 text-left xl:ml-14">
                                <span class="block text-simms-gold text-sm mb-2 tracking-[0.015rem] lg:mb-5 uppercase font-semibold">New Home Communities</span>
                                <h1 class="font-arno_pro_subhead text-2xl lg:text-3xl xl:text-4xl mb-1 lg:mb-4"></h1>
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



