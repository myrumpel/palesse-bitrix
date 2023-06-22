<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>Text here....<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "feedbackMain", Array(
	"EMAIL_TO" => "my@rumpelweb.ru",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => "",	// Обязательные поля для заполнения
		"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>