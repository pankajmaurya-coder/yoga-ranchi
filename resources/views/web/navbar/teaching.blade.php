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

                {{-- <div class="faculty-heading">

                <div class="section-eyebrow">
                    <span></span>
                    Our Faculty
                </div>

                <h2>
                    Faculty <span>Profiles</span>
                </h2>

                <p>
                    Meet the dedicated academic team committed to teaching,
                    research and the development of future professionals.
                </p>

            </div>

            <div class="faculty-count">
                <strong>06</strong>

                <span>
                    Faculty<br>
                    Members
                </span>
            </div>

        </div> --}}
                <div class="title py-5">
                    <div class="d-flex flex-column  justify-content-center align-items-center">
                        <div class="about-department-label">
                            {{-- <span></span>
                            Our Teaching Faculty
                            <span></span> --}}
                        </div> 

                        <h2 class="about-department-title">
                            Meet Our <strong>Faculty</strong>
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
                                <img src="{{ asset('asset/web/about/faculty/bbr.webp') }}"
                                    alt="Dr. Bibhuti Bhushan Roy">
                            </div>

                            <div class="faculty-info">

                                <h3>Dr. Bibhuti Bhushan Roy</h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    D. Litt. (Specialisation in Yoga)
                                </p>

                                <div class="faculty-interest">
                                    <small>Area of Interest</small>
                                    <p>Impact of Yoga on the people of Ranchi</p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Faculty</span>
                            <a href="#">View Profile <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 02 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">02</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/about/faculty/manoj.webp') }}" alt="Dr. Manoj Soni">
                            </div>

                            <div class="faculty-info">

                                <h3>Dr. Manoj Soni</h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    M.A. Yoga Science
                                </p>

                                <div class="faculty-interest">
                                    <small>Academic Background</small>
                                    <p>Barkatullah University, Bhopal, 2005</p>
                                </div>

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
                                <img src="{{ asset('asset/web/about/faculty/pampa.webp') }}" alt="Dr. Pampa Sen Biswas">
                            </div>

                            <div class="faculty-info">

                                <h3>Dr. Pampa Sen Biswas</h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    D.Litt. in Sanskrit
                                </p>

                                <div class="faculty-interest">
                                    <small>Qualifications</small>
                                    <p>
                                        M.A. in Sanskrit, Hindi, Music, M.Ed & Ph.D. in Sanskrit
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Faculty</span>
                            <a href="#">View Profile <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 04 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">04</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/about/faculty/kr.webp') }}" alt="Sri. Khilesh Kumar">
                            </div>

                            <div class="faculty-info">

                                <h3>Sri. Khilesh Kumar</h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    M.A. (YOG), B.A. (YOG)
                                </p>

                                <div class="faculty-interest">
                                    <small>Qualifications</small>
                                    <p>
                                        Sanskrit University, Haridwar · UGC NET 2017, 2018, 2019
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Faculty</span>
                            <a href="#">View Profile <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 05 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">05</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/about/faculty/sn.webp') }}" alt="Santosh Kumari">
                            </div>

                            <div class="faculty-info">

                                <h3>Santosh Kumari <span>(Contractual)</span></h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    Master in Yogic Science
                                </p>

                                <div class="faculty-interest">
                                    <small>Qualifications</small>
                                    <p>
                                        UGC NET December 2020 · QCI Qualified 2018 ·
                                        Asian Yoga Champion 2018 (Gold Medalist)
                                    </p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Faculty</span>
                            <a href="#">View Profile <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 06 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">06</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/about/faculty/manish.webp') }}" alt="Manish Kumar">
                            </div>

                            <div class="faculty-info">

                                <h3>Manish Kumar <span>(Contractual)</span></h3>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    Masters in Yogic Science
                                </p>

                                <div class="faculty-interest">
                                    <small>Qualifications</small>
                                    <p>
                                        PG Diploma in Yog Vigyan from DSVV Haridwar ·
                                        M.Sc. Biotechnology from Ranchi University ·
                                        UGC NET in Yoga Dec 2020
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
