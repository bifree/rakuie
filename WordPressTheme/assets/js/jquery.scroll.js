$(window).bind('load scroll', function() {
	"use strict";
	var windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
	if($(this).scrollTop() >= 151) {
			$('#homebanner').addClass('show');
			if(windowWidth <= 640) {
					$('#infoFooter dl').addClass('show');
			} else {
					$('#infoFooter dl').removeClass('show');
			}
	} else {
			$('#homebanner').removeClass('show');
			if(windowWidth <= 640) {
					$('#infoFooter dl').removeClass('show');
			} else {
					$('#infoFooter dl').removeClass('show');
			}
	}
});