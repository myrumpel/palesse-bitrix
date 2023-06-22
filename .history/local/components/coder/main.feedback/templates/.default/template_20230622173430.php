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
<div class="mfeedback">

	<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
		<?= bitrix_sessid_post() ?>
		<div class="mf-name">

			<input type="text" name="Name">
		</div>
		<div class="mf-phone">

			<input type="text" name="Phone">
		</div>
		<div class="mf-message">

			<input name="Topic" rows="5" cols="40">
		</div>


		<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
		<button type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">qwe</button>
	</form>
</div>


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
						<form action="<?= POST_FORM_ACTION_URI ?>" method="POST" class="feedback__form" id='feedback-form'>
							<h4 class="feedback__form-title form-item">
								Остались вопросы?

								<p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>
							</h4>
							<label for='feedback-name' class='feedback-label form-item'>
								<input class="feedback__input feedback__name input-field-index" maxlength='40' id='feedback-name'
									type="text" name='Name'>
								<span class='label-span'>Имя</span>
							</label>

							<label for='feedback-phone' class='feedback-label form-item'>
								<input class="feedback__input feedback__phone input-field-index" id='feedback-phone' type="tel"
									name='Phone' maxlength='20'>
								<span class='label-span'> Телефон</span>
							</label>
							<label for='feedback-topic' class='feedback-label form-item'>
								<input class="feedback__input feedback__name input-field-index" maxlength='80' id='feedback-topic'
									type="text" name='Topic'>
								<span class='label-span'>Тема сообщения</span>
							</label>


							<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
							<button class="red-button-link feedback__btn form-item" type="submit" name="submit"
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

				<!-- <button type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">qwe</button> -->
			</div>
		</div>
	</div>
</section>