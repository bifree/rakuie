const windowWidth = window.innerWidth
const deviceType = windowWidth > 767 ? 'lg' : 'sm'
let documentH = document.body.clientHeight - window.innerHeight
if (deviceType === 'sm') {
    documentH = documentH - EL.FOOTER.clientHeight + 0
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


//faqアコーディオン  
$(function(){
	$(".grad-item").each(function(){
        var thisHeight=$(this).height();
        itemHeights.push(thisHeight);
        $(this).addClass("is-hide");
        returnHeight=$(this).height();
	});
});

$(".grad-trigger").click(function(){
	if(!$(this).hasClass("is-show")){
        var index = $(this).index(".grad-trigger");
        var addHeight = itemHeights[index];
        $(this).addClass("is-show").next().animate{height:addHeight},200).removeClass("is-hide");
	}else{
        $(this).removeClass("is-show").next().animate({height:returnHeight},200).addClass("is-hide");
	}
});

$(function(){
	$(".accordion_outer") .click(function(){
        $(this).next().slideToggle();
	});
});