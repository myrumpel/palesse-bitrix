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
<br>
<br>
<br>
<br>
<br>
<div class="mfeedback">
	<!-- <? if (!empty($arResult["ERROR_MESSAGE"])) {
		foreach ($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if ($arResult["OK_MESSAGE"] <> '') {
		?>
		<div class="mf-ok-text">
			<?= $arResult["OK_MESSAGE"] ?>
		</div>
		<?
	}
	?> -->
	<section class="feedback-tech">
		<div class="feedback-container container">
			<div class="feedback-container_target"></div>
		</div>
		<div class="container">
			<div class="feedback-tech__inner">
				<div class="feedback-tech__photo">
					<img src='img/pages-bg-pictures/services-big-form.jpg' alt=''>
				</div>


				<form class="feedback__form feedback-tech__form" action="<?= POST_FORM_ACTION_URI ?>" method="POST"
					id='feedback-form'>
					<?= bitrix_sessid_post() ?>
					<h4 class="feedback__form-title feedback-tech__title service-fomr-item">
						Хотите получить сервисное сопровождение своей техники?

						<p class='feedback__accent-color service-fomr-item'>Оставьте заявку!</p>
					</h4>
					<label for='feedback-name' class='feedback-label service-fomr-item'>
						<input class="feedback__input feedback__name input-field-index" maxlength='40' id='feedback-name'
							type="text" name="service_name">
					</label>

					<label for='feedback-phone' class='feedback-label service-fomr-item'>
						<input class="feedback__input feedback__phone input-field-index" id='feedback-phone' type="tel"
							name="service_phone" maxlength='20'>
					</label>
					<label for='tech-kind' class='feedback-label service-fomr-item'>
						<input class="feedback__input  input-field-index" id='tech-kind' type="text" name="service_kind"
							maxlength='50'>
					</label>
					<label for='tech-date' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index" id='tech-date' type="text" name="service_year"
							maxlength='20'>
					</label>
					<label for='tech-work' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index" id='tech-work' type="text" name="service_job"
							maxlength='50'>
					</label>
					<label for='tech-farm' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index" id='tech-farm' type="text" name="service_company"
							maxlength='50'>
					</label>

					<button class="red-button-link feedback__btn feedback-tech__btn service-fomr-item" type="submit" name="submit"
						value="<?= GetMessage("MFT_SUBMIT") ?>">Отправить
						заявку</button>
					<p class='feedback__form-privacy feedback-tech__privacy service-fomr-item'>
						Отправляя заявку Вы принимаете условия
						<a class='feedback__form-privacy-link  service-fomr-item' href='/privacy.html'>Политики
							конфиденциальности</a>
					</p>
				</form>
			</div>
		</div>

	</section>


	<!-- 

	<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
		<?= bitrix_sessid_post() ?>


		<input type="text" name="service_name" value="<?= $arResult["AUTHOR_NAME"] ?>">


		<input type="tel" name="service_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>">


		<input type="text" name="service_kind" value="<?= $arResult["AUTHOR_KIND"] ?>">


		<input type="number" name="service_year" value="<?= $arResult["AUTHOR_YEAR"] ?>">


		<input type="text" name="service_job" value="<?= $arResult["AUTHOR_JOB"] ?>">


		<input type="text" name="service_company" value="<?= $arResult["AUTHOR_COMPANY"] ?>">


		<input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
	</form> -->
</div>