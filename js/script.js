function capitalize(text) {
    return text.charAt(0).toUpperCase() + text.slice(1)
}

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
    /* Clipboard */
    var clipboardTimer;
    new ClipboardJS('.clipboard');
    $('.clipboard').on('click', function (e) {
        clearTimeout(clipboardTimer);
        $(e.target).addClass('tooltip');
        clipboardTimer = setTimeout(function () {
            $(e.target).removeClass('tooltip');
        }, 1500)
    });

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
    sliderID = 'specialist-slider';
    $('#' + sliderID + ' .slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,

        arrows: true,
        appendArrows: $('#' + sliderID + ' .slider-manage-block .arrows'),
        prevArrow: '<div class="slider-button-prev"></div>',
        nextArrow: '<div class="slider-button-next"></div>',

        dots: true,
        appendDots: $('#' + sliderID + ' .slider-manage-block .dots')
    });

    /*MAIN PRACTICE SLIDER SPECIALIST ROW */

    //Specialist row slider
    sliderID = 'specialist-row';
    $('#' + sliderID + ' .slider').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,

        arrows: true,
        appendArrows: $('#' + sliderID + ' .arrows'),
        prevArrow: '<div class="specialist-row-prew"></div>',
        nextArrow: '<div class="specialist-row-next"></div>',
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

    // Statistic
    var lineChartByWorkTime = new Chart(document.getElementById("lineChartByWorkTime").getContext("2d"), {
        type: 'line',
        data: {
            labels: [
                capitalize(moment().add(-6, 'days').format('MMM DD')),
                capitalize(moment().add(-5, 'days').format('MMM DD')),
                capitalize(moment().add(-4, 'days').format('MMM DD')),
                capitalize(moment().add(-3, 'days').format('MMM DD')),
                capitalize(moment().add(-2, 'days').format('MMM DD')),
                capitalize(moment().add(-1, 'days').format('MMM DD')),
                capitalize(moment().format('MMM DD')),
            ],
            datasets: [
                {
                    label: "Личные консультации",
                    backgroundColor: 'rgba(89,133,173,0.5)', // #5985AD
                    borderColor: "#5985AD",
                    pointBackgroundColor: "#5985AD",
                    pointBorderColor: "#000",
                    data: [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label: "Групповые занятия",
                    backgroundColor: 'rgba(89,173,168,0.5)', // #59ADA8
                    borderColor: "#59ADA8",
                    pointBackgroundColor: "#59ADA8",
                    pointBorderColor: "#000",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "Семинары",
                    backgroundColor: 'rgba(89,173,107,0.5)', // #59AD6B
                    borderColor: "#59AD6B",
                    pointBackgroundColor: "#59AD6B",
                    pointBorderColor: "#000",
                    data: [30, 50, 58, 25, 40, 11, 20]
                }
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: true,
                position: 'top',
                labels: {
                    boxWidth: 15,
                    fontSize: 22,
                    fontColor: '#000'
                }
            }
        }
    });

    var doughnutChartByType = new Chart(document.getElementById("doughnutChartByType").getContext("2d"), {
        type: 'doughnut',
        data: {
            labels: ["Личные консультации", "Групповые занятия", "Семинары"],
            datasets: [{
                data: [29, 64, 7],
                backgroundColor: ["#5985AD", "#59ADA8", "#59AD6B"]
            }]
        },
        options: {
            responsive: true,
            legend: {
                display: true,
                position: 'right',
                labels: {
                    boxWidth: 15,
                    fontSize: 22,
                    fontColor: '#000',
                }
            }
        },
    });

    var doughnutChartByCategory = new Chart(document.getElementById("doughnutChartByCategory").getContext("2d"), {
        type: 'doughnut',
        data: {
            labels: ["Психология", "Астрология", "Коучинг"],
            datasets: [{
                data: [70, 50, 90],
                backgroundColor: ["#5985AD", "#59ADA8", "#59AD6B"]
            }]
        },
        options: {
            responsive: true,
            legend: {
                display: true,
                position: 'right',
                labels: {
                    boxWidth: 15,
                    fontSize: 22,
                    fontColor: '#000',
                }
            }
        }
    });

    $(window).resize(function () {
        console.log(window.innerWidth);
        if (window.innerWidth < 768) {
            lineChartByWorkTime.options.legend.labels.fontSize = 14;
            lineChartByWorkTime.aspectRatio = 1;
            lineChartByWorkTime.update();

            doughnutChartByType.options.legend.labels.fontSize = 14;
            doughnutChartByType.options.legend.position = 'bottom';
            doughnutChartByType.update();

            doughnutChartByCategory.options.legend.labels.fontSize = 14;
            doughnutChartByCategory.options.legend.position = 'bottom';
            doughnutChartByCategory.update();
        } else if (window.innerWidth < 1200) {
            lineChartByWorkTime.options.legend.labels.fontSize = 22;
            lineChartByWorkTime.aspectRatio = 2;
            lineChartByWorkTime.update();

            doughnutChartByType.options.legend.labels.fontSize = 22;
            doughnutChartByType.options.legend.position = 'right';
            doughnutChartByType.update();

            doughnutChartByCategory.options.legend.labels.fontSize = 22;
            doughnutChartByCategory.options.legend.position = 'right';
            doughnutChartByCategory.update();
        } else if (window.innerWidth < 1500) {
            lineChartByWorkTime.options.legend.labels.fontSize = 22;
            lineChartByWorkTime.aspectRatio = 2;
            lineChartByWorkTime.update();

            doughnutChartByType.options.legend.labels.fontSize = 22;
            doughnutChartByType.options.legend.position = 'bottom';
            doughnutChartByType.update();

            doughnutChartByCategory.options.legend.labels.fontSize = 22;
            doughnutChartByCategory.options.legend.position = 'bottom';
            doughnutChartByCategory.update();
        } else {
            lineChartByWorkTime.options.legend.labels.fontSize = 22;
            lineChartByWorkTime.aspectRatio = 2;
            lineChartByWorkTime.update();

            doughnutChartByType.options.legend.labels.fontSize = 22;
            doughnutChartByType.options.legend.position = 'right';
            doughnutChartByType.update();

            doughnutChartByCategory.options.legend.labels.fontSize = 22;
            doughnutChartByCategory.options.legend.position = 'right';
            doughnutChartByCategory.update();
        }
    });
    $(window).resize();

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