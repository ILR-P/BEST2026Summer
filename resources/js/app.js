// Mobile Menu Toggle Function
window.toggleMenu = function () {
    const mobileMenu = document.getElementById("mobile-menu");
    mobileMenu.classList.toggle("open");
};

// Dropdown Search Functionality with Redirect
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("countrySearch");
    const clearBtn = document.getElementById("clearSearch");
    const dropdown = document.getElementById("searchDropdown");
    const dropdownResults = document.getElementById("dropdownResults");

    if (!searchInput) return;

    const courseCards = document.querySelectorAll('.course-card-wrapper[data-is-original="true"]');
    const courses = [];

    courseCards.forEach((card) => {
        const location = card.getAttribute("data-location");
        const slug = card.getAttribute("data-course-slug");
        const titleElement = card.querySelector(".course-title");
        const title = titleElement ? titleElement.textContent.trim() : "";
        courses.push({ location: location, slug: slug, title: title });
    });

    function showDropdown() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        if (searchTerm === "") {
            dropdown.classList.add("hidden");
            clearBtn.classList.add("hidden");
            return;
        }
        clearBtn.classList.remove("hidden");
        const matches = courses.filter(
            (course) =>
                course.location.includes(searchTerm) ||
                course.title.toLowerCase().includes(searchTerm),
        );
        if (matches.length === 0) {
            dropdownResults.innerHTML = '<div class="dropdown-item-empty">No courses found</div>';
            dropdown.classList.remove("hidden");
            return;
        }
        let html = "";
        matches.forEach((course) => {
            const displayLocation = course.location
                .split(", ")
                .map((part) => part.charAt(0).toUpperCase() + part.slice(1))
                .join(", ");
            html += `
                <div class="dropdown-item" data-slug="${course.slug}">
                    <div class="dropdown-item-content">
                        <div class="dropdown-item-title">${course.title}</div>
                        <div class="dropdown-item-location">
                            <svg class="dropdown-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>${displayLocation}</span>
                        </div>
                    </div>
                    <svg class="dropdown-arrow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            `;
        });
        dropdownResults.innerHTML = html;
        dropdown.classList.remove("hidden");
        dropdown.querySelectorAll(".dropdown-item").forEach((item) => {
            item.addEventListener("click", function () {
                const slug = this.getAttribute("data-slug");
                window.location.href = `/course/${slug}`;
            });
        });
    }

    function clearSearch() {
        searchInput.value = "";
        dropdown.classList.add("hidden");
        clearBtn.classList.add("hidden");
        searchInput.focus();
    }

    searchInput.addEventListener("input", showDropdown);
    clearBtn.addEventListener("click", clearSearch);
    document.addEventListener("click", function (e) {
        if (!e.target.closest(".search-wrapper-dropdown")) {
            dropdown.classList.add("hidden");
        }
    });
    searchInput.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            dropdown.classList.add("hidden");
        } else if (e.key === "Enter") {
            e.preventDefault();
            const firstItem = dropdown.querySelector(".dropdown-item");
            if (firstItem) {
                firstItem.click();
            }
        }
    });
});

// Navbar Hide/Show on Scroll (disabled on quiz page)
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".main-nav");
    
    // Check if navbar scroll should be disabled
    const disableNavbarScroll = document.body.getAttribute("data-disable-navbar-scroll") === "true";

    if (navbar && !disableNavbarScroll) {
        let lastScrollTop = 0;
        const scrollThreshold = 100;

        window.addEventListener("scroll", function () {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > scrollThreshold) {
                if (scrollTop > lastScrollTop) {
                    navbar.style.transform = "translateY(-100%)";
                } else {
                    navbar.style.transform = "translateY(0)";
                    navbar.classList.add("scrolled-up");
                }
            } else {
                navbar.style.transform = "translateY(0)";
                navbar.classList.remove("scrolled-up");
            }

            lastScrollTop = scrollTop;
        });
    }
});