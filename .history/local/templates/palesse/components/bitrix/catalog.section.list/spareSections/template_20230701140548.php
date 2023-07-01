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
// print_r($arResult['SECTIONS']);
echo '</pre>';
?>
<? if ($arResult['SECTIONS']): ?>
	<div class="catalog-filter__contents">
		<ul class='catalog-filter__contents-list'>
			<? foreach ($arResult['SECTIONS'] as $Section): ?>
				<li class="catalog-filter__contents-item" id='<?= $Section['NAME'] ? $Section['NAME'] : ''; ?>'>
					<h3 class='spare-parts__content-title'>
						<?= $Section['DESCRIPTION'] ? $Section['DESCRIPTION'] : ''; ?>
					</h3>

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
			<? endforeach; ?>

		</ul>
	</div>
<? endif; ?>