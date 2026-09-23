
    <section>
    <swiper-container
        class="mySwiper"
        pagination="true"
        pagination-clickable="true"
        navigation="true"
        space-between="30"
        centered-slides="true"
        loop="true"
        autoplay-delay="2000"
        autoplay-disable-on-interaction="false"
        speed="1200"
    >

        <swiper-slide>
            <img src="{{ asset('asset/web/hero/slider1.jpg') }}" alt="Slider 1">
        </swiper-slide>

        <swiper-slide>
            <img src="{{ asset('asset/web/hero/slider2.png') }}" alt="Slider 2">
        </swiper-slide>

        <swiper-slide>
            <img src="{{ asset('asset/web/hero/slider3.png') }}" alt="Slider 3">
        </swiper-slide>

        <div class="autoplay-progress" slot="container-end">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>

            <span></span>
        </div>

    </swiper-container>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-element-bundle.min.js"></script>

<script>
    const progressCircle = document.querySelector(
        '.autoplay-progress svg'
    );
    const progressContent = document.querySelector(
        '.autoplay-progress span'
    );
    const swiperEl = document.querySelector('swiper-container');
    swiperEl.addEventListener('autoplaytimeleft', (e) => {
        const [swiper, time, progress] = e.detail;
        progressCircle.style.setProperty(
            '--progress',
            1 - progress
        );
        progressContent.textContent =
            `${Math.ceil(time / 1000)}s`;
    });
</script>