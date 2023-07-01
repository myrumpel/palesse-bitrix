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
// print_r($arResult);
echo '</pre>';
?>
<? if ($arResult['ITEMS']): ?>
	<? foreach ($arResult["ITEMS"] as $Item): ?>
		<article class="spare-parts__content-item">
			<h4 class='spare-parts__content-subtitle'>
				<?= $Item['NAME']; ?>
			</h4>
			<div class="spare-parts__content-files">
				<? foreach ($Item['PROPERTIES']['spareDocs']['VALUE'] as $Key => $Val): ?>

					<a class='download-link' href='<?= CFile::GetPath($Val); ?>'
						download='<?= $Item['PROPERTIES']['SpareNameOfDocs']['VALUE'][$Key] ? $Item['PROPERTIES']['SpareNameOfDocs']['VALUE'][$Key] : ''; ?>'>
						<svg class='pdf-keeper'>
							<use class='pdf' xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-pdf'></use>
						</svg>
						<?= $Item['PROPERTIES']['SpareNameOfDocs']['VALUE'][$Key] ? $Item['PROPERTIES']['SpareNameOfDocs']['VALUE'][$Key] : ''; ?>
					</a>
				<? endforeach; ?>
			</div>
		</article>

	<? endforeach; ?>
<? endif; ?>