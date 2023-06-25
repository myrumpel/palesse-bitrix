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
// print_r($arResult['ITEMS']);
echo '</pre>';
?>
<? if (!empty($arResult['ITEMS'])): ?>

	<section class="scheme" id="scheme">
		<h2 class="scheme__title">Схемы финансирования</h2>
		<div class="scheme__inner">

			<? foreach ($arResult['ITEMS'] as $Item): ?>
				<article class="scheme__item">
					<img src="<?= $Item['PREVIEW_PICTURE']['SRC'] ? $Item['PREVIEW_PICTURE']['SRC'] : ''; ?>" class="scheme__item-photo"
						alt="">
					<div class="scheme__item-title">
						<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
					</div>
					<ol class="scheme__item-props">
						<? foreach ($Item['PROPERTIES']['waysSchemeProps']['VALUE'] as $Prop): ?>
							<li class="scheme__item-prop">

								<?= $Prop ? $Prop : ''; ?>
							</li>
						<? endforeach; ?>

					</ol>
					<div class="scheme__item-content">
						<p class="scheme__item-text">
							<?= $Item['PREVIEW_TEXT'] ? $Item['PREVIEW_TEXT'] : ''; ?>
						</p>

					</div>
					<a class="ways-link-to-form" href="#feedback">Нужна помощь с выбором</a>
				</article>
			<? endforeach; ?>

		</div>
		<div class="scheme__center-link-keeper">
			<a class="scheme__center-link" href="#feedback">Нужна помощь с выбором</a>
		</div>
	</section>
<? endif; ?>