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

<? if (!empty($arResult['ITEMS'])): ?>
	<? foreach ($arResult['ITEMS'] as $Item): ?>

		<section class="about-leaders service-trust">

			<div class="container-fluid">
				<div class="about-leaders__bg service-trust__bg"
					style='background-image: url(<?= $Item['PREVIEW_PICTURE']['SRC'] ? $Item['PREVIEW_PICTURE']['SRC'] : ''; ?>);'>
					<div class="container">
						<div class="about-leaders__inner">
							<div class="service-trust__content">
								<h4 class="service-trust__content-title">
									<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
								</h4>
								<div class="service-trust__content-text">
									<p class="service-trust__text">
										<?= $Item['PREVIEW_TEXT'] ? $Item['PREVIEW_TEXT'] : ''; ?>
									</p>
									<p class="service-trust__red-text">
										<?= $Item['DETAIL_TEXT'] ? $Item['DETAIL_TEXT'] : ''; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="mob-container"></div>
			</div>
		<? endforeach; ?>

	</section>
<? endif; ?>