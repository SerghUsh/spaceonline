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
            <h1>Наши контакты</h1>
        </div>
    </div>

    <div id="contacts-content">
        <div class="contacts-block clearfix">
            <div class="contacts-info">
                <div class="contacts-title">Наши контакты</div>

                <div class="contacts-row">
                    <div class="contacts-group contacts-email">
                        <a href="mailto: spaceonline@gmail.com">SpaceOnline@gmail.com</a>
                    </div>

                    <div class="contacts-group contacts-phone">
                        <a href="tel:+380766443274">+38 (076) 644 32 74</a>
                        <br>
                        <a href="tel:+380766443274">+38 (076) 644 32 74</a>
                    </div>

                    <div class="contacts-group contacts-timetable">
                        График работы:<br>
                        ПН-ПТ, 10:00 - 19:00<br>
                        <small>[UTC/GMT+3] Москва</small>
                    </div>
                </div>
            </div>

            <div class="contacts-form">
                <div class="contacts-title">Отправить нам письмо</div>

                <form action="" method="post">
                    <div class="contacts-group-input">
                        <input type="text" placeholder="Ваше имя" name="name">
                        <span class="error-text">Некорректные данные!</span>
                    </div>

                    <div class="contacts-group-input">
                        <input type="text" placeholder="Телефон" name="phone">
                        <span class="error-text">Некорректные данные!</span>
                    </div>

                    <p class="contacts-separator"></p>

                    <div class="contacts-group-input">
                        <input type="text" placeholder="Email" name="email">
                        <span class="error-text"></span>
                    </div>

                    <div class="contacts-group-input">
                        <input type="text" placeholder="Тема" name="theme">
                        <span class="error-text"></span>
                    </div>

                    <p class="label">Ваше сообщение</p>

                    <textarea name="" id="" cols="30" rows="10"></textarea>

                    <button class="btn btn-grey" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>

    <?php put('footer') ?>
</main>

<?php put('scripts') ?>
</body>
</html>