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
                <h4 class="account-title-block">Личный кабинет</h4>

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

                    <ul class="account-menu tab-buttons">
                        <li class="account-registrations">
                            <a class="active" href="#" data-tab-id="#tab-registrations">Мои регистрации</a>
                        </li>
                        <li class="account-calendar">
                            <a href="#" data-tab-id="#tab-calendar">Мой календарь</a>
                        </li>
                        <li class="account-favorites">
                            <a href="#" data-tab-id="#tab-favorites">Избранные</a>
                        </li>
                        <li class="account-profile">
                            <a href="#" data-tab-id="#tab-profile">Мой профиль</a>
                        </li>
                        <li class="account-settings">
                            <a href="#" data-tab-id="#tab-settings">Настройки</a>
                        </li>
                        <li class="account-logout">
                            <a href="#">Выйти</a>
                        </li>
                    </ul>
                </div>

                <div class="account-info">
                    <b class="text">
                        Стань частью команды<br>
                        Space Online
                    </b>
                    <a href="#" class="btn-green">Стать специалистом</a>
                </div>
            </div>

            <div class="account-tabs-block">
                <h4 class="account-title-block">Редактировать профиль</h4>

                <div class="account-tabs">
                    <div id="tab-registrations" class="tab">
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
                                        <input id="file" type="file" name="file" class="inputfile" data-multiple-caption="{count} файлов было выбрано">
                                        <label for="file">
                                            <span></span> <b class="btn-file">Загрузить</b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn-submit-margin btn-form-blue" type="submit">Обновить профиль</button>
                        </form>
                    </div>
                    <div id="tab-calendar" class="tab"></div>
                    <div id="tab-favorites" class="tab"></div>
                    <div id="tab-profile" class="tab"></div>
                    <div id="tab-settings" class="tab"></div>
                </div>
            </div>
        </div>
    </div>

    <?php put('footer') ?>
</main>

<?php put('scripts') ?>
</body>
</html>