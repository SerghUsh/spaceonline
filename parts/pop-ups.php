<?php include_once(__DIR__ . '/bootstrap.php'); ?>

<div id="pop-up-delete-account" class="pop-up">
    <div class="cover"></div>
    <div class="dialog">
        <div class="icon icon-question"></div>

        <div class="pop-up-title">
            Вы хотите удалить аккаунт?
        </div>

        <div class="pop-up-message">
            Восстановление профиля после удаления не возможно.
        </div>

        <div class="action">
            <div class="action-row clearfix">
                <div class="action-col">
                    <button class="btn btn-white" type="button">НЕТ</button>
                </div>
                
                <div class="action-col">
                    <button class="btn btn-white" type="button">ДА</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="pop-up-cancel" class="pop-up">
    <div class="cover"></div>
    <div class="dialog">
        <div class="icon icon-cancel"></div>

        <div class="pop-up-title">
            Ваш платеж не прошел!
        </div>

        <div class="pop-up-message">
            Проверьте введенные данные и повторите попытку
        </div>

        <div class="action">
            <a class="btn btn-white" href="<?php href('group_lesson', 'list') ?>">Вернуться к групповым занятиям</a>
        </div>
    </div>
</div>

<div id="pop-up-success" class="pop-up">
    <div class="cover"></div>
    <div class="dialog">
        <div class="icon icon-success"></div>

        <div class="pop-up-title">
            Ваш платеж прошел успешно!
        </div>

        <div class="pop-up-message">
            Занятие было добавлено в ваш календарь.<br>
            Начните новые впечатления вместе со Space Online
        </div>

        <div class="select">
            <select name="action" id="action-popup">
                <option value="1">Отправить чек на электронную почту</option>
            </select>
        </div>

        <div class="action">
            <a class="btn btn-white" href="<?php href('group_lesson') ?>">Перейти к занятию</a>
        </div>
    </div>
</div>

<div id="pop-up-letter" class="pop-up">
    <div class="cover"></div>
    <div class="dialog">
        <div class="icon icon-letter"></div>

        <div class="pop-up-title">
            Ваша заявка успешно отправлена.
        </div>

        <div class="pop-up-message">
            Вы почти часть команды Space Online, мы с вами свяжемся<br>
            в ближайшее время для согласования деталей
        </div>

        <div class="action">
            <a class="btn btn-white" href="<?php href('account') ?>">В личный кабинет</a>
        </div>
    </div>
</div>