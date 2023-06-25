<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?><? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "DETAIL_TEXT", ""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "aboutWeDo",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("", ""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "",
		"STRICT_SECTION_CHECK" => "N"
	)
); ?><br>
<br>
<br>
<br>
<br>
<br>
<section class="what-do">
	<div class="container">
		<h2 class="what-do__title">
			Что&nbsp;мы&nbsp;делаем? </h2>
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
</section> <br>
<br>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>