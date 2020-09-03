<?php include_once(__DIR__ . '/../../parts/bootstrap.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php put('head') ?>
</head>
<body>

<main>
    <?php put('header') ?>

    <div class="title-block">
        <div>
            <h1>АСТРОЛОГИЯ</h1>
            <p class="subtitle">
                Астрология  - это учение, согласно которому события земной жизни
                можно предсказать по расположению небесных светил.
            </p>
        </div>
    </div>

    <div id="practise-page">
        <div class="container">
            <div class="top-info">
                <img src="/img/practice_top_block.jpg" alt="image">
                <h3>Астрология</h3>
                <div class="info-text">
                    <p>
                        Зная точную дату и время рождения человека, астролог может дать чёткие расчеты того, что  ожидает человека в жизни, в какое время стоит планировать важные события, какой вид деятельности ему больше подходит, с каким партнером благоприятно строить свой союз!
                    </p>

                    <p>
                        Это не просто наука, это обширная система знаний, в которой уже более 5000 лет тесно переплетаются философия, религия, точные науки и духовные практики!
                    </p>

                    <p>
                        Древние считали, что все события в жизни человека происходят в строгих рамках космических законов, а взаимное расположение планет и звёзд в момент рождения  человека накладывает отпечаток на всю его судьбу!
                    </p>

                    <p> 
                        Все глобальные события своей жизни наши предки планировали в соответствии с небесными явлениями и все государственные дела - начало военных походов, назначение государственных деятелей, воздвижение дворцов и храмов  - строились в соответствии с астрологическими законами и правилами.
                    </p>

                    <p  class="top">
                        Великие философы и мистики такие как Гераклит, Пифагор, Платон, Сенека, Эпиктет, Марк Аврелий в своих исследованиях  отводили астрологии  главенствующее место. Они приводили доказательства согласованности между процессами во Вселенной и жизнью человека. 
                    </p>

                    <p>
                        <b>Так были созданы многие направления в астрологии:</b><br>
                        Ведическая, Практическая,  Европейская, Тибетская, Каббалистическая, Халдейская, Египетская, Классическая и многие другие!
                    </p>
                </div>
            </div>

            <div id="specialist-row">
                <div class="arrows"></div>
                <div class="specialist-list">
                    <div class="slider">
                        <div class="slider__item">
                            <span>Мария<br> Скрипаль</span>
                        </div>
                        <div class="slider__item">
                             <span>Анастасия<br> Луколь</span>
                        </div>
                        <div class="slider__item">
                            <span>Ангелина<br> Струк</span>
                        </div>
                        <div class="slider__item">
                            <span>Ольга<br> Онипова</span>
                        </div>
                        <div class="slider__item">
                            <span>Мария<br> Скрипаль</span>
                        </div>
                        <div class="slider__item">
                             <span>Анастасия<br> Луколь</span>
                        </div>
                       <div class="slider__item">
                           <span>Ангелина<br> Струк</span>
                       </div>
                        
                    </div>
                </div>
            </div>

            <div class="calendar">
                <?php put('calendar') ?>
            </div> 

            <div class="title title-left">
                <span>НАШИ СПЕЦИАЛИСТЫ В АСТРОЛОГИИ</span>
            </div>

            <div id="specialist-slider">
                <div class="slider">
                    <div class="slider__item">
                        <div class="specialist-tile">
                            <div class="specialist-info">
                                <div class="specialist-image-block">
                                    <div class="specialist-image-wrapper">
                                        <img src="/img/specialist.jpg" alt="specialist">
                                    </div>
                                    <div class="circle"></div>
                                </div>

                                <div class="specialist-name">
                                                Мария Скрипаль
                                </div>

                                <div class="specialist-type">
                                    Психолог
                                </div>

                                <p class="specialist-description">
                                    В работе я занимаюсь проработкой травм,
                                    развитием личности и образованием, в
                                    зависимости от того, что запрашивает
                                    клиент. Другими словами я сопровождаю,
                                    помогаю и обучаю.
                                </p>

                                <small class="specialist-experience">
                                    - 4 года
                                </small>

                                <p class="specialist-direction">
                                    Категории: Детская психология,
                                    Гештальт-терапия, Позитивная терапия...
                                </p>
                            </div>

                            <div class="specialist-calendar">
                                <a href="<?php href('specialist') ?>">календарь специалиста</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
                        <div class="specialist-tile">
                            <div class="specialist-info">
                                <div class="specialist-image-block">
                                    <div class="specialist-image-wrapper">
                                        <img src="/img/specialist.jpg" alt="specialist">
                                    </div>
                                    <div class="circle"></div>
                                </div>

                                <div class="specialist-name">
                                                Мария Скрипаль
                                </div>

                                <div class="specialist-type">
                                    Психолог
                                </div>

                                <p class="specialist-description">
                                    В работе я занимаюсь проработкой травм,
                                    развитием личности и образованием, в
                                    зависимости от того, что запрашивает
                                    клиент. Другими словами я сопровождаю,
                                    помогаю и обучаю.
                                </p>

                                <small class="specialist-experience">
                                    - 4 года
                                </small>

                                <p class="specialist-direction">
                                    Категории: Детская психология,
                                    Гештальт-терапия, Позитивная терапия...
                                </p>
                            </div>

                            <div class="specialist-calendar">
                                <a href="<?php href('specialist') ?>">календарь специалиста</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
                        <div class="specialist-tile">
                            <div class="specialist-info">
                                <div class="specialist-image-block">
                                    <div class="specialist-image-wrapper">
                                        <img src="/img/specialist.jpg" alt="specialist">
                                    </div>
                                    <div class="circle"></div>
                                </div>

                                <div class="specialist-name">
                                                Мария Скрипаль
                                </div>

                                <div class="specialist-type">
                                    Психолог
                                </div>

                                <p class="specialist-description">
                                    В работе я занимаюсь проработкой травм,
                                    развитием личности и образованием, в
                                    зависимости от того, что запрашивает
                                    клиент. Другими словами я сопровождаю,
                                    помогаю и обучаю.
                                </p>

                                <small class="specialist-experience">
                                    - 4 года
                                </small>

                                <p class="specialist-direction">
                                    Категории: Детская психология,
                                    Гештальт-терапия, Позитивная терапия...
                                </p>
                            </div>

                            <div class="specialist-calendar">
                                <a href="<?php href('specialist') ?>">календарь специалиста</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
                        <div class="specialist-tile">
                            <div class="specialist-info">
                                <div class="specialist-image-block">
                                    <div class="specialist-image-wrapper">
                                        <img src="/img/specialist.jpg" alt="specialist">
                                    </div>
                                    <div class="circle"></div>
                                </div>

                                <div class="specialist-name">
                                                Мария Скрипаль
                                </div>

                                <div class="specialist-type">
                                    Психолог
                                </div>

                                <p class="specialist-description">
                                    В работе я занимаюсь проработкой травм,
                                    развитием личности и образованием, в
                                    зависимости от того, что запрашивает
                                    клиент. Другими словами я сопровождаю,
                                    помогаю и обучаю.
                                </p>

                                <small class="specialist-experience">
                                    - 4 года
                                </small>

                                <p class="specialist-direction">
                                    Категории: Детская психология,
                                    Гештальт-терапия, Позитивная терапия...
                                </p>
                            </div>

                            <div class="specialist-calendar">
                                <a href="<?php href('specialist') ?>">календарь специалиста</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
                        <div class="specialist-tile">
                            <div class="specialist-info">
                                <div class="specialist-image-block">
                                    <div class="specialist-image-wrapper">
                                        <img src="/img/specialist.jpg" alt="specialist">
                                    </div>
                                    <div class="circle"></div>
                                </div>

                                <div class="specialist-name">
                                                Мария Скрипаль
                                </div>

                                <div class="specialist-type">
                                    Психолог
                                </div>

                                <p class="specialist-description">
                                    В работе я занимаюсь проработкой травм,
                                    развитием личности и образованием, в
                                    зависимости от того, что запрашивает
                                    клиент. Другими словами я сопровождаю,
                                    помогаю и обучаю.
                                </p>

                                <small class="specialist-experience">
                                    - 4 года
                                </small>

                                <p class="specialist-direction">
                                    Категории: Детская психология,
                                    Гештальт-терапия, Позитивная терапия...
                                </p>
                            </div>

                            <div class="specialist-calendar">
                                <a href="<?php href('specialist') ?>">календарь специалиста</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
                        <div class="specialist-tile">
                            <div class="specialist-info">
                                <div class="specialist-image-block">
                                    <div class="specialist-image-wrapper">
                                        <img src="/img/specialist.jpg" alt="specialist">
                                    </div>
                                    <div class="circle"></div>
                                </div>

                                <div class="specialist-name">
                                                Мария Скрипаль
                                </div>

                                <div class="specialist-type">
                                    Психолог
                                </div>

                                <p class="specialist-description">
                                    В работе я занимаюсь проработкой травм,
                                    развитием личности и образованием, в
                                    зависимости от того, что запрашивает
                                    клиент. Другими словами я сопровождаю,
                                    помогаю и обучаю.
                                </p>

                                <small class="specialist-experience">
                                    - 4 года
                                </small>

                                <p class="specialist-direction">
                                    Категории: Детская психология,
                                    Гештальт-терапия, Позитивная терапия...
                                </p>
                            </div>

                            <div class="specialist-calendar">
                                <a href="<?php href('specialist') ?>">календарь специалиста</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-manage-block">
                    <a href="#" class="btn-slider btn-white">к специалистам</a>
                    <div class="arrows"></div>
                    <div class="dots"></div>
                </div>   
            </div>

            <div class="title title-left">
                <span>Вам так же могут быть интересны ГРУПОВЫЕ ЗАНЯТИя</span>
            </div>

            <div id="open-group-lesson">
                <div class="slider">
                    <div class="slider__item">
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
                                <a href="<?php href('practise') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
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
                                <a href="<?php href('practise') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
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
                                <a href="<?php href('practise') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                     <div class="slider__item">
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
                                <a href="<?php href('practise') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
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
                                <a href="<?php href('practise') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
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
                                <a href="<?php href('practise') ?>">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-manage-block">
                    <a href="#" class="btn-slider btn-white">к списку занятий</a>
                    <div class="arrows"></div>
                    <div class="dots"></div>
                </div>
            </div>

            
        </div>
    </div>

    <?php put('footer') ?>
</main>

<?php put('scripts') ?>
</body>
</html>