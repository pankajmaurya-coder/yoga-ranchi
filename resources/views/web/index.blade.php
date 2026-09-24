@extends('web.layouts.app')
@section('title', 'yoga department ranchi')

  @push('style')
  <link rel="stylesheet" href="{{ asset('css/web.css') }}">

 <!-- swipper js -->
              <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.css"
    />
   @endpush 
@section('content')
@include('web.partials.slider')
@include('web.partials.about')
@include('web.partials.notice')
@include('web.partials.course')
@include('web.partials.yoga')
@include('web.partials.guest')
@include('web.partials.website')
@endsection


@push('js')
    <script src="{{ asset('asset/js/notice.js') }}"></script>
@endpush