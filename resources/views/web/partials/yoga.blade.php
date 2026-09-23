<section class="industry-section">
    <div class="container">
        <div class="home-section-heading why-header text-center mx-auto">
            <span class="section-eyebrow">
                What We Serve
            </span>

            <h2 class="section-title">
                Industry Solutions
            </h2>
            <p class="section-description content">
                Digital solutions designed for diverse industries
                and real-world business challenges.
            </p>
        </div>


        <div class="industry-wrapper" id="industryWrapper">
            <!-- CARD 1 -->
            <div class="industry-card active">
                <img src="{{ asset('asset/web/partials/work/tourism.webp') }}" alt="Tourism">
                <div class="industry-overlay"></div>
                <div class="industry-content">
                    <h3>Tourism</h3>
                    <div class="industry-details">
                        <p class="content">
                            Smart digital solutions for tourism
                            management and visitor experience.
                        </p>
                        <ul>
                            <li class="content">Tourism Management System</li>
                            <li class="content">Digital Experience Platform</li>
                            <li class="content">Stakeholder Portal</li>
                        </ul>
                        <a href="#">
                            View Solutions <span>→</span>
                        </a>
                    </div>
                </div>
            </div>


            <!-- CARD 2 -->
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/ngo.webp') }}" alt="Mining">
                <div class="industry-overlay"></div>
                <div class="industry-content">
                    <h3>Organization</h3>
                    <div class="industry-details">
                        <p class="content">
                            Digital platforms for organization.
                        </p>
                        <ul>
                            <li class="content">Digital Logistics System</li>
                            <li class="content">Stockyard Management</li>
                            <li class="content">UAV Surveillance</li>
                        </ul>
                        <a href="#">
                            View Solutions <span>→</span>
                        </a>
                    </div>
                </div>
            </div>


            <!-- CARD 3 -->
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/industries.webp') }}" alt="Industry">
                <div class="industry-overlay"></div>
                <div class="industry-content">
                    <h3>Industry & Trade Facilitation</h3>
                    <div class="industry-details">
                        <p class="content">
                            Powerful platforms that simplify
                            approvals and industrial processes.
                        </p>
                        <ul>
                            <li class="content">Building Plan Approval</li>
                            <li class="content">CSR Monitoring System</li>
                            <li class="content">Inspection Management</li>
                            <li class="content">Land Allotment System</li>
                        </ul>
                        <a href="#">
                            View All Solutions <span>→</span>
                        </a>
                    </div>
                </div>
            </div>


            <!-- CARD 4 -->
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/hospital.webp') }}" alt="Healthcare">

                <div class="industry-overlay"></div>

                <div class="industry-content">

                    <h3>Healthcare</h3>

                    <div class="industry-details">

                        <p class="content">
                            Connected healthcare systems
                            for better digital services.
                        </p>

                        <ul>
                            <li class="content">Hospital Management</li>
                            <li class="content">Health Worker System</li>
                            <li class="content">Supply Chain Management</li>
                        </ul>

                        <a href="#">
                            View Solutions <span>→</span>
                        </a>

                    </div>

                </div>

            </div>


            <!-- CARD 5 -->
            <div class="industry-card">

                <img src="{{ asset('asset/web/partials/work/Eductation.webp') }}" alt="Education">

                <div class="industry-overlay"></div>

                <div class="industry-content">

                    <h3>Education</h3>

                    <div class="industry-details">

                        <p class="content">
                            Technology solutions for modern
                            education management.
                        </p>

                        <ul>
                            <li class="content">Admission Automation</li>
                            <li class="content">Scholarship Management</li>
                            <li class="content">School Administration</li>
                        </ul>

                        <a href="#">
                            View Solutions <span>→</span>
                        </a>

                    </div>

                </div>

            </div>

            {{-- card 6 --}}
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/astrology.webp') }}" alt="Healthcare">

                <div class="industry-overlay"></div>

                <div class="industry-content">

                    <h3>Astrology</h3>

                    <div class="industry-details">

                        <p class="content">
                            Smart astrology platforms for personalized guidance and better user experiences.
                            for better digital services.
                        </p>

                        <ul>
                            <li class="content">Online Horoscope & Kundli</li>
                            <li class="content">Astrologer Consultation</li>
                            <li class="content">Personalized Predictions</li>
                        </ul>

                        <a href="#">
                            View Solutions <span>→</span>
                        </a>

                    </div>

                </div>

            </div>
            {{-- card 7 --}}
            <div class="industry-card">
                <img src="{{ asset('asset/web/partials/work/real-estate.webp') }}" alt="Healthcare">

                <div class="industry-overlay"></div>

                <div class="industry-content">

                    <h3>Real Estate</h3>

                    <div class="industry-details">

                        <p class="content">
                            Digital solutions that simplify property discovery and real estate management.
                        </p>

                        <ul>
                            <li class="content">Property Listing & Search</li>
                            <li class="content">Lead & Customer Management</li>
                            <li class="content">Property Booking & Enquiry</li>
                        </ul>

                        <a href="#">
                            View Solutions <span>→</span>
                        </a>

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
