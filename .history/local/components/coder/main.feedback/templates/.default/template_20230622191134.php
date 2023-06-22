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
	<? if (!empty($arResult["ERROR_MESSAGE"])) {
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
	?>

	<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
		<?= bitrix_sessid_post() ?>
		<div class="mf-name">
			<div class="mf-text">
				<?= GetMessage("MFT_NAME") ?>
				<? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?><span
					class="mf-req">*</span>
				<? endif ?>
			</div>
			<input type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>">
		</div>
		<div class="mf-email">
			<div class="mf-text">
				<?= GetMessage("MFT_EMAIL") ?>
				<? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?><span
					class="mf-req">*</span>
				<? endif ?>
			</div>
			<input type="text" name="user_email" value="<?= $arResult["AUTHOR_EMAIL"] ?>">
		</div>

		<div class="mf-message">
			<div class="mf-text">
				<?= GetMessage("MFT_MESSAGE") ?>
				<? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])): ?><span
					class="mf-req">*</span>
				<? endif ?>
			</div>
			<textarea name="MESSAGE" rows="5" cols="40"><?= $arResult["MESSAGE"] ?></textarea>
		</div>

		<? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
			<div class="mf-captcha">
				<div class="mf-text">
					<?= GetMessage("MFT_CAPTCHA") ?>
				</div>
				<input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40"
					alt="CAPTCHA">
				<div class="mf-text">
					<?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span>
				</div>
				<input type="text" name="captcha_word" size="30" maxlength="50" value="">
			</div>
		<? endif; ?>
		<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
		<input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
	</form>
</div>


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
							<?= bitrix_sessid_post() ?>

							<h4 class="feedback__form-title form-item">
								Остались вопросы?

								<p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>

							</h4>



							<label for='feedback-name' class='feedback-label form-item'>

								<input class="feedback__input feedback__name input-field-index" maxlength='40' id='feedback-name' 

								<? if (!empty($arResult["ERROR_MESSAGE"][0])) { ?> 
									style="border: 1px solid red" <? 
									} else { ?>
										style="border: 1px solid #4a4f59" <? } ?> 

										type="text" name='Name' placeholder='Имя'>

							</label>

							<label for='feedback-ph one' class='feedback-label form-item'>
								<input class="feedback__input feedback__phone input-field-index" id='feedback-phone' type="tel"

								 <? if (!empty($arResult["ERROR_MESSAGE"][1])) { ?> 
									style="border: 1px solid red" <? 
									} else { ?>
										style="border: 1px solid #4a4f59" <? } ?> 

										name='Phone' placeholder='Телефон' maxlength='20'>
							</label>
							<label for='feedback-topic' class='feedback-label form-item'>
								<input class="feedback__input feedback__name input-field-index" maxlength='80' id='feedback-topic' 
								<? if (!empty($arResult["ERROR_MESSAGE"] === "Укажите тему обращения (от 8 символов)")) { ?> style="border: 1px solid red" <? } else { ?>
										style="border: 1px solid #4a4f59" <? } ?> type="text" name='Topic' placeholder='Тема обращения'>
							</label>



							<button class="red-button-link feedback__btn form-item" type="submit" name="submit"
								value="<?= GetMessage("MFT_SUBMIT") ?>">
								<?
								if ($arResult["OK_MESSAGE"] <> '') {
									?>
									<div class="mf-ok-text">
										<?= $arResult["OK_MESSAGE"] ?>
									</div>
									<?
								} else { ?>
									Отправить
									заявку
									<?
								}
								?>

							</button>
							<div>
								<div class="mfeedback" style='margin-bottom: .8rem'>
									<? if (!empty($arResult["ERROR_MESSAGE"])) {
										foreach ($arResult["ERROR_MESSAGE"] as $v)
											ShowError($v);
									}

									?>
								</div>

								<p class='feedback__form-privacy form-item'>
									Отправляя заявку Вы принимаете условия
									<a class='feedback__form-privacy-link form-item' href='/privacy.php'>Политики
										конфиденциальности</a>
								</p>
						</form>
					</div>
				</div>
				<?
				echo '<pre>';
				print_r($arResult["ERROR_MESSAGE"]);
				echo '</pre>';
				?>
			</div>
		</div>
	</div>
</section>