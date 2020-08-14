<?php include_once(__DIR__ . '/../../parts/bootstrap.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php put('head') ?>
</head>
<body>
<?php put('header') ?>

<div class="title-block">
    <div>
        <h1>Регистрация</h1>
    </div>
</div>

<main id="registration-content">
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Имя</label>
                <span class="error-message">Некорректные данные!</span>
                <input id="name" type="text" placeholder="Имя">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <span class="error-message">Некорректные данные!</span>
                <input id="email" type="text" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="phone">Телефон</label>
                <input id="phone" type="text" placeholder="Телефон">
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input id="password" type="password" placeholder="Пароль">
            </div>

            <div class="form-group">
                <label for="password_repeat">Подтвердите пароль</label>
                <input id="password_repeat" type="password" placeholder="Подтвердите пароль">
            </div>

            <div class="form-group">
                <label for="timezone">Ваш часовой пояс</label>

                <div class="timezone-block">
                    <div>
                        <select id="timezone">
                            <option value="">[UTC/GMT+0] Лондон</option>
                            <option value="">[UTC/GMT+1] Париж</option>
                            <option value="">[UTC/GMT+2] Киев</option>
                            <option value="">[UTC/GMT+3] Москва</option>
                        </select>
                    </div>

                    <button class="btn-form-white" type="button">Определить</button>
                </div>
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" value="1" checked><i></i> <span>Я согласен с условиями</span>
                </label>
            </div>

            <div class="form-group">
                <button class="btn-form-green" type="submit">Регистрация</button>

                <p>Уже есть учетная запись? <a class="link-black" href="<?php href('service', 'login') ?>">Войти</a></p>
            </div>
        </form>
    </div>
</main>

<style>
    #registration-content {
        padding: 60px 0 85px;
    }
    #registration-content form {
        max-width: 535px;
        text-align: center;
        margin: 0 auto;
        padding: 0 10px;
    }

    .timezone-block {

    }
    .timezone-block:before {
        content: '';
        display: table;
        clear: both;
    }
    .timezone-block:after {
        content: '';
        display: table;
        clear: both;
    }
    .timezone-block div {
        float: left;
        width: 307px;
    }
    .timezone-block button {
        float: right;
        width: 189px;
    }
    @media (max-width: 1199px) {

    }
    @media (max-width: 767px) {
        .timezone-block div {
            width: 100%;
        }
        .timezone-block button {
            width: 100%;
            margin-top: 10px;
        }
    }
</style>

<?php put('footer') ?>

<?php put('scripts') ?>

<script>
    $(document).ready(function() {
        $('#timezone').select2({
            width: '100%',
        });
    });
</script>
</body>
</html>