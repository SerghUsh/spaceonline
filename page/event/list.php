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
            <h1>События</h1>
            <p class="subtitle">Все ближайшие события от space online</p>
        </div>
    </div>

    <div id="event-content">
        <div class="tab-block_small">
            <div class="tab-buttons_small">
                <span data-tab-id="#tab-all" class="active">Все</span>
                <span data-tab-id="#tab-new">Новые</span>
                <span data-tab-id="#tab-video_event"><!-- Видеозаписи  -->прошедших событий</span>
            </div>
        </div>

        <section class="main-content_block">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tile-block bottom">
                            <div class="image_wrapper">
                                <a href="<?php href('event') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
                                <span class="icon-video"></span>
                                <div class="bottom_info">
                                    <span class="last_event">Прошедшее мероприятия</span>
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
                        <div class="tile-block bottom">
                            <div class="image_wrapper">
                               <a href="<?php href('event') ?>"><img src="/img/bg_name_event2.jpg" alt="image"></a>
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
                        <div class="tile-block bottom hidden">
                            <div class="image_wrapper">
                                <a href="<?php href('event') ?>"><img src="/img/bg_name_event3.jpg" alt="image"></a>
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

                </div>

                <div class="title title-center">
                    <span>сегодня</span>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="tile-block">
                            <div class="image_wrapper">
                                <a href="<?php href('event') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
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
                                <a href="<?php href('event') ?>"><img src="/img/bg_name_event2.jpg" alt="image"></a>
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
                                <a href="<?php href('event') ?>"><img src="/img/bg_name_event3.jpg" alt="image"></a>
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
                                <a href="<?php href('event') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
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
                                <a href="<?php href('event') ?>"><img src="/img/bg_name_event2.jpg" alt="image"></a>
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
                                <a href="<?php href('event') ?>"><img src="/img/bg_name_event3.jpg" alt="image"></a>
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

                </div>
            </div>
        </section>
    </div>
       
    <?php put('footer') ?>
</main>

<?php put('scripts') ?>
</body>
</html>