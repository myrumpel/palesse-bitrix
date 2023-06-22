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

			<input type="text" name="Name" value="Ванечка">
		</div>
		<div class="mf-email">
			<div class="mf-text">
				<?= GetMessage("MFT_EMAIL") ?>
				<? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])): ?><span
					class="mf-req">*</span>
				<? endif ?>
			</div>
			<input type="tel" name="Phone" value="123">
			<input type="tel" name="Topic" value="123">
		</div>


		<input name="Topic" rows="5" cols="40">
		<?= $arResult["MESSAGE"] ?></input>
</div>


<button type="submit" name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>">subchik </button>
</form>
</div>