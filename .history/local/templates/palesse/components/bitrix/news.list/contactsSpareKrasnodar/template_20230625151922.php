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
	<div class="district">
		<div class="district__title fz-20">

			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "index",
					"PATH" => SITE_TEMPLATE_PATH . "//contactsIncludes/contactsSpollerTitles/contactsSpollerTitleSpareKrasnodar.php"
				)
			); ?>

		</div>

		<div class="district__inner">
			<? foreach ($arResult['ITEMS'] as $Item): ?>


				<article class="card-item">
					<picture>
						<source srcset="<?= $Item['PREVIEW_PICTURE']['SRC'] ? $Item['PREVIEW_PICTURE']['SRC'] : ''; ?>"
							type="image/webp">
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

	</div>

<? endif; ?>