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


	<div class="catalog-filter__contents">
		<ol class='catalog-filter__contents-list'>
			<? foreach ($arResult['ITEMS'] as $Item): ?>
				<?
				echo '<pre>';
				// print_r();
				echo '</pre>';
				?>

				<? foreach ($Item['DISPLAY_PROPERTIES']['catalogContentData']['VALUE'] as $Val): ?>

					<li class="catalog-filter__contents-item" id='<?= $Val; ?>'>
						<ol class='catalog-filter__items-list'>
							<li class="catalog-filter__item">
								<a href='/catalog-detail.html'>
									<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
									<h4 class="catalog-filter__item-title">
										saddassadasda sddsaadsads
									</h4>
									<p class="catalog-filter__item-description">
										<strong>Двигатель:</strong>
										530 л.с.
									</p>
									<p class="catalog-filter__item-description">
										<strong>Тип МСУ:</strong>
										гибридный
									</p>
									<p class="catalog-filter__item-description">
										<strong>Бункер:</strong>
										10,5 м3
									</p>
									<p class="catalog-filter__item-description">
										<strong>Общая площадь очистки:</strong>
										5,8 м2
									</p>
								</a>
							</li>


						</ol>

					</li>
				<? endforeach; ?>

			<? endforeach; ?>
			</ul>
	</div>
<? endif; ?>