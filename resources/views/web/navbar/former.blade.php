@extends('web.layouts.app')
@section('title', 'Former Vice-Chancellor & Founder of School of Yoga')

@push('style') <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
@endpush

@section('content')

<section class="vc-section">
    <div class="container">

```
    <div class="vc-wrapper">

        <!-- LEFT PROFILE -->
        <div class="vc-profile">

            <div class="vc-image-wrap">
                <img
                    src="{{ asset('asset/web/about/former.png') }}"
                    alt="Dr. Ramesh Kumar Pandey"
                >
            </div>

            <div class="vc-profile-info">
                <h3>Dr. Ramesh Kumar Pandey</h3>
                <p>
                    Former Vice-Chancellor & Founder of School of Yoga
                </p>
            </div>

        </div>


        <!-- RIGHT CONTENT -->
        <div class="vc-content">

            <div class="d-flex flex-column justify-content-center">

                <div class="about-department-label">
                    <span></span>
                    Former Vice-Chancellor & Founder
                    <span></span>
                </div>

                <h2 class="about-department-title">
                    Dr. <strong>Ramesh Kumar Pandey</strong>
                </h2>

            </div>


            <!-- INTRO -->
            <p class="vc-intro">
               <span class="text-danger"> “अथ योगानुशासनम्” </span> is the first sutra of Patanjali Yoga Darshan
                and it gives a clear message that discipline in thought, speech
                and action is the first step towards the spirituality of the
                Yoga philosophy.
            </p>


            <!-- MAIN CONTENT -->
            <p>
                In our country, Yoga is a culture which brings us good health,
                harmony, peace and a skilled mind. The Yoga Department of
                Ranchi University, Ranchi was established on
                <strong>19th December, 2017</strong> with Choice Based Credit
                System mode of two-year Post-Graduation in Yoga course under
                the vocational course.
            </p>

            <p>
                The vision behind this course was to follow the Indian Ancient
                Education system with a combination of a
                <strong>modern scientific approach</strong>. Emphasis is given
                to hands-on practical experience and in-depth research in the
                field of Yoga.
            </p>

            <p>
                The global demand for well-trained and skilled Yoga experts is
                high. UGC has started NET/JRF examinations and the Ayush
                Ministry, Government of India, has started QCI-level
                examinations for Yoga students.
            </p>

            <p>
                I wish success to all our students in achieving their goals
                and contributing meaningfully to the field of Yoga and society.
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
```

</section>

@endsection
