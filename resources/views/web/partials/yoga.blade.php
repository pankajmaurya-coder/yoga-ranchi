<section class="industry-section">
    <div class="container">
        <div class="title">
            <div class="section-eyebrow">
            </div>
            <h2 class="welcome-heading">
                LEARN THE DIFFERENT <br>
                <span class="text-yellow-700 text-4xl">FORMS OF YOGA</span>
            </h2>

        </div>


        <div class="industry-wrapper" id="industryWrapper">
            <!-- CARD 1 -->
            <div class="industry-card active">
                <img src="{{ asset('asset/web/partials/work/tourism.webp') }}" alt="Tourism">
                <div class="industry-overlay"></div>
                <div class="industry-content">
                    <h3>Vinyasa Yoga</h3>
                    <div class="industry-details">
                        <p class="content">
                            The word “vinyasa” can be translated as
                            “arranging something in a special way,”
                            like yoga poses for example. In vinyasa yoga
                            classes, students coordinate
                            movement with breath to flow from one pose to the next.
                        </p>

                    </div>
                </div>
            </div>


            <!-- CARD 2 -->
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/ngo.webp') }}" alt="Mining">
                <div class="industry-overlay"></div>
                <div class="industry-content">
                    <h3>Ashtanga Yoga</h3>
                    <div class="industry-details">
                        <p class="content">
                            Ashtanga means “eight limbs” and encompasses a yogic lifestyle.
                            Like Vinyasa yoga, the Ashtanga yoga asanas (postures) synchronize
                            breath with movement as you move through a series of postures.
                        </p>

                    </div>
                </div>
            </div>


            <!-- CARD 3 -->
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/industries.webp') }}" alt="Industry">
                <div class="industry-overlay"></div>
                <div class="industry-content">
                    <h3>Iyengar Yoga</h3>
                    <div class="industry-details">
                        <p class="content">
                            Iyengar yoga is alignment in the asanas using breath control through pranayama.
                            This style of yoga is usually taught without music and at a slower
                            pace designed to assist students to get deeper into the postures.
                        </p>
                    </div>
                </div>
            </div>


            <!-- CARD 4 -->
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/hospital.webp') }}" alt="Healthcare">

                <div class="industry-overlay"></div>

                <div class="industry-content">

                    <h3>Bikram Yoga</h3>

                    <div class="industry-details">

                        <p class="content">
                            Bikram yoga is a great way to stretch, detoxify, relieve stress,
                            tone, and heal, but here's
                            everything you need to know first to stay safe during your practice.
                        </p>

                    </div>

                </div>

            </div>


            <!-- CARD 5 -->
            <div class="industry-card">

                <img src="{{ asset('asset/web/partials/work/Eductation.webp') }}" alt="Education">

                <div class="industry-overlay"></div>

                <div class="industry-content">

                    <h3>Jivamukti Yoga</h3>

                    <div class="industry-details">

                        <p class="content">
                            Bikram yoga is a great way to stretch, detoxify, relieve stress,
                            tone, and heal, but here's everything
                            you need to know first to stay safe during your practice.
                        </p>

                    </div>

                </div>

            </div>

            {{-- card 6 --}}
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/astrology.webp') }}" alt="Healthcare">

                <div class="industry-overlay"></div>

                <div class="industry-content">

                    <h3>Hatha Yoga</h3>

                    <div class="industry-details">

                        <p class="content">
                            Hatha Yoga focuses on physical postures, mindful breathing,
                             and gentle movement. It helps develop strength, flexibility,
                              balance, and body awareness while creating 
                            a calm and steady foundation for a deeper yoga practice.
                        </p>

                    </div>

                </div>

            </div>
            {{-- card 7 --}}
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/real-estate.webp') }}" alt="Healthcare">

                <div class="industry-overlay"></div>

                <div class="industry-content">

                    <h3>Restorative Yoga</h3>

                    <div class="industry-details">

                        <p class="content">
                            Restorative Yoga is a gentle practice focused on deep relaxation,
                             mindful breathing, and releasing physical tension. Supported postures 
                             are held comfortably for longer periods, 
                            allowing the body and mind to rest, recover, and restore.
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const wrapper = document.getElementById("industryWrapper");
        const cards = Array.from(
            wrapper.querySelectorAll(".industry-card")
        );

        let currentIndex = 0;
        let autoSlide;


        function activateCard(index) {

            cards.forEach(card => {
                card.classList.remove("active");
            });

            if (cards[index]) {
                cards[index].classList.add("active");
            }
        }


        cards.forEach((card, index) => {

            card.addEventListener("mouseenter", function() {

                if (window.innerWidth > 768) {

                    currentIndex = index;

                    activateCard(currentIndex);

                }

            });

        });


        function nextSlide() {

            if (window.innerWidth <= 768) {

                currentIndex++;

                if (currentIndex >= cards.length) {
                    currentIndex = 0;
                }

                wrapper.scrollTo({
                    left: currentIndex * wrapper.clientWidth,
                    behavior: "smooth"
                });

                activateCard(currentIndex);
            }
        }

        function startAutoSlide() {

            stopAutoSlide();

            if (window.innerWidth <= 768) {

                autoSlide = setInterval(function() {

                    nextSlide();

                }, 3000); // 3 seconds

            }
        }


        function stopAutoSlide() {

            if (autoSlide) {
                clearInterval(autoSlide);
            }

        }
        let scrollTimer;

        wrapper.addEventListener("scroll", function() {

            if (window.innerWidth <= 768) {

                clearTimeout(scrollTimer);

                scrollTimer = setTimeout(function() {

                    const index = Math.round(
                        wrapper.scrollLeft / wrapper.clientWidth
                    );

                    if (cards[index]) {

                        currentIndex = index;

                        activateCard(currentIndex);

                    }

                }, 100);

            }

        });

        wrapper.addEventListener("touchstart", function() {

            stopAutoSlide();

        });

        wrapper.addEventListener("touchend", function() {
            startAutoSlide();
        });
        activateCard(0);
        startAutoSlide();

    });
</script>