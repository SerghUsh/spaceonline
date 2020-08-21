$(document).ready(function () {
    /* HEADER MENU */
    $('.header__burger').click(function (event) {
        $('.header__burger,.header__menu').toggleClass('active');
    });

    /* MAIN PAGE */
    var sliderID;

    // top slider
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

    // Choise your practises slider
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

    // Start now slider
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

    // Future events slider
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

    /* SPECIALIST PAGE */

    // Filter range slider
    $('.rs-range').on('input', function (e) {
        var rangeSlider = $(e.target);
        // write min value to block
        var rangeMin = $(rangeSlider.data('min-id'));
        rangeMin.text(rangeSlider.attr('min'));
        // write max value to block
        var rangeMax = $(rangeSlider.data('max-id'));
        rangeMax.text(rangeSlider.attr('max'));
        // write current value to block
        var rangeTitle = $(rangeSlider.data('title-id'));
        rangeTitle.text(rangeSlider.val());
        // move title with bullet
        var bulletPosition = rangeSlider.val() / rangeSlider.attr('max');
        var rangeSliderWidth = rangeSlider.outerWidth();
        var offset = rangeSliderWidth * bulletPosition;
        rangeTitle.css('left', offset + 'px');
    }).trigger('input');

    // Tabs
    $('*[data-tab-id]').on('click', function (e) {
        var activeTabId = $(e.target).attr('data-tab-id');
        $(e.target).closest('.tab-buttons').find('*[data-tab-id]').each(function (n, elem) {
            var tabId = $(elem).attr('data-tab-id');
            if (activeTabId === tabId) {
                $(elem).addClass('active');
                $(tabId).addClass('active');
            } else {
                $(elem).removeClass('active');
                $(tabId).removeClass('active');
            }
        });
        e.preventDefault();
        return false;
    });
    $('.active[data-tab-id]').trigger('click');

    // Achievement slider
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

    /* REGISTRATION PAGE */

    // Init select
    $('#timezone').select2({
        width: '100%',
    });
    // Init date
    $('#birthday').datepicker({
        language: "ru",
        autoclose: true,
        todayHighlight: true,
        calendarWeeks: true,
        clearBtn: true
    });
});
/* input file */
;(function (document, window, index) {
    'use strict';
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function (input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener('change', function (e) {
            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else
                fileName = e.target.value.split('\\').pop();

            if (fileName) {
                label.querySelector('span').innerHTML = fileName;
                label.querySelector('span').title = fileName;
            } else {
                label.innerHTML = labelVal;
            }
        });

        // Firefox bug fix
        input.addEventListener('focus', function () {
            input.classList.add('has-focus');
        });
        input.addEventListener('blur', function () {
            input.classList.remove('has-focus');
        });
    });
}(document, window, 0));