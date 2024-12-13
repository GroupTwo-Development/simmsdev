
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
              {!! App\get_image_with_alt($image_id, 'full', ['class' => 'bg-cover object-cover h-24 sm:h-28 md:h-36 lg:h-56 xl:h-52 object-center-top']) !!}     
        </x-slot>
    </x-primary-header>


    <div class="mt-0 lg:mt-12">
        @include('partials.testimonials.introContent')
        @include('partials.testimonials.featured-testimonials')
        <section class="mt-10 lg:mt-24">
            <div class="container mx-auto">
                <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-5 lg:gap-10 sm:justify-center sm:items-center">
                    @while(have_posts()) @php(the_post())
                     @include('partials.content-testimonials')
                    @endwhile
                </div>
              
            </div>
        </section>
    </div>

    <x-find-your-home :findYourHome="$findYourHome" />
@endsection



