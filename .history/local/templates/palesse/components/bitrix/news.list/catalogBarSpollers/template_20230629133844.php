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
	<ol class='catalog-filter__buttons-list'>
		<? foreach ($arResult['ITEMS'] as $Item): ?>
			<li class="catalog-filter__buttons-item">
				<button class="catalog-filter__buttons-spoller">
					<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
					<svg class='svg-list'>
						<use class='svg-list-item' xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-list'></use>
					</svg>
				</button>
				<!-- <?
				echo '<pre>';
				print_r($Item['DISPLAY_PROPERTIES']);
				echo '</pre>';
				?> -->
				<div class="catalog-filter__spoller" style='height: 100%'>
					<ol class="catalog-filter__spoller-content">
						<? foreach ($Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['VALUE'] as $Key => $Val): ?>
							<li class="catalog-filter__spoller-item">
								<button class="catalog-filter__buttons-item-btn"
									data-catalog="<?= $arResult['ITEMS']['DISPLAY_PROPERTIES']['catalogBarSpollersData']['VALUE'][$Key]; ?>">

									<?= $Val ? $Val : ''; ?>
								</button>
							</li>
						<? endforeach; ?>

					</ol>
				</div>
			<? endforeach; ?>
		</li>

		<li class="catalog-filter__buttons-item">
			<button class="catalog-filter__buttons-item-btn" data-catalog="reapers">
				Жатки
			</button>
		</li>

	</ol>
<? endif; ?>