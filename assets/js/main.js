(function ($) {
"use strict";

//Course tab item
$('.courses .navbar .tab_item').on('click', function(){
	$('.all_tab_items').removeClass('active')
	$(this).toggleClass('active');
})

$('.all_tab_items').on('click', function(){
	$('.courses .navbar .tab_item').removeClass('active')
	$(this).addClass('active');
})

//Page language
$('.page-lang .lang-item').on('click', function(){
	$(this).each(function(){
		$('.page-lang .lang-item').removeClass('active')
		$(this).addClass('active')
	})
	
})


//**Radio and checkbox input add checked

$.fn.toggleAttr = function(attr, val) {
    var test = $(this).attr(attr);
    if ( test ) { 
      // if attrib exists with ANY value, still remove it
      $(this).removeAttr(attr);
    } else {
      $(this).attr(attr, val);
    }
    return this;
  };

  // jquery toggle just the attribute value
  $.fn.toggleAttrVal = function(attr, val1, val2) {
    var test = $(this).attr(attr);
    if ( test === val1) {
      $(this).attr(attr, val2);
      return this;
    }
    if ( test === val2) {
      $(this).attr(attr, val1);
      return this;
    }
    // default to val1 if neither
    $(this).attr(attr, val1);
    return this;
};

$('input[type="checkbox"]').not('.exam-area input[type="checkbox"]').click(function() {
    $(this).toggleAttr('checked', 6);
});

$('input[type="radio"]').not('.exam-area input[type="radio"]').click(function() {
	$('input[type="radio"]').removeAttr('checked');
    $(this).toggleAttr('checked', 6);
});

//set order number for exam item
$('.exam-item').each(function(){
	$(this).find('.order-number').text($(this).index()+1+'.');
})



//**Course inner
$(".accordion-label").on('click',function(){
	$(this).each(function(){
		$(this).parent().toggleClass('active-accordion')
	})
})

const acc_item = [...document.querySelectorAll('.accordion-item')];
const sec_item = [...document.querySelectorAll('.section-item')];
acc_item && acc_item.map((i ,index)=>{
	let span = i.querySelector('span');
	span.innerHTML = index+1+':'
})

sec_item && sec_item.map((i ,index)=>{
	let span = i.querySelector('span');
	span.innerHTML = index+1+'.'
})


// Course rating
var $ratingLabel = $('.rate label')

$ratingLabel.on('click',function(){
	$(this).each(function(){
		var $ratingInput = $(this).prev();
		$ratingInput.attr('checked', 6);
		var title = $(this).attr('title')
		$(this).parent().prev().text(title)
	})
	return false
});
//Active section item
$('.section-item').click(function(){

})



//Course inner tabs
$('.tab-item').click(function(e){
	e.preventDefault()
	$(this).each(function(){
		$('.tab-item').removeClass('active');
		$(this).addClass('active');
		$('.content-item').css('display','none')
		let $current = $(this).index();
		$('.course-inner .tab-contents').css('display','block');
		$('.content-item').eq(`${$current}`).css('display','block');
	})
})

//Close tabs
$('.close-about-tabs').click(function(e){
	e.preventDefault()
	$('.course-inner .course-about-tabs').toggleClass('closed-about-tabs');
	$('.course-inner .tab-contents').toggle();
	$('.close-about-tabs').toggleClass('active')
})

//* Certificate *
$('.cert-settings .setting-icon').on('click',function(e){
	
	$(this).each(function(){
		$(this).parent().parent().find('.cert-settings-dropdown').toggle();
	})

	e.preventDefault()
})

$(window).on('click',function(event) {
	let certDropdown = $('.cert-settings-dropdown');
	let settingIcon = $('.cert-settings .setting-icon');
	if (!settingIcon.is(event.target)){
		certDropdown.hide();
	}
});

//Register form

$( ".register-btn" ).on('click',function(e){
	e.preventDefault()
    $(this).each(function(){
		var errormessage = '';
	
		function validateEmail(email) {
			const pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			return pattern.test(email);
		}

		var form = $('.digiuth_form');
		
		if(form.find('input').val() == ''){
			errormessage += "<p> *Please enter your details</p>";
			form.find('.error-message').html(errormessage);
		}

		if((validateEmail(form.find('#email').val())==false) && (form.find('#email').val() !== '')){
			errormessage += "<p> *Please enter the correct e-mail address.</p>";
			form.find('.error-message').html(errormessage);
		}
	
		function isNumber (o) {
			return ! isNaN (o-0);
		} 

		if((isNumber(form.find('#phone').val()) && form.find('#phone').val().length<10) && (form.find('#phone').val() !== '') ){
			errormessage += "<p> *Please enter correct phone number. </p>";
			form.find('.error-message').html(errormessage);
		}

		form.find("#phone").ForceNumericOnly =
		function()
		{
			return this.each(function()
			{
				$(this).input(function(e)
				{
					var key = e.charCode || e.keyCode || 0;
					// allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
					// home, end, period, and numpad decimal
					return (
						key == 8 || 
						key == 9 ||
						key == 13 ||
						key == 46 ||
						key == 110 ||
						key == 190 ||
						(key >= 35 && key <= 40) ||
						(key >= 48 && key <= 57) ||
						(key >= 96 && key <= 105));
				});
			});
		};
	
	
		if(form.find('#repassword').val() != form.find('#password').val()){
			errormessage += "<p> *Your password is not the same</p>";
			form.find('.error-message').html(errormessage);
		}

		form.find('.error-message').html(errormessage);

	})
});

// skill
$(".skill-per").each(function() {
  var $this = $(this);
  var per = $this.attr("per");
  $this.css("width", per + "%");
  $({ animatedValue: 0 }).animate(
    { animatedValue: per },
    {
      duration: 1000,
      step: function() {
        $this.attr("per", Math.floor(this.animatedValue) + "%");
      },
      complete: function() {
        $this.attr("per", Math.floor(this.animatedValue) + "%");
      }
    }
  );
});
    
// meanmenu
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "992"
	});

	$('.info-bar').on('click', function () {
		$('.extra-info').addClass('info-open');
	})

	$('.close-icon').on('click', function () {
		$('.extra-info').removeClass('info-open');
	})

