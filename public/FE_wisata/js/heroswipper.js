document.addEventListener('DOMContentLoaded', function () {
    // Init Swiper dengan fade & durasi transisi
    window.heroSwiper = new Swiper(".heroSwiper", {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'slide',
        fadeEffect: {
            crossFade: true
        },
        speed: 2000 // <-- Tambahkan ini untuk transisi lebih smooth (1 detik)
    });

    const prevBtn = document.querySelector('#hero-swiper-controls .prev');
    const nextBtn = document.querySelector('#hero-swiper-controls .next');

    if (prevBtn && nextBtn && window.heroSwiper) {
        prevBtn.addEventListener('click', () => heroSwiper.slidePrev());
        nextBtn.addEventListener('click', () => heroSwiper.slideNext());
    }
});