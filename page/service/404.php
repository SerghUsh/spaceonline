<?php include_once(__DIR__ . '/../../parts/bootstrap.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php put('head') ?>
</head>
<body>

<main>
    <?php put('header') ?>

    <div class="title-block title-big">
        <div>
            <h1>404</h1>
        </div>
    </div>

    <div id="error-content">
        <div class="container">
            <div class="error-block">
                <p class="error-text">
                    Извините данной страницы не существует
                </p>
                <a class="btn btn-white uppercase" href="<?php href('home') ?>">Перейти на главную</a>
            </div>
        </div>
    </div>

    <?php put('footer') ?>
</main>

<?php put('scripts') ?>
</body>
</html>