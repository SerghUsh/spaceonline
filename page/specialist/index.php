<?php include_once(__DIR__ . '/../../parts/bootstrap.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php put('head') ?>
</head>
<body>

<main>
    <?php put('header') ?>

    <div id="specialist-content">
        <div class="specialist-header">
            <div class="container">
                <div class="specialist-header-row clearfix">
                    <div class="specialist-image-column">
                        <div class="specialist-image-block">
                            <div class="specialist-image-wrapper">
                                <img src="/img/specialist.jpg" alt="specialist">
                            </div>
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="specialist-info-column">
                        <div class="specialist-type-experience">
                            <span class="type">Психолог</span>

                            <span class="dot">•</span>

                            <span class="experience">4 года</span>
                        </div>

                        <div class="specialist-name">
                            Мария Скрипаль
                        </div>

                        <div class="specialist-link">
                            <a href="#" class="heart"></a>
                            <a href="#" class="instagram"></a>
                            <a href="#" class="facebook"></a>
                            <a href="javascript:void(0);" class="copy clipboard tooltip" data-clipboard-text="<link>" data-tooltip-text="Ссылка скопированна"></a>
                        </div>

                        <p class="specialist-description">
                            В работе я занимаюсь проработкой травм,
                            развитием личности и образованием, в
                            зависимости от того, что запрашивает
                            клиент. Другими словами я сопровождаю,
                            помогаю и обучаю.
                        </p>

                        <p class="specialist-direction">
                            <b>Категории:</b> Детская психология, Гештальт-терапия, Позитивная терапия.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-block">
            <div class="tab-buttons">
                <span data-tab-id="#tab-calendar">Календарь</span>
                <span data-tab-id="#tab-group">Групповые занятия</span>
                <span data-tab-id="#tab-info">Об специалисте</span>
                <span data-tab-id="#tab-achievement" class="active">Дипломы и грамоты</span>
                <span data-tab-id="#tab-event">События</span>
            </div>
        </div>

        <div class="container">
            <div id="tab-calendar" class="tab tab-calendar">
                <p class="description">
                    <b>Условия записи:</b> Запись к данному специалисту осуществляется
                    при наличии заполненной анкеты и не ранее двух недель. После
                    оплаты на ваш почтовый адресс будет выслана анкета, которую
                    необходимо заполнить и отправить на наш почтовый адресс.
                </p>

                <?php put('calendar') ?>
            </div>

            <div id="tab-group" class="tab tab-group">
                <div class="row">
                    <div class="col">
                         <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="lesson_name">Медитация</span>
                                </div>
                            </div>
                            
                            <h2>Название занятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('group_lesson') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                         <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="lesson_name">Медитация</span>
                                </div>
                            </div>
                            
                            <h2>Название занятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('group_lesson') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                         <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="lesson_name">Медитация</span>
                                </div>
                            </div>
                            
                            <h2>Название занятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('group_lesson') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                         <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="lesson_name">Медитация</span>
                                </div>
                            </div>
                            
                            <h2>Название занятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('group_lesson') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                         <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="lesson_name">Медитация</span>
                                </div>
                            </div>
                            
                            <h2>Название занятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('group_lesson') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                         <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="lesson_name">Медитация</span>
                                </div>
                            </div>
                            
                            <h2>Название занятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('group_lesson') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

            <div id="tab-info" class="tab tab-info">
                <h4>
                    <b>Мария Скрипаль</b> - психотерапевт, спортивный коуч
                </h4>

                <p>
                    Психотерапевт. Специалист в области гештальт-терапии. Специализируется на
                    проблемах межличностного общения и разрешении конфликтов. Сертифицированный
                    коуч. Спортивный коуч. Работает со спортсменами и спортивными командами.
                    Организатор Образовательного проекта для психологов «ПСИКОН». Марие 35 лет,
                    из которых она 12 лет работает психологом и психотерапевтом.
                </p>

                <h5>Образование:</h5>
                <p>
                    2001–2006 гг. — Киевский Национальный Университет имени Тараса Шевченко (психолог, преподаватель
                    психологии).<br>
                </p>

                <h5>Дополнительное образование:</h5>
                <p>2001–2006 гг. — Киевский Национальный Университет имени Тараса Шевченко (психолог, преподаватель
                    психологии).</p>
                <p>2010 г — Авторский семинар Леонтьева Д. А. (МГУ и Институт экзистенциальной психологии и
                    жизнетворчества) «Открытие экзистенциального опыта»</p>
                <p>2009 г. — Московский Центр Феноменологических Исследований (программа — «Универсальное
                    Лидерство»)</p>
                <p>2013 г. — Курс лекций по психоанализу (Машовец М. Д. Восточно — Европейский институт
                    психоанализа)</p>
                <p>2014 г. — Проект Виктора Кагана «Ремесло психотерапии» (2014)</p>
                <p>2015 г. — International Coaching Community (ICC)</p>
                <p>2017 г. — International Coaching Fediration/ICP Centre Moscow / Программа «Коучинг в спорте»</p>
                <p>2018 г. — Семинар «Отношения любви. Норма и патология» (Отто Кернберг) 2018 г.</p>
                <p>2019 г. — Киевский Гештальт Университет. Обучение в проекте подготовки супервизоров</p>
            </div>

            <div id="tab-achievement" class="tab tab-achievement active">
                <div id="achievement-slider" class="achievement-slider">
                    <div class="slider">
                        <div class="slider__item">
                            <img src="/img/diploma.jpg" alt="diploma">
                            <h2>Название сертификата или грамоты</h2>
                            <p>
                                Психотерапевт. Специалист в области гештальт-терапии. Специализируется
                                на проблемах межличностного общения и разрешении конфликтов. Сертифицированный
                                коуч. Спортивный коуч. Работает со спортсменами и спортивными командами.
                                Организатор Образовательного проекта для психологов «ПСИКОН». Марие 35 лет,
                                из которых она 12 лет работает психологом и психотерапевтом.
                            </p>
                        </div>

                        <div class="slider__item">
                            <img src="/img/diploma.jpg" alt="diploma">
                            <h2>Название сертификата или грамоты</h2>
                            <p>
                                Психотерапевт. Специалист в области гештальт-терапии. Специализируется
                                на проблемах межличностного общения и разрешении конфликтов. Сертифицированный
                                коуч. Спортивный коуч. Работает со спортсменами и спортивными командами.
                                Организатор Образовательного проекта для психологов «ПСИКОН». Марие 35 лет,
                                из которых она 12 лет работает психологом и психотерапевтом.
                            </p>
                        </div>
                    </div>

                    <div class="slider-manage-block">
                        <div class="arrows"></div>
                        <div class="dots"></div>
                    </div>
                </div>
            </div>

            <div id="tab-event" class="tab tab-event">
                <div class="row">
                    <div class="col">
                        <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="free_place">3/20</span>
                                    <span class="date">21/06/2020</span>
                                </div>
                            </div>
                            
                            <h2>Название мероприятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('event') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="free_place">3/20</span>
                                    <span class="date">21/06/2020</span>
                                </div>
                            </div>
                            
                            <h2>Название мероприятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('event') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <div class="bottom_info">
                                    <span class="free_place">3/20</span>
                                    <span class="date">21/06/2020</span>
                                </div>
                            </div>
                            
                            <h2>Название мероприятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('event') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <span class="icon-video"></span>
                                <div class="bottom_info">
                                    <span class="last_event">Прошедшее мерооприятия</span>
                                    <span class="date">21/06/2020</span>
                                </div>
                            </div>
                            
                            <h2>Название мероприятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('event') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <span class="icon-video"></span>
                                <div class="bottom_info">
                                    <span class="last_event">Прошедшее мерооприятия</span>
                                    <span class="date">21/06/2020</span>
                                </div>
                            </div>
                            
                            <h2>Название мероприятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('event') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="tile-block">
                            <div class="image_wrapper">
                                <img src="/img/bg_name_event1.jpg" alt="image">
                                <span class="icon-video"></span>
                                <div class="bottom_info">
                                    <span class="last_event">Прошедшее мерооприятия</span>
                                    <span class="date">21/06/2020</span>
                                </div>
                            </div>
                            
                            <h2>Название мероприятия</h2> 
                            <p class="duration">Длительность: 1 час 20 минут</p>  
                            <div class="description-block">
                                <p>
                                    Улучши свое душевное равновесие. С лучшим специалистом
                                    Екатериной. Всего за полтора часа, ты сможешь погрузиться
                                    внутрь себя и найти в себе гармонию...
                                </p>
                                <a href="<?php href('practise') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php put('footer') ?>
</main>

<?php put('scripts') ?>
</body>
</html>