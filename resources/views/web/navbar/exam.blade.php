@extends('web.layouts.app')
@section('title', 'about yoga department ranchi')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web.css') }}">
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

    <section class="notice">
        <div class="container">

            <div class="section-heading">
                <span class="section-subtitle">----✦ Latest Updates ✦----</span>

                <h2 class="section-title">
                   Examination & Results
                </h2>

                <p class="section-description">
                    Stay updated with the latest notices, circulars and academic exams.
                </p>
            </div>


            <div class="notice-wrapper">

                {{-- Student Notices --}}
                <article class="notice-card">

                    <div class="notice-card__header">

                        <div class="notice-card__icon">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>

                        <div class="notice-card__heading">
                            <h3>Examination Notices</h3>
                            <span>Latest Exam Notices</span>
                        </div>

                    </div>


                    <div class="notice-card__body">

                        <div class="notice-marquee">

                            <div class="notice-track">

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">24</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Notice regarding semester examination form submission
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">20</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Practical classes schedule for Yoga students
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">16</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Important instructions for all students
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">12</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Internal assessment and attendance notice
                                        </h4>
                                    </div>
                                </a>

                            </div>

                        </div>

                    </div>


                    <div class="notice-card__footer">
                        <a href="#">
                            View All Notices
                        </a>
                    </div>

                </article>



                {{-- Official Notices --}}
                <article class="notice-card">

                    <div class="notice-card__header">

                        <div class="notice-card__icon">
                            <i class="fa-solid fa-building"></i>
                        </div>

                        <div class="notice-card__heading">
                            <h3>Examination Schedule</h3>
                            <span>Upcoming Notices</span>
                        </div>

                    </div>


                    <div class="notice-card__body">

                        <div class="notice-marquee">

                            <div class="notice-track">

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">23</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Department meeting scheduled for the upcoming academic session
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">19</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Submission of departmental academic activity report
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">15</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Circular regarding departmental administrative activities
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">09</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Faculty and staff coordination meeting notice
                                        </h4>
                                    </div>
                                </a>

                            </div>

                        </div>

                    </div>


                    <div class="notice-card__footer">
                        <a href="#">
                            View All Notices
                        </a>
                    </div>

                </article>



                {{-- Academic Events --}}
                <article class="notice-card">

                    <div class="notice-card__header">

                        <div class="notice-card__icon">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>

                        <div class="notice-card__heading">
                            <h3>Results & Updates</h3>
                            <span>Results, marksheets,</span>
                        </div>

                    </div>


                    <div class="notice-card__body">

                        <div class="notice-marquee">

                            <div class="notice-track">

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">28</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            International Yoga Awareness Programme
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">24</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Guest Lecture on Yoga and Holistic Wellness
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">18</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Workshop on Meditation and Stress Management
                                        </h4>
                                    </div>
                                </a>


                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">10</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Departmental Yoga Practice and Demonstration
                                        </h4>
                                    </div>
                                </a>

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">10</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Departmental Yoga Practice and Demonstration
                                        </h4>
                                    </div>
                                </a>

                                <a href="#" class="notice-item">
                                    <div class="notice-date">
                                        <span class="day">10</span>
                                        <span class="month">Sep</span>
                                        <span class="year">2026</span>
                                    </div>

                                    <div class="notice-content">
                                        <h4>
                                            Departmental Yoga Practice and Demonstration
                                        </h4>
                                    </div>
                                </a>

                            </div>

                        </div>

                    </div>


                    <div class="notice-card__footer">
                        <a href="#">
                            View All Events
                        </a>
                    </div>

                </article>

            </div>

        </div>
    </section>

@endsection()
@push('js')
    <script src="{{ asset('asset/js/notice.js') }}"></script>
@endpush