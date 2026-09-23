const menuToggle = document.querySelector(".header-bar");
const navbar = document.querySelector(".header-navbar");
const dropdowns = document.querySelectorAll(".nav-dropdown");

if (menuToggle && navbar) {
    menuToggle.addEventListener("click", () => {
        const isOpen = navbar.classList.toggle("active");
        const icon = menuToggle.querySelector("i");

        menuToggle.setAttribute("aria-expanded", String(isOpen));
        menuToggle.setAttribute(
            "aria-label",
            isOpen ? "Close navigation menu" : "Open navigation menu",
        );

        if (icon) {
            icon.classList.toggle("fa-bars", !isOpen);
            icon.classList.toggle("fa-xmark", isOpen);
        }
    });
}

dropdowns.forEach((dropdown) => {
    const link = dropdown.querySelector(":scope > a");
    const menu = dropdown.querySelector(".nav-dropdown-menu");

    link.addEventListener("click", (e) => {
        if (window.innerWidth > 992) return;

        e.preventDefault();

        const isOpen = dropdown.classList.contains("active");

        dropdowns.forEach((item) => {
            item.classList.remove("active");

            const subMenu = item.querySelector(".nav-dropdown-menu");

            if (subMenu) {
                subMenu.style.maxHeight = null;
            }
        });

        if (!isOpen) {
            dropdown.classList.add("active");

            menu.style.maxHeight = menu.scrollHeight + "px";
        }
    });
});

window.addEventListener("resize", () => {
    if (window.innerWidth > 992) {
        navbar.classList.remove("active");

        if (menuToggle) {
            const icon = menuToggle.querySelector("i");

            menuToggle.setAttribute("aria-expanded", "false");
            menuToggle.setAttribute("aria-label", "Open navigation menu");

            if (icon) {
                icon.classList.add("fa-bars");
                icon.classList.remove("fa-xmark");
            }
        }

        dropdowns.forEach((dropdown) => {
            dropdown.classList.remove("active");

            const menu = dropdown.querySelector(".nav-dropdown-menu");

            if (menu) {
                menu.style.maxHeight = null;
            }
        });
    }
});
