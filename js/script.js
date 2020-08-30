/* POP-UP */
function popUpShow(id) {
    $('body').addClass('blur');
    $('#' + id).fadeIn(500);
}

function popUpHide(id) {
    $('#' + id).fadeOut(500, function () {
        $('body').removeClass('blur');
    });
}

$(document).ready(function () {
    /* POP-UP */
    $('.pop-up .cover').on('click', function (e) {
        let id = $(e.target).closest('.pop-up').attr('id');
        popUpHide(id);
    });

    /* COOKIE */
    if ($('#cookie-block button').length) {
        $('body').addClass('blur');
        $('#cookie-block button').on('click', function (e) {
            $('#cookie-block').slideUp(500, function () {
                $('body').removeClass('blur');
            });
        });
    }

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

    /*GROUP LESSON PAGE*/

    // Open group lesson
    sliderID = 'open-group-lesson';
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

    /*OPEN EVENT PAGE*/

    // Open event
    sliderID = 'open-event';
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

    /*OPEN EVENT SPECIALIST SLIDER PAGE*/

    // Open event specialist slider
    sliderID = 'event-top';
    $('#' + sliderID + ' .slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 1,

        arrows: true,
        appendArrows: $('#' + sliderID + ' .slider-manage-block .arrows'),
        prevArrow: '<div class="slider-button-prev"></div>',
        nextArrow: '<div class="slider-button-next"></div>',

        dots: true,
        appendDots: $('#' + sliderID + ' .slider-manage-block .dots')
    });

    /*MAIN PRACTICE SLIDER PAGE*/

    // Main practice slider
    sliderID = 'practise-page';
    $('#' + sliderID + ' .slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 3,

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
    $('#timezone, #time-start, #time-end').select2({
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

    /* ACCOUNT PAGE */

    // Init filter
    $('*[data-filter]').on('click', function (e) {
        var containerId = $(e.target).parent().attr('data-container-id');
        var filter = $(e.target).attr('data-filter');

        $(e.target).parent().find('*[data-filter]').removeClass('active');
        $(e.target).addClass('active');

        if (filter) {
            $(containerId).find('> *').each(function (n, elem) {
                if ($(elem).hasClass(filter)) {
                    $(elem).slideDown(300);
                } else {
                    $(elem).slideUp(300);
                }
            });
        } else {
            $(containerId).find('> *').slideDown(300);
        }
        e.preventDefault();
        return false;
    });
    $('.active[data-filter]').trigger('click');

    // Init input type number
    $('.quantity-block .minus').on('click', function (e) {
        var val = $(e.target).parent().find('input').val();
        if (val > 1) {
            val--;
        }
        $(e.target).parent().find('input').val(val);
    });
    $('.quantity-block .plus').on('click', function (e) {
        var val = $(e.target).parent().find('input').val();
        val++;
        $(e.target).parent().find('input').val(val);
    });

    // Init sub-specialization
    $('#sub-specialization').select2({
        width: '100%',
        tags: true
    });

    // Init text area
    $('#description').on('keyup', function (e) {
        var id = $(e.target).attr('id');
        var count = $(e.target).val().length;
        var labelText = $(e.target).attr('data-label');
        labelText = labelText.replace('{count}', count);
        $('label[for="' + id + '"]').html(labelText);
    }).trigger('keyup');

    /* ACCOUNT PAGE */

    // Init accordion
    $('.accordion-item:not(.open) .accordion-info').hide();
    $('.accordion .arrow').on('click', function (e) {
        var speed = 500;
        var accordion = $(e.target).closest('.accordion');
        var currentBlock = $(e.target).closest('.accordion-item');

        if (currentBlock.hasClass('open')) {
            currentBlock.removeClass('open');
            currentBlock.find('.accordion-info').slideUp(speed);
        } else {
            // accordion.find('.accordion-item').removeClass('open');
            // accordion.find('.accordion-info').slideUp(speed);

            currentBlock.addClass('open');
            currentBlock.find('.accordion-info').slideDown(speed);
        }
    });

    $('#action-popup').select2({
        width: '100%'
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