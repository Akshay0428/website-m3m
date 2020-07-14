// jQuery(document).ready(function($) {

//   if (window.history && window.history.pushState) {

//     window.history.pushState('forward', null, './#forward');

//     $(window).on('popstate', function() {
//       alert('Back button was pressed.');
//     });

//   }
// });
$(document).ready(function(){

	console.log("%cMade By","padding:8px 53px 8px 20px; color:#fff; background-color:#232323; line-height:3;");
	console.log("%cNetBiz","padding:8px 89px 8px 20px; color:#fff; background-color:#92288f; line-height:0;text-align: left");
	console.log("%chttp://www.netbiz.in/","padding:8px 10px 8px 10px; color:#fff; background-color:#232323; line-height:3;");

	if($(window).width() >= 1025){
		$('body').addClass('hover-body');
	}else{
		$('body').removeClass('hover-body');
	}

	$(".fancybox").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		mouseWheel	: false,
		padding    : 5,
        margin     : 5,
        maxWidth: 900,
	});


	$('body').addClass('home-anim');
	$(document).scroll(function(){
		if($(window).scrollTop() > 10){
			// console.log('dots')
			$('header').addClass('active');
		}else{
			$('header').removeClass('active');
		}
	})

	/******************************************************** General Start */

	var top_space = $('header').height() + $('.page-tabs').height();

	$('.top-space').height(top_space);

	$('.error-search-bar').click(function(){
		$(this).addClass('srch-opened');
		$('.mob-tab-selected').addClass('tab-closed').removeClass('active');
		$('.page-tabs ul').removeClass('tabs-list');
	});

	$('.mob-tab-selected').click(function(){
		$(this).toggleClass('active')
		$('.page-tabs ul').toggleClass('tabs-list');
		$('.page-tabs ul.tabs-list').css({'top': $('.inner-header').innerHeight()});
		$('.error-search-bar').removeClass('srch-opened');
		$('.mob-tab-selected').removeClass('tab-closed');
	})

	$('.page-tabs .tab').click(function(){
		$('.mob-tab-selected').toggleClass('active')
		$('.page-tabs ul').toggleClass('tabs-list');
		$('.mob-tab-selected span').html($('.page-tabs .tab.active').text());
	})

	// $('.roadblock-wrp p, .roadblock-wrp > div span').click(function(){
	// 	$('.roadblock-wrp').hide();
	// })

	$('.roadblock-wrp > div span.closeBtn').click(function(){
		$('.roadblock-wrp').hide();
	})
	$('.roadblock-wrp #roadblockProjectList').change(function(){

		//alert($(this).val());
		//alert($(this).children(":selected").attr("data-projectId"));
		$('#project_name').val($(this).val());
		$('#project_id').val($(this).children(":selected").attr("data-projectId"));
		
	})
	
	/******************************************************** General Start */


	/******************************************************** Filter Start */

	if($(window).width() > 768 ) {
	    $('.search-filter').css({'margin-top': $('.inner-header').innerHeight()})
	}

    if($(window).width() <= 768 ) {
        $('.search-filter').css({'margin-top':	$('.logo-wrp').innerHeight()})
        $('.sorry-banner-wrp, .general-search-page, .near-project-wrp').css({'margin-top':	$('header').innerHeight()})
    }

    $('.mob-filter-tab').click(function() {
    	$('.search-filter .wrp').slideToggle();
    })

	/******************************************************** Filter End */
	

	/******************************************************** Timezone Start */

	var thehours = new Date().getHours();
	var themessage;
	var morning = ('Good morning');
	var afternoon = ('Good afternoon');
	var evening = ('Good evening');

	if (thehours >= 0 && thehours < 12) {
		themessage = morning;
		$('body').removeClass('afternoon, evening');
		$('body').addClass('morning');

	} else if (thehours >= 12 && thehours < 17) {
		themessage = afternoon;
		$('body').removeClass('morning, evening');
		$('body').addClass('afternoon');

	} else if (thehours >= 17 && thehours < 24) {
		themessage = evening;
		$('body').removeClass('morning, afternoon');
		$('body').addClass('evening');
	}

	$('.greeting').append(themessage);

	/******************************************************** Timezone End */

	/******************************************************** Change Page Start */

	//$(".change-page").removeClass('active').delay(5000);

		setTimeout(function(){
			$(".change-page").removeClass('active');
		}, 500)

	    $("a.bv").click(function() {
	        $(".change-page").addClass('active');  
	                                         
	        var href = $(this).attr('href');

	        setTimeout(function() {window.location = href}, 500);
	        return false;
	    });

	    $(window).on("load", function() {
		  $('.pre-loader').css('display', 'none');
		});

	/******************************************************** Change Page End */

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

	$('.home-slide .arrow').click(function(){
		if($('.home-slide').hasClass('active')){
			$('.home-slide').removeClass('active');
			$('header').removeClass('slide-header');
		}else{
			$('.home-slide').addClass('active');
			$('header').addClass('slide-header');
			$('.menu-wrp').removeClass('active');
		}
	})

	/******************************************************** Menu End */

	/******************************************************** Home Form Start */

	$('.home-form .form-wrp .type-anim').click(function(){
		$('.home-form .form-wrp input[type=text]').focus();
		$(this).hide();
	});

	$('.home-form .form-wrp input[type=text]').focusin(function(){
		$('.home-form .form-wrp .type-anim').hide();
	});

	$('.home-form .form-wrp input[type=text]').focusout(function(){
		if($(this).val() == ''){
			$('.home-form .form-wrp .type-anim').show();
			// $('.home-form .form-wrp .type-anim').css({'animation-delay' : '0s'});
		}
	});

	/******************************************************** Home Form End */

	/******************************************************** Push Notification Start */

	$('.push-notification-wrp span').click(function(){
		$('body').removeClass('push-notification-active');
	})

	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");

	if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {

		// $(window).load($('body').addClass('push-notification-active'));
 
		$(window).on("load", function() {
		  $('body').addClass('push-notification-active');
		});

		$('.push-notification-wrp .iphone').show();
	}else if(isAndroid){

		// $(window).load($('body').addClass('push-notification-active'));

		$(window).on("load", function() {
		  $('body').addClass('push-notification-active');
		});

		$('.push-notification-wrp .android').show();		
	}

	/******************************************************** Push Notification End */

	/******************************************************** Home Slider Start */
	$('#home-main-slider').owlCarousel({
		loop:true,
		items: 1,
		nav:false,
		dots: false,
		mouseDrag: false,
		animateOut: 'fadeOut',
		autoplay: true,
		autoplayHoverPause:true,
	})

	$('#trending-slider').owlCarousel({
		loop:true,
		items: 1,
		margin: 0,
		nav: true,
		dots: false,
		mouseDrag: false,
		animateOut: 'fadeOut',
		autoplay: true,
		autoplayHoverPause:true,
	})

	$('#home_slider_01').owlCarousel({
		loop:true,
		margin:50,
		items: 4,
		nav:true,
		dots: false,
		mouseDrag: false,  
		autoplay: true,
		autoplayHoverPause:true,
		responsive: {
			0 : {items: 1,margin: 0},
			500 : {items: 2,margin:20},
			769 : {items: 3,margin:30},
			1100 : {items: 4,}
		}
	})

	$('#home_slider_02').owlCarousel({
		loop:false,
		margin:0,
		items: 3,
		nav:false,
		dots: true,
		mouseDrag: false,
		responsive: {
			0 : {items: 1},
			768 : {items: 2,},
			1100 : {items: 3,}
		}
	})

	$('#home_slider_03').owlCarousel({
		loop:false,
		margin:0,
		items: 1,
		nav:false,
		dots: true,
		mouseDrag: false,
		// animateIn: 'fadeIn', 
		animateOut: 'fadeOut'
	})

	$('#nearby_projects_01').owlCarousel({
		loop:false,
		margin:50,
		items: 4,
		nav:true,
		dots: false,
		mouseDrag: false,
		autoplay: true,
		autoplayHoverPause:true,
		responsive: {
			0 : {items: 1,margin: 0},
			500 : {items: 2,},
			769 : {items: 3,},
			1100 : {items: 4,}
		} 

	})

	$('#similar_projects_01').owlCarousel({
		loop:false,
		margin:50,
		items: 4,
		nav:true,
		dots: false,
		mouseDrag: false,
		autoplay: true,
		autoplayHoverPause:true,
		responsive: {
			0 : {items: 1,margin: 0},
			500 : {items: 2,},
			769 : {items: 3,},
			1100 : {items: 4,}
		}  
	})

	$('#search_2bhk').owlCarousel({
		loop:false,
		margin:50,
		items: 4,
		nav:true,
		dots: false,
		mouseDrag: false,
		autoplay: true,
		autoplayHoverPause:true,
		responsive: {
			0 : {items: 1,margin: 0},
			500 : {items: 2,},
			769 : {items: 3,},
			1100 : {items: 4,}
		} 
	})

	$('#project_top_slider').owlCarousel({
		loop:false,
		items: 1,
		nav:false,
		dots: true,
		// animateOut: 'fadeOut',
		mouseDrag: false
	})

	$('#external_amenities_slider, #internal_amenities_slider').owlCarousel({
		loop:false,
		items: 2,
		nav:true,
		dots: true,
		mouseDrag: false,
		responsive: {
			0: {items: 1, nav: false,},
			768: {items: 2,mouseDrag: false,}
		}

	})

	$('#images_gallery_slider').owlCarousel({
		loop:false,
		items: 4,
		nav: true,
		margin: 2,
		dots: false,
		mouseDrag: false,
		responsive: {
			0 : {items: 1,},
			500 : {items: 2,},
			769 : {items: 3,},
			1025 : {items: 4,}
		} 
	})

	$('#amenities_gallery_slider').owlCarousel({
		loop:false,
		items: 4,
		nav: true,
		margin: 2,
		dots: false,
		mouseDrag: false,
		responsive: {
			0 : {items: 1,},
			500 : {items: 2,},
			769 : {items: 3,},
			1025 : {items: 4,}
		} 
	})

	$('#walkthrough_gallery_slider').owlCarousel({
		loop:false,
		items: 4,
		nav: true,
		margin: 2,
		dots: false,
		mouseDrag: false,
		responsive: {
			0 : {items: 1,},
			500 : {items: 2,},
			769 : {items: 3,},
			1025 : {items: 4,}
		} 
	})

	$('#video_gallery_slider').owlCarousel({
		loop:false,
		items: 4,
		nav: true,
		margin: 2,
		dots: false,
		mouseDrag: false,
		responsive: {
			0 : {items: 1,},
			500 : {items: 2,},
			769 : {items: 3,},
			1025 : {items: 4,}
		} 
	})

	$('#master_plans_slider').owlCarousel({
		loop:false,
		items: 1,
		nav: true,
		dots: false,
		mouseDrag: false  
	})

	$('#floor_plans_slider').owlCarousel({
		loop:false,
		items: 1,
		nav: true,
		dots: false,
		mouseDrag: false  
	})

	$('#project_listing_slider').owlCarousel({
		loop:true,
		items: 4,
		nav:false,
		stagePadding: 10,
		dots: false,
		mouseDrag: false,
		autoplay: true,
		autoplayHoverPause:true,
		responsive: {
			0: {items: 1},
			541: {items: 2},
			800: {items: 3},
			1100: {items: 4}
		} 
	})

	$('#ongoing_projects_slider, #completed_projects_slider').owlCarousel({
		loop:true,
		margin:50,
		items: 4,
		nav: true,
		dots: false,
		margin:50,
		mouseDrag: false,
		autoplay: true,
		autoplayHoverPause:true,
		responsive: {
			0: {items: 1},
			768: {items: 2},
			1025: {items: 3},
			1200: {items: 4},
		}
	})

	$('#Commercial_ongoing_projects_slider, #commercial_completed_projects_slider').owlCarousel({
		loop:true,
		margin:50,
		items: 4,
		nav: true,
		dots: false,
		mouseDrag: false,
		autoplay: false,
		autoplayHoverPause:true,
		responsive: {
			0: {items: 1},
			768: {items: 2},
			1025: {items: 3},
			1200: {items: 4},
		}  
	})

	// $('#commercial_completed_projects_slider').owlCarousel({
	// 	loop:true,
	// 	margin:50,
	// 	items: 4,
	// 	nav: true,
	// 	dots: false,
	// 	mouseDrag: false,
	// 	autoplay: true,
	// 	autoplayHoverPause:true,
	// 	responsive: {
	// 		0: {items: 1},
	// 		768: {items: 2},
	// 		1025: {items: 3},
	// 		1200: {items: 4},
	// 	}  
	// })

	$('#registered_company_list').owlCarousel({
		loop:false,
		items: 4,
		nav:true,
		dots: false,
		mouseDrag: false,
		responsive: {
			0: {items: 1},
			768: {items: 2},
			1025: {items: 3},
			1200: {items: 4},
		}
	})

	$('#fun_slider').owlCarousel({
        loop:false,
        nav: true,
        dots: false,
        margin:30,
        items: 4,
        responsive: {
			0: {items: 1},
			768: {items: 2},
			1025: {items: 3},
			1200: {items: 4},
		},
        mouseDrag: false  
    })

    $('#pathshala_slider').owlCarousel({
        loop:false,
        nav: true,
        dots: false,
        margin:30,
        items: 4,
        responsive: {
			0: {items: 1},
			768: {items: 2},
			1025: {items: 3},
			1200: {items: 4},
		},
        mouseDrag: false  
    })

	$('#testimonial_slider').owlCarousel({
		loop:false,
		margin:0,
		items: 3,
		nav:false,
		dots: true,
		mouseDrag: false,
		responsive: {
			0 : {items: 1, dots: false, nav: true},
			768 : {items: 2,},
			1100 : {items: 3,}
		}
	})

    $('#datetimepicker1, #datetimepicker4').datetimepicker({
        datepicker:false,
        format:'h:i',   
    });

    $('#timepicker1').datetimepicker({
        datepicker:false,
        format:'H:i', 
    });

    $('#datetimepicker2, #datetimepicker3').datetimepicker({
        timepicker:false,
        format:'Y/m/d',
        //formatDate: 'd/m/Y',
        minDate:'+1970/01/02',
        //maxDate:'+1970/01/02'
    });

	/******************************************************** Home Slider End */

	/******************************************************** Error Search Bar Start */

	// if($('.error-search-bar .search-wrp input').val() !== 0){
	// 	console.log('active')
	// 	$('.error-search-bar .search-wrp .close-btn').addClass('active');
	// }else{
	// 	$('.error-search-bar .search-wrp .close-btn').removeClass('active');
	// }

	// $('.error-search-bar .search-wrp input').keyup(function(){
	// 	var input_length = $('.error-search-bar .search-wrp input').val().length;
	// 	var left = 70 + input_length * 14;
	// 	console.log(input_length, left);
	// 	$('.error-search-bar .search-wrp .close-btn').css('left', left);
	// 	//console.log('active')
	// 	$('.error-search-bar .search-wrp .close-btn').addClass('active');
	// })

	// $('.error-search-bar .search-wrp input').keydown(function(){
	// 	//console.log('re-active')
	// 	$('.error-search-bar .search-wrp .close-btn').removeClass('active');
	// })

	// $('.error-search-bar .search-wrp .close-btn').click(function(){
	// 	$('.error-search-bar .search-wrp .close-btn').css('left', 70);

	// 	$('.error-search-bar .search-wrp input').val('');
	// 	$('.error-search-bar .search-wrp .close-btn').removeClass('active');
	// })



	/******************************************************** Error Search Bar End */

	/******************************************************** Inner Page Start */

	if($('header').hasClass('inner-header')){
		$('.error-search-bar .search-wrp input').attr('placeholder', 'Search here');
	}

	/******************************************************** Inner Page End */

	/******************************************************** Section Tab Start */

	$('.sec-tabs-wrp > p').click(function(e){
		var data_tab = $(this).data('sec-tab');
		var parent = $(this).parents('class');

		$(this).siblings().removeClass('active');		
		$(this).addClass('active');

		$('#'+data_tab).siblings().delay(900).animate({
			opacity : 0
		}, function(){
			$(this).hide().removeClass('active');
		});

		// $('.hori_line_anim_02').addClass('active', function(){
		// 	// $(this).removeClass('active').delay(2000);
		// })

		// setTimeout(function() {
		// 	$('.hori_line_anim_02').removeClass('active');
		// },2000);

		$('#'+data_tab).delay(900).animate({
			opacity : 1
		}, function(){
			$(this).show().addClass('active');
		});

		// $('#'+data_tab).siblings().hide();
		// $('#'+data_tab).show().addClass('active');

	})


	$('.sec-tabs-wrp > span').click(function(e){
		var data_tab = $(this).data('sec-tab');
		$(this).siblings('span').removeClass('active');		
		$(this).addClass('active');

		$('.sec-tabs-content').hide();
		$('#'+data_tab).show();
	})

	if($(window).width() < 768) {
		$('.sec-tabs-wrp > span').click(function(e){
		var data_tab = $(this).data('sec-tab');
		$(this).siblings('span').removeClass('active');		
		$(this).addClass('active');

		$('.sec-tabs-content').hide();
		$('#'+data_tab).slideDown(300);
	})
	}

	/************* Section Tab Animation Start */

	$('.amenities-wrp .sec-tabs-wrp > p').click(function(e){
		$('.hori_line_anim_01').addClass('active');
		setTimeout(function() {
			$('.hori_line_anim_01').removeClass('active');
		},2000);
	})


	var img_height = $('.gallery-slider-wrp img').height() + 10;
	$('.hori_line_anim_02').css('height', img_height);
	$('.gallery-wrp .sec-tabs-wrp > p').click(function(e){

		$('.hori_line_anim_02').addClass('active');
		$('#gallery .gallery-slider-wrp').css('pointer-events', 'none');
		setTimeout(function() {
			$('.hori_line_anim_02').removeClass('active');
			$('#gallery .gallery-slider-wrp').css('pointer-events', 'all');
		},3000);
	})

	/************* Section Tab Animation End */

	/******************************************************** Section Tab End */

	/******************************************************** Form Start */

	function form_input_w(){
		var input = $('.form-wrp input'),
			input_length = $(input).length,
	        i = 0,
	        arr = [];

	    for(i = 0; i < input_length; i++){
			arr[i] = $('.form_input_'+i);
			var input_siblings_w = $('.form_input_'+i).siblings().width() + 30;
			// console.log(input_siblings_w , i)
			$('.form_input_'+i).css('width', '100%').css('width', '-='+input_siblings_w);
	 	}

	}

	form_input_w();

	// $.each($('.form-wrp input'), function() {
	//     var height = $(this).height();
	//     console.log(height)
	// });

	/******************************************************** Form End */

	/******************************************************** Fancy Box Start */
	/******************************************************** Fancy Box End */

	/******************************************************** Page tab Underline Start */

    $('.page-tabs .tab').click(function(e) {
        e.preventDefault();
    });
    // $('.page-tabs ul li').click(function() {
    //     var tab_id = $(this).attr('data-tab');
    //     $('page-tabs ul li').removeClass('selected');
    //     $(this).addClass('selected');
    //     // $('.pro-info .para > div').fadeOut().promise().done(function() {
    //     //     $('.' + tab_id + '-para').fadeIn();
    //     // });
    // });
    function page_tabs() {
        var $el, leftPos, newWidth, $mainNav = $(".page-tabs ul");
        $mainNav.append("<span id='underline'></span>");
        var $magicLine = $("#underline");
        $magicLine.width($(".current-underline").width()).css("left", $(".current-underline").position().left).data("origLeft", $magicLine.position().left).data("origWidth", $magicLine.width());
        $(".page-tabs .tab").hover(function() {
            $el = $(this);
            leftPos = $el.position().left;
            newWidth = $el.parent().width();
            $magicLine.stop().animate({
                left: leftPos,
                width: newWidth
            });
        }, function() {
            $magicLine.stop().animate({
                left: $magicLine.data("origLeft"),
                width: $magicLine.data("origWidth")
            });
        });
        $(".page-tabs .tab").click(function() {
            $el = $(this);
            leftPos = $el.position().left;
            newWidth = $el.parent().width();
            $magicLine.data("origLeft", leftPos);
            $magicLine.data("origWidth", newWidth);
            $magicLine.stop().animate({
                left: leftPos,
                width: newWidth
            });
        });


	
		$(window).scroll(function(){
			//alert();
			$('.page-tabs a.tab').each(function () {
				var target = $(this).attr('href'),
				tab_top_space = $('header').height() + $('.page-tabs').height() + 30;
				
				if(  $(window).scrollTop()  >= ($(target).offset().top - tab_top_space)  ) {
					leftPos = $(this).position().left;
					newWidth = $(this).parent().width();
					$magicLine.data("origLeft", leftPos);
					$magicLine.data("origWidth", newWidth);
					$magicLine.stop().animate({
						left: leftPos,
						width: newWidth
					});
					$('.page-tabs a.tab').removeClass('active');
					$(this).addClass('active');
					$('.mob-tab-selected span').html($('.page-tabs .tab.active').text());
				}
				else {
					$(this).removeClass('active');
				}
			})

			// var $el = $('#amenities');

			// console.log(scrollTop, divOffset, dist )

		// $('.page-tabs .tab').each(function(){
		// 	var scrollTop = $(window).scrollTop(),
		// 		$el = $(this),
		// 		data_tab = $el.data('tab-btn'),
		// 		data_offset = $('.sec-wrp').offset().top
		// 		// dist = (data_offset - scrollTop) 
		// 		;

		// 	console.log(data_offset);
		// 	if(scrollTop >= data_offset){
		// 		console.log('hi')
		// 		leftPos = $el.position().left;
		// 		newWidth = $el.parent().width();
		// 		$magicLine.data("origLeft", leftPos);
		// 		$magicLine.data("origWidth", newWidth);
		// 		$magicLine.stop().animate({
		// 			left: leftPos,
		// 			width: newWidth
		// 		});
		// 	}
		// })
		})
    };

    if(!$('body').hasClass('home-body') && !$('body').hasClass('no-tabs')){
    	page_tabs();
    }

	/******************************************************** Page tab Underline End */

	/******************************************************** Sub Tab Start */

	$('.page-tabs .tab').click(function(e){
		var data_tab = $(this).attr('href'),
			tab_anchor = $(data_tab).offset(),
			tab_top_space = $('header').height() + $('.page-tabs').height(),
			hash = document.location.hash;

		// console.log(tab_top_space)
		e.preventDefault();
		// window.location.hash = e.target.hash;
		$('.page-tabs .tab').removeClass('active');
		$(this).addClass('active');
		$('body, html').animate({ scrollTop: tab_anchor.top - tab_top_space}, 1000);

	})

	/**************** Location pointer */

	$('.project-info .right .location a').click(function(e){
		var data_tab = $(this).attr('href'),
			tab_anchor = $('#location').offset(),
			tab_top_space = $('header').height() + $('.page-tabs').height(),
			hash = document.location.hash;

		e.preventDefault();
		$('body').animate({ scrollTop: tab_anchor.top - tab_top_space}, 1000);

	})

	/******************************************************** Sub Tab End */

	$('.gmap-wrp').click(function(){
		$('.location-wrp .gmap-wrp iframe').addClass('clicked')
	});
	$('.location-wrp').mouseleave(function(){
		$('.location-wrp .gmap-wrp iframe').removeClass('clicked');
		//$('.location-wrp .img-wrp > div').removeClass('clicked');
	});


	$('.gmap').click(function(){
		$('.gmap iframe').addClass('clicked')
	});
	$('.gmap').mouseleave(function(){
		$('.gmap iframe').removeClass('clicked');
	});


	/******************************************************** Zoom Start */

	/******************************************************** Breadcrumb Start */

	var breadcrumb_height = $('.breadcrumb').height() + 20;
	$('.breadcrumb').append('<div class="breadcrumb-right"></div>')
	$('.breadcrumb-right').css({'border-bottom-width': breadcrumb_height})

	/******************************************************** Breadcrumb End */

	// $('#imageFullScreen').smartZoom({'containerClass':'zoomableContainer'});
	// $('#topPositionMap,#leftPositionMap,#rightPositionMap,#bottomPositionMap').bind("click", moveButtonClickHandler);
	// $('#zoomInButton,#zoomOutButton').bind("click", zoomButtonClickHandler);

	// function zoomButtonClickHandler(e){
	//     var scaleToAdd = 0.8;
	// 	if(e.target.id == 'zoomOutButton')
	// 	scaleToAdd = -scaleToAdd;
	// 	$('#imageFullScreen').smartZoom('zoom', scaleToAdd);
	// }    
 //    function moveButtonClickHandler(e){
	// 	var pixelsToMoveOnX = 0;
	// 	var pixelsToMoveOnY = 0;

	// 	switch(e.target.id){
	// 		case "leftPositionMap":
	// 		pixelsToMoveOnX = 50;
	// 		break;
	// 		case "rightPositionMap":
	// 		pixelsToMoveOnX = -50;
	// 		break;
	// 		case "topPositionMap":
	// 		pixelsToMoveOnY = 50;
	// 		break;
	// 		case "bottomPositionMap":
	// 		pixelsToMoveOnY = -50;
	// 		break;
	// 	}
	// 	$('#imageFullScreen').smartZoom('pan', pixelsToMoveOnX, pixelsToMoveOnY);
 //    }

	/******************************************************** Zoom End */

	
})

