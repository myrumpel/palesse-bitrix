<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>


<? if (
    $APPLICATION->GetCurDir() !== '/contacts/' &&
    $APPLICATION->GetCurDir() !== '/service/' &&
    $APPLICATION->GetCurDir() !== '/test/'
): ?>
    <? $APPLICATION->IncludeComponent(
        "coder:main.feedback",
        "",
        array(
            "EMAIL_TO" => "my@rumpelweb.ru",
            "EVENT_MESSAGE_ID" => array("7"),
            "OK_TEXT" => "",
            "REQUIRED_FIELDS" => array(),
            "USE_CAPTCHA" => "N",
            "AJAX_MODE" => "Y"
        )
    ); ?>
<? endif; ?>


</main>
<footer class="footer">
    <div class="container">
        <btn class="btn-to-top"><svg class='arrow-to-top-keeper'>
                <use class='arrow-to-top'
                    xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
            </svg></btn>
        <div class="footer__inner">
            <ol class='footer__inner-item footer__logo-number'>
                <li class='footer__logo'>
                    <a href='/'><img class='footer__logo-img'
                            src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/logo-footer.png' alt=''></a>

                </li>
                <li>
                    <a href="tel:+78007707010" class="footer__number">+7 (800) 770 70–10</a>
                </li>
            </ol>
            <nav class='footer__inner-item footer-menu'>

                <ol class='footer__inner-item footer__menu footer__menu-left'>
                    <li class='footer__menu-item'><a class='footer__menu-link footer__menu-link--active'
                            href="/about.php">О компании</a>
                    </li>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/catalog.php">Каталог</a></li>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/service.php">Сервис</a></li>
                </ol>
            </nav>
            <nav class='footer__inner-item footer-menu'>
                <ol class='footer__menu footer__menu-right'>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/spare-parts.php">Запчасти</a></li>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/ways.php">Способы
                            приобретения</a></li>
                    <li class='footer__menu-item'><a class='footer__menu-link' href="/contacts.php">Контакты</a></li>
                </ol>
            </nav>
            <ol class='footer__inner-item footer__copy'>
                <li class='footer__copy-item'><a class='footer__copy-privacy' href='/privacy.php'>Политика
                        конфиденциальности</a></li>
                <li class='footer__copy-item'>
                    <h6 class='footer__copy-year'>2023. Все правы защищены</h6>
                </li>
            </ol>
        </div>
    </div>
    <script type="text/javascript">
(function(d, w, k) {
    console.log('qwe')
    w.introvert_callback = function() {
        try {
            w.II = new IntrovertIntegration(k);
        } catch (e) {console.log(e)}
    };

    var n = d.getElementsByTagName("script")[0],
        e = d.createElement("script");

    e.type = "text/javascript";
    e.async = true;
    e.src = "https://api.yadrocrm.ru/js/cache/"+ k +".js";
    n.parentNode.insertBefore(e, n);
})(document, window, '8a112003');
</script>
</footer>
</div>

</div>
</body>

</php>