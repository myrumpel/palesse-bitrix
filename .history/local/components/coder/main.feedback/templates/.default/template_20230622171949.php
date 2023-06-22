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
			<div class="mf-text">
				<?= GetMessage("MFT_NAME") ?>
				<? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])): ?><span
					class="mf-req">*</span>
				<? endif ?>
			</div>
			<input type="text" name="user_name">
		</div>
		<div class="mf-phone">
			<div class="mf-text">
				<?= GetMessage("MFT_PHONE") ?>
				<? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])): ?><span
					class="mf-req">*</span>
				<? endif ?>
			</div>
			<input type="text" name="user_phone">
		</div>
		<div class="mf-email">
			<div class="mf-text">
				<?= GetMessage("MFT_EMAIL") ?>
				<? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?><span
					class="mf-req">*</span>
				<? endif ?>
			</div>
			<input type="text" name="user_email">
		</div>

		<div class="mf-message">
			<div class="mf-text">
				<?= GetMessage("MFT_MESSAGE") ?>
				<? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])): ?><span
					class="mf-req">*</span>
				<? endif ?>
			</div>
			<input type='text' name="MESSAGE" rows="5" cols="40">
		</div>


		<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
		<button type="submit" name="submit">click</button>
	</form>
</div>