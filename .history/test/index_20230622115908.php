<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>
<? $APPLICATION->IncludeComponent(
	"components:main.feedback",
	"",
	array(
		"EMAIL_TO" => "my@rumpelweb.ru",
		// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(
			// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "",
		// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(
			// Обязательные поля для заполнения
			0 => "NONE",
		),
		"USE_CAPTCHA" => "N",
		// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>