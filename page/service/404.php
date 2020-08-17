<?php include_once(__DIR__ . '/../../parts/bootstrap.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php put('head') ?>
</head>
<body>
<?php put('header') ?>

<div class="title-block title-big">
    <div>
        <h1>404</h1>
    </div>
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
    .error-content {
        padding-top: 80px;
        padding-bottom: 130px;
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
        margin-bottom: 59px;
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
        .error-content {
            padding-top: 57px;
            padding-bottom: 64px;
        }
        .error-block {
            max-width: 400px;
        }
        .error-text {
            font-size: 30px;
            line-height: 40px;
            margin-bottom: 29px;
        }
        .btn-white {
            font-size: 12px;
            line-height: 21px;
            letter-spacing: 1.6px;
            width: 278px;
            height: 35px;
            padding: 5px 0 0;
        }
    }
    @media (max-width: 767px) {
        .error-content {
            padding-top: 30px;
            padding-bottom: 64px;
        }
        .error-block {
            max-width: 308px;
        }
        .error-text {
            font-size: 20px;
            line-height: 24px;
            margin-bottom: 17px;
            padding: 0 15px;
        }
        .btn-white {
            font-size: 10px;
            line-height: 21px;
            letter-spacing: 1.6px;
            width: 100%;
            height: 30px;
            padding: 3px 0 0;
            border: 1px solid #000000;
            border-radius: 3px;
        }
    }
</style>
<?php put('footer') ?>

<?php put('scripts') ?>
</body>
</html>