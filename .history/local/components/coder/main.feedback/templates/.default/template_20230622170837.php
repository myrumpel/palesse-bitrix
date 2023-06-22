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
		<div class="mf-email">

			<input type="tel" name="Phone">
		</div>

		<div class="mf-message">

			<input type="text" name="Topic" rows="5" cols="40">
		</div>

		<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
		<button type="submit" name="submit" subchik></button>
	</form>
</div>