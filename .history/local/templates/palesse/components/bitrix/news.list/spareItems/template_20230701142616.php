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
print_r($arResult);
echo '</pre>';
?>

<article class="spare-parts__content-item">
	<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
	<div class="spare-parts__content-files">
		<? foreach ($arResult["ITEMS"]['spareDocs']['VALUE'] as $Key => $Val): ?>

			<a class='download-link' href='<?= CFile::GetPath($Val); ?>' download=''>
				<svg class='pdf-keeper'>
					<use class='pdf' xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-pdf'></use>
				</svg>
				<?= $arResult["ITEMS"]['SpareNameOfDocs']['VALUE'][$Key] ? $arResult["ITEMS"]['SpareNameOfDocs']['VALUE'][$Key] : ''; ?>
			</a>
		<? endforeach; ?>
	</div>
</article>



<a class='download-link' href='<?= CFile::GetPath($Val); ?>'
	download='<?= $arResult["PROPERTIES"]['catalogDetailNameDocuments']['VALUE'][$Key] ? $arResult["PROPERTIES"]['catalogDetailNameDocuments']['VALUE'][$Key] : ''; ?>'>
	<svg class='pdf-keeper'>
		<use class='pdf' xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-pdf'></use>
	</svg>
	<?= $arResult["PROPERTIES"]['catalogDetailNameDocuments']['VALUE'][$Key] ? $arResult["PROPERTIES"]['catalogDetailNameDocuments']['VALUE'][$Key] : ''; ?>
</a>