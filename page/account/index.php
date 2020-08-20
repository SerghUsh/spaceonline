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
                            <a href="#" data-tab-id="#tab-registrations">Мои регистрации</a>
                        </li>
                        <li class="account-calendar">
                            <a href="#" data-tab-id="#tab-calendar">Мой календарь</a>
                        </li>
                        <li class="account-favorites">
                            <a href="#" data-tab-id="#tab-favorites">Избранные</a>
                        </li>
                        <li class="account-profile active">
                            <a class="active" href="#" data-tab-id="#tab-profile">Мой профиль</a>
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
                    <div id="tab-registrations" class="tab"></div>
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