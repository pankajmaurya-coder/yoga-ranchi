<section class="yoga-faculty-section">

    <div class="container">
        <!-- SECTION HEADER -->
        <div class="title guest-title">
            <h2 class="welcome-heading">
                
                Meet Our 
                <span class="orange">Faculties</span>
            </h2>
            <img src="{{ asset('asset/web/divider/divider2.png') }}" class="divider pt-1">
             <p class="section-description">Experienced educators helping students discover the deeper dimensions of yoga.</p>
        
        </div>


        <!-- FACULTY SLIDER -->
        <div class="faculty-slider-wrapper">

            <div class="faculty-slider" id="facultySlider">


                <!-- CARD 1 -->
                <article class="faculty-card">

                    <div class="faculty-image">
                        <img
                            src="{{ asset('asset/web/about/faculty/bbr.webp') }}"
                            alt="Dr. Bibhuti Bhushan Roy"
                        >

                        {{-- <span class="faculty-number">01</span> --}}
                    </div>

                    <div class="faculty-info">

                        <span class="faculty-role">
                            Faculty Member
                        </span>

                        <h3>
                            Dr. Bibhuti Bhushan Roy
                        </h3>

                        <ul>
                            <li>D.Litt. with Specialisation in Yoga</li>
                            <li>Research in Yoga and Society</li>
                            <li>Doctoral work completed in 2018</li>
                        </ul>

                    </div>

                </article>


                <!-- CARD 2 -->
                <article class="faculty-card">

                    <div class="faculty-image">
                        <img
                            src="{{ asset('asset/web/about/faculty/manoj.webp') }}"
                            alt="Dr. Manoj Soni"
                        >

                        {{-- <span class="faculty-number">02</span> --}}
                    </div>

                    <div class="faculty-info">

                        <span class="faculty-role">
                            Faculty Member
                        </span>

                        <h3>
                            Dr. Manoj Soni
                        </h3>

                        <ul>
                            <li>M.A. in Yoga Science</li>
                            <li>Barkatullah University, Bhopal</li>
                            <li>Academic experience in Yoga education</li>
                        </ul>

                    </div>

                </article>


                <!-- CARD 3 -->
                <article class="faculty-card">

                    <div class="faculty-image">
                        <img
                            src="{{ asset('asset/web/about/faculty/pampa.webp') }}"
                            alt="Dr. Pampa Sen Biswas"
                        >

                        {{-- <span class="faculty-number">03</span> --}}
                    </div>

                    <div class="faculty-info">

                        <span class="faculty-role">
                            Faculty Member
                        </span>

                        <h3>
                            Dr. Pampa Sen Biswas
                        </h3>

                        <ul>
                            <li>D.Litt. in Sanskrit</li>
                            <li>M.A. in Sanskrit, Hindi & Music</li>
                            <li>Ph.D. in Sanskrit</li>
                        </ul>

                    </div>

                </article>


                <!-- CARD 4 -->
                <article class="faculty-card">

                    <div class="faculty-image">
                        <img
                            src="{{ asset('asset/web/about/faculty/kr.webp') }}"
                            alt="Sri. Khilesh Kumar"
                        >

                        {{-- <span class="faculty-number">04</span> --}}
                    </div>

                    <div class="faculty-info">

                        <span class="faculty-role">
                            Faculty Member
                        </span>

                        <h3>
                            Sri. Khilesh Kumar
                        </h3>

                        <ul>
                            <li>M.A. in Yoga from Uttarakhand Sanskrit University</li>
                            <li>B.A. in Yoga</li>
                            <li>UGC NET qualified</li>
                        </ul>

                    </div>

                </article>


                <!-- CARD 5 -->
                <article class="faculty-card">

                    <div class="faculty-image">
                        <img
                            src="{{ asset('asset/web/about/faculty/sn.webp') }}"
                            alt="Santosh Kumari"
                        >

                        {{-- <span class="faculty-number">05</span> --}}
                    </div>

                    <div class="faculty-info">

                        <span class="faculty-role">
                            Contractual Faculty
                        </span>

                        <h3>
                            Santosh Kumari
                        </h3>

                        <ul>
                            <li>Master in Yogic Science</li>
                            <li>UGC NET qualified</li>
                            <li>QCI Qualified</li>
                            <li>Asian Yoga Champion 2018</li>
                        </ul>

                    </div>

                </article>


                <!-- CARD 6 -->
                <article class="faculty-card">

                    <div class="faculty-image">
                        <img
                            src="{{ asset('asset/web/about/faculty/manish.webp') }}"
                            alt="Manish Kumar"
                        >

                        {{-- <span class="faculty-number">06</span> --}}
                    </div>

                    <div class="faculty-info">

                        <span class="faculty-role">
                            Contractual Faculty
                        </span>

                        <h3>
                            Manish Kumar
                        </h3>

                        <ul>
                            <li>Master's in Yogic Science</li>
                            <li>Ranchi University</li>
                            <li>PG Diploma in Yog Vigyan</li>
                            <li>UGC NET in Yoga</li>
                        </ul>

                    </div>

                </article>


                <!-- CARD 7 -->
                <article class="faculty-card">

                    <div class="faculty-image">
                        <img
                            src="{{ asset('asset/web/about/faculty/santoshi.webp') }}"
                            alt="Yoga Faculty"
                        >

                        {{-- <span class="faculty-number">07</span> --}}
                    </div>

                    <div class="faculty-info">

                        <span class="faculty-role">
                            Faculty Member
                        </span>

                        <h3>
                            Yoga Faculty
                        </h3>

                        <ul>
                            <li>Experienced Yoga practitioner</li>
                            <li>Academic and practical training</li>
                            <li>Focused on holistic development</li>
                        </ul>

                    </div>

                </article>

            </div>


            <!-- SLIDER CONTROLS -->
            <div class="faculty-controls">

                <button
                    type="button"
                    class="faculty-arrow faculty-prev"
                    id="facultyPrev"
                    aria-label="Previous faculty"
                >
                    ←
                </button>

                <div class="faculty-progress">
                    <span id="facultyProgress"></span>
                </div>

                <button
                    type="button"
                    class="faculty-arrow faculty-next"
                    id="facultyNext"
                    aria-label="Next faculty"
                >
                    →
                </button>

            </div>

        </div>

    </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {

    const slider = document.getElementById("facultySlider");
    const nextBtn = document.getElementById("facultyNext");
    const prevBtn = document.getElementById("facultyPrev");
    const progress = document.getElementById("facultyProgress");

    if (!slider) return;

    const cards = Array.from(
        slider.querySelectorAll(".faculty-card")
    );

    let currentIndex = 0;
    let autoSlide;


    function getVisibleCards() {

        if (window.innerWidth <= 767) {
            return 1;
        }

        if (window.innerWidth <= 991) {
            return 2;
        }

        return 3;
    }


    function getCardWidth() {

        const card = cards[0];

        const cardWidth = card.offsetWidth;

        const gap = parseFloat(
            getComputedStyle(slider).gap
        );

        return cardWidth + gap;
    }


    function updateSlider() {

        const visibleCards = getVisibleCards();

        const maxIndex = Math.max(
            0,
            cards.length - visibleCards
        );

        currentIndex = Math.min(
            currentIndex,
            maxIndex
        );

        const moveAmount =
            currentIndex * getCardWidth();

        slider.style.transform =
            `translateX(-${moveAmount}px)`;


        /* progress */

        const progressPercent =
            ((currentIndex + visibleCards) /
            cards.length) * 100;

        progress.style.width =
            `${Math.min(progressPercent, 100)}%`;
    }


    function nextSlide() {

        const visibleCards = getVisibleCards();

        const maxIndex =
            cards.length - visibleCards;


        if (currentIndex >= maxIndex) {

            currentIndex = 0;

        } else {

            currentIndex++;

        }

        updateSlider();
    }


    function prevSlide() {

        const visibleCards = getVisibleCards();

        const maxIndex =
            cards.length - visibleCards;


        if (currentIndex <= 0) {

            currentIndex = maxIndex;

        } else {

            currentIndex--;

        }

        updateSlider();
    }


    function startAutoSlide() {

        clearInterval(autoSlide);

        autoSlide = setInterval(
            nextSlide,
            2500
        );
    }


    nextBtn.addEventListener(
        "click",
        () => {

            nextSlide();

            startAutoSlide();

        }
    );


    prevBtn.addEventListener(
        "click",
        () => {

            prevSlide();

            startAutoSlide();

        }
    );


    /* Pause while mouse is over slider */

    slider.addEventListener(
        "mouseenter",
        () => {
            clearInterval(autoSlide);
        }
    );


    slider.addEventListener(
        "mouseleave",
        () => {
            startAutoSlide();
        }
    );


    /* Responsive resize */

    window.addEventListener(
        "resize",
        updateSlider
    );


    updateSlider();

    startAutoSlide();

});
</script>