jQuery(function($) {

    // $('body').mouseover(function() {
    //     var dWidth = $(document).width() - 500, // 100 = image width
    //         dHeight = $(document).height() - 100, // 100 = image height
    //         nextX = Math.floor(Math.random() * dWidth),
    //         nextY = Math.floor(Math.random() * dHeight);
    //     $('.home-banner .img-01').animate({ left: nextX + 'px', top: nextY + 'px' });
    // });

 //    $(window).mousemove(function(event) {
 //    	var img_01_pageX = event.pageX - $('.home-banner .img-01').width(),
 //    		img_02_pageX = event.pageX - $('.home-banner .img-02').width(),
 //    		img_03_pageX = event.pageX - $('.home-banner .img-03').width(),
 //    		pageY = event.pageY - $('.home-banner .img-01').height();

 //    	// var pageX = event.pageX - 1000,
 //    	// 	pageY = event.pageY - 1000;

 //    	// console.log(pageX, pageY)
	// 	$(".home-banner .img-01").css({"left" : pageX_01});
	// 	$(".home-banner .img-02").css({"left" : pageX_02});
	// 	$(".home-banner .img-03").css({"left" : pageX_03});
	// });
	
	// $(window).mousemove(function(e){
 //    	var img1_w = $('.home-banner .img-01').width() + 1,
 //    		img1_h = $('.home-banner .img-01').height() + 1;
	//   $('.home-banner .img-01').css({'top': e.clientY - img1_w, 'left': e.clientX - img1_h});
	// });



	// $(document).ready(function () {
	//     $('body.home-body').mousemove(function (e) {
	//         parallax(e, document.getElementById('layer-one'), 1);
	//         parallax(e, document.getElementById('layer-two'), 2);
	//         parallax(e, document.getElementById('layer-three'), 3);
	//     });
	// });

	// function parallax(e, target, layer) {
	//     var layer_coeff = 10 / layer;
	//     var x = ($(window).width() - target.offsetWidth) / 2 - (e.pageX - ($(window).width() / 2)) / layer_coeff;
	//     var y = ($(window).height() - target.offsetHeight) / 2 - (e.pageY - ($(window).height() / 2)) / layer_coeff;
	//     $(target).offset({ left : x });
	// };

});


