$(document).ready(function () {

	$(function () {
		$(window).scroll(function () {
			// set distance user needs to scroll before we start fadeIn
			if ($(this).scrollTop() > 100) { //For dynamic effect use $nav.height() instead of '100'
			  $(".navbar").animate(1000).addClass("scroll-css");

			} else {
				$(".navbar").animate(1000).removeClass("scroll-css");
			}
		});
	});

	$(".top_arow").click(function () {
		$("body,html").animate({
			"scrollTop": 0
		});
	});


	$(".asp-active").click(function () {
		$("html").removeClass("responsive-menu-open");
		$(".responsive-menu-button").removeClass("is-active");
	});


	$(".navMenu").click(function () {

		$(".navMenu").fadeOut("slow");
		$(".navMenu").css("display", "none");
		$(".navMenu1").fadeIn("slow");
		$(".navMenu1").css("display", "initial");

		$(".menuPop").fadeIn("slow");
		$(".menuPop").css("display", "initial");

	});


	$(".navMenu1").click(function () {
		$(".navMenu1").fadeOut("slow");
		$(".navMenu1").css("display", "none");
		$(".navMenu").fadeIn("slow");
		$(".navMenu").css("display", "initial");


		$(".menuPop").fadeOut("slow");
		$(".menuPop").css("display", "none");


	});


	$("#delivered").click(function () {
		$("#ongoing").removeClass("view-button-active");
		$("#delivered").addClass("view-button-active");
	});

	$("#ongoing").click(function () {
		$("#delivered").removeClass("view-button-active");
		$("#ongoing").addClass("view-button-active");
	});

	$("#del").click(function () {
		$("#ongoing").removeClass("view-button-active");
		$("#delivered").addClass("view-button-active");
		$("#demo2").css('display', 'block')
		$("#demo1").css('display', 'none')
	});

	$("#ong").click(function () {
		$("#delivered").removeClass("view-button-active");
		$("#ongoing").addClass("view-button-active");
		$("#demo2").css('display', 'none')
		$("#demo1").css('display', 'block')
	});

	$("#delivered2").click(function () {
		$("#ongoing2").removeClass("view-button-active");
		$("#delivered2").addClass("view-button-active");
	});

	$("#ongoing2").click(function () {
		$("#delivered2").removeClass("view-button-active");
		$("#ongoing2").addClass("view-button-active");
	});

	$("#del2").click(function () {
		$("#ongoing2").removeClass("view-button-active");
		$("#delivered2").addClass("view-button-active");
		$("#demo4").css('display', 'block')
		$("#demo3").css('display', 'none')
	});

	$("#ong2").click(function () {
		$("#delivered2").removeClass("view-button-active");
		$("#ongoing2").addClass("view-button-active");
		$("#demo4").css('display', 'none')
		$("#demo3").css('display', 'block')
	});


	var $logo = $('#scroll_top');
	$(document).scroll(function () {
		if ($(this).scrollTop() > 100) { //alert("scop");
			//  $logo.css({display: $(this).scrollTop() > 100? "block":"none"});
			$('#sy-whatshelp').css("display", "block");
		} else {
			$('#sy-whatshelp').css("display", "none");
		}

	});

});

jQuery(function ($) {
	$("a.sywh-open-services").click(function () {
		if ($(".sywh-services").hasClass("active")) {
			$(".sywh-services").removeClass("active");
			$("a.sywh-open-services i.fa-times").hide();
			$("a.sywh-open-services i.fa-comments").show();
			$("a.sywh-open-services").removeClass("data-tooltip-hide");
			$(".sywh-services a:nth-child(1)").delay(0).fadeOut();
			$(".sywh-services a:nth-child(2)").delay(100).fadeOut();
			$(".sywh-services a:nth-child(3)").delay(200).fadeOut();
			$(".sywh-services a:nth-child(4)").delay(300).fadeOut();
			$(".sywh-services a:nth-child(5)").delay(400).fadeOut();
		} else {
			$(".sywh-services").addClass("active");
			$("a.sywh-open-services i.fa-comments").hide();
			$("a.sywh-open-services i.fa-times").show();
			$("a.sywh-open-services").addClass("data-tooltip-hide");
			$(".sywh-services a:nth-child(5)").delay(0).fadeIn();
			$(".sywh-services a:nth-child(4)").delay(100).fadeIn();
			$(".sywh-services a:nth-child(3)").delay(200).fadeIn();
			$(".sywh-services a:nth-child(2)").delay(300).fadeIn();
			$(".sywh-services a:nth-child(1)").delay(400).fadeIn();
		}
	});
});