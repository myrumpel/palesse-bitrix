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

<? foreach ($arResult["ITEMS"] as $Item): ?>
	<section class="index-about">
		<div class="container-fluid">
			<div class="index-about__bg" style='background-image: url(<?= $Item['PREVIEW_PICTURE']['SRC']; ?>);'>
				<div class="container">
					<div class="index-about__inner">
						<div class="index-about__content">
							<h4 class="index-about__content-title">
								<?= $Item["NAME"]; ?>
							</h4>
							<p class="index-about__content-text">
								<?= $Item['PREVIEW_TEXT']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <?
	echo "<pre>";
	print_r($Item);
	echo "</pre>";
	?> -->
<? endforeach; ?>