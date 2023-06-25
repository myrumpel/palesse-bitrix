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


		<input type="text" name="service_name" value="<?= $arResult["AUTHOR_NAME"] ?>">


		<input type="text" name="service_phone" value="<?= $arResult["AUTHOR_PHONE"] ?>">


		<input type="text" name="service_kind" value="<?= $arResult["AUTHOR_KIND"] ?>">


		<input type="text" name="service_year" value="<?= $arResult["AUTHOR_YEAR"] ?>">


		<input type="text" name="service_job" value="<?= $arResult["AUTHOR_JOB"] ?>">


		<input type="text" name="service_company" value="<?= $arResult["AUTHOR_COMPANY"] ?>">


		<input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
	</form>
</div>