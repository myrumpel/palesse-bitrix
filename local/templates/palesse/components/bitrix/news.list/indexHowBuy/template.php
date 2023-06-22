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
<ol class="how-buy__list">

	<? foreach ($arResult["ITEMS"] as $Item): ?>

		<li class="how-buy__item">
			<div class="how-buy__item-inner">
				<h5 class="how-buy__item-title">
					<?= $arItem["NAME"]; ?>
				</h5>
				<div class="how-buy__item-props">
					<? foreach ($Item["PROPERTIES"]["indexHowBuyProp"]["VALUE"] as $Value): ?>
						<p class="how-buy__item-props-item">
							<?= $Value; ?>
						</p>
					<? endforeach; ?>
				</div>


				<p class="how-buy__item-text">
					<?= $Item["PROPERTIES"]["indexHowBuyText"]["VALUE"]; ?>
				</p>

			</div>
		</li>
		<!-- <?
		echo "<pre>";
		print_r($Item["PROPERTIES"]["indexHowBuyText"]["VALUE"]);
		echo "</pre>";
		?> -->
	<? endforeach; ?>
</ol>