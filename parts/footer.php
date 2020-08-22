<?php include_once(__DIR__ . '/bootstrap.php'); ?>
<footer id="footer">
    <div class="container">
        <div class="footer_menu">
            <div class="half_first">
                <div class="footer__item">
                    <div class="social_buttons">
                        <div class="footer__logo">
                            <a href="<?php href('home') ?>"><img src="/css/imgs/logo_SpOn.svg" alt="logo"></a>
                        </div>
                        <div class="social_buttons__link">
                            <a href="https://www.instagram.com/" target="blank" class="instagram"></a>
                            <a href="https://www.facebook.com/" class="facebook" target="blank"></a>
                            <a href="https://www.youtube.com/" class="youtube" target="blank"></a>
                        </div>
                    </div>

                    <div class="footer_list">
                        <h3>Страницы</h3>
                        <nav>
                            <ul>
                                <div>
                                    <li><a href="<?php href('home') ?>">Главная</a></li>
                                    <li><a href="<?php href('practice', 'list') ?>">Практики</a></li>
                                    <li><a href="<?php href('specialist', 'list') ?>">Специалисты</a></li>
                                </div>

                                <div>
                                     <li><a href="<?php href('group_lesson', 'list') ?>">Занятия</a></li>
                                    <li><a href="<?php href('event', 'list') ?>">События</a></li>
                                </div>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="half_second">
                <div class="footer_contacts">
                    <h3 class="contacts">Контакты</h3>
                    <ul>
                        <li class="mail"><a href="mailto:SpaceOnline@mail.ru">SpaceOnline@gmail.com</a></li>
                        <li class="phone"><a href="tel:+380766443274">+38 (076) 644 32 74</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <p class="copyright">©2020 Space.online. Все права защищены</p>
    </div>
</footer>