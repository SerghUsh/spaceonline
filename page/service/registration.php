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

            <div class="checkbox-wrapper">
                <label>
                    <input type="checkbox" value="1" checked><i></i> <span>Я согласен с условиями</span>
                </label>
            </div>

            <div class="form-group">
                <button class="btn-submit btn-form-green" type="submit">Регистрация</button>

                <div class="action-block">
                    <p>Уже есть учетная запись? <a class="link-black" href="<?php href('service', 'login') ?>">Войти</a></p>
                </div>
            </div>
        </form>
    </div>
</main>

<style>
    #registration-content {
        padding: 67px 0 99px;
    }
    #registration-content form {
        max-width: 535px;
        text-align: center;
        margin: 0 auto;
        padding: 0 10px;
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
    .checkbox-wrapper {
        text-align: left;
        margin: 22px 0 2px;
    }
    .action-block {
        margin-top: 16px;
    }
    @media (max-width: 1199px) {
        #registration-content {
            padding: 41px 0 60px;
        }
        .checkbox-wrapper {
            text-align: left;
            margin: 16px 0 3px;
        }
        .action-block {
            margin-top: 8px;
        }
    }
    @media (max-width: 767px) {
        #registration-content {
            padding: 18px 0 32px;
        }
        #registration-content form {
            max-width: 300px;
            text-align: center;
            margin: 0 auto;
            padding: 0 10px;
        }
        .timezone-block div {
            width: 100%;
        }
        .timezone-block {
            text-align: center;
        }
        .timezone-block div {
            text-align: left;
        }
        .timezone-block button {
            width: 123px;
            height: 29px;
            margin-top: 16px;
            font-size: 14px;
            line-height: 20px;
            float: none;
            padding-top: 3px;
        }
        .checkbox-wrapper {
            margin: -3px 0 4px;
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