{{--
  Template Name: Gallery

--}}
@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
        <x-slot name="subtitle">
            {{ __('Gallery') }}
        </x-slot>
        <x-slot name="title">
            {{ the_title() }}
        </x-slot>
        <x-slot name="bg_image">
            @php
                $image_id = $primaryPageHeader['homes_header_img'];
            @endphp
            <img src="@asset('assets/blog.jpg')" alt="">        
        </x-slot>
    </x-primary-header>
    <header class="bg-primary-green py-5">
        <div class="container mx-auto">
            <div class="flex flex-row justify-center items-center gap-10">
                <a href="/photos" class="font-agenda font-[500] text-white text-lg uppercase tracking-[0.06em] hover:text-simms-gold transition-all ease-in-out">Photos</a>
                <a href="/videos" class="font-agenda font-[500] text-white text-lg uppercase tracking-[0.06em] hover:text-simms-gold transition-all ease-in-out">Videos</a>
                <a href="/virtual-tours" class="font-agenda font-[500] text-white text-lg uppercase tracking-[0.06em] hover:text-simms-gold transition-all ease-in-out">Virtual tours</a>
            </div>
        </div>
    </header>
    <div  class="relative object-cover w-full pt-10 pb-16" style="background-image: url('@asset('images/pattern2.png')')">
        <div class="mt-1">
            <div class="container mx-auto">
               <div>
                    @while(have_posts()) @php(the_post())
                        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
                    @endwhile
               </div>
            </div>
        </div>
    </div>
@endsection