// offcanvas menu
$(".menu-tigger").on("click", function () {
	$(".offcanvas-menu,.offcanvas-overly").addClass("active");
	return false;
});
$(".menu-close,.offcanvas-overly").on("click", function () {
	$(".offcanvas-menu,.offcanvas-overly").removeClass("active");
});


// smoth scroll
$(function () {
	$('a.smoth-scroll').on('click', function (event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top - 100
		}, 1000);
		event.preventDefault();
	});
});

// mainSlider
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function () {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function ( nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		autoplay: true,
		autoplaySpeed: 10000,
		dots:false ,
		fade: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="icon dripicons-chevron-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="icon dripicons-chevron-right"></i></button>',
		responsive: [
			{ breakpoint: 1200, settings: { dots: false, arrows: false } }
		]
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}
mainSlider();



// testimonial-active
$('.testimonial-active').slick({
	dots: true,
	infinite: true,
	arrows: false,
	speed: 1000,
	slidesToShow:1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
});
    // testimonial-active
$('.testimonial-active2').slick({
	dots: true,
    autoplay:true,
  autoplaySpeed:1500,
	infinite: true,
	arrows: false,
	speed: 1000,
	slidesToShow: 1,
	slidesToScroll: 1,
	responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: true
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
});
// testimonial-active2

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots:false,
  arrows:true,
  centerMode: true,
  focusOnSelect: true, 
  variableWidth:true,
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
	nextArrow: '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
});


// scrollToTop
$.scrollUp({
	scrollName: 'scrollUp',
	topDistance: '300',
	topSpeed: 300,
	animation: 'fade',
	animationInSpeed: 200,
	animationOutSpeed: 200,
	scrollText: '<i class="fas fa-level-up-alt"></i>',
	activeOverlay: false,
});

//for menu active class
$('.button-group > button').on('click', function(event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});

// WOW active
new WOW().init();
    
//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab animated fadeIn');
				$(target).fadeIn(300);
				$(target).addClass('active-tab animated fadeIn');
			}
		});
	}

})(jQuery);