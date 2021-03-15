// Background Set
$('.set-bg').each(function() {
        let bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    })
    // End Background Set

// Hero Slider
$(".hero-items").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    items: 1,
    dots: false,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
    smartSpeed: 1500,
    autoplay: true,
});
// End Hero Slider

// to top
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 400) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
});

// End to top

const navbar = document.getElementById("navbar");
const img = document.querySelector("#light-mode");
const imgDark = document.querySelector("#dark-mode");
window.addEventListener("scroll", () => {
    if (window.pageYOffset > 0) {
        navbar.classList.add("sticky-top");
        navbar.classList.add("navbar-dark");
        img.classList.add("d-none");
        imgDark.classList.remove("d-none");
    } else {
        navbar.classList.remove("sticky-top");
        navbar.classList.remove("navbar-dark");
        img.classList.remove("d-none");
        imgDark.classList.add("d-none");
    }
});