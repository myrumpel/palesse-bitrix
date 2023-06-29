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
					Комбайны
					<svg class='svg-list'>
						<use class='svg-list-item' xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-list'></use>
					</svg>
				</button>
				<div class="catalog-filter__spoller">
					<ol class="catalog-filter__spoller-content">
						<li class="catalog-filter__spoller-item">
							<button class="catalog-filter__buttons-item-btn" data-catalog="combains-cereal">

								Зерноуборочные
							</button>
						</li>
					<? endforeach; ?>

				</ol>
			</div>
		</li>

		<li class="catalog-filter__buttons-item">
			<button class="catalog-filter__buttons-item-btn" data-catalog="reapers">
				Жатки
			</button>
		</li>

	</ol>
<? endif; ?>