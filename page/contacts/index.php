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
        <h1>Наши контакты</h1>
    </div>
</div>

<main id="contacts-content">
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

</style>

<?php put('footer') ?>

<?php put('scripts') ?>
</body>
</html>