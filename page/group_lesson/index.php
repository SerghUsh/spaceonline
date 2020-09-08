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
            <h1>НАЗВАНИЕ групПового занятия</h1>
        </div>
    </div>

    <div id="open-group-lesson">
    	<div class="container">
    		<div class="top-block">
    			<div class="content-block">
	    			<h3>Название <!-- групового --> занятия</h3>
	    			<div class="image_block">
	                    <img src="/img/bg_open_group_lesson.jpg" alt="image">
	                    <div class="right_info">
	                        <span class=""><b>Тип мероприятия:</b> Груповое занятие</span>
	                        <span class=""><b>Стоимость участия:</b> 500 гривен</span>
	                        <div class="content-block-link">
	                        	<a href="#" class="heart"></a>
	                        	<a href="javascript:void(0);" class="copy clipboard" data-clipboard-text="<link>" data-tooltip-text="Ссылка скопированна"></a>
	                        </div>
	                    </div>
	                </div>
	                <p class="lesson-info">
	                   	<b>Об занятии:</b> Арт-терапия обладает исцеляющим эффектом при различных психосоматических заболеваниях, улучшает самочувствие, арт-терапевтические студии работают в больницах и реабилитационных центрах по всему миру почти уже столетие. В Москве у многих  как никогда сейчас актуальны проблемы с самочувствием - бессонница, головные боли, скачки артериального давления, проблемы с желудочно-кишечным трактом и сердечно-сосудистой системой. Если вам знакомы эти проблемы - познакомтесь с арт-терапией, может быть творчество - это именно ваше лекартство.
	                </p>
	    		</div>

	    		<div class="specialist-block">
	    			<h3 class="center">Организатор:</h3>
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
    		
    		<div class="calendar">
    			<?php put('calendar') ?>
    		</div>

            <div class="title-left-lesson">
                <span>Другие груповые занятия в этой категории</span>
            </div>

            <div class="open-group-lesson_wrapper">
                <div class="slider">
                    <div class="slider__item">
	                    <div class="tile-block">
	                        <div class="image_wrapper">
	                            <a href="<?php href('group_lesson') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
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

                    <div class="slider__item">
                         <div class="tile-block">
	                        <div class="image_wrapper">
	                            <a href="<?php href('group_lesson') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
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

                    <div class="slider__item">
                         <div class="tile-block">
	                        <div class="image_wrapper">
	                            <a href="<?php href('group_lesson') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
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

                     <div class="slider__item">
                         <div class="tile-block">
	                        <div class="image_wrapper">
	                            <a href="<?php href('group_lesson') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
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

                    <div class="slider__item">
                         <div class="tile-block">
	                        <div class="image_wrapper">
	                            <a href="<?php href('group_lesson') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
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

                    <div class="slider__item">
                        <div class="tile-block">
	                        <div class="image_wrapper">
	                            <a href="<?php href('group_lesson') ?>"><img src="/img/bg_name_event1.jpg" alt="image"></a>
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

            <div class="slider-manage-block">
                <a href="http://spaceonline/page/group_lesson/list.php" class="btn-slider btn-white">к списку занятий</a>
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