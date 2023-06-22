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
<!-- <div class="mfeedback">
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
	?> -->



<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
	<?= bitrix_sessid_post() ?>
	<div class="mf-name">

		<input type="text" name="Name" value="<?= $arResult["AUTHOR_NAME"] ?>">
	</div>
	<div class="mf-email">

		<input type="text" name="Phone" value="<?= $arResult["AUTHOR_PHONE"] ?>">
	</div>

	<div class="mf-message">

		<input name="Topic" rows="5" cols="40">
		<?= $arResult["MESSAGE"] ?>
	</div>


	<input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
</form>
</div>