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
            <h1>Вход</h1>
        </div>
    </div>

    <div id="login-content">
        <div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <span class="error-message">Некорректные данные!</span>
                    <input id="email" class="center" type="text" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input id="password" class="center" type="password" placeholder="Пароль">
                </div>

                <div class="form-group">
                    <button class="btn btn-grey btn-submit" type="submit">Войти</button>

                    <div class="action-block">
                        <p>
                            Впервый на Space Online?
                            <a class="link-black" href="<?php href('service', 'registration') ?>">Регистрация</a>
                            <a class="link-black" href="<?php href('service', 'password') ?>">Забыли пароль?</a>
                        </p>
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