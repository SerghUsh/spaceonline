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
            <h1>Личный кабинет</h1>
            <p class="subtitle">Главная</p>
        </div>
    </div>

    <div id="account-content">
        <div class="container clearfix">
            <div class="account-menu-block">
                <h4 class="account-title">Личный кабинет</h4>

                <div class="account-info">
                    <div class="specialist-image-block">
                        <div class="specialist-image-wrapper">
                            <img src="/img/specialist.jpg" alt="specialist">
                        </div>
                        <div class="circle"></div>
                    </div>

                    <div class="account-name">
                        Ирина Гoгуль
                    </div>

                    <div class="account-type">
                        Психолог
                    </div>

                    <div class="account-menu tab-buttons clearfix">
                        <div class="account-menu-col">
                            <div class="item account-meeting">
                                <a class="active" href="#" data-tab-id="#tab-meeting">Видеоконференция</a>
                            </div>
                            <div class="item account-registrations">
                                <a href="#" data-tab-id="#tab-registrations">Мои регистрации</a>
                            </div>
                            <div class="item account-calendar">
                                <a href="#" data-tab-id="#tab-calendar">Мой календарь</a>
                            </div>
                            <div class="item account-favorites">
                                <a href="#" data-tab-id="#tab-favorites">Избранные</a>
                            </div>
                            <div class="item account-profile">
                                <a href="#" data-tab-id="#tab-profile">Мой профиль</a>
                            </div>
                        </div>

                        <div class="account-menu-col">
                            <div class="item account-profinfo">
                                <a href="#" data-tab-id="#tab-profinfo">Проф. инфо</a>
                            </div>
                            <div class="item account-statistic">
                                <a href="#" data-tab-id="#tab-statistic">Статистика занятий</a>
                            </div>
                            <div class="item account-settings">
                                <a href="#" data-tab-id="#tab-settings">Настройки</a>
                            </div>
                            <div class="item account-logout">
                                <a href="#">Выйти</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="account-info">
                    <b class="text">
                        Стань частью команды<br>
                        Space Online
                    </b>
                    <a href="#" class="btn btn-green">Стать специалистом</a>
                </div>
            </div>

            <div class="account-tabs-block">
                <div id="tab-meeting" class="tab">
                    <h4 class="account-title">Личная консультация с Ириной Гогуль</h4>

                    <a href="<?php href('specialist') ?>" class="btn btn-white btn-meeting">К специалисту</a>

                    <span class="account-subtitle">22/06/2020 - 14:30 - 15:30</span>

                    <div class="meeting-wrapper">
                        <img src="/img/meeting.jpg" alt="meeting" style="width: 100%">
                    </div>

                    <div class="instruction-block">
                        <p>
                            <b>Инструкция:</b> Арт-терапия обладает исцеляющим эффектом при различных психосоматических
                            заболеваниях, улучшает самочувствие, арт-терапевтические студии работают в больницах
                            и реабилитационных центрах по всему миру почти уже столетие. В Москве у многих  как
                            никогда сейчас актуальны проблемы с самочувствием - бессонница, головные боли, скачки
                            артериального давления, проблемы с желудочно-кишечным трактом и сердечно-сосудистой
                            системой. Если вам знакомы эти проблемы - познакомтесь с арт-терапией, может быть
                            творчество - это именно ваше лекартство.
                        </p>

                        <p>
                            Арт-терапия обладает исцеляющим эффектом при различных психосоматических заболеваниях,
                            улучшает самочувствие, арт-терапевтические студии работают в больницах и реабилитационных
                            центрах по всему миру почти уже столетие.
                        </p>
                    </div>
                </div>

                <div id="tab-registrations" class="tab">
                    <h4 class="account-title">Мои регистрации</h4>

                    <div data-container-id="#filter-container-registrations" class="filter-menu tab-buttons">
                        <a href="#" data-filter="" class="active" >Все</a>
                        <a href="#" data-filter="privat">Личные консультации</a>
                        <a href="#" data-filter="group">Груповые занятия</a>
                        <a href="#" data-filter="event">События</a>
                    </div>

                    <div id="filter-container-registrations">
                        <div class="event-block privat">
                            <div class="event-date-block">
                                <span>24/07/2019</span>
                                <span>09:00 - 10:30</span>
                            </div>

                            <div class="event-info-block">
                                <span>Личная консультация - Психология</span>
                                <span>Статус: Оплачено</span>
                            </div>

                            <div class="event-actions-block">
                                <span>Подключение за 15 минут до начала</span>
                            </div>
                        </div>

                        <div class="event-block event">
                            <div class="event-date-block">
                                <span>24/07/2019</span>
                                <span>09:00 - 10:30</span>
                            </div>

                            <div class="event-info-block">
                                <span>Занятие - Арт терапия</span>
                                <span>Статус: Оплачено</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-teal">Перейти</a>
                                <a href="<?php href('account', 'video');?>" class="btn btn-green">Подключиться</a>
                            </div>
                        </div>

                        <div class="event-block event">
                            <div class="event-date-block">
                                <span>24/07/2019</span>
                                <span>09:00 - 10:30</span>
                            </div>

                            <div class="event-info-block">
                                <span>Занятие - Арт терапия</span>
                                <span>Статус: Оплачено</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-teal">Перейти</a>
                                <a href="<?php href('account', 'video');?>" class="btn btn-green">Подключиться</a>
                            </div>
                        </div>

                        <div class="event-block group">
                            <div class="event-date-block">
                                <span>24/07/2019</span>
                                <span>09:00 - 10:30</span>
                            </div>

                            <div class="event-info-block">
                                <span>Событие - Название события</span>
                                <span>Статус: Оплачено</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-teal">Перейти</a>
                                <a href="<?php href('account', 'video');?>" class="btn btn-green">Подключиться</a>
                            </div>
                        </div>

                        <div class="event-block group">
                            <div class="event-date-block">
                                <span>24/07/2019</span>
                                <span>09:00 - 10:30</span>
                            </div>

                            <div class="event-info-block">
                                <span>Событие - Название события</span>
                                <span>Статус: Оплачено</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-teal">Перейти</a>
                                <a href="<?php href('account', 'video');?>" class="btn btn-green ">Подключиться</a>
                            </div>
                        </div>

                        <div class="event-block group">
                            <div class="event-date-block">
                                <span>24/07/2019</span>
                                <span>09:00 - 10:30</span>
                            </div>

                            <div class="event-info-block">
                                <span>Событие - Название события</span>
                                <span>Статус: Оплачено</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-teal">Перейти</a>
                                <a href="<?php href('account', 'video');?>" class="btn btn-green ">Подключиться</a>
                            </div>
                        </div>

                        <div class="event-block privat">
                            <div class="event-image-block">
                                <div class="image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                            </div>

                            <div class="event-info-block">
                                <span><b>Алена струк</b></span>
                                <span>Психолог</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-white">Перейти</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-calendar" class="tab">
                    <h4 class="account-title">Мой Календарь</h4>

                    <?php put('calendar') ?>
                </div>

                <div id="tab-favorites" class="tab">
                    <h4 class="account-title">Избранные</h4>

                    <div data-container-id="#filter-container-favorites" class="filter-menu tab-buttons">
                        <a href="#" data-filter="" class="active" >Все</a>
                        <a href="#" data-filter="privat">Личные консультации</a>
                        <a href="#" data-filter="group">Груповые занятия</a>
                        <a href="#" data-filter="event">События</a>
                    </div>

                    <div id="filter-container-favorites">
                        <div class="event-block privat">
                            <div class="event-image-block">
                                <div class="image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                            </div>

                            <div class="event-info-block">
                                <span><b>Алена струк</b></span>
                                <span>Психолог</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-teal">Перейти</a>
                            </div>
                        </div>

                        <div class="event-block event">
                            <div class="event-date-block">
                                <span>24/07/2019</span>
                                <span>09:00 - 10:30</span>
                            </div>

                            <div class="event-info-block">
                                <span>Занятие - Арт терапия</span>
                                <span>Статус: Оплачено</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-teal">Перейти</a>
                                <a href="<?php href('account', 'video');?>" class="btn btn-green">Подключиться</a>
                            </div>
                        </div>

                        <div class="event-block group">
                            <div class="event-date-block">
                                <span>24/07/2019</span>
                                <span>09:00 - 10:30</span>
                            </div>

                            <div class="event-info-block">
                                <span>Событие - Название события</span>
                                <span>Статус: Оплачено</span>
                            </div>

                            <div class="event-actions-block">
                                <a href="<?php href('account', 'video');?>" class="btn btn-teal">Перейти</a>
                                <a href="<?php href('account', 'video');?>" class="btn btn-green">Подключиться</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab-profile" class="tab">
                    <h4 class="account-title">Редактировать профиль</h4>

                    <div class="tab-block">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="name">Имя</label>
                                        <span class="error-message">Некорректные данные!</span>
                                        <input id="name" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="surname">Фамилия</label>
                                        <span class="error-message">Некорректные данные!</span>
                                        <input id="surname" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <span class="error-message">Некорректные данные!</span>
                                        <input id="email" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="phone">Мобильный телефон</label>
                                        <input id="phone" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="country">Страна</label>
                                        <input id="country" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="city">Город</label>
                                        <input id="city" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="birthday">Дата рождения</label>
                                        <input id="birthday" class="date" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="timezone">Ваш часовой пояс</label>
                                        <select id="timezone">
                                            <option value="" data-select2-id="select2-data-2-g70n">[UTC/GMT+0] Лондон
                                            </option>
                                            <option value="">[UTC/GMT+1] Париж</option>
                                            <option value="">[UTC/GMT+2] Киев</option>
                                            <option value="">[UTC/GMT+3] Москва</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input id="facebook" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input id="instagram" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="file">Загрузить фото</label>
                                        <input id="file" type="file" name="file" class="inputfile"
                                               data-multiple-caption="{count} файлов было выбрано">
                                        <label for="file">
                                            <span></span> <b class="btn-file">Загрузить</b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-blue btn-submit-margin" type="submit">Обновить профиль</button>
                        </form>
                    </div>
                </div>

                <div id="tab-profinfo" class="tab">
                    <h4 class="account-title">Редактировать проф.ИНФО</h4>

                    <div class="tab-block">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label>Ваши рабочие дни</label>

                                        <div class="days">
                                            <div class="day-input-block">
                                                <input id="monday" type="checkbox" name="monday" checked>
                                                <label for="monday">ПН</label>
                                            </div>

                                            <div class="day-input-block">
                                                <input id="tuesday" type="checkbox" name="tuesday" checked>
                                                <label for="tuesday">ВТ</label>
                                            </div>

                                            <div class="day-input-block">
                                                <input id="wednesday" type="checkbox" name="wednesday" checked>
                                                <label for="wednesday">СР</label>
                                            </div>

                                            <div class="day-input-block">
                                                <input id="thursday" type="checkbox" name="thursday" checked>
                                                <label for="thursday">ЧТ</label>
                                            </div>

                                            <div class="day-input-block">
                                                <input id="friday" type="checkbox" name="friday" checked>
                                                <label for="friday">ПТ</label>
                                            </div>

                                            <div class="day-input-block">
                                                <input id="saturday" type="checkbox" name="saturday">
                                                <label for="saturday">СБ</label>
                                            </div>

                                            <div class="day-input-block">
                                                <input id="sunday" type="checkbox" name="sunday">
                                                <label for="sunday">ВС</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label>Ваше рабочее время</label>

                                        <div class="form-row">
                                            <div class="form-col">
                                                <sub>начало</sub>
                                                <select id="time-start" name="time-start">
                                                    <option value="8:00">8:00</option>
                                                    <option value="8:30">8:30</option>
                                                </select>
                                            </div>

                                            <div class="form-col">
                                                <sub>конец</sub>
                                                <select id="time-end" name="time-end">
                                                    <option value="18:00">18:00</option>
                                                    <option value="18:30">18:30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="specialization">Специализация</label>
                                        <span class="error-message"></span>
                                        <input id="specialization" type="text">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="experience">Лет опыта</label>
                                        <span class="error-message"></span>
                                        <div class="quantity-block">
                                            <button type="button" class="minus"> - </button>
                                            <input type="number" value="4" id="experience">
                                            <button type="button" class="plus"> + </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="group-separator"></div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="experience">Анкета</label>
                                        <input id="worksheet" type="file" name="worksheet" class="inputfile"
                                               data-multiple-caption="{count} файлов было выбрано">
                                        <label for="worksheet">
                                            <span></span> <b class="btn-file">Загрузить</b>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" value="1" checked><i></i>
                                            <span>Требуется предварительная обработка анкеты пользователя</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group"></div>

                            <div class="form-group">
                                <label for="sub-specialization">Узкие специализации</label>
                                <select id="sub-specialization" name="sub-specialization[]" multiple="multiple">
                                    <option value="1" selected>Детская психология</option>
                                    <option value="2" selected>Гешталь-терапия</option>
                                    <option value="3" selected>Позитивная терапия</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Информация обо мне (0 символа)</label>
                                <textarea id="description" data-label="Информация обо мне ({count} символа)">Психотерапевт. Специалист в области гештальт-терапии. Специализируется на проблемах межличностного общения и разрешении конфликтов. Сертифицированный коуч. Спортивный коуч. Работает со спортсменами и спортивными командами. Организатор Образовательного проекта для психологов «ПСИКОН». Марие 35 лет, из которых она 12 лет работает психологом и психотерапевтом.</textarea>
                            </div>

                            <button class="btn btn-blue btn-submit-margin" type="submit">Обновить профиль</button>
                        </form>
                    </div>

                    <div class="tab-block">
                        <div class="diploma-block">
                            <button type="button" class="delete">×</button>

                            <div class="diploma-title">Грамота/диплом №1</div>

                            <div class="diploma-name">
                                Название грамоты/диплома: Сертификат “Женская психология”
                            </div>

                            <div class="diploma-description">
                                Описание: Спортивный коуч. Работает со спортсменами и спортивными командами.
                                Организатор Образовательного проекта для психологов «ПСИКОН». Марие 35 лет, из
                                которых она 12 лет работает психологом и психотерапевтом.
                            </div>

                            <div class="diploma-image">
                                1. Диплом ( название ).png
                            </div>

                            <button class="btn btn-white btn-submit-margin" type="submit">Редактировать</button>
                        </div>
                    </div>

                    <div class="tab-block">
                        <p class="title-form">Добавить грамоту/диплом</p>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="diploma-name">Название грамоты/диплома</label>
                                <span class="error-message"></span>
                                <input id="diploma-name" type="text" name="diploma-name">
                            </div>

                            <div class="form-group">
                                <label for="diploma-description">Описание</label>
                                <textarea id="diploma-description" name="diploma-description"></textarea>
                            </div>

                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="diploma-image">Загрузить фото</label>
                                        <input id="diploma-image" type="file" name="diploma-image" class="inputfile"
                                               data-multiple-caption="{count} файлов было выбрано">
                                        <label for="diploma-image">
                                            <span></span> <b class="btn-file">Загрузить</b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-blue btn-submit-margin" type="submit">Добавить грамоту</button>
                        </form>
                    </div>
                </div>

                <div id="tab-statistic" class="tab">

                </div>

                <div id="tab-settings" class="tab">
                    <h4 class="account-title">Настройки пароля</h4>

                    <div class="tab-block">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="name">Новый пароль</label>
                                        <span class="error-message"></span>
                                        <input id="name" type="password">
                                    </div>
                                </div>

                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="surname">Повторите пароль</label>
                                        <span class="error-message"></span>
                                        <input id="surname" type="password">
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-blue btn-submit-margin" type="submit">Подтвердить</button>
                        </form>
                    </div>

                    <h4 class="account-title">Удаление профиля</h4>

                    <div class="tab-block">
                        <form action="" method="post">
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label for="name">Введите пароль</label>
                                        <span class="error-message"></span>
                                        <input id="name" type="password">
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-red btn-submit-margin" type="submit">Удалить профиль</button>
                        </form>
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