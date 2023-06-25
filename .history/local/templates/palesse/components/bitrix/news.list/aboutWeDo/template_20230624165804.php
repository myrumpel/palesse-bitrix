<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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



<section class="what-do">
	<?if(!empty($arResult['ITEMS'])):?>
		<?endeforeach;?>
		<?endeif;?>
		<div class="container">
			<h2 class="what-do__title">
				Что&nbsp;мы&nbsp;делаем? </h2>
				<?foreach($arResult['ITEMS'] as $Item):?>
				<ol class="what-do__list">
			<li class="what-do__item"> <a class="what-do__link" href="/ways.html">
					<div class="what-do__item-inner">
						<div class="what-do__item-title">
							Продаём
						</div>
						<div class="what-do__item-content">
							Мы&nbsp;реализуем сельскохозяйственную технику: зерно&nbsp;— и&nbsp;кормоуборочных комбайнов, тракторов
							различных марок, почвообрабатывающих орудий, а&nbsp;также техники предназначенной для&nbsp;прямого посева
							и&nbsp;возделывания культур.
						</div>
						<div class="what-do__item-arrow">
						</div>
					</div>
				</a> </li>
			<li class="what-do__item"> <a class="what-do__link" href="/service.html">
					<div class="what-do__item-inner">
						<div class="what-do__item-title">
							Гарантируем
						</div>
						<div class="what-do__item-content">
							<ol class="what-do__item-content-list">
								<li class="what-do__item-content-item">Досборку новой техники «под&nbsp;ключ», её&nbsp;обкатка
									в&nbsp;строгом соответствии с&nbsp;регламентом, утверждённым заводом-изготовителем,
									как&nbsp;на&nbsp;базе сервисный центр, так&nbsp;и&nbsp;на&nbsp;территории потребителя;</li>
								<li class="what-do__item-content-item">Бесплатное проведение инструктажа механизаторов, консультативная
									помощь в&nbsp;технических и&nbsp;эксплуатационных вопросах.</li>
								<li class="what-do__item-content-item"> Доставка запасных частей «в&nbsp;поле» в&nbsp;период уборки.
								</li>
								<li class="what-do__item-content-item"> Проведение регламентного технического обслуживания; </li>
								<li class="what-do__item-content-item"> Постгарантийное обслуживание техники. </li>
							</ol>
						</div>
						<div class="what-do__item-arrow">
						</div>
					</div>
				</a> </li>
			<li class="what-do__item"> <a class="what-do__link" href="/spare-parts.html">
					<div class="what-do__item-inner">
						<div class="what-do__item-title">
							Обеспечиваем
						</div>
						<div class="what-do__item-content">
							На&nbsp;нашем складе представлен широкий выбор запасных частей. Специалисты всегда готовы
							проконсультировать вас&nbsp;по&nbsp;вопросам подбора и&nbsp;покупки запчастей
							для&nbsp;сельскохозяйственной техники.
						</div>
						<div class="what-do__item-arrow">
						</div>
					</div>
				</a> </li>
		</ol>
	</div>
</section>



<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
