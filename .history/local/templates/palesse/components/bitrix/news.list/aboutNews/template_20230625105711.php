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
	<section class="news">
		<div class="container">
			<div class="news__title">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "index",
						"PATH" => SITE_TEMPLATE_PATH . "/aboutIncludes/aboutNewsTitle.php"
					)
				); ?>
				Больше о&nbsp;нас&nbsp;в&nbsp;новостях
			</div>
			<div class="news__inner">
				<ul class="news__list">
					<? foreach ($arResult['ITEMS'] as $Item): ?>
						<li class="news__item"> <a class="news__item-link" href="<?= $Item['DETAIL_PAGE_URL']; ?>"> <img
									src="<?= $Item['PREVIEW_PICTURE']['SRC']; ?>" class="news__item-photo" alt="">
								<h3 class="news__item-title">
									<?= $Item['NAME']; ?>
								</h3>
								<div class="news__item-text">
									<?= $Item['PREVIEW_TEXT']; ?>
								</div>
							</a> </li>
					<? endforeach; ?>

				</ul>
			</div>
		</div>
	</section>
	<!-- <?
	echo '<pre>';
	print_r($arResult['ITEMS']);
	echo '</pre>';
	?> -->

<? endif; ?>

<!-- 
<div class="news-list">
<? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
	<?= $arResult["NAV_STRING"] ?><br />
<? endif; ?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
		<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
			<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img
						class="preview_picture"
						border="0"
						src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
						width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
						height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
						alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
						title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
						style="float:left"
						/></a>
			<? else: ?>
				<img
					class="preview_picture"
					border="0"
					src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
					width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
					height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
					alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
					title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
					style="float:left"
					/>
			<? endif; ?>
		<? endif ?>
		<? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
			<span class="news-date-time"><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
		<? endif ?>
		<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
			<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
				<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b><? echo $arItem["NAME"] ?></b></a><br />
			<? else: ?>
				<b><? echo $arItem["NAME"] ?></b><br />
			<? endif; ?>
		<? endif; ?>
		<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
			<? echo $arItem["PREVIEW_TEXT"]; ?>
		<? endif; ?>
		<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
			<div style="clear:both"></div>
		<? endif ?>
		<? foreach ($arItem["FIELDS"] as $code => $value): ?>
			<small>
			<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
			</small><br />
		<? endforeach; ?>
		<? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
			<small>
			<?= $arProperty["NAME"] ?>:&nbsp;
			<? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
				<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
			<? else: ?>
				<?= $arProperty["DISPLAY_VALUE"]; ?>
			<? endif ?>
			</small><br />
		<? endforeach; ?>
	</p>
<? endforeach; ?>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
	<br /><?= $arResult["NAV_STRING"] ?>
<? endif; ?>
</div> -->