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
	<!-- <div class="feedback-container container"> -->

	<div class="feedback-container_target">
		<div class="container">
			<div class="feedback__content  form-mobile-size-content">
				<form action="<?= POST_FORM_ACTION_URI ?>" method="POST" class="feedback__form" id='feedback-form'>
					<?= bitrix_sessid_post() ?>

					<h4 class="feedback__form-title form-item">
						Остались вопросы?

						<p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>

					</h4>



					<label for='feedback-name' class='feedback-label form-item
							'>

						<input class="feedback__input feedback__name input-field-index
								<? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
								) { ?> red-placeholder 
									<?
								} ?>
								" maxlength='40' id='feedback-name' <? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
								) { ?> style="border: 1px solid #de4545;" placeholder='Укажите имя' <?
								} else { ?>
							style="border: 1px solid #4a4f59" <? } ?> type="text" name='Name' placeholder='Имя'>

					</label>

					<label for='feedback-ph one' class='feedback-label form-item
							'>
						<input class="feedback__input feedback__phone input-field-index
								<? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона' ||
									$arResult["ERROR_MESSAGE"][3] === 'Укажите номер телефона'
								) { ?> red-placeholder 
									<?
								} ?>" id='feedback-phone' type="tel" type="text" name='Phone' <? if (
								 	$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
								 	$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
								 	$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона'
								 ) { ?> style="border: 1px solid #de4545;"
							placeholder='Укажите номер телефона' <?
								 } else { ?> style="border: 1px solid #4a4f59" <? } ?>
							placeholder='Телефон'>

					</label>
					<label for='feedback-topic' class='feedback-label form-item'>
						<input class="feedback__input feedback__name input-field-index
								
								<? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите тему обращения (от 8 символов)' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите тему обращения (от 8 символов)' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите тему обращения (от 8 символов)'
								) { ?> red-placeholder 
									<?
								} ?>
								" maxlength='80' name='Topic' id='feedback-topic' <? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите тему обращения (от 8 символов)' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите тему обращения (от 8 символов)' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите тему обращения (от 8 символов)'
								) { ?>
								style="border: 1px solid #de4545;" placeholder='Укажите тему (от 8 символов)' <?
								} else { ?>
								style="border: 1px solid #4a4f59" <? } ?> placeholder='Тема обращения'>
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


						<p class='feedback__form-privacy form-item'>
							Отправляя заявку Вы принимаете условия
							<a class='feedback__form-privacy-link form-item' href='/privacy.php'>Политики
								конфиденциальности</a>
						</p>
				</form>
			</div>
		</div>

	</div>
	<!-- </div> -->

	<div class="container-fluid">
		<div class="feedback__bg"
			style='background-image: url(<?= SITE_TEMPLATE_PATH; ?>/assets/img/pages-bg-pictures/bot-form.jpg);'>
			<div class="container">
				<div class="feedback__inner">
					<div class="feedback__content  form-big-size-content">
						<form action="<?= POST_FORM_ACTION_URI ?>" method="POST" class="feedback__form" id='feedback-form'>
							<?= bitrix_sessid_post() ?>

							<h4 class="feedback__form-title form-item">
								Остались вопросы?

								<p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>

							</h4>



							<label for='feedback-name' class='feedback-label form-item
							'>

								<input class="feedback__input feedback__name input-field-index
								<? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
								) { ?> red-placeholder 
									<?
								} ?>
								" maxlength='40' id='feedback-name' <? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
								) { ?> style="border: 1px solid #de4545;" placeholder='Укажите имя' <?
								} else { ?>
									style="border: 1px solid #4a4f59" <? } ?> type="text" name='Name' placeholder='Имя'>

							</label>

							<label for='feedback-ph one' class='feedback-label form-item
							'>
								<input class="feedback__input feedback__phone input-field-index
								<? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона' ||
									$arResult["ERROR_MESSAGE"][3] === 'Укажите номер телефона'
								) { ?> red-placeholder 
									<?
								} ?>" id='feedback-phone' type="tel" name='Phone' <? if (
								 	$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
								 	$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
								 	$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона'
								 ) { ?> style="border: 1px solid #de4545;"
									placeholder='Укажите номер телефона' <?
								 } else { ?> style="border: 1px solid #4a4f59" <? } ?>
									placeholder='Телефон'>

							</label>
							<label for='feedback-topic' class='feedback-label form-item'>
								<input class="feedback__input feedback__name input-field-index
								
								<? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите тему обращения (от 8 символов)' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите тему обращения (от 8 символов)' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите тему обращения (от 8 символов)'
								) { ?> red-placeholder 
									<?
								} ?>
								" maxlength='80' type="text" name='Topic' id='feedback-topic' <? if (
									$arResult["ERROR_MESSAGE"][0] === 'Укажите тему обращения (от 8 символов)' ||
									$arResult["ERROR_MESSAGE"][1] === 'Укажите тему обращения (от 8 символов)' ||
									$arResult["ERROR_MESSAGE"][2] === 'Укажите тему обращения (от 8 символов)'
								) { ?>
									style="border: 1px solid #de4545;" placeholder='Укажите тему (от 8 символов)' <?
								} else { ?>
										style="border: 1px solid #4a4f59" <? } ?> placeholder='Тема обращения'>
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


								<p class='feedback__form-privacy form-item'>
									Отправляя заявку Вы принимаете условия
									<a class='feedback__form-privacy-link form-item' href='/privacy.php'>Политики
										конфиденциальности</a>
								</p>
						</form>
					</div>
				</div>
				<!-- <?
				echo '<pre>';
				print_r($arResult["ERROR_MESSAGE"]);
				echo '</pre>';
				?> -->
			</div>
		</div>
	</div>
</section>