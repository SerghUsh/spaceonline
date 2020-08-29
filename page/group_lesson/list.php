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
            <h1>Групповые занятия</h1>
            <p class="subtitle">Все ближайшие занятия от наших специалистов</p>
        </div>
    </div>

    <div id="group_lesson-list-content">
        <div class="container-sm">
             <div class="group_lesson-filter-wrapper">
                <div class="group_lesson-filter-group">
                    <label>Сортировать по практикам:</label>
                    <select class="all_practice">
                        <option value="">Все практики</option>
                        <option value="1">Астрология</option>
                        <option value="2">Медитация</option>
                    </select>
                </div>

                <div class="group_lesson-filter-group">
                    <label>Сортировать по датам:</label>
                    <select>
                        <option value="">Ближайшие</option>
                        <option value="1">Астрология</option>
                        <option value="2">Медитация</option>
                    </select>
                </div>
            </div>
        </div>   
    </div>

    <section id="main-list_block">
        <div class="container">
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
                            <a href="<?php href('practise') ?>">Узнать больше</a>
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
                            <a href="<?php href('practise') ?>">Узнать больше</a>
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
                            <a href="<?php href('practise') ?>">Узнать больше</a>
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
                            <a href="<?php href('practise') ?>">Узнать больше</a>
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
                            <a href="<?php href('practise') ?>">Узнать больше</a>
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
                            <a href="<?php href('practise') ?>">Узнать больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <?php put('footer') ?>
</main>

<?php put('scripts') ?>
</body>
</html>