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

									МЫ — ЛИДЕРЫ
								</h4>
								<div class="about-leaders__content-text">
									<p class=''>За годы работы нас выбрали
										<?= $Item['PROPERTIES']; ?>


									</p>
									<p class=''><span>711</span>
										сельхозтоваропроизводителей
										при обновлении комбайнового парка,</p>
									<p class=''><span>685</span>  сельхозтоваропроизводителей при приобретении
										тракторов, более</p>
									<p class=''><span>815</span>
										сельхозпроизводителей, приобретавших прочую технику.</p>
								</div>
								<?
								echo '<pre>';
								print_r($Item["PROPERTIES"]);
								echo '</pre>';
								?>
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

<?
echo '<pre>';
print_r($arResult['ITEMS']['PROPERTIES']);
echo '</pre>';
?>








<?
$this->setFrameMode(true);
?>
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
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img class="preview_picture" border="0"
							src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>"
							height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
							title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" /></a>
				<? else: ?>
					<img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
						width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>"
						alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
						style="float:left" />
				<? endif; ?>
			<? endif ?>
			<? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
				<span class="news-date-time">
					<? echo $arItem["DISPLAY_ACTIVE_FROM"] ?>
				</span>
			<? endif ?>
			<? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
					<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><b>
							<? echo $arItem["NAME"] ?>
						</b></a><br />
				<? else: ?>
					<b>
						<? echo $arItem["NAME"] ?>
					</b><br />
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
				<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;
				<?= $value; ?>
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
		<br />
		<?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</div>