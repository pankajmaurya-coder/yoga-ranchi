@extends('web.layouts.app')
@section('title', 'about')

@stack('style')
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

@section('content')
    <section class="vc-section">
        <div class="container">

            <div class="vc-wrapper">

                <!-- LEFT PROFILE -->
                <div class="vc-profile">
                    <div class="vc-image-wrap">
                        <img src="{{ asset('asset/web/about/co-ordinator.png') }}" alt="Prof. Saroj Sharma">
                    </div>

                    <div class="vc-profile-info">
                        <h3>Dr. Renu Kumari</h3>
                        <p>Coordinator, School of yoga, Ranchi university</p>
                    </div>

                </div>


                <!-- RIGHT CONTENT -->
                <div class="vc-content">
                    <div class="d-flex flex-column  justify-content-center ">
                        <div class="about-department-label">
                            <span></span>
                            Coordinator, School of yoga,
                            <span></span>
                        </div>

                        <h2 class="about-department-title">
                            Leading Yoga Education with <strong>Vision & Purpose </strong>
                        </h2>
                        {{-- <img src="{{ asset('asset/web/divider/divider2.png') }}" class="divider  pb-2"> --}}
                    </div>


                    <p class="vc-intro">
                        Dr. Renu Kumari is associated with the School of Yoga at
                        Ranchi University and contributes to the academic and
                        institutional development of Yoga education.
                    </p>

                    <p>
                        As Coordinator, she plays an important role in supporting
                        academic activities, coordinating programmes and fostering
                        an environment that encourages learning, discipline and
                        holistic development through Yoga.
                    </p>

                    <!-- QUALIFICATION -->
                    <div class="vc-meta">

                        <div class="vc-meta-item">
                            <span>Role</span>
                            <strong>
                                Coordinator, School of Yoga, Ranchi university
                            </strong>
                        </div>

                        <div class="vc-meta-item">
                            <span>Academic Focus</span>
                            <strong>
                               Yoga Education ·Holistic Development
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            <!-- VISION STRIP -->
            <div class="vc-vision">

                <div class="vision-title">
                    <h3>Institutional Priorities</h3>
                </div>

                <div class="vision-list">
                    <span class="border rounded">Yoga Education</span>
                    <span class="border rounded">Academic Development</span>
                    <span class="border rounded">Student Wellness</span>
                    <span class="border rounded">Practical Training</span>
                    <span class="border rounded">Holistic Development</span>
                    {{-- <span class="border rounded">Research & Innovation</span> --}}
                </div>

            </div>

        </div>
    </section>

@endsection()
