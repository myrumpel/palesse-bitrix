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

		<div class="service__inner">
			<div class="service__main">
				<div class="service__headline">
					<h1 class="service__headline-title">
						<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
					</h1>
					<h2 class="service__headline-subtitle">
						<?= $Item['PREVIEW_TEXT'] ? $Item['PREVIEW_TEXT'] : ''; ?>
					</h2>
					<a class="red-button-link service-btn" href="#feedback-form">
						<?= $Item['DETAIL_TEXT'] ? $Item['DETAIL_TEXT'] : ''; ?>
					</a>

				</div>
				<div class="service__main-bg-box">
					<div class="service__main-bg-two"
						style='background-image: url(<?= $Item['PREVIEW_PICTURE']['SRC'] ? $Item['PREVIEW_PICTURE']['SRC'] : ''; ?>);'>

					</div>
					<div class="service__main-bg-one"
						style='background-image: url(<?= $Item['DETAIL_PICTURE']['SRC'] ? $Item['DETAIL_PICTURE']['SRC'] : ''; ?>);'>

					</div>
				</div>
			</div>
		<? endforeach; ?>

	</div>
<? endif; ?>