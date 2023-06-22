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
<section class="index-about-numbers">
	<div class="container">

		<ul class="index-about-numbers__inner">
			<? foreach ($arResult["ITEMS"] as $Item): ?>

				<li class="index-about-numbers__item">
					<div class="index-about-numbers__item-title"><span class='about__number-run '
							data-numberrun='<?= $Item["NAME"]; ?>'>0</span>+
					</div>
					<div class="index-about-numbers__item-text">
						<?= $Item["PREVIEW_TEXT"]; ?>
					</div>
				</li>

			<? endforeach; ?>
		</ul>
	</div>
</section>
<!-- <?
echo "<pre>";
print_r($Item);
echo "</pre>";
?> -->