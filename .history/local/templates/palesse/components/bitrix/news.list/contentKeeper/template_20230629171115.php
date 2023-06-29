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
<? foreach ($arResult['ITEMS'] as $Item): ?>
	<li class="catalog-filter__item">
		<?
		echo '<pre>';
		print_r($Item['DISPLAY_PROPERTIES']);
		echo '</pre>';
		?>

		<a href='/catalog-detail.html'>
			<img class='catalog-filter__item-img' src='<?= $Item['PREVIEW_PICTURE']['SRC']; ?>' alt=''>
			<h4 class="catalog-filter__item-title">
				<?= $Item['NAME']; ?>
			</h4>

			<p class="catalog-filter__item-description">
				<!-- <?= $Item['DISPLAY_PROPERTIES']['previewDesc']['VALUE']; ?> -->
			</p>

		</a>
	</li>
<? endforeach; ?>