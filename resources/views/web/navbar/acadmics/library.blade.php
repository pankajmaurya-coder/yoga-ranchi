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
                            Explore Digital <strong>Library</strong>
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
                                <img src="{{ asset('asset/web/logo.png') }}" alt="books">
                            </div>

                            <div class="faculty-info">

                                <h3>पा जप एवं चिदाकाश धारणा  </h3>
                                <p>(PGDY/0001)</p>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    Author :- स्वामी सत्यानंद सरस्वती
                                </p>

                                <div class="faculty-interest">
                                    <small>Publication</small>
                                    <p> योग पब्लिकेशन्स ट्रस्ट, मुंगेर, बिहार</p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Language:-  Hindi</span>
                            <a href="#">Read <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 02 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">01</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/logo.png') }}" alt="books">
                            </div>

                            <div class="faculty-info">

                                <h3>अजपा जप एवं चिदाकाश धारणा</h3>
                                <p>(PGDY/0002)</p>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    Author :- स्वामी सत्यानंद सरस्वती
                                </p>

                                <div class="faculty-interest">
                                    <small>Publication</small>
                                    <p> योग पब्लिकेशन्स ट्रस्ट, मुंगेर, बिहार</p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Language:-  Hindi</span>
                            <a href="#">Read <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 03 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">01</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/logo.png') }}" alt="books">
                            </div>

                            <div class="faculty-info">

                                <h3>अजपा जप एवं चिदाकाश धारणा</h3>
                           
                                <p>(PGDY/0003)</p>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    Author :- स्वामी सत्यानंद सरस्वती
                                </p>

                                <div class="faculty-interest">
                                    <small>Publication</small>
                                    <p> योग पब्लिकेशन्स ट्रस्ट, मुंगेर, बिहार</p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Language:-  Hindi</span>
                            <a href="#">Read <b>→</b></a>
                        </div>

                    </article>



                    {{-- Faculty 01 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">01</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/logo.png') }}" alt="books">
                            </div>

                            <div class="faculty-info">

                                <h3>कुंडिलिनी योग  </h3>
                                <p>(PGDY/0007)</p>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    Author :- स्वामी सत्यानंद सरस्वती
                                </p>

                                <div class="faculty-interest">
                                    <small>Publication</small>
                                    <p> योग पब्लिकेशन्स ट्रस्ट, मुंगेर, बिहार</p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Language:-  Hindi</span>
                            <a href="#">Read <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 02 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">01</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/logo.png') }}" alt="books">
                            </div>

                            <div class="faculty-info">

                                <h3>कुंडिलिनी योग</h3>
                                <p>(PGDY/0008)</p>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    Author :- स्वामी सत्यानंद सरस्वती
                                </p>

                                <div class="faculty-interest">
                                    <small>Publication</small>
                                    <p> योग पब्लिकेशन्स ट्रस्ट, मुंगेर, बिहार</p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Language:-  Hindi</span>
                            <a href="#">Read <b>→</b></a>
                        </div>

                    </article>


                    {{-- Faculty 03 --}}
                    <article class="faculty-card">

                        <div class="faculty-card-top">

                            {{-- <span class="faculty-number">01</span> --}}

                            <div class="faculty-photo">
                                <img src="{{ asset('asset/web/logo.png') }}" alt="books">
                            </div>

                            <div class="faculty-info">

                                <h3>कुंडिलिनी योग</h3>
                           
                                <p>(PGDY/0009)</p>

                                <span class="faculty-line"></span>

                                <p class="faculty-qualification">
                                    Author :- स्वामी सत्यानंद सरस्वती
                                </p>

                                <div class="faculty-interest">
                                    <small>Publication</small>
                                    <p> योग पब्लिकेशन्स ट्रस्ट, मुंगेर, बिहार</p>
                                </div>

                            </div>

                        </div>

                        <div class="faculty-footer">
                            <span>Language:-  Hindi</span>
                            <a href="#">Read <b>→</b></a>
                        </div>

                    </article>

                </div>

            </div>

    </section>

@endsection
