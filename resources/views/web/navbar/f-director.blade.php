@extends('web.layouts.app')
@section('title', 'about yoga department ranchi')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
@endpush
@section('content')

{{-- <section class="about-department-section, sarkar py-5">
        <div class="container">

            <div class="about-department-wrapper">

                <div class="about-department-image">

                    <div class="about-department-image-frame">

                        <img src="{{ asset('asset/web/about/faculty/tulu.webp') }}" alt="Yoga Department">

                    </div>

                </div>


   
                <div class="about-department-content">

                    <div class="about-department-label">
                    </div>

                    <h2 class="about-department-title">
                        <strong>Dr. Tulu Sarkar</strong>
                    </h2>
                    <p class="section-desc text-danger">(Former Director, School of Yoga)</p>

                    <div class="about-department-text content  vc-content ">

                        <p>
                            It is a moment of immense pride and pleasure to write a few words as the first
                            Director of the School of Yoga of Ranchi University.
                            Years of deliberation became a reality with establishment of the Department in 2017.
                        </p>

                        <p>
                            Our vision is to nurture and groom the students in our ancient Yogic knowledge
                            and develop a scientific temperament. We have a long way to go and there are plans
                            to expand the boundaries by introducing new courses and research opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @extends('web.layouts.app')
@section('title', 'Former Vice-Chancellor & Founder of School of Yoga')

@push('style') <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
@endpush

@section('content')

<section class="vc-section">
    <div class="container">
    <div class="vc-wrapper">

        <!-- LEFT PROFILE -->
        <div class="vc-profile">

            <div class="vc-image-wrap">
                           <img src="{{ asset('asset/web/about/faculty/tulu.webp') }}" alt="Yoga Department">
            </div>

            <div class="vc-profile-info">
                <h3>Dr. Tulu Sarkar</h3>
                <p>
                   Former Director, School of Yoga
                </p>
            </div>

        </div>


        <!-- RIGHT CONTENT -->
        <div class="vc-content">

            <div class="d-flex flex-column justify-content-center">

                <div class="about-department-label">
                    <span></span>
                    Former Director, School of Yoga
                    <span></span>
                </div>

                <h2 class="about-department-title">
                    Dr. <strong>Tulu Sarkar</strong>
                </h2>

            </div>


           <p>
                            It is a moment of immense pride and pleasure to write a few words as the first
                            Director of the School of Yoga of Ranchi University.
                            Years of deliberation became a reality with establishment of the Department in 2017.
                        </p>

                        <p>
                            Our vision is to nurture and groom the students in our ancient Yogic knowledge
                            and develop a scientific temperament. We have a long way to go and there are plans
                            to expand the boundaries by introducing new courses and research opportunities.
                        </p>

            <!-- HIGHLIGHTS -->
            <div class="vc-meta">

                <div class="vc-meta-item">
                    <span>Department Established</span>
                    <strong>
                        19 December 2017
                    </strong>
                </div>

                <div class="vc-meta-item">
                    <span>Programme</span>
                    <strong>
                        Two-Year Post-Graduation in Yoga
                    </strong>
                </div>

            </div>

        </div>
    </div>
</div>
</section>

@endsection

    @endsection