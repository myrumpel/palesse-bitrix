<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
echo '<pre>';
// print_r($arResult['ITEMS']);
echo '</pre>';
?>
<? if (!empty($arResult['ITEMS'])): ?>
	<div class="feedback-tech__photo">
		<? foreach ($arResult['ITEMS'] as $Item): ?>
			<img src='<?= $Item['PREVIEW_PICTURE']['SRC']; ?>' alt=''>
		<? endforeach; ?>
	</div>
<? endif; ?>