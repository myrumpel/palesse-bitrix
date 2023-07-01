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
            
            <? $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"footerLeftMenu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "footer-left",
		"USE_EXT" => "N"
	)
); ?>
           <? $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"footerRightMenu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",
		// Тип меню для остальных уровней
		"DELAY" => "N",
		// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",
		// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(
			// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",
		// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",
		// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",
		// Учитывать права доступа
		"ROOT_MENU_TYPE" => "footer-right",
		// Тип меню для первого уровня
		"USE_EXT" => "N",
		// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
); ?> 
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