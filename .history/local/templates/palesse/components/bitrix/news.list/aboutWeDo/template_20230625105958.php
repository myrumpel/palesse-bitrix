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
<? if (!empty($arResult["ITEMS"])): ?>
	<section class="what-do">
		<div class="container">
			<h2 class="what-do__title">
				Что&nbsp;мы&nbsp;делаем?
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "index",
						"PATH" => SITE_TEMPLATE_PATH . "/aboutIncludes/aboutWhatWeDo.php"
					)
				); ?>

			</h2>
			<ol class="what-do__list">
				<? foreach ($arResult["ITEMS"] as $Item): ?>

					<li class="what-do__item"> <a class="what-do__link" href="/<?= $Item['DETAIL_TEXT']; ?>
">
							<div class="what-do__item-inner">
								<div class="what-do__item-title">

									<?= $Item['NAME']; ?>
								</div>
								<div class="what-do__item-content">
									<?= $Item['PREVIEW_TEXT']; ?>
								</div>
								<div class="what-do__item-arrow">
									<svg class='about-what-do-arrow-keeper about-what-do-arrow-absolute'>
										<use class='about-what-do-arrow'
											xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
									</svg>
								</div>
							</div>
						</a> </li>
				<? endforeach; ?>


			</ol>
		</div>
	</section>
<? endif; ?>