
@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
        <x-slot name="subtitle">
            {{ __('About') }}
        </x-slot>
        <x-slot name="title">
            {{ __('Testimonials') }}
        </x-slot>
        <x-slot name="bg_image">
            @php
                $image_id = $testimonialPage_header['background_image_testimonials'];
               
            @endphp
             <img src="{{ $testimonialPage_header['background_image_testimonials'] }}" alt="testimonials">     
        </x-slot>
    </x-primary-header>


    <div class="mt-0">
        @include('partials.testimonials.introContent')
        @include('partials.testimonials.featured-testimonials')
        <section class="mt-10 lg:mt-24">
            <div class="container mx-auto">
                <div class="facetwp-template grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10 auto-rows-fr">
                    @while(have_posts()) @php(the_post())
                        @include('partials.content-testimonials')
                    @endwhile
                </div>
                <x-load-more />
            </div>
        </section>
    </div>

    <x-find-your-home :findYourHome="$findYourHome" />
@endsection




