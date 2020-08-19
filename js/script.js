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

$(document).ready(function () {
    /* header menu */
    $('.header__burger').click(function (event) {
        $('.header__burger,.header__menu').toggleClass('active');
    });

    /* main page */
    var sliderID;

    /* top slider */
    sliderID = 'personal_gid';
    $('#' + sliderID + ' .slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        /*centerMode: false,
        variableWidth: false,*/

        arrows: false,
        dots: false
    });

    sliderID = 'choise_your_practises';
    $('#' + sliderID + ' .slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        centerMode: false,
        variableWidth: true,

        arrows: true,
        appendArrows: $('#' + sliderID + ' .slider-manage-block .arrows'),
        prevArrow: '<div class="slider-button-prev"></div>',
        nextArrow: '<div class="slider-button-next"></div>',

        dots: true,
        appendDots: $('#' + sliderID + ' .slider-manage-block .dots')
    });

    sliderID = 'start_now';
    var slider1 = $('#' + sliderID + ' .slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        centerMode: false,
        variableWidth: true,

        arrows: false,
        dots: false
    });
    $('.next_slide').on('click', function () {
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

        arrows: true,
        appendArrows: $('#' + sliderID + ' .slider-manage-block .arrows'),
        prevArrow: '<div class="slider-button-prev"></div>',
        nextArrow: '<div class="slider-button-next"></div>',

        dots: true,
        appendDots: $('#' + sliderID + ' .slider-manage-block .dots')
    });

    /* specialist page */
    $('.tab-block .tab-buttons > span').on('click', function (e) {
        var tabId = $(e.target).data('tab');
        if (tabId) {
            $(e.target).closest('.tab-block').find('.tab-buttons .active').removeClass('active');
            $(e.target).addClass('active');
            $(e.target).closest('.tab-block').find('.tab-containers .active').removeClass('active');
            $(e.target).closest('.tab-block').find('.tab-containers ' + tabId).addClass('active');
        }
    });

    sliderID = 'achievement-slider';
    $('#' + sliderID + ' .slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        centerMode: false,
        variableWidth: false,

        arrows: true,
        appendArrows: $('#' + sliderID + ' .slider-manage-block .arrows'),
        prevArrow: '<div class="slider-button-prev"></div>',
        nextArrow: '<div class="slider-button-next"></div>',

        dots: true,
        appendDots: $('#' + sliderID + ' .slider-manage-block .dots')
    });
});