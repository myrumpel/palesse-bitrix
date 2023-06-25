<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Тестик");
?><? $APPLICATION->IncludeComponent(
	"coder:main.feedbackForm",
	"",
	array(
		"EMAIL_TO" => "my@rumpelweb.ru",
		"EVENT_MESSAGE_ID" => array("33"),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "N"
	)
); ?>fsdfdfssdfsdfdsffdssdfdfsfdsfsdfsd
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>