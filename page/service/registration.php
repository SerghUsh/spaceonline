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
            <h1>Регистрация</h1>
        </div>
    </div>

    <div id="registration-content">
        <div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Имя</label>
                    <span class="error-message">Некорректные данные!</span>
                    <input id="name" class="center" type="text" placeholder="Имя">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <span class="error-message">Некорректные данные!</span>
                    <input id="email" class="center" type="text" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input id="phone" class="center" type="text" placeholder="Телефон">
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input id="password" class="center" type="password" placeholder="Пароль">
                </div>

                <div class="form-group">
                    <label for="password_repeat">Подтвердите пароль</label>
                    <input id="password_repeat" class="center" type="password" placeholder="Подтвердите пароль">
                </div>

                <div class="form-group">
                    <label for="timezone">Ваш часовой пояс</label>

                    <div class="timezone-block clearfix">
                        <div>
                            <select id="timezone">
                                <option value="">[UTC/GMT+0] Лондон</option>
                                <option value="">[UTC/GMT+1] Париж</option>
                                <option value="">[UTC/GMT+2] Киев</option>
                                <option value="">[UTC/GMT+3] Москва</option>
                            </select>
                        </div>

                        <button class="btn btn-white" type="button">Определить</button>
                    </div>
                </div>

                <div class="checkbox-wrapper">
                    <label class="small">
                        <input type="checkbox" value="1" checked><i></i> <span>Я согласен с условиями</span>
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-green btn-submit" type="submit">Регистрация</button>

                    <div class="action-block">
                        <p>
                            Уже есть учетная запись?
                            <a class="link-black" href="<?php href('service', 'login') ?>">Войти</a>
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