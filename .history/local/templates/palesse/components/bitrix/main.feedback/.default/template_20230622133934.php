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

		<input type="text" name="user_name">
	</div>
	<div>

		<input type="text" name="user_email">
	</div>

	<div>

		<input name="MESSAGE" rows="5" cols="40">
	</div>


	<!-- <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>"> -->
	<input type="submit" name="submit">
</form>
</div>