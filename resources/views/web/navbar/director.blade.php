@extends('web.layouts.app')
@section('title', 'about')

@stack('style')
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

@section('content')
    <section class="vc-section">
        <div class="container">
            <!-- SECTION HEADING -->
            {{-- <div class="vc-heading">
                <span>University Leadership</span>
                <h2>Vice-Chancellor</h2>
            </div> --}}


            <div class="vc-wrapper">

                <!-- LEFT PROFILE -->
                <div class="vc-profile">
                    <div class="vc-image-wrap">
                        <img src="{{ asset('asset/web/about/director.png') }}" alt="Prof. Saroj Sharma">
                    </div>

                    <div class="vc-profile-info">
                        <h3>Dr. Ashish Kumar Jha</h3>
                        <p>Director, School of Yoga, Ranchi university</p>
                    </div>

                </div>


                <!-- RIGHT CONTENT -->
                <div class="vc-content">

                    {{-- <span class="vc-kicker">Academic Leadership</span>

                    <h2>
                        Shaping Education with
                        <span>Vision & Values</span>
                    </h2> --}}

                    <div class="d-flex flex-column  justify-content-center ">
                        <div class="about-department-label">
                            <span></span>
                            Director, School of Yoga,
                            <span></span>
                        </div>

                        <h2 class="about-department-title">
                            Advancing Yoga Education, <strong>Inspiring Holistic Growth</strong>
                        </h2>
                        {{-- <img src="{{ asset('asset/web/divider/divider2.png') }}" class="divider  pb-2"> --}}
                    </div>


                    <p class="vc-intro">
                        Dr. Ashish Kumar Jha leads the School of Yoga at Ranchi University,
                        supporting the academic development and growth of Yoga education
                        within the University.
                    </p>

                    <p>
                        As Director, he contributes to the coordination of academic
                        programmes, learning activities and the broader development of
                        the School of Yoga
                    </p>

                    <!-- QUALIFICATION -->
                    <div class="vc-meta">

                        <div class="vc-meta-item">
                            <span>Role</span>
                            <strong>
                                Director, School of Yoga, Ranchi university
                            </strong>
                        </div>

                        <div class="vc-meta-item">
                            <span>Academic Focus</span>
                            <strong>
                                Education · Research · Innovation
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            <!-- VISION STRIP -->
            <div class="vc-vision">

                <div class="vision-title">
                    <h3>School of Yoga Focus</h3>
                </div>

                <div class="vision-list">
                    <span class="border rounded">Higher Education</span>
                    <span class="border rounded">Academic Excellence</span>
                    <span class="border rounded">Digital & ICT Education</span>
                    <span class="border rounded">Student Development</span>
                    <span class="border rounded">Institutional Growth</span>
                    {{-- <span class="border rounded">Research & Innovation</span> --}}
                </div>

            </div>

        </div>
    </section>

@endsection()
