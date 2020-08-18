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
        <h1>Специалисты</h1>
        <p class="subtitle">Наши специалисты всегда доступны</p>
    </div>
</div>

<main id="specialist-list-content">
    <div class="container-list">
        <div class="specialist-filter-block">
            <span class="specialist-filter-title">Фильтр специалистов:</span>

            <div class="specialist-filter-wrapper">
                <div class="specialist-filter-group">
                    <label>Сортировать по практикам:</label>
                    <select>
                        <option value="">Все</option>
                    </select>
                </div>

                <div class="specialist-filter-group">
                    <label>Опыт:</label>
                    <div class="range-wrapper">
                        <div class="range-slider">
                            <span id="rs-bullet" class="rs-label" data-after=" лет">0</span>
                            <input id="rs-range-line" class="rs-range" type="range" value="5" min="0" max="10">
                        </div>

                        <div class="box-minmax">
                            <span>0</span>
                            <span>>10</span>
                        </div>

                        <script>
                            var rangeSlider = document.getElementById("rs-range-line");
                            var rangeBullet = document.getElementById("rs-bullet");
                            rangeSlider.addEventListener("input", showSliderValue, false);
                            showSliderValue();
                            function showSliderValue() {
                                rangeBullet.innerHTML = rangeSlider.value;
                                var bulletPosition = rangeSlider.value / rangeSlider.max;
                                var rangeSliderWidth = rangeSlider.offsetWidth;
                                rangeBullet.style.left = (rangeSliderWidth * bulletPosition) + "px";
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="specialist-list-block">
            <div class="row">
                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="specialist-tile">
                        <div class="specialist-info">
                            <div class="specialist-image-block">
                                <div class="specialist-image-wrapper">
                                    <img src="/img/specialist.jpg" alt="specialist">
                                </div>
                                <div class="circle"></div>
                            </div>

                            <div class="specialist-name">
                                Мария Скрипаль
                            </div>

                            <div class="specialist-type">
                                Психолог
                            </div>

                            <p class="specialist-description">
                                В работе я занимаюсь проработкой травм,
                                развитием личности и образованием, в
                                зависимости от того, что запрашивает
                                клиент. Другими словами я сопровождаю,
                                помогаю и обучаю.
                            </p>

                            <small class="specialist-experience">
                                - 4 года
                            </small>

                            <p class="specialist-direction">
                                Категории: Детская психология,
                                Гештальт-терапия, Позитивная терапия...
                            </p>
                        </div>

                        <div class="specialist-calendar">
                            <a href="<?php href('specialist') ?>">календарь специалиста</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php put('footer') ?>

<?php put('scripts') ?>
</body>
</html>
