@extends('web.layouts.app')
@section('title', 'about yoga department ranchi')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
@endpush
@section('content')
    <section class="hero-section">

        <div class="container">

            <div class="hero-wrapper">

                {{-- =========================
                 LEFT CONTENT
            ========================== --}}
                <div class="hero-content">

                    <div class="hero-title-box">

                        <span class="hero-eyebrow">
                            University Department
                        </span>

                        <h1 class="hero-title">
                            About Our
                            <span>Department</span>
                        </h1>

                        <p class="hero-description">
                            The Department of Yoga is dedicated to academic
                            excellence, yogic science, research and holistic
                            development, preparing students for meaningful
                            personal and professional growth.
                        </p>

                        <a href="#" class="hero-button">
                            <span>Explore Department</span>

                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>

                </div>


                {{-- =========================
                 RIGHT IMAGE
            ========================== --}}
                <div class="hero-visual">

                    <img src="{{ asset('asset/web/navbar/hero/protfolio.webp') }}" alt="Department of Yoga">

                </div>

            </div>

        </div>

    </section>

    <section class="about-department-section">
        <div class="container">

            <div class="about-department-wrapper">

                <div class="about-department-image">

                    <div class="about-department-image-frame">

                        <img src="{{ asset('asset/web/about/faculty/tulu.webp') }}" alt="Yoga Department">

                    </div>

                </div>


                {{-- LEFT CONTENT --}}
                <div class="about-department-content">

                    <div class="about-department-label">
                        <span></span>
                        About Department
                        <span></span>
                    </div>

                    <h2 class="about-department-title">
                        <strong>Dr. Tulu Sarkar</strong>
                    </h2>
                    <p>Former Director, School of Yoga</p>

                    <div class="about-department-text content">

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
    </section>

    <section class="about-department-section">
        <div class="container">

            <div class="about-department-wrapper yoga-about">

                {{-- LEFT CONTENT --}}
                <div class="about-department-content">

                    <div class="about-department-label">
                        <span></span>
                        About Department
                        <span></span>
                    </div>

                    <h2 class="about-department-title">
                        Yoga <strong>Department</strong>
                    </h2>

                    <div class="about-department-text content">

                        <p>
                            The School of Yoga of Ranchi University is a Vocational
                            Course run and governed under self-financing scheme.
                            It was an initiative of our present Honorable
                            Vice-Chancellor Professor (Dr.) Ramesh Kumar Pandey.
                            It was established on 19th December, 2017 with a
                            CBCS-based Post-Graduation in Yoga.
                        </p>

                        <p>
                            In the next year 2018, another course, CBCS-based
                            one-year with two semesters PG Diploma in Yogic
                            Science was started.
                        </p>

                        <p>
                            The responsibility of the department was given to
                            Dr. Tulu Sarkar, Director (Professor at University
                            Department of Political Science, RU and Activist of
                            Yoga) and Dr. Anand Kumar Thakur, Course Coordinator
                            (University Department of Zoology, RU and Activist
                            of Yoga).
                        </p>

                        <p>
                            It is located in the Facilitation Centre, Basic and
                            Applied Science Campus at Morabadi, Ranchi. It has
                            well developed classrooms, laboratory and library.
                            Our department has an exhaustive Yoga Library with
                            a good collection of more than 500 books, videos
                            and journals.
                        </p>
                    </div>

                </div>


                {{-- RIGHT IMAGE --}}
                <div class="about-department-image">

                    <div class="about-department-image-frame">

                        <img src="{{ asset('asset/web/course/yoga.webp') }}" alt="Yoga Department">

                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="aims-section">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">Our Aim & Objective</span>

            <h2>
                Aims <strong>&amp; Objective</strong>
            </h2>
        </div>

        <div class="aims-grid">

            <article class="aim-card">
                <div class="aim-icon">
                    <i class="fa-regular fa-leaf"></i>
                </div>
                <p>
                    To provide for a healthy environment for the instructions
                    and training in Yoga and Spiritual lore and propagate great
                    Yoga Saints.
                </p>
            </article>

            <article class="aim-card">
                <div class="aim-icon">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <p>
                    To provide in-depth theory and practical-based education
                    of Yogic Science.
                </p>
            </article>

            <article class="aim-card">
                <div class="aim-icon">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <p>
                    To promote the research and innovative activities among
                    students and faculties. The advancement and dissemination
                    of Yoga and its applications to meet the challenges at a
                    global level.
                </p>
            </article>

            <article class="aim-card">
                <div class="aim-icon">
                    <i class="fa-solid fa-users"></i>
                </div>
                <p>
                    To undertake induction activities including extra-mural
                    studies, workshops, seminars and other activities to
                    contribute to the prosperity of the nation.
                </p>
            </article>

            <article class="aim-card">
                <div class="aim-icon">
                    <i class="fa-solid fa-chart-column"></i>
                </div>
                <p>
                    To undergo Life Training and Character Building Education
                    with Yoga as a way of Life.
                </p>
            </article>

            <article class="aim-card">
                <div class="aim-icon">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <p>
                    To enhance the skill of students to opt good career and
                    livelihood in field of Yoga.
                </p>
            </article>

        </div>

    </div>
</section>
@endsection
