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
        <h1>Вход</h1>
    </div>
</div>

<main id="login-content">
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <span class="error-message">Некорректные данные!</span>
                <input id="email" type="text" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input id="password" type="password" placeholder="Пароль">
            </div>

            <div class="form-group">
                <button class="btn-form-grey" type="submit">Войти</button>

                <p class="align-left">
                    Впервый на Space Online?
                    <a class="link-black" href="<?php href('service', 'registration') ?>">Регистрация</a>
                    <a class="link-black float-right" href="<?php href('service', 'password') ?>">Забыли пароль?</a>
                </p>
            </div>
        </form>
    </div>
</main>

<style>
    #login-content {
        padding: 66px 0 90px;
    }
    #login-content form {
        max-width: 535px;
        text-align: center;
        margin: 0 auto;
        padding: 0 10px;
    }

    .float-left {
        float: left !important;
    }
    .float-right {
        float: right !important;
    }

    .align-left {
        text-align: left !important;
    }
    .align-center {
        text-align: center !important;
    }
    .align-right {
        text-align: right !important;
    }

    @media (max-width: 1199px) {

    }
    @media (max-width: 767px) {

    }
</style>

<?php put('footer') ?>

<?php put('scripts') ?>
</body>
</html>