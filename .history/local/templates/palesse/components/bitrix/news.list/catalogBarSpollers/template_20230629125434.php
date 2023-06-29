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



<ol class='catalog-filter__buttons-list'>
	<? if ($arResult['ITEMS']): ?>
		<? foreach ($arResult['ITEMS'] as $Item): ?>
			<?
			echo '<pre>';
			print_r($Item['DISPLAY_PROPERTIES']['catalogBarSpollers']);
			echo '</pre>';
			?>

			<li class="catalog-filter__buttons-item">
				<button class="catalog-filter__buttons-spoller">
					<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
					<svg class='svg-list'>
						<use class='svg-list-item' xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-list'></use>
					</svg>
				</button>
				<div class="catalog-filter__spoller" style='height: 100%;'>

					<ol class="catalog-filter__spoller-content">
						<li class="catalog-filter__spoller-item">
							<? foreach ($Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['VALUE'] as $Spoller): ?>
								<? foreach ($Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['DESCRIPTION'] as $SpollerDesc): ?>
									<button class="catalog-filter__buttons-item-btn" data-catalog="									<?= $SpollerDesc; ?>
">

										<?= $Spoller; ?>
									</button>
								<? endforeach; ?>
							<? endforeach; ?>
						</li>

					</ol>
				</div>
			</li>
		<? endforeach; ?>
	<? endif; ?>
	<li class="catalog-filter__buttons-item">
		<button class="catalog-filter__buttons-item-btn" data-catalog="reapers">
			Жатки
		</button>
	</li>

</ol>