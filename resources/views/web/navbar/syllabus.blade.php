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
                        <p class="">The Yoga Department provides a nurturing space for physical fitness, mental peace,
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

    <section class="py-4">
        <div class="container">

            <div class="title">
                <div class="d-flex flex-column  justify-content-center align-items-center">
                    <div class="about-department-label">
                        <span></span>
                        We Offer
                        <span></span>
                    </div>

                    <h2 class="about-department-title">
                        Explore Our <strong>Programs</strong>
                    </h2>
                    <img src="{{ asset('asset/web/divider/divider2.png') }}" class="divider py-1 pb-2">
                </div>
            </div>

            <div class="aims-grid pt-5">

                <!-- 01. B.Sc. -->
                <article class="aim-card">
                    <a href="{{ asset('asset/web/about/course/UG_YOGIC_SCIENCE_Honours.pdf') }}">

                        <div class="aim-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        {{-- <span class="course-number">01</span> --}}

                        <h4>
                            B.Sc. in
                            <br>
                            Yogic Science
                        </h4>

                        {{-- <div class="course-duration">
                            <i class="fa-regular fa-clock"></i>
                            3 Years
                        </div> --}}

                        <p>
                            A comprehensive undergraduate programme focused on the
                            scientific study, practice and principles of Yoga.
                        </p>

                    </a>
                </article>


                <!-- 02. M.Sc. -->
                <article class="aim-card">
                    <a href="{{ asset('asset/web/about/course/pg.pdf') }}">

                        <div class="aim-icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>

                        {{-- <span class="course-number">02</span> --}}

                        <h4>
                            M.Sc. in
                            <br>
                            Yogic Science
                        </h4>

                        

                        <p>
                            An advanced programme designed for deeper study, research
                            and specialised learning in Yogic Science.
                        </p>

                    </a>
                </article>


                <!-- 03. PG Diploma -->
                <article class="aim-card">
                    <a href="{{ asset('asset/web/about/course/pg-diploma.pdf') }}">

                        <div class="aim-icon">
                            <i class="fa-solid fa-certificate"></i>
                        </div>


                        <h4>
                            Post Graduate Diploma
                            <br>
                            in Yogic Science
                        </h4>

                        <p>
                            A focused diploma programme offering specialised knowledge
                            and practical understanding of Yoga.
                        </p>

                    </a>
                </article>


                <!-- 04. Yoga & Lifestyle -->
                <article class="aim-card">
                    <a href="{{ asset('asset/web/about/course/pg-cert.pdf') }}">

                        <div class="aim-icon">
                            <i class="fa-solid fa-spa"></i>
                        </div>

                        <h4>
                            Yoga &
                            <br>
                            Lifestyle
                        </h4>

                        <p>
                            An add-on certificate course exploring Yoga, healthy
                            living and holistic lifestyle practices.
                        </p>

                    </a>
                </article>


                <!-- 05. Yoga & Acupressure -->
                <article class="aim-card">
                    <a href="#">

                        <div class="aim-icon">
                            <i class="fa-solid fa-hands"></i>
                        </div>

                        <h4>
                            Yoga &
                            <br>
                            Acupressure
                        </h4>


                        <p>
                            An add-on certificate course combining Yoga practices
                            with the principles of Acupressure.
                        </p>

                    </a>
                </article>

            </div>
        </div>
    </section>
@endsection()
