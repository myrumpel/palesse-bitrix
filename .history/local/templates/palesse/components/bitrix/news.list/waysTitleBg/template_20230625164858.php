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
<? if (!empty($arResult['ITEMS'])): ?>
	<!-- <? foreach ($arResult['ITEM'] as $Item): ?> -->
		<div class="ways__face-title-photo">
			<h1 class="ways__face-title">
				<?= $Item['NAME'] ? $Item['NAME'] : '' ?>
				Процесс покупки техники
			</h1>
			<div class="ways__face-photo">
				<img src="<?= $arResult['ITEMS']['PREVIEW_PICTURE']['SRC'] ? $arResult['ITEMS']['PREVIEW_PICTURE']['SRC'] : '' ?>"
					alt="">
			</div>
		</div>
		<!-- <? endforeach; ?> -->
<? endif; ?>