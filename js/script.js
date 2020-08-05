
// searchButton.onclick = function() {
// 	page.classList.toggle('.display');
// 	page.classList.toggle('.display-1');
// };

// $('.variable-width').slick({
//   dots: true,
//   infinite: true,
//   speed: 300,
//   slidesToShow: 1,
//   centerMode: true,
//   variableWidth: true
// });

$(document).ready(function(){
	var sliderID;

	sliderID = 'personal_gid';
	$('#' + sliderID + ' .slider').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
		slidesToShow: 1,
		centerMode: false,
		variableWidth: false,

		arrows:false,
		dots: false
	});

	sliderID = 'choise_your_practises';
	$('#' + sliderID + ' .slider').slick({
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		centerMode: false,
		variableWidth: true,

		arrows:true,
		appendArrows: $('#' + sliderID + ' .slider_manage_block .arrows'),
		prevArrow: '<div class="choise_your_practises__button_left"></div>',
		nextArrow: '<div class="choise_your_practises__button_right"></div>',

		dots: true,	
		appendDots: $('#' + sliderID + ' .slider_manage_block .dots')
	});

	sliderID = 'start_now';
	var slider1 = $('#' + sliderID + ' .slider').slick({
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		centerMode: false,
		variableWidth: true,

		arrows:false,
		dots: false
	});
	$('.next_slide').on('click', function() {
		console.log($(slider1).slick('slickCurrentSlide'));
		if ($(slider1).slick('slickCurrentSlide') == 5) {
			$(slider1).slick('slickGoTo', 0);
		} else {
			$(slider1).slick('slickNext');
		}
	});

	sliderID = 'future_events';
	$('#' + sliderID + ' .slider').slick({
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		centerMode: false,
		variableWidth: true,

		arrows:true,
		appendArrows: $('#' + sliderID + ' .slider_manage_block .arrows'),
		prevArrow: '<div class="choise_your_practises__button_left"></div>',
		nextArrow: '<div class="choise_your_practises__button_right"></div>',

		dots: true,	
		appendDots: $('#' + sliderID + ' .slider_manage_block .dots')
	});

});
