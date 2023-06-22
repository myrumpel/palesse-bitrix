<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>



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
								<input class="feedback__input feedback__name input-field-index" maxlength='40' id='feedback-name'
									type="text" name='Name' value="<?= $arResult["AUTHOR_NAME"] ?>">
								<span class='label-span'>Имя</span>
							</label>

							<label for='feedback-phone' class='feedback-label form-item'>
								<input class="feedback__input feedback__phone input-field-index" id='feedback-phone'
									value="<?= $arResult["AUTHOR_PHONE"] ?>" type="tel" name='Phone' maxlength='20'>
								<span class='label-span'> Телефон</span>
							</label>
							<label for='feedback-topic' class='feedback-label form-item'>
								<input class="feedback__input feedback__name input-field-index" maxlength='80' id='feedback-topic'
									type="text" name='Topic'>
								<span class='label-span'>Тема сообщения</span>
							</label>



							<button class="red-button-link feedback__btn form-item" type="submit"
								value="<?= GetMessage("MFT_SUBMIT") ?>">Отправить
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




<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
	<?= bitrix_sessid_post() ?>
	<div class="mf-name">

		<input type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
	</div>
	<div class="mf-email">

		<input type="text" name="user_email" value="<?= $arResult["AUTHOR_PHONE"] ?>">
	</div>

	<div class="mf-message">

		<textarea name="MESSAGE" rows="5" cols="40"><?= $arResult["MESSAGE"] ?></textarea>
	</div>


	<input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
</form>
</div>