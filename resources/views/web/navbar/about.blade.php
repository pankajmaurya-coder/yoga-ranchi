@extends('web.layouts.app')
@section('title', 'about yoga department ranchi')

  @push('style')
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
 
   @endpush 
@section('content')
    <section class="hero-bg">

       <div class="container">

           <div class="hero-wrapper">

               <!-- LEFT CONTENT -->
               <div class="hero-content">
                   <h1 class="hero-title text-white">
                       About Our 
                       <span class="text-primary">
                          Company
                       </span>
                   </h1>

                   <p class="hero-desc text-white">
                       Bihar IT Solution is a technology and digital solutions company helping businesses, institutions
                       and individuals turn ideas into practical, reliable and meaningful digital experiences..
                   </p>

                   <a href="#" class="hero-btn">
                       Contact Us
                       <span>→</span>
                   </a>

               </div>

               <!-- RIGHT IMAGE -->
               <div class="hero-image">
                   <img src="{{ asset('asset/navbar/team-Copy.webp') }}" alt="IT Training Students">

               </div>

           </div>

       </div>

   </section>
@endsection