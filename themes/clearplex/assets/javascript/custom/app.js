$(document).ready(function(){
	owlCarousel();
	navSlideDown();
});

$(window).scroll(function(){
	navSlideDown();
});

function owlCarousel(){
	$(".owl-carousel").owlCarousel({
	  loop: true,
	  autoplay: true,
	  autoplayTimeout:5000,
	  autoplayHoverPause:true,
	  items: 1,
	  nav: true,
	  animateOut: 'slideOutUp',
	  animateIn: 'slideInUp',
	  navText: ["<i class='fa fa-chevron-up'></i>","<i class='fa fa-chevron-down'></i>"]
	});
	$('.owl-prev').on('click',function(){
		
	});
}

// makes nav slide down after scrolling past 1st section
function navSlideDown(){
	var heroHeight = $('.home-hero').height();
	if ($('body').hasClass('home') || $('body').hasClass('page-template-page-products')) {
		if ($(window).scrollTop() > 200 && $(window).scrollTop() < heroHeight) {
			$('.top-bar').removeClass('slide-down').addClass('opacity0');
		}
		if ($(window).scrollTop() >= heroHeight) {
			$('.top-bar').addClass('slide-down');
		}
		if ($(window).scrollTop() < 200) {
			$('.top-bar').removeClass('opacity0');
		}
	}else{
		var topHeight = $('.top-bg').outerHeight();
		if ($(window).scrollTop() > 0 && $(window).scrollTop() < topHeight) {
			$('.top-bar').removeClass('slide-down').addClass('opacity0');
		}
		if ($(window).scrollTop() >= topHeight) {
			$('.top-bar').addClass('slide-down');
		}
		if ($(window).scrollTop() < 200) {
			$('.top-bar').removeClass('opacity0');
		}
	}
}