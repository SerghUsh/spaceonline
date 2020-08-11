<?php include_once(__DIR__ . '/bootstrap.php'); ?>
<header>
    <div class="logo"><img src="/img/logo_SpOn.svg" alt="logo">
    </div>

    <nav class="header_list">
        <ul>
            <li><a href="<?php href('home') ?>">Главная</a></li>
            <li><a href="<?php href('practice', 'list') ?>">Практики</a></li>
            <li><a href="<?php href('specialist', 'list') ?>">Специалисты</a></li>
            <li><a href="<?php href('group_lesson', 'list') ?>">Занятия</a></li>
            <li><a href="<?php href('event', 'list') ?>">События</a></li>
            <li><a href="<?php href('contacts') ?>">Контакты</a></li>
        </ul>
    </nav>

    <div class="account">
        <ul class="account_list">
            <li><a href="#">Войти</a></li>
        </ul>
    </div>
</header>