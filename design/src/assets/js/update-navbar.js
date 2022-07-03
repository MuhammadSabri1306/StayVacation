const navbar = document.querySelector("nav.navbar");
const navbarWrapper = document.querySelector(".navbar-wrapper");

const updateNavbarPosition = () => {
	!navbar.classList.contains("fixed-nav") && window.scrollY >= navbarWrapper.offsetTop && navbar.classList.add("fixed-nav");
	navbar.classList.contains("fixed-nav") && window.scrollY < navbarWrapper.offsetTop && navbar.classList.remove("fixed-nav");
};

window.addEventListener("DOMContentLoaded", () => {
	navbarWrapper.style.height = navbar.offsetHeight + "px";
	updateNavbarPosition();
});

window.addEventListener("scroll", () => {
	updateNavbarPosition();
});
