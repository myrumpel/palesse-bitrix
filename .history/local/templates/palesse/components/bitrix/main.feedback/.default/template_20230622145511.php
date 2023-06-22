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

			<input type="text" name="user_name" value="<?= $arResult["NAME"] ?>">
		</div>


		<div class="mf-message">

			<input name="PHONE" type="tel" rows="5" cols="40">
			<?= $arResult["PHONE"] ?>
		</div>
		<div class="mf-message">

			<input name="MESSAGE" rows="5" cols="40">
			<?= $arResult["MESSAGE"] ?>
		</div>

		<input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
	</form>
</div>