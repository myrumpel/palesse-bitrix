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
						<input class="feedback__input feedback__name input-field-index<? if (
							$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
							$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
							$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
						) { ?> red-placeholder 
									<?
						} ?>" maxlength='40' id='feedback-name' type="text" name="service_name" <? if (
						 	$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
						 	$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
						 	$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
						 ) { ?> style="border: 1px solid #de4545;"
							placeholder='Укажите имя' <?
						 } else { ?> style="border: 1px solid #4a4f59" <? } ?> type="text" name='Name'
							placeholder='Имя'>
					</label>

					<label for='feedback-phone' class='feedback-label service-fomr-item'>
						<input class="feedback__input feedback__phone input-field-index <? if (
							$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
							$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
							$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона' ||
							$arResult["ERROR_MESSAGE"][3] === 'Укажите номер телефона'
						) { ?> red-placeholder 
									<?
						} ?>" id='feedback-phone' type="tel" name="service_phone" maxlength='20' <? if (
						 	$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
						 	$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
						 	$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона'
						 ) { ?>
							style="border: 1px solid #de4545;" placeholder='Укажите номер телефона' <?
						 } else { ?>
								style="border: 1px solid #4a4f59" <? } ?> placeholder='Телефон'>
					</label>
					<label for='tech-kind' class='feedback-label service-fomr-item'>
						<input class="feedback__input  input-field-index " id='tech-kind' type="text" name="service_kind"
							maxlength='50'>
					</label>
					<label for='tech-date' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index " id='tech-date' type="text" name="service_year"
							maxlength='20'>
					</label>
					<label for='tech-work' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index <? if (
							$arResult["ERROR_MESSAGE"][0] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][1] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][2] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][3] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][4] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][5] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][6] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][7] === 'Укажите требуемые работы'
						) { ?> red-placeholder 
									<?
						} ?>" id='tech-work' type="text" name="service_job" maxlength='50' <? if (
						 	$arResult["ERROR_MESSAGE"][0] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][1] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][2] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][3] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][4] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][5] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][6] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][7] === 'Укажите требуемые работы'
						 ) { ?> style="border: 1px solid #de4545;" placeholder='Укажите требуемые работы' <?
						 } else { ?> style="border: 1px solid #4a4f59" <? } ?> placeholder='Требуемые работы'>
					</label>
					<label for='tech-farm' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index <? if (
							$arResult["ERROR_MESSAGE"][0] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][1] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][2] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][3] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][4] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][5] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][6] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][7] === 'Укажите хозяйство'
						) { ?> red-placeholder 
									<?
						} ?>" id='tech-farm' type="text" name="service_company" maxlength='50' <? if (
						 	$arResult["ERROR_MESSAGE"][0] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][1] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][2] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][3] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][4] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][5] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][6] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][7] === 'Укажите хозяйство'
						 ) { ?> style="border: 1px solid #de4545;"
							placeholder='Укажите хозяйство' <?
						 } else { ?> style="border: 1px solid #4a4f59" <? } ?>
							placeholder='Название хозяйства'>
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