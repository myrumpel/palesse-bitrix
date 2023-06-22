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

		<input type="text" name="Name" value="<?= $arResult["AUTHOR_NAME"] ?>">

		<input type="tel" name="Phone" value="<?= $arResult["AUTHOR_EMAIL"] ?>">

		<input name="Topic" rows="5" cols="40">

		<button type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">dsdsd</button>
	</form>
</div>