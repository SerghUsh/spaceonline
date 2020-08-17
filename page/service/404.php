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

<?php put('footer') ?>

<?php put('scripts') ?>
</body>
</html>