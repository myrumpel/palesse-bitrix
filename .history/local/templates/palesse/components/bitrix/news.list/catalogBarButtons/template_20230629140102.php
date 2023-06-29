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
<? if ($arResult['ITEMS']): ?>
	<? foreach ($arResult['ITEMS'] as $Item): ?>
		<li class="catalog-filter__buttons-item">
			<button class="catalog-filter__buttons-item-btn" data-catalog="<?= $Item['PREVIEW_TEXT']; ?>">
				<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
			</button>
		</li>
	<? endforeach; ?>
<? endif; ?>