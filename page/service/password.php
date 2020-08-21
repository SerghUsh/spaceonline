<?php include_once(__DIR__ . '/../../parts/bootstrap.php'); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php put('head') ?>
</head>
<body>

<main>
    <?php put('header') ?>

    <div class="title-block title-small">
        <div>
            <h1>Восстановление пароля</h1>
        </div>
    </div>

    <div id="password-content">
        <div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="center" type="text" placeholder="Email">
                </div>

                <div class="form-group">
                    <button class="btn-submit btn-form-green" type="submit">Отправить</button>

                    <div class="action-block">
                        <p>Вернутся назад на страницу <a class="link-black" href="<?php href('service', 'login') ?>">Входа</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php put('footer') ?>
</main>

<?php put('scripts') ?>
</body>
</html>