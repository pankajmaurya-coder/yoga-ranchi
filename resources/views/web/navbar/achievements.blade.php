@extends('web.layouts.app')
@section('title', 'about yoga department ranchi')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
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

    @php
        $galleryItems = require resource_path('views/web/data/achievement.php');
    @endphp

    <section class="media-gallery" id="gallery">

        <div class="container">

            {{-- HEADER --}}
            <div class="media-gallery-header">

                <div class="media-gallery-heading">

                    <div class="section-eyebrow">
                        <span></span>
                        Our Gallery
                    </div>

                    <h2>
                        Campus <span>Moments</span>
                    </h2>

                    <p>
                        Explore memorable moments, academic activities,
                        events and media coverage from the School of Yoga.
                    </p>

                </div>


                <div class="media-gallery-count">

                    <strong>
                        {{ count($galleryItems) }}
                    </strong>

                    <span>
                        Moments<br>
                        Captured
                    </span>

                </div>

            </div>


            {{-- GALLERY GRID --}}
            <div class="media-gallery-grid">

                @foreach ($galleryItems as $index => $item)
                    <article class="media-card">

                        {{-- IMAGE --}}
                        <button type="button" class="media-card-image" data-index="{{ $index }}"
                            data-image="{{ asset($item['image']) }}" aria-label="View {{ $item['title'] }}">

                            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy">


                            <div class="media-image-overlay">

                                <span class="media-open">
                                    <i class="fa-solid fa-expand"></i>
                                    View
                                </span>

                            </div>


                            {{-- <span class="media-number">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span> --}}

                        </button>


                        {{-- CONTENT --}}
                        <div class="media-card-content">

                            <div class="media-meta">

                                <span>
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ $item['date'] }}
                                </span>


                                <span class="media-type">

                                    <i class="fa-solid {{ $item['icon'] }}"></i>

                                    {{ $item['type'] }}

                                </span>

                            </div>


                            <h3>
                                {{ $item['title'] }}
                            </h3>

                        </div>

                    </article>
                @endforeach

            </div>

        </div>

    </section>

    <div class="media-lightbox" id="mediaLightbox" aria-hidden="true">

        {{-- CLOSE --}}
        <button type="button" class="media-lightbox-close" id="mediaLightboxClose" aria-label="Close gallery">
            <span></span>
            <span></span>
        </button>


        {{-- PREVIOUS --}}
        <button type="button" class="media-lightbox-nav media-lightbox-prev" id="mediaLightboxPrev"
            aria-label="Previous image">
            <i class="fa-solid fa-arrow-left"></i>
        </button>


        {{-- IMAGE --}}
        <div class="media-lightbox-inner">

            <img src="" alt="" id="mediaLightboxImage">

        </div>


        {{-- NEXT --}}
        <button type="button" class="media-lightbox-nav media-lightbox-next" id="mediaLightboxNext"
            aria-label="Next image">
            <i class="fa-solid fa-arrow-right"></i>
        </button>


        {{-- COUNTER --}}
        <div class="media-lightbox-counter">

            <span id="mediaCurrent">01</span>

            <span class="counter-line"></span>

            <span id="mediaTotal">
                {{ str_pad(count($galleryItems), 2, '0', STR_PAD_LEFT) }}
            </span>

        </div>

    </div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const cards = document.querySelectorAll(".media-card-image");

        const lightbox = document.getElementById("mediaLightbox");
        const image = document.getElementById("mediaLightboxImage");

        const closeBtn = document.getElementById("mediaLightboxClose");
        const prevBtn = document.getElementById("mediaLightboxPrev");
        const nextBtn = document.getElementById("mediaLightboxNext");

        const currentNumber = document.getElementById("mediaCurrent");
        const totalNumber = document.getElementById("mediaTotal");


        if (!cards.length || !lightbox) return;


        /* ===============================
           IMAGE DATA
        =============================== */

        const galleryImages = [...cards].map(card => ({
            src: card.dataset.image,
            alt: card.querySelector("img")?.alt || "Gallery Image"
        }));


        let currentIndex = 0;


        totalNumber.textContent =
            String(galleryImages.length).padStart(2, "0");


        /* ===============================
           UPDATE
        =============================== */

        function updateImage() {

            const current = galleryImages[currentIndex];

            image.src = current.src;
            image.alt = current.alt;

            currentNumber.textContent =
                String(currentIndex + 1).padStart(2, "0");
        }


        /* ===============================
           OPEN
        =============================== */

        function openGallery(index) {

            currentIndex = index;

            updateImage();

            lightbox.classList.add("active");

            lightbox.setAttribute("aria-hidden", "false");

            document.body.style.overflow = "hidden";
        }


        /* ===============================
           CLOSE
        =============================== */

        function closeGallery() {

            lightbox.classList.remove("active");

            lightbox.setAttribute("aria-hidden", "true");

            document.body.style.overflow = "";
        }


        /* ===============================
           NEXT
        =============================== */

        function nextImage() {

            currentIndex++;

            if (currentIndex >= galleryImages.length) {
                currentIndex = 0;
            }

            updateImage();
        }


        /* ===============================
           PREVIOUS
        =============================== */

        function previousImage() {

            currentIndex--;

            if (currentIndex < 0) {
                currentIndex = galleryImages.length - 1;
            }

            updateImage();
        }


        /* ===============================
           CARD CLICK
        =============================== */

        cards.forEach((card, index) => {

            card.addEventListener("click", () => {

                openGallery(index);

            });

        });


        /* ===============================
           BUTTONS
        =============================== */

        closeBtn.addEventListener("click", closeGallery);

        nextBtn.addEventListener("click", nextImage);

        prevBtn.addEventListener("click", previousImage);


        /* ===============================
           BACKDROP
        =============================== */

        lightbox.addEventListener("click", event => {

            if (event.target === lightbox) {
                closeGallery();
            }

        });


        /* ===============================
           KEYBOARD
        =============================== */

        document.addEventListener("keydown", event => {

            if (!lightbox.classList.contains("active")) return;


            if (event.key === "Escape") {
                closeGallery();
            }


            if (event.key === "ArrowRight") {
                nextImage();
            }


            if (event.key === "ArrowLeft") {
                previousImage();
            }

        });

    });
</script>
