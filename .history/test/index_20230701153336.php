<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Тестик");
?><? $APPLICATION->IncludeComponent(
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
); ?><? $APPLICATION->IncludeComponent(
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
); ?><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
fsdfdfssdfsdfdsffdssdfdfsfdsfsdfsd <br>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>