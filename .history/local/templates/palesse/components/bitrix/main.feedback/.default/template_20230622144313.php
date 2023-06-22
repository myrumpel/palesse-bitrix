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

			<input type="text" name="user_name" value="<?= $arResult["NAME"] ?>">
		</div>
		<div class="mf-email">

			<input type="text" name="user_phone" value="<?= $arResult["PHONE"] ?>">
		</div>

		<div class="mf-message">

			<input name="MESSAGE" rows="5" cols="40">
			<?= $arResult["MESSAGE"] ?>
		</div>
		<!-- 
	<? if ($arParams["USE_CAPTCHA"] == "Y"): ?>
	<div class="mf-captcha">
		<div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
		<input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<? endif; ?> -->
		<!-- <input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>"> -->
		<input type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">
	</form>
	sfddfsfdsfsdfsd
</div>