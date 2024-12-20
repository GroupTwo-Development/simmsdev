{{--
  Template Name: Contact
--}}

@extends('layouts.primary-app')

@section('content')
  <x-primary-header>
        <x-slot name="subtitle">
            {{ __('Contact') }}
        </x-slot>
        <x-slot name="title">
            {{ __('Contact Us') }}
        </x-slot>
        <x-slot name="bg_image">
            <img src="@asset('assets/contact-header.jpeg')" alt="contact">        
        </x-slot>
    </x-primary-header>


    <div class="pt-0">
        @while(have_posts()) @php(the_post())
            @include('partials.content-contact')
        @endwhile
    </div>

@endsection



