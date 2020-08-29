$(document).ready(function () {
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

    /* CALENDAR */

    // jquery wrapper
    // register templates
    function _date(date) {
        var dateObj = new Date(date);
        var dateString = dateObj.toISOString();
        //var dateString = moment(date).format('YYYY.MM.DD hh:mm a')
        // YYYY.MM.DD hh:mm a
        console.log(date, dateString);
        // Contents of above date object is converted
        // into a string using toISOString() function.
        return dateString;
    }

    var $calEl = $('#calendar').tuiCalendar({
        defaultView: 'week',
        taskView: false,
        week: {
            startDayOfWeek: 1,  //  [ number ] = 0 The start day of week,
            daynames: [
                'Воскресение',
                'Понедельник',
                'Вторник',
                'Среда',
                'Четверг',
                'Пятница',
                'Суббота',
            ],  // [ Array ] The day names in weekly and daily. Default values are 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
            // narrowWeekend: '',  // [ boolean ] = false Make weekend column narrow(1/2 width)
            // workweek: '',  // [ boolean ] = false Show only 5 days except for weekend
            // showTimezoneCollapseButton: '',  // [ boolean ] = false Show a collapse button to close multiple timezones
            // timezonesCollapsed: '',  // [ boolean ] = false An initial multiple timezones collapsed state
            hourStart: 7,  // [ number ] = 0 Can limit of render hour start.
            hourEnd: 19,  // number ] = 24 Can limit of render hour end.
        },
        scheduleView: ['time'],
        useCreationPopup: true,
        useDetailPopup: true,
        isReadOnly: false,
        calendars: [
            {
                id: '1',
                name: 'Личная консультация',
                color: '#ffffff',
                bgColor: '#5985AD',
                dragBgColor: '#5985AD',
                borderColor: '#5985AD'
            },
            {
                id: '2',
                name: 'Групповое занятие',
                color: '#ffffff',
                bgColor: '#59ADA8',
                dragBgColor: '#59ADA8',
                borderColor: '#59ADA8'
            },
            {
                id: '3',
                name: 'Событие',
                color: '#ffffff',
                bgColor: '#59AD6B',
                dragBgColor: '#59AD6B',
                borderColor: '#59AD6B'
            },
        ],
        template: {
            milestone: function(schedule) {
                return '<span class="calendar-font-icon ic-milestone-b"></span> <span style="background-color: ' + schedule.bgColor + '">' + schedule.title + '</span>';
            },
            milestoneTitle: function() {
                return '<span class="tui-full-calendar-left-content">MILESTONE</span>';
            },
            task: function(schedule) {
                return '#' + schedule.title;
            },
            taskTitle: function() {
                return '<span class="tui-full-calendar-left-content">TASK</span>';
            },
            allday: function(schedule) {
                return getTimeTemplate(schedule, true);
            },
            alldayTitle: function() {
                return '<span class="tui-full-calendar-left-content">ALL DAY</span>';
            },
            time: function(schedule) {
                return moment(schedule.start.getTime()).format('HH:mm') + '-' +
                    moment(schedule.end.getTime()).format('HH:mm') + '<br>' +
                    schedule.title + '<br>' +
                    '<button type="button" onclick="pay(event, ' + schedule.id + ')">Оплатить</button>';
            },
            goingDuration: function(schedule) {
                return '<span class="calendar-icon ic-travel-time"></span>' + schedule.goingDuration + 'min.';
            },
            comingDuration: function(schedule) {
                return '<span class="calendar-icon ic-travel-time"></span>' + schedule.comingDuration + 'min.';
            },
            monthMoreTitleDate: function(date, dayname) {
                var day = date.split('.')[2];

                return '<span class="tui-full-calendar-month-more-title-day">' + day + '</span> <span class="tui-full-calendar-month-more-title-day-label">' + dayname + '</span>';
            },
            monthMoreClose: function() {
                return '<span class="tui-full-calendar-icon tui-full-calendar-ic-close"></span>';
            },
            monthGridHeader: function(dayModel) {
                var date = parseInt(dayModel.date.split('-')[2], 10);
                var classNames = ['tui-full-calendar-weekday-grid-date '];

                if (dayModel.isToday) {
                    classNames.push('tui-full-calendar-weekday-grid-date-decorator');
                }

                return '<span class="' + classNames.join(' ') + '">' + date + '</span>';
            },
            monthGridHeaderExceed: function(hiddenSchedules) {
                return '<span class="weekday-grid-more-schedules">+' + hiddenSchedules + '</span>';
            },
            monthGridFooter: function() {
                return '';
            },
            monthGridFooterExceed: function(hiddenSchedules) {
                return '';
            },
            monthDayname: function(model) {
                return (model.label).toString().toLocaleUpperCase();
            },
            weekDayname: function(model) {
                return '<span class="tui-full-calendar-dayname-date">' + model.date + '</span>&nbsp;&nbsp;<span class="tui-full-calendar-dayname-name">' + model.dayName + '</span>';
            },
            weekGridFooterExceed: function(hiddenSchedules) {
                return '+' + hiddenSchedules;
            },
            dayGridTitle: function(viewName) {

                // use another functions instead of 'dayGridTitle'
                // milestoneTitle: function() {...}
                // taskTitle: function() {...}
                // alldayTitle: function() {...}

                var title = '';
                switch(viewName) {
                    case 'milestone':
                        title = '<span class="tui-full-calendar-left-content">MILESTONE</span>';
                        break;
                    case 'task':
                        title = '<span class="tui-full-calendar-left-content">TASK</span>';
                        break;
                    case 'allday':
                        title = '<span class="tui-full-calendar-left-content">ALL DAY</span>';
                        break;
                }

                return title;
            },
            schedule: function(schedule) {

                // use another functions instead of 'schedule'
                // milestone: function() {...}
                // task: function() {...}
                // allday: function() {...}

                var tpl;

                switch(category) {
                    case 'milestone':
                        tpl = '<span class="calendar-font-icon ic-milestone-b"></span> <span style="background-color: ' + schedule.bgColor + '">' + schedule.title + '</span>';
                        break;
                    case 'task':
                        tpl = '#' + schedule.title;
                        break;
                    case 'allday':
                        tpl = getTimeTemplate(schedule, true);
                        break;
                }

                return tpl;
            },
            collapseBtnTitle: function() {
                return '<span class="tui-full-calendar-icon tui-full-calendar-ic-arrow-solid-top"></span>';
            },
            timegridDisplayPrimaryTime: function(time) {
                return time.hour+':00';
            },
            //timezoneDisplayLabel: function(timezoneOffset, displayLabel) {
            //    var gmt, hour, minutes;
//
            //    if (!displayLabel) {
            //        gmt = timezoneOffset < 0 ? '-' : '+';
            //        hour = Math.abs(parseInt(timezoneOffset / 60, 10));
            //        minutes = Math.abs(timezoneOffset % 60);
            //        displayLabel = gmt + getPadStart(hour) + ':' + getPadStart(minutes);
            //    }
//
            //    return displayLabel;
            //},
            //timegridDisplayPrimayTime: function(time) {
            //    // will be deprecated. use 'timegridDisplayPrimaryTime'
            //    var meridiem = 'am';
            //    var hour = time.hour;
//
            //    if (time.hour > 12) {
            //        meridiem = 'pm';
            //        hour = time.hour - 12;
            //    }
//
            //    return hour + ' ' + meridiem;
            //},
            //timegridDisplayPrimaryTime: function(time) {
            //    var meridiem = 'am';
            //    var hour = time.hour;
//
            //    if (time.hour > 12) {
            //        meridiem = 'pm';
            //        hour = time.hour - 12;
            //    }
//
            //    return hour + ' ' + meridiem;
            //},
            //timegridDisplayTime: function(time) {
            //    return getPadStart(time.hour) + ':' + getPadStart(time.hour);
            //},
            //timegridCurrentTime: function(timezone) {
            //    var templates = [];
//
            //    if (timezone.dateDifference) {
            //        templates.push('[' + timezone.dateDifferenceSign + timezone.dateDifference + ']<br>');
            //    }
            //    // DOTO add moment
            //    /!*templates.push(moment(timezone.hourmarker).format('HH:mm a'));*!/
//
            //    return templates.join('');
            //},
            popupIsAllDay: function() {
                return 'Весь день';
            },
            popupStateFree: function() {
                return 'Свободно';
            },
            popupStateBusy: function() {
                return 'Занято';
            },
            titlePlaceholder: function() {
                return 'Тема';
            },
            locationPlaceholder: function() {
                return 'Локация';
            },
            startDatePlaceholder: function() {
                return 'Дата начала';
            },
            endDatePlaceholder: function() {
                return 'Дата окончания';
            },
            popupSave: function() {
                return 'Сохранить';
            },
            popupUpdate: function() {
                return 'Обновить';
            },
            popupDetailDate: function(isAllDay, start, end) {
                var isSameDate = moment(start).isSame(end);
                var endFormat = (isSameDate ? '' : 'YYYY.MM.DD ') + 'hh:mm a';

                if (isAllDay) {
                    return moment(start).format('YYYY.MM.DD') + (isSameDate ? '' : ' - ' + moment(end).format('YYYY.MM.DD'));
                }

                return (moment(start).format('YYYY.MM.DD hh:mm a') + ' - ' + moment(end).format(endFormat));
            },
            popupDetailLocation: function(schedule) {
                return 'Локация : ' + schedule.location;
            },
            popupDetailUser: function(schedule) {
                return 'Пользователь : ' + (schedule.attendees || []).join(', ');
            },
            popupDetailState: function(schedule) {
                return 'Состояние : ' + schedule.state || 'Занято';
            },
            popupDetailRepeat: function(schedule) {
                return 'Повторить : ' + schedule.recurrenceRule;
            },
            popupDetailBody: function(schedule) {
                return 'Тело : ' + schedule.body + 'test';
            },
            popupEdit: function() {
                return 'Редактировать';
            },
            popupDelete: function() {
                return 'Удалить';
            }
        }
    });

    // You can get calendar instance
    var calendarInstance = $calEl.data('tuiCalendar');

    /*
    {
        id: 1, // [ string ] The unique schedule id depends on calendar id
        calendarId: '1', // [ string ] The unique calendar id
        title: 'Личная консультация', // [ string ] The schedule title
        body: 'Личная консультация',  // [ string ] The schedule body text which is text/plain
        start: _date('2020-08-30 14:35:32'),  // [stringTZDate] The start time. It's 'string' for input. It's 'TZDate' for output like event handler.
        end: _date('2020-08-30 16:35:32'),  // [stringTZDate] The end time. It's 'string' for input. It's 'TZDate' for output like event handler.
        //goingDuration: 0,  // [number] The travel time: Going duration minutes
        //comingDuration: 0,  // [number] The travel time: Coming duration minutes
        isAllDay: false,  // [boolean] The all day schedule
        category: 'time',  // [string] The schedule type('milestone', 'task', allday', 'time')
        dueDateClass: '',  // [string] The task schedule type string (any string value is ok and mandatory if category is 'task')
        location: '',  // [string] The location
        attendees: [],  // [Array] The attendees
        recurrenceRule: '',  // [string] The recurrence rule
        isPending: false,  // [boolean] The in progress flag to do something like network job(The schedule will be transparent.)
        isFocused: false,  // [boolean] The focused schedule flag
        isVisible: true,  // [boolean] The schedule visibility flag
        isReadOnly: false,  // [boolean] The schedule read-only flag
        isPrivate: false,  // [boolean] The private schedule
        color: '',  // [string] The schedule text color
        bgColor: '',  // [string] The schedule background color
        dragBgColor: '',  // [string] The schedule background color when dragging it
        borderColor: '',  // [string] The schedule left border color
        customStyle: '',  // [string] The schedule's custom css class
        raw: '',  // [any] The user data
        state: 'busy'  // [string] The schedule's state ('busy', 'free')
    }
    */

    // https://github.com/nhn/tui.calendar/blob/master/docs/getting-started.md#usage
    calendarInstance.createSchedules([
        {
            id: '1',
            calendarId: '1',
            title: 'Личная консультация',
            category: 'time',
            dueDateClass: '',
            start: '2020-08-30T10:30:00+02:00',
            end: '2020-08-30T12:30:00+02:00'
        },
        {
            id: '2',
            calendarId: '2',
            title: 'Групповое занятие',
            category: 'time',
            dueDateClass: '',
            start: '2020-08-30T14:30:00+02:00',
            end: '2020-08-30T15:00:00+02:00',
            isReadOnly: true    // schedule is read-only
        },
        {
            id: '3',
            calendarId: '3',
            title: 'Событие',
            category: 'time',
            dueDateClass: '',
            start: '2020-08-30T16:00:00+02:00',
            end: '2020-08-30T18:00:00+02:00',
            isReadOnly: true    // schedule is read-only
        }
    ]);

    /*
    Update a schedule
    calendar.updateSchedule(schedule.id, schedule.calendarId, {
        start: startTime,
        end: endTime
    });
    Delete a schedule
    calendar.deleteSchedule(schedule.id, schedule.calendarId);
    */

    $('#calendar-menu .today').on('click', function () {
        calendarInstance.today();
    });
    $('#calendar-menu .prev').on('click', function () {
        calendarInstance.prev();
    });
    $('#calendar-menu .next').on('click', function () {
        calendarInstance.next();
    });

    calendarInstance.on('beforeCreateSchedule', function(event) {
        console.log(event);
        var triggerEventName = event.triggerEventName;

        /*if (triggerEventName === 'click') {
            // open writing simple schedule popup
            schedule = {...};
        } else if (triggerEventName === 'dblclick') {
            // open writing detail schedule popup
            schedule = {...};
        }*/

        calendarInstance.createSchedules([{
            id: 10,
            calendarId: event.calendarId,
            title: event.title,
            category: 'time',
            dueDateClass: '',
            start: event.start,
            end: event.end,
        }]);
    });

    calendarInstance.on('beforeUpdateSchedule', function(event) {
        var schedule = event.schedule;
        var changes = event.changes;

        calendarInstance.updateSchedule(schedule.id, schedule.calendarId, changes);
    });

    calendarInstance.on('beforeDeleteSchedule', function(event) {
        var schedule = event.schedule;
        calendarInstance.deleteSchedule(schedule.id, schedule.calendarId);
    });

    calendarInstance.on('clickSchedule', function(event) {
        var schedule = event.schedule;
        console.log('clickSchedule', schedule);
        lastClickSchedule = schedule;
        // focus the schedule
        /* if (lastClickSchedule) {
             calendarInstance.updateSchedule(lastClickSchedule.id, lastClickSchedule.calendarId, {
                 isFocused: false
             });
         }
         calendarInstance.updateSchedule(schedule.id, schedule.calendarId, {
             isFocused: true
         });*/



        // open detail view
    });
});

function pay(event, id) {
    console.log(event, id);
}
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