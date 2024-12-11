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
               <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-3  content-center">
                    @while(have_posts()) @php(the_post())
                        @include( 'partials.content-blog')
                    @endwhile
               </div>

               {{-- page navigation --}}
               <div class="pt-6 pagination flex justify-center items-center content-center">
                <div class="flex flex-row">
                    {{ the_posts_navigation(array(
                        'prev_text' => '<span class="pagination-item" aria-hidden="true"><i class="fa-solid fa-circle-chevron-left text-3xl"></i></span>',
                        'next_text' => '<span class="pagination-item text-3xl" aria-hidden="true"><i class="fa-solid fa-circle-chevron-right"></i></span>',
                    )) }}
                </div>
               </div>
            </div>
        </div>
    </div>
@endsection
