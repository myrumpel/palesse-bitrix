<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<? if (
    $APPLICATION->GetCurPage(false) !== '/spare-parts.php'
): ?>


    <section class="feedback">
        <div class="feedback-container container">
            <div class="feedback-container_target"></div>
        </div>
        <div class="container-fluid">
            <div class="feedback__bg"
                style='background-image: url(<?= SITE_TEMPLATE_PATH; ?>/assets/img/pages-bg-pictures/bot-form.jpg);'>
                <div class="container">
                    <div class="feedback__inner">
                        <div class="feedback__content">
                            <form class="feedback__form" id='feedback-form'>
                                <h4 class="feedback__form-title form-item">
                                    Остались вопросы?

                                    <p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>
                                </h4>
                                <label for='feedback-name' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__name input-field-index" maxlength='40'
                                        id='feedback-name' type="text" name='Name'>
                                    <span class='label-span'>Имя</span>
                                </label>

                                <label for='feedback-phone' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__phone input-field-index" id='feedback-phone'
                                        type="tel" name='Phone' maxlength='20'>
                                    <span class='label-span'> Телефон</span>
                                </label>
                                <label for='feedback-topic' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__name input-field-index" maxlength='80'
                                        id='feedback-topic' type="text" name='Topic'>
                                    <span class='label-span'>Тема сообщения</span>
                                </label>



                                <button class="red-button-link feedback__btn form-item" type="submit">Отправить
                                    заявку</button>
                                <p class='feedback__form-privacy form-item'>
                                    Отправляя заявку Вы принимаете условия
                                    <a class='feedback__form-privacy-link form-item' href='/privacy.php'>Политики
                                        конфиденциальности</a>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<? endif; ?>
<? if (
    $APPLICATION->GetCurPage(false) !== '/contacts.php'
): ?>
    <section class="feedback">
        <div class="feedback-container container">
            <div class="feedback-container_target"></div>
        </div>
        <div class="container-fluid">
            <div class="feedback__bg"
                style='background-image: url(<?= SITE_TEMPLATE_PATH; ?>/assets/img/pages-bg-pictures/bot-form.jpg);'>
                <div class="container">
                    <div class="feedback__inner">
                        <div class="feedback__content">
                            <form class="feedback__form" id='feedback-form'>
                                <h4 class="feedback__form-title form-item">
                                    Остались вопросы?

                                    <p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>
                                </h4>
                                <label for='feedback-name' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__name input-field-index" maxlength='40'
                                        id='feedback-name' type="text" name='Name'>
                                    <span class='label-span'>Имя</span>
                                </label>

                                <label for='feedback-phone' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__phone input-field-index" id='feedback-phone'
                                        type="tel" name='Phone' maxlength='20'>
                                    <span class='label-span'> Телефон</span>
                                </label>
                                <label for='feedback-topic' class='feedback-label form-item'>
                                    <input class="feedback__input feedback__name input-field-index" maxlength='80'
                                        id='feedback-topic' type="text" name='Topic'>
                                    <span class='label-span'>Тема сообщения</span>
                                </label>



                                <button class="red-button-link feedback__btn form-item" type="submit">Отправить
                                    заявку</button>
                                <p class='feedback__form-privacy form-item'>
                                    Отправляя заявку Вы принимаете условия
                                    <a class='feedback__form-privacy-link form-item' href='/privacy.php'>Политики
                                        конфиденциальности</a>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<? endif; ?>


</main>
<footer class="footer">
    <div class="container">
        <btn class="btn-to-top"><svg class='arrow-to-top-keeper'>
                <use class='arrow-to-top'
                    xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
            </svg></btn>
        <div class="footer__inner">
            <ul class='footer__inner-item footer__logo-number'>
                <li class='footer__logo'>
                    <a href='/'><img class='footer__logo-img'
                            src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/logo-footer.png' alt=''></a>

                </li>
                <li>
                    <a href="tel:+78007707010" class="footer__number">+7 (800) 770 70–10</a>
                </li>
            </ul>
            <nav class='footer__inner-item footer-menu'>

                <ul class='footer__inner-item footer__menu footer__menu-left'>
                    <li class='footer__menu-item'><a class='footer__menu-link footer__menu-link--active'
                            href="/about.php">О компании</a>
                    </li>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/catalog.php">Каталог</a></li>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/service.php">Сервис</a></li>
                </ul>
            </nav>
            <nav class='footer__inner-item footer-menu'>
                <ul class='footer__menu footer__menu-right'>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/spare-parts.php">Запчасти</a></li>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/ways.php">Способы
                            приобретения</a></li>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/contacts.php">Контакты</a></li>
                </ul>
            </nav>
            <ul class='footer__inner-item footer__copy'>
                <li class='footer__copy-item'><a class='footer__copy-privacy' href='/privacy.php'>Политика
                        конфиденциальности</a></li>
                <li class='footer__copy-item'>
                    <h6 class='footer__copy-year'>2023. Все правы защищены</h6>
                </li>
            </ul>
        </div>
    </div>
</footer>
</div>

</div>
</body>

</php>