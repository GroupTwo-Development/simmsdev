@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
        <x-slot name="subtitle">
            {{ __('About') }}
        </x-slot>
        <x-slot name="title">
            {{ __('Simms Community Blog') }}
        </x-slot>
        {{-- <x-slot name="bg_image">
            @php
                $image_id = $primaryPageHeader['homes_header_img'];
            @endphp
            <img src="@asset('assets/blog.jpg')" alt="">        
        </x-slot> --}}
    </x-primary-header>
    <div  class="relative object-cover w-full pt-10 pb-16" style="background-image: url('@asset('images/pattern2.png')')">



        <div class="mt-1">
            <div class="container mx-auto">
               <div class="bg-white py-16 px-6">
                    @while(have_posts()) @php(the_post())
                      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
                    @endwhile
               </div>
               
         
            </div>
        </div>
    </div>

    <x-find-your-home :findYourHome="$findYourHome" />
@endsection
