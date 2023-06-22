<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>




<? $APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	array(
		"EMAIL_TO" => "my@rumpelweb.ru",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Работает сучка",
		"REQUIRED_FIELDS" => array("NONE"),
		"USE_CAPTCHA" => "N"
	)
); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>