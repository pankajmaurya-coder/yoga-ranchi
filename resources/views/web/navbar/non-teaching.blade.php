@extends('web.layouts.app')
@section('title', 'about yoga department ranchi')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
@endpush

@section('content')

    <section class="hero">
        <img src="{{ asset('asset/web/navbar/hero/background.webp') }}" alt="About Ranchi Women's College" class="hero-image">

        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-content">
                    <div class="hero-title">
                        <h1>Empowering Minds</h1>
                        <h1>Through Yoga & Wellness</h1>
                        <img src="{{ asset('asset/web/divider/divider1.png') }}" class="divider py-1 pb-2">
                    </div>

                    <div class="content">
                        <p class="">
                            The Yoga Department provides a nurturing space for physical fitness, mental peace,
                            and personal growth. Through yoga and mindfulness,
                            students develop healthier habits, greater focus, and inner confidence..
                        </p>
                    </div>
                </div>

                <div class="image">
                    <img src="{{ asset('asset/web/navbar/hero/about.webp') }}" alt="About Ranchi Women's College"
                        class="hero-over-image">
                </div>
            </div>
        </div>
    </section>


    {{-- =========================================================
    FACULTY PROFILES
========================================================= --}}

    <section class="faculty-section" id="faculty">

        <div class="container">

            {{-- Section Header --}}
            <div class="faculty-header">

                <div class="title py-5">
                    <div class="d-flex flex-column  justify-content-center align-items-center">
                        <div class="about-department-label">
                            {{-- <span></span>
                            Our non Teaching Faculty
                            <span></span> --}}
                        </div>

                        <h2 class="about-department-title">
                            Meet Our <strong>Staff</strong>
                        </h2>
                        <img src="{{ asset('asset/web/divider/divider2.png') }}" class="divider py-1 pb-2">
                    </div>
                </div>


                {{-- Faculty Grid --}}
                <div class="faculty-grid pb-5">


                    {{-- Faculty 01 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">01</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/about/faculty/vikash.png') }}" alt="Dr. Bibhuti Bhushan Roy">
                            </div>

                            <div class="faculty-info">

                                <h3>Mr. Vikash Kumar</h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    M.com,
                                    ADCA,
                                    B.Ed
                                </p>

                                <div class="faculty-interest">
                                    <small>Position</small>
                                    <p>(Computer Operator)</p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Staff</span>
                            <a href="#">View Profile <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 02 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">02</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/about/faculty/sangeeta.png') }}" alt="Dr. Manoj Soni">
                            </div>

                            <div class="faculty-info">

                                <h3>Mrs. Sangeeta Kumari</h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    (MTS)
                                </p>

                                {{-- <div class="faculty-interest">
                                    <small>Academic Background</small>
                                    <p>Barkatullah University, Bhopal, 2005</p>
                                </div> --}}

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Faculty</span>
                            <a href="#">View Profile <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 03 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">03</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/about/faculty/deepak.png') }}" alt="Dr. Pampa Sen Biswas">
                            </div>

                            <div class="faculty-info">

                                <h3>Mr. Deepak Lohar</h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    (MTS)
                                </p>

                                <div class="faculty-interest">
                                    <small>Qualifications</small>
                                    <p>
                                        Matric
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Faculty</span>
                            <a href="#">View Profile <b>→</b></a>
                        </div>

                    </article>




                </div>

            </div>

    </section>

@endsection
