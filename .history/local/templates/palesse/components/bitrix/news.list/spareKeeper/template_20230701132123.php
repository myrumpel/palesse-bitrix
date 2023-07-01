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


		<a href='<?= $Item['DETAIL_PAGE_URL']; ?>'>
			<img class='catalog-filter__item-img' src='<?= $Item['PREVIEW_PICTURE']['SRC']; ?>' alt=''>
			<h4 class="catalog-filter__item-title">
				<?= $Item['NAME']; ?>
			</h4>

			<? foreach ($Item['PROPERTIES']['catalogPreviewDescription']['~VALUE'] as $Key => $Desc): ?>

				<p class="catalog-filter__item-description">

					<?= $Desc['TEXT'] ? $Desc['TEXT'] : ''; ?>
				</p>
			<? endforeach; ?>

		</a>
	</li>
<? endforeach; ?>

<?
echo '<pre>';
print_r($arResult);
echo '</pre>';
?>
<div class="catalog-filter__contents">
	<ul class='catalog-filter__contents-list'>
		<li class="catalog-filter__contents-item" id='combains-cereal'>
			<h3 class='spare-parts__content-title'>Зерноуборочные комбайны</h3>
			<article class="spare-parts__content-item">
				<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
				<div class="spare-parts__content-files">
					<a class='download-link' href='' download=''>
						<svg class='pdf-keeper'>
							<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
						</svg>
						Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
				</div>
			</article>

		</li>

	</ul>
</div>