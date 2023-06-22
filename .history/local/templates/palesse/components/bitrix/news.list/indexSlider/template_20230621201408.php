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
<div class="main-part__swiper">
	<div class="index-swiper">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			<!-- Slides -->


			<?php foreach ($arResult["ITEMS"] as $Item): ?>
				<article class="swiper-slide local-index" style='max-height: 21rem;'
					data-slider='<?= $Item["PROPERTIES"]["dataslider"]["VALUE"] ?>'>
					<a href='/catalog.php'>
						<h5 class='swiper-slide__title'>
							<?= $Item['NAME']; ?>
						</h5>
						<img class='swiper-slide__img' src='<?= $Item["PREVIEW_PICTURE"]["SRC"] ?>' alt='slide'>
					</a>
				</article>

			<? endforeach; ?>
		</div>

		<!-- If we need navigation buttons -->
	</div>
</div>