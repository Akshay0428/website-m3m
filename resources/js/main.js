$(document).ready(function(){

	if ($(window).width() >= 1025) {
		$('body').addClass('hover-body');
	} else {
		$('body').removeClass('hover-body');
	}

	$('body').addClass('home-anim');
	$(document).scroll(function () {
		if ($(window).scrollTop() > 10) {
			// console.log('dots')
			$('header').addClass('active');
		} else {
			$('header').removeClass('active');
		}
	})

	/******************************************************** Menu Start */

	$('nav').click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('.menu-wrp').removeClass('active');
			$('header').css({'z-index':'999'});
			$('.menu-overlay').hide();
			$('#phplive_btn_1500478216').show();
		}else{
			$(this).addClass('active');
			$('.menu-wrp').addClass('active');
			$('.home-slide').removeClass('active');
			$('header').removeClass('slide-header');
			$('header').css({'z-index':'9999'});
			$('.menu-overlay').show();
			$('#phplive_btn_1500478216').hide();
		}
	});

	$('.menu-overlay').click(function() {
		$('nav').removeClass('active');
		$('.menu-wrp').removeClass('active');
		$('header').css({'z-index':'999'});
		$(this).hide();
		$('#phplive_btn_1500478216').show();
	})

	

	/******************************************************** Menu End */

})





