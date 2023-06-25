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


	<div class="district__inner">
		<? foreach ($arResult['ITEMS'] as $Item): ?>


			<article class="card-item">
				<picture>
					<source srcset="<?= $Item['PREVIEW_PICTURE']['SRC'] ? $Item['PREVIEW_PICTURE']['SRC'] : ''; ?>" type="image/webp">
					<img class="card-item__photo" src="<?= $Item['DETAIL_PICTURE']['SRC'] ? $Item['DETAIL_PICTURE']['SRC'] : ''; ?>"
						alt="">
				</picture>
				<h4 class="card-item__name">
					<p>
						<?= $Item['PROPERTIES']['contactsNameLittle']['VALUE']; ?>
					</p>
					<p>
						<?= $Item['PROPERTIES']['contactsLastNameLittle']['VALUE']; ?>
					</p>
				</h4>
				<p class="card-item__position">
					<?= $Item['PREVIEW_TEXT'] ? $Item['PREVIEW_TEXT'] : ''; ?>
				</p>
				<a class="card-item__phone"
					href="tel:<?= $Item['PROPERTIES']['contactsNumberHref']['VALUE'] ? $Item['PROPERTIES']['contactsNumberHref']['VALUE'] : '' ?>"><?= $Item['DETAIL_TEXT'] ? $Item['DETAIL_TEXT'] : ''; ?></a>
			</article>

		<? endforeach; ?>



	</div>

<? endif; ?>