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
            <h1>Pop-ups</h1>
        </div>
    </div>

    <div id="popups-content">
        <div class="container" style="text-align: center;">
            <br>
            <br>
            <button class="btn btn-white" onclick="popUpShow('pop-up-delete-account')">Вы хотите удалить аккаунт?</button>
            <br>
            <br>
            <button class="btn btn-white" onclick="popUpShow('pop-up-cancel')">Ваш платеж не прошел!</button>
            <br>
            <br>
            <button class="btn btn-white" onclick="popUpShow('pop-up-success')">Ваш платеж прошел успешно!</button>
            <br>
            <br>
            <button class="btn btn-white" onclick="popUpShow('pop-up-letter')">Ваша заявка успешно отправлена.</button>
            <br>
            <br>
        </div>
    </div>

    <?php put('footer') ?>
</main>

<?php put('pop-ups') ?>
<?php put('scripts') ?>
</body>
</html>