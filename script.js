document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector(".site-header");
    const heroBtn = document.querySelector("#hero-btn");
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".main-nav a");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });

    if (heroBtn) {
        heroBtn.addEventListener("click", (e) => {
            e.preventDefault();
            const target = document.querySelector("#features");
            if (target) {
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                const id = entry.target.getAttribute("id");
                if (entry.isIntersecting) {
                    navLinks.forEach((link) => {
                        link.classList.remove("active");
                        if (link.getAttribute("href") === `#${id}`) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        },
        { rootMargin: "-40% 0px -50% 0px", threshold: 0 }
    );

    sections.forEach((section) => observer.observe(section));

    const searchInput = document.querySelector("#header-search");
    if (searchInput) {
        searchInput.addEventListener("input", (e) => {
            console.log("Search query:", e.target.value);
        });
    }
});
