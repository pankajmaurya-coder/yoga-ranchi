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
                        <img src="{{ asset('asset/web/about/vc.png') }}" alt="Prof. Saroj Sharma">
                    </div>

                    <div class="vc-profile-info">
                        <h3>Prof. Saroj Sharma</h3>
                        <p>Vice-Chancellor · Ranchi University</p>
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
                            Know About Vice-Chancellor
                            <span></span>
                        </div>

                        <h2 class="about-department-title">
                           Empowering Education, <strong>Enriching Society</strong>
                        </h2>
                        {{-- <img src="{{ asset('asset/web/divider/divider2.png') }}" class="divider  pb-2"> --}}
                    </div>


                    <p class="vc-intro">
                        Prof. Saroj Sharma is an academic leader with extensive
                        experience in higher education, teacher education,
                        academic administration, research and educational
                        development.
                    </p>

                    <p>
                        She is currently serving as the
                        <strong>Vice-Chancellor of Ranchi University</strong>.
                        Her academic journey includes teaching, research
                        supervision, curriculum development and leadership
                        across several educational institutions and national
                        initiatives.
                    </p>

                    <!-- QUALIFICATION -->
                    <div class="vc-meta">

                        <div class="vc-meta-item">
                            <span>Qualification</span>
                            <strong>
                                M.Sc. · M.A. · M.Ed. · M.B.A. · M.Phil. · Ph.D.
                            </strong>
                        </div>

                        <div class="vc-meta-item">
                            <span>Academic Focus</span>
                            <strong>
                                Education · Research · Innovation · IKS
                            </strong>
                        </div>

                    </div>

                </div>

            </div>


            <!-- VISION STRIP -->
            <div class="vc-vision">

                <div class="vision-title">
                    <span>01</span>
                    <h3>Academic Vision</h3>
                </div>

                <div class="vision-list">
                    <span class="border rounded">Indian Knowledge Tradition</span>
                    <span class="border rounded">Inclusive Education</span>
                    <span class="border rounded">Digital & ICT Education</span>
                    <span class="border rounded">Environmental Sustainability</span>
                    <span class="border rounded">Values & Citizenship</span>
                    <span class="border rounded">Research & Innovation</span>
                </div>

            </div>

        </div>
    </section>

@endsection()
