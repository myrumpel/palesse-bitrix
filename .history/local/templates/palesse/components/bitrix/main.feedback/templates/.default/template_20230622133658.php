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


<form action="<?= POST_FORM_ACTION_URI ?>" method="POST">
	<?= bitrix_sessid_post() ?>
	<div>

		<input type="text" name="Name" value="<?= $arResult["AUTHOR_NAME"] ?>">
	</div>
	<div>

		<input type="text" name="Phone" value="<?= $arResult["AUTHOR_EMAIL"] ?>">
	</div>

	<div>

		<textarea name="Topic" rows="5" cols="40"><?= $arResult["MESSAGE"] ?></textarea>
	</div>


	<!-- <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>"> -->
	<input type="submit" name="submit">
</form>
</div>