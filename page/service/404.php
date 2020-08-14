<?php include_once(__DIR__ . '/../../parts/bootstrap.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php put('head') ?>
</head>
<body>
<?php put('header') ?>

<div class="title-block title-big">
    <h1>404</h1>
</div>

<main class="error-content">
    <div class="container">
        <div class="error-block">
            <p class="error-text">
                Извините данной страницы не существует
            </p>
            <a class="btn-white" href="<?php href('home') ?>">Перейти на главную</a>
        </div>
    </div>
</main>

<style>
    .title-block {
        text-align: center;
        padding: 50px 10px;
        background: #FAFAFA;
    }
    .title-big h1 {
        font-family: 'Montserrat', sans-serif;
        font-size: 140px;
        letter-spacing: 7px;
    }
    .error-content {
        padding-bottom: 127px;
    }
    .error-block {
        max-width: 660px;
        text-align: center;
        margin: 0 auto;
        padding: 0 10px;
    }
    .error-text {
        font-family: 'ProximaNova', sans-serif;
        font-weight: 300;
        font-size: 50px;
        line-height: 60px;
        margin: 85px 0 58px;
    }
    .btn-white {
        display: inline-block;
        border: 2px solid #000000;
        border-radius: 5px;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        font-size: 18px;
        line-height: 18px;
        letter-spacing: 1.6px;
        text-decoration: none;
        text-align: center;
        padding: 15px 55px 13px;
        text-transform: uppercase;
        cursor: pointer;
        color: #000000;
        transition: all linear .1s;
    }
    .btn-white:hover {
        text-decoration: none;
        background: #222222;
        color: #FFFFFF;
    }
    @media (max-width: 1199px) {
        .title-big h1 {
            font-size: 120px;
        }
        .error-text {
            font-size: 40px;
        }
    }
    @media (max-width: 767px) {
        .title-big h1 {
            font-size: 100px;
        }
        .error-text {
            font-size: 30px;
        }
    }
</style>
<?php put('footer') ?>

<?php put('scripts') ?>
</body>
</html>