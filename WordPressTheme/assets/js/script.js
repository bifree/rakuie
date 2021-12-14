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

class ParallaxEffectBackground {
    constructor() {
        this.devided = 5;
        this.target = '.parallax';
        this.setBackgroundPosition();
    }
  
    getScrollTop() {
        return Math.max(
            window.pageYOffset,
            document.documentElement.scrollTop,
            document.body.scrollTop,
            window.scrollY
        );
    }
  
    setBackgroundPosition() {
        document.addEventListener('scroll', e => {
            const scrollTop = this.getScrollTop();
            const position = scrollTop / this.devided;
            if (position) {
                    document.querySelectorAll(this.target).forEach(element => {
                    if (deviceType === 'lg') {
                        element.style.backgroundPosition = 'center top -' + position + 'px';
                    } else {
                        element.style.backgroundPosition = 'left 30% top -' + position + 'px';
                    }
                });
            }
        });
    }
}
  
document.addEventListener('DOMContentLoaded', event => {
    new ParallaxEffectBackground();
});

$(function () {
    $(".js-inview").on("inview", function () {
        $(this).addClass("is-inview");
    });
});

if (deviceType === 'lg') {
    $(window).on("scroll", function(){
        $(".l-header").css("left", -$(window).scrollLeft());
    });
}


$("input").change(function(){
    $("input").each(function(){
      if($(this).is(":checked")){
        $(this).parent().addClass("selected");
      }else{
        $(this).parent().removeClass("selected");
      }
    });
  });

  
