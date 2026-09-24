document.addEventListener("DOMContentLoaded", () => {
    const marquees = document.querySelectorAll(".notice-marquee");

    marquees.forEach((box) => {
        const track = box.querySelector(".notice-track");

        if (!track) return;

        // Original notices ko duplicate karo
        track.innerHTML += track.innerHTML;

        let position = 0;
        let paused = false;

        function scrollNotices() {
            if (!paused) {
                position += 0.5;

                // Original content ki height complete hone par
                // wapas starting point par aa jao
                const resetPoint = track.scrollHeight / 2;

                if (position >= resetPoint) {
                    position = 0;
                }

                box.scrollTop = position;
            }

            requestAnimationFrame(scrollNotices);
        }

        scrollNotices();

        // Hover par stop
        box.addEventListener("mouseenter", () => {
            paused = true;
        });

        // Mouse hatne par start
        box.addEventListener("mouseleave", () => {
            paused = false;
        });
    });
});