$(document).ready(function() {

	// $(window).scroll(function(){
	// 	var st = $(window).scrollTop();
	// 		$(".txbn-middle-txt").css({"top": 70 - st * 0.15 + "px"});
	// })

	function close_accordion_section() {
		$('.accordion .accordion-section-title').removeClass('active');
		$('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	}

	$('.accordion-section-title').click(function(e) {
		var currentAttrValue = $(this).attr('href');
	 	var top_space = $('header').height() + $('.page-tabs').height();
	 	// var accordion_content_height = $(this).parent().prev().closest('.accordion-section').children('.accordion-section-content').height();
	 	var accordion_content_height = $(this).parent().prevAll().children('.accordion-section-content.open').height();

		if($(e.target).is('.active')) {			
			close_accordion_section();				
		}else {
			close_accordion_section();
			$(this).addClass('active');
			$('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
			$("html, body").animate({
	        	scrollTop: $(this).offset().top - top_space - accordion_content_height
	        },300);
	        console.log($(this).offset().top,  accordion_content_height)
		}

		e.preventDefault();
	});

	// $('.accordion-section-title').click(function() {
	// 	var top_space = $('header').height() + $('.page-tabs').height();
	// 	if($(this).find('.accordion-section-title').attr("class","active")) {
	// 		//$(this).find('.accordion-section-title').attr("class","active");
	// 		$("html, body").animate({
 //        	scrollTop: $(this).offset().top - top_space
 //        },300);
	// 	}
	// 	return false;		
	// })

	// Career page script 

	// $('.desc-btn').click(function(e) {
	// 	e.preventDefault();
	// 	var currentAttrValue = $(this).attr('href');
	// 	$('.desc-cont' + currentAttrValue).slideDown(300);
	// 	$(this).hide()
	// })

	// $('.close-btn').click(function() {
	// 	$('.desc-cont').slideUp(300);
	// 	$('.desc-btn,.btn-apply').show();
	// })

	// $('.btn-apply').click(function(e) {
	// 	e.preventDefault();
	// 	var currentAttrValue = $(this).attr('href');
	// 	$('.desc-cont' + currentAttrValue).slideDown(300);
	// 	$(this).hide();
	// 	$('.desc-btn').show();
	// })

	// $('.desc-cont').height($('.opening-list table').innerHeight() - ($(".openings table th").innerHeight() + $(".openings table td").innerHeight()))
	// $('.openings table tr.desc-cont').css({"top": $(".openings table th").innerHeight() + $(".openings table td").innerHeight()})

	$('#team-member-slider').owlCarousel({
		loop:false,
		nav: true,
		dots: false,
		margin:30,
		items: 4,
		mouseDrag: false,
		responsive: {
			0: {items: 1},
			540: {items: 2},
			800: {items: 3},
			1200: {items: 4},
		}
	});

	$('#awrds_slider').owlCarousel({
		loop:false,
		nav: true,
		dots: false,
		margin:0,
		items: 4,
		mouseDrag: false,
		responsive: {
			0: {items: 1},
			540: {items: 2},
			800: {items: 3},
			1200: {items: 4},
		}
	});

	$('#partner_1, #partner_2, #partner_3, #partner_4').owlCarousel({
		loop:false,
		nav: true,
		dots: false,
		margin:0,
		items: 4,
		responsive: {
			0: {items: 1,mouseDrag: true,},
			541: {items: 2},
			769: {items: 3,},
			1025: {items: 4,mouseDrag: false,},
		}
	});

	$('#occupants').owlCarousel({
		loop:false,
		nav: true,
		dots: false,
		margin:0,
		autoplay: true,
		items: 4,
		responsive: {
			0: {items: 1,mouseDrag: true,},
			541: {items: 2},
			769: {items: 3,},
			1025: {items: 4,mouseDrag: false,},
		}
	});

	$('#testmn_slider').owlCarousel({
		loop:false,
		nav: true,
		dots: false,
		margin:25,
		items: 3,
		mouseDrag: false,
		responsive: {
			0: {items: 1},
			540: {items: 2},
			1100: {items: 3}
		}
	});


	$('a.view-nri-txt').click(function() {
		$(this).hide();
		$('.hidden-txt').slideDown();
	})

	$('.count').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 4000,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(Math.ceil(now));
	        }
	    });
	});

	// $(".gallery-slider-wrp .fancybox").on("click", function(){
 //        $.fancybox({
 //          href: this.href,
 //          type: $(this).data("type")
 //        });
 //        return false   
 //    });

	$("a.click-popup").click(function(){
		var target = $(this).attr('href');
	 	$(target).show();
	 	//$('#price-enquiry').show();
	 	// .animate({'width':'100%'})
	 	//setTimeout(function() {
	 		//$('.fade-lightbx .fade-lightbx-content').animate({'width':'40%'});
	 	//},300)
		$('.fade-lightbx').prepend("<div class='lightbox-overlay'></div>");
		$('.lightbox-overlay').click(function(){
			$(this).parent().hide();
		});
		$('body').css('overflow','hidden')
	});

	$(".close-popup").click(function(){
	 //$('.fade-lightbx').hide();
	 $(this).parent().parent().hide();
	 $('body').css('overflow','auto')
	});

	$('#timepicker').datetimepicker({
	    datepicker:false,
	    format:'h:i',   
	});
	$("#datetimepicker1").focus(function(){$(this).blur()})
	$("#datetimepicker2").focus(function(){$(this).blur()})

	$('#datepicker').datetimepicker({
	    timepicker:false,
	    format:'Y/m/d',
	    minDate:'+1970/01/02'
	});

	$('.send-sms').click(function(e) {
		e.preventDefault();
		$('.share-no-form').show().animate({'width':'100%'});
	})

	$('.share-no-form span').click(function(e) {
		$('.share-no-form').animate({'width':'0%'}).hide(100);
	})

	 if($(window).width() <= 768) {
        $('.buyersg-wrp ul li h4').click(function(){            
            $(this).siblings().slideToggle(300);
        })
    }

 	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
	if(isAndroid) {
	    if($(window).width()<480){
	    	$('.home-form .form-wrp input[type=text]').focusin(function(){
	    		$('body').addClass('search-active')
	    	})
	    	$('.home-form .form-wrp input[type=text]').focusout(function(){
	    		$('body').removeClass('search-active')
	    	})
	    }
	}


	$('.circl-img .testi-item.video a').height($('#testmn_slider .owl-item').height())

	if($(window).width() <= 768){
		var testimonial_wrp_big_img_h = $('.testimonial-wrp .top-wrp .testi-item > div img').height() + 20;
		$('.testimonial-wrp .top-wrp .heading').css({'top': testimonial_wrp_big_img_h});
	}
	
});

	var rowNum = 0;
	$('.ad-ref div').click(function() {
	rowNum++;

	$( '<div class="ref-name-wrap"><div id="ref'+rowNum+'" class="ref-div"><input type="hidden" name="r_hdn_country[]" id="r_hdn_country_'+rowNum+'" value=""><input type="hidden" name="r_hdn_dialcode[]" id="r_hdn_dialcode_'+rowNum+'" value=""><div class="inpt-col"><input class="tname" type="text" name="r_name[]" id="r_name" placeholder="Name*"></div><div class="inpt-col"><input class="temail" type="text" name="r_email[]" id="r_email" placeholder="Email*"></div><div class="inpt-col" id="mob_row_'+rowNum+'"><input class="tmobile" type="text" name="r_mobile[]" id="r_mobile" onkeyup="get_country_dailcode('+rowNum+')" placeholder="Mobile No.*"></div><div class="inpt-col"><input class="trel" type="text" name="relationship[]" id="relationship" placeholder="Relationship"></div><div id="ref'+rowNum+'" class="close-ref">x</div></div></div>' ).insertBefore( $( ".bef-ref" ) );

	// $( '<input type="hidden" name="r_hdn_country[]" id="r_hdn_country_'+rowNum+'" value=""><input type="hidden" name="r_hdn_dialcode[]" id="r_hdn_dialcode_'+rowNum+'" value=""><div class="inpt-col"><input class="tname" type="text" name="r_name[]" id="r_name" placeholder="Name*"></div><div class="inpt-col"><input class="temail" type="text" name="r_email[]" id="r_email" placeholder="Email*"></div><div class="inpt-col" id="mob_row_'+rowNum+'"><input class="tmobile" type="text" name="r_mobile[]" id="r_mobile" onkeyup="get_country_dailcode('+rowNum+')" placeholder="Mobile No.*"></div><div class="inpt-col"><input class="trel" type="text" name="relationship[]" id="relationship" placeholder="Relationship"></div>' ).insertBefore( $( "#sub_btn" ) );
	
	$('form :input[id=r_mobile]').each(function(index) {
            $(this).intlTelInput({
                geoIpLookup: function(callback) {
                    $.get("https://crm.netbizlabs.com/campaign/ip2nation").always(function(resp) {
                       callback(resp);
                    });
                },
                initialCountry: "in",
                nationalMode: false,
                autoHideDialCode: false,
                separateDialCode: true,
                utilsScript: "<?php echo CDN_URL;?>resources/js/utils.js"
            });
        });
	
	});

$(document).on('click', '.close-ref', function(e) {
	$('div#'+this.id).remove();     
});


$('.live-chat-wrp .btn-02').click(function() {
	$('#phplive_btn_1500478216').trigger('click');
	//alert('hi');
})
