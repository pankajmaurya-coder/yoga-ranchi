@extends('web.layouts.app')
@section('title', 'about')

@stack('style')
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

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
                        <p class="text-white">The Yoga Department provides a nurturing space for physical fitness, mental
                            peace,
                            and personal growth. Through yoga and mindfulness,
                            students develop healthier habits, greater focus, and inner confidence..</p>
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
    CONTACT / LOCATION SECTION
========================================================= --}}

    <section class="contact-section">

        <div class="container">

            {{-- ================= SECTION HEADER ================= --}}
            <div class="contact-header">

                {{-- <div>
                    <div class="section-eyebrow">
                        <span></span>
                        Get In Touch
                    </div>

                    <h2>
                        Contact <span>Us</span>
                    </h2>

                    <p>
                        Reach out to the University Department of Mathematics
                        for academic information, enquiries and collaboration.
                    </p>
                </div> --}}
                <div class="d-flex flex-column  justify-content-center ">
                    <div class="about-department-label">
                        <span></span>
                       Get In Touch
                        <span></span>
                    </div>

                    <h2 class="about-department-title">
                        Contact <strong>Us</strong>
                    </h2>
                    <img src="{{ asset('asset/web/divider/divider2.png') }}" class="divider py-1 pb-2">
                </div>

            </div>


            {{-- ================= CONTACT LAYOUT ================= --}}
            <div class="contact-grid">


                {{-- ================= LEFT ================= --}}
                <div class="contact-details">


                    {{-- Address --}}
                    <div class="contact-card">

                        <div class="contact-icon">
                            <span>⌖</span>
                        </div>

                        <div class="contact-info">

                            <span class="contact-label">
                                Our Address
                            </span>

                            <h3>
                                University Department of Yoga
                            </h3>

                            <p>
                                {{-- 2<sup>nd</sup> Floor, Basic Science Building,<br>
                                Morabadi, Ranchi<br>
                                Jharkhand - 834008 --}}
                                Institute of Basic Science, Ranchi University,
                                 Morabadi, Ranchi, Jharkhand 834008, India
                            </p>

                        </div>

                    </div>


                    {{-- Phone --}}
                    <div class="contact-card">

                        <div class="contact-icon">
                            <span>☎</span>
                        </div>

                        <div class="contact-info">

                            <span class="contact-label">
                                Phone
                            </span>

                            <a href="tel:06512960019">
                                0651-2960019
                            </a>

                        </div>

                    </div>


                    {{-- Email --}}
                    <div class="contact-card">

                        <div class="contact-icon">
                            <span>✉</span>
                        </div>

                        <div class="contact-info">

                            <span class="contact-label">
                                Email
                            </span>

                            <a href="mailto:dept_math@rediffmail.com">
                               pgdy.ru@gmail.com
                            </a>

                        </div>

                    </div>


                    {{-- Working Hours --}}
                    <div class="contact-card">

                        <div class="contact-icon">
                            <span>◷</span>
                        </div>

                        <div class="contact-info">

                            <span class="contact-label">
                                Working Hours
                            </span>

                            <h3>
                                Monday – Friday
                            </h3>

                            <p>
                                10:00 AM – 5:00 PM
                            </p>

                        </div>

                    </div>


                    {{-- CTA --}}
                    <a href="mailto:dept_math@rediffmail.com" class="contact-cta">

                        <div>
                            <strong>
                                Send Us a Message
                            </strong>

                            <span>
                                We are happy to hear from you.
                            </span>
                        </div>

                        <b>→</b>

                    </a>

                </div>


                {{-- ================= RIGHT / MAP ================= --}}
                <div class="contact-map-area">

                    <div class="map-heading">

                        <div>
                            <span class="contact-label">
                                Find Us
                            </span>

                            <h3>
                                Visit Our Department
                            </h3>
                        </div>

                        <a href="https://www.google.com/maps/place/Basic+Science+Building/@23.3885009,85.3243126,17z/"
                            target="_blank" rel="noopener">
                            Open in Google Maps
                            <span>↗</span>
                        </a>

                    </div>


                    {{-- Google Map --}}
                    <div class="contact-map">

                        <iframe
                            src="https://www.google.com/maps?q=Basic%20Science%20Building%2C%20Morabadi%2C%20Ranchi%2C%20Jharkhand&z=17&output=embed"
                            loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                            title="Basic Science Building, Ranchi University">
                        </iframe>

                    </div>


                    {{-- Location Bottom --}}
                    <div class="map-footer">

                        <div class="map-location">

                            <span>●</span>

                            <div>
                                <strong>Basic Science Building</strong>
                                <small>
                                    Morabadi, Ranchi, Jharkhand - 834008
                                </small>
                            </div>

                        </div>

                        <a href="https://www.google.com/maps/place/Basic+Science+Building/@23.3885009,85.3243126,17z/"
                            target="_blank" rel="noopener">
                            Get Directions →
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


@endsection
