{{--
  Template Name: About us

--}}



@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
        <x-slot name="subtitle">
            {{ __('About') }}
        </x-slot>
        <x-slot name="title">
            {{ __('About Us') }}
        </x-slot>
        <x-slot name="bg_image">
            @php
                $image_id = $primaryPageHeader['homes_header_img'];
            @endphp
            <img src="@asset('assets/AboutUs-HeaderImage.jpg')" alt="">        
        </x-slot>
    </x-primary-header>


    <div>
        @while(have_posts()) @php(the_post())
            @include('partials.content-about')
        @endwhile
    </div>

@endsection



