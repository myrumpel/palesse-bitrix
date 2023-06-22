<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>
<!-- <section class="feedback">
<div class="feedback-container container">
	<div class="feedback-container_target">
	</div>
</div>
<div class="container-fluid">
	<div class="feedback__bg">
		<div class="container">
			<div class="feedback__inner">
				<div class="feedback__content">
					<form class="feedback__form" id="feedback-form">
						<h4 class="feedback__form-title form-item">Остались вопросы?
						<p class="feedback__accent-color form-item">
							 Мы свяжемся с Вами!
						</p>
 </h4>
 <label for="feedback-name" class="feedback-label form-item"> <input class="feedback__input feedback__name input-field-index" maxlength="40" id="feedback-name" type="text" name="Name"> <span class="label-span">Имя</span> </label> <label for="feedback-phone" class="feedback-label form-item"> <input class="feedback__input feedback__phone input-field-index" id="feedback-phone" type="tel" name="Phone" maxlength="20"> <span class="label-span"> Телефон</span> </label> <label for="feedback-topic" class="feedback-label form-item"> <input class="feedback__input feedback__name input-field-index" maxlength="80" id="feedback-topic" type="text" name="Topic"> <span class="label-span">Тема сообщения</span> </label> <button class="red-button-link feedback__btn form-item" type="submit">Отправить заявку</button>
						<p class="feedback__form-privacy form-item">
							 Отправляя заявку Вы принимаете условия <a class="feedback__form-privacy-link form-item" href="/privacy.php">Политики конфиденциальности</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
 </section> <br> -->
<br>
<br>
<? $APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"callback",
	array(
		"COMPONENT_TEMPLATE" => "callback",
		"EMAIL_TO" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "8",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "PHONE",
		),
		"USE_CAPTCHA" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "N"
	),
	false
); ?>
<!-- <? $APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	array(
		"EMAIL_TO" => "my@rumpelweb.ru",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "Y"
	)
); ?><br> -->
<br>
<br>
<br>
<br>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>