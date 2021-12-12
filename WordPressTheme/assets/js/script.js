document.getElementsByTagName('body')[0].id = 'gotop';

const windowWidth = window.innerWidth
const deviceType = windowWidth > 767 ? 'lg' : 'sm'
let documentH = document.body.clientHeight - window.innerHeight
if (deviceType === 'sm') {
    documentH = documentH - document.querySelector('.l-footer').clientHeight + 0
}

window.addEventListener('scroll', function() {
    const y = window.pageYOffset;
    console.log(y)
    // add class is-scroll
    if (y > 151) {
        if (!document.getElementsByTagName('html')[0].classList.contains('is-scroll')) {
            document.getElementsByTagName('html')[0].classList.add('is-scroll');
        }
    } else {
        document.getElementsByTagName('html')[0].classList.remove('is-scroll');
    }

    // add class is-footer
    if (documentH <= y) {
        if (!document.getElementsByTagName('html')[0].classList.contains('is-footer')) {
            document.getElementsByTagName('html')[0].classList.add('is-footer');
        }
    } else {
        document.getElementsByTagName('html')[0].classList.remove('is-footer');
    }
})

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
});