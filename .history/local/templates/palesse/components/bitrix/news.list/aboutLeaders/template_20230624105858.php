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
?>


<? if (!empty($arResult['ITEMS'])): ?>
	<section class="about-leaders">
		<div class="container-fluid">
			<? foreach ($arResult['ITEMS'] as $Item): ?>
				<div class="about-leaders__bg" style='background-image: url(									<?= $Item['PREVIEW_PICTURE']['SRC']; ?>
);'>
					<div class="container">
						<div class="about-leaders__inner">
							<div class="about-leaders__content">
								<h4 class="about-leaders__content-title">
									<?= $Item['NAME']; ?>
								</h4>
								<div class="about-leaders__content-text">
									<p class=''>
										<?= $Item["PROPERTIES"]["aboutLeadersSubtitle"]["VALUE"]; ?>


									</p>
									<p class=''><span>
											<?= $Item["PROPERTIES"]["aboutLeadersNumber1"]["VALUE"]; ?>

										</span>
										<?= $Item["PROPERTIES"]["aboutLeadersRow1"]["VALUE"]; ?>


									</p>
									<p class=''><span>
											<?= $Item["PROPERTIES"]["aboutLeadersNumber2"]["VALUE"]; ?>

										</span>

										<?= $Item["PROPERTIES"]["aboutLeadersRow2"]["VALUE"]; ?>

									</p>
									<p class=''><span>
											<?= $Item["PROPERTIES"]["aboutLeadersNumber3"]["VALUE"]; ?>

										</span>

										<?= $Item["PROPERTIES"]["aboutLeadersRow3"]["VALUE"]; ?>

									</p>
								</div>

							</div>
						</div>
					</div>

				<? endforeach; ?>
			</div>
		</div>
		<div class="container">
			<div class="mob-container"></div>
		</div>
	</section>
<? endif; ?>