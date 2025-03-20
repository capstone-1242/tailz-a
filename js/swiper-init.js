document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper-container", {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
    });
});
