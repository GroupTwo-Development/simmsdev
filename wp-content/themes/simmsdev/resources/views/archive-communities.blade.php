@php
$communities = new WP_Query([
    'post_type' => 'community',
    'posts_per_page' => -1, // Adjust as needed
]);
@endphp
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

<section x-data="{showMap: false}">
    {{-- Mobile View - Toggle Button and Filter --}}
    @include('partials.community.mobile')
    {{-- Find your home  - Desktop--}}
    
    

   
    <div  class="relative object-cover mt-1 h-full" style="background-image: url('@asset('images/pattern2.png')')">
         {{-- Main Content - Conditionally Render Map or Cards --}}
        <div x-show="!showMap">
            <div class="container mx-auto">
                {{-- Query loop --}}
                <div class="pt-10 pb-28 sm:flex sm:flex-row lg:flex-row 2xl:flex-row sm:gap-3 lg:gap-2 xl:gap-2 2xl:gap-4 justify-center content-center ">
                    @while(have_posts()) @php(the_post())
                        @includeFirst(['partials.content-communities'])
                    @endwhile
                </div>
            </div>
        </div>

         {{-- Map Section - only visible when showMap is true --}}
         <div x-data="leafletMap()" x-init="showMap" id="communitymap" class="h-96 w-full">
            <div id="communitymap" class="w-full h-full rounded-lg shadow-md bg-white"></div>
         </div>
    </div>

   
</section>

@endsection



