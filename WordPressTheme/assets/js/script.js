document.getElementsByTagName('body')[0].id = 'gotop';

const windowWidth = window.innerWidth
const deviceType = windowWidth > 767 ? 'lg' : 'sm'
let documentH = document.body.clientHeight - window.innerHeight
if (deviceType === 'sm') {
    documentH = documentH - document.querySelector('.l-footer').clientHeight + 0
}

window.addEventListener('scroll', function() {
    const y = window.pageYOffset;

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

/**
 * ハンバーガーメニューの処理を行います
 */
let isActive = false
document.querySelector('.js-hamburger').addEventListener('click', (e) => {
    isActive ? navHide() : navShow()
})
function navShow() {
    isActive = true
    document.getElementsByTagName('html')[0].classList.add('is-nav-active')
}
function navHide() {
    isActive = false
    document.getElementsByTagName('html')[0].classList.remove('is-nav-active')
}

window.addEventListener('resize', (e) => {
    if (isActive) navHide()
}, false)

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
