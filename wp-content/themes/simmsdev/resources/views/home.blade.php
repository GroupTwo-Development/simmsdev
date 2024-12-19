@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
        <x-slot name="subtitle">
            {{ __('About') }}
        </x-slot>
        <x-slot name="title">
            {{ __('Simms Community Blog') }}
        </x-slot>
        <x-slot name="bg_image">
            @php
                $image_id = $primaryPageHeader['homes_header_img'];
            @endphp
            <img src="@asset('assets/blog.jpg')" alt="">        
        </x-slot>
    </x-primary-header>
    {{-- Filter --}}
    <section class="border-b-[1px] lg:bg-primary-green lg:py-8">
        <div class="container mx-auto">
            <div class="flex flex-row justify-center items-center">
                <div class="lg:hidden">
                    @shortcode('[facetwp facet="categories"]')

                </div>

                <div class="hidden lg:block desktop-filter">
                    @shortcode('[facetwp facet="_categories"]')
                </div>
              
            </div>
        </div>
    </section>
    <div  class="relative object-cover w-full pt-10 pb-16" style="background-image: url('@asset('images/pattern2.png')')">

        <div class="mt-1">
            <div class="container mx-auto">
                @if (! have_posts())
                    <x-alert type="warning">
                    {!! __('Sorry, no results were found.', 'sage') !!}
                    </x-alert>

                    {!! get_search_form(false) !!}
                @endif
            </div>
        </div>


        <div class="mt-1">
            <div class="container mx-auto">
               <div class="facetwp-template sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-3  content-center">
                    @while(have_posts()) @php(the_post())
                        @include( 'partials.content-blog')
                    @endwhile
               </div>

               {{-- page navigation --}}
               <div class="pt-6 pagination flex justify-center items-center content-center">
                <x-load-more />
               </div>
            </div>
        </div>
    </div>
@endsection
