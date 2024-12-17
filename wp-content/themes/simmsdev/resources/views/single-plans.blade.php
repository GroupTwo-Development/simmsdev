@extends('layouts.app')

@section('content')
{{-- breadcrumb --}}
<x-breadcrumb />

  @while(have_posts()) @php(the_post())
    @include('partials.content-plan')
  @endwhile
@endsection
