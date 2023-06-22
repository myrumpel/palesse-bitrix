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
<ul class="benefit__list">
	<?php foreach ($arResult['ITEMS'] as $Item): ?>
		<li class="benefit__item">
			<a class='benefit__item-link' href='/ways.php'>

				<?= $Item["DETAIL_TEXT"]; ?>
				<!-- <?php foreach ($arResult['ITEMS']['DETAIL_TEXT'] as $Svg): ?> -->
					<!-- <? endforeach; ?> -->
				<!-- <svg class='benefit-keeper-svg'>
					<use class='benefit-svg'>
					</use>
				</svg> -->
				<div class="benefit__item-title">
					<?= $Item["NAME"]; ?>
				</div>
				<div class="benefit__item-text">
					<?= $Item['PREVIEW_TEXT']; ?>
				</div>
				<svg class='benefit-keeper-arrow'>
					<use class='benefit-svg-arrow'
						xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'>
					</use>
				</svg>

			</a>
		</li>
		<!-- <?
		echo "<pre>";
		print_r(
			$Item["DETAIL_TEXT"]
		);
		echo "</pre>";
		?> -->
	<? endforeach; ?>

</ul>