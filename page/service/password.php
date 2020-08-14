<?php include_once(__DIR__ . '/../../parts/bootstrap.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php put('head') ?>
</head>
<body>
<?php put('header') ?>

<div class="title-block title-small">
    <div>
        <h1>Восстановление пароля</h1>
    </div>
</div>

<main id="password-content">
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="text" placeholder="Email">
            </div>

            <div class="form-group">
                <button class="btn-submit btn-form-green" type="submit">Отправить</button>
            </div>

            <div class="form-group">
                <p>Вернутся назад на страницу <a class="link-black" href="<?php href('service', 'login') ?>">Входа</a></p>
            </div>
        </form>
    </div>
</main>

<style>
    #password-content {
        padding: 60px 0 85px;
    }
    #password-content form {
        max-width: 535px;
        text-align: center;
        margin: 0 auto;
        padding: 0 10px;
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