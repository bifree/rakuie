let mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    autoplay: {
     delay: 3000,
    },
    speed: 700,
    autoHeight: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    spaceBetween: 0,
    // breakpoints: {
    // 768: {
    //     slidesPerView: 1.2,
    // },
    // 980: {
    //     slidesPerView: 1.4, //前後ろ画像が半分表示される
    // },
    // }
});