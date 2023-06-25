<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news",
	"",
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("", ""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("", ""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "aboutNews",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("", ""),
		"LIST_PROPERTY_CODE" => array("", ""),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/test/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("detail" => "#SECTION_ID#/#ELEMENT_ID#/", "news" => "", "section" => "#SECTION_ID#"),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="news">
	<div class="container">
		<div class="news__title">
			Больше о&nbsp;нас&nbsp;в&nbsp;новостях
		</div>
		<div class="news__inner">
			<ul class="news__list">
				<li class="news__item"> <a class="news__item-link" href="/news-detail.html"> <img src="img/news/news1.jpg"
							class="news__item-photo" alt="">
						<h3 class="news__item-title">Выставка «AGRO KAVKAZ–2023»</h3>
						<div class="news__item-text">
							Торговый Дом&nbsp;«Палессе-Юг» приглашает вас&nbsp;посетить выставку «AGRO KAVKAZ–2023», которая будет
							проходить 1–3&nbsp;февраля 2023&nbsp;г. в&nbsp;МВЦ&nbsp;«МинВодыЭкспо».
						</div>
					</a> </li>
				<li class="news__item"> <a class="news__item-link" href="/news-detail.html"> <img src="img/news/news2.jpg"
							class="news__item-photo" alt="">
						<h3 class="news__item-title">Зимняя конференция прямого посева 2023</h3>
						<div class="news__item-text">
							Торговый Дом&nbsp;«Палессе-Юг» приглашает вас&nbsp;посетить экспозицию нашей компании 26–27&nbsp;января
							2023&nbsp;г.
						</div>
					</a> </li>
				<li class="news__item"> <a class="news__item-link" href="/news-detail.html"> <img src="img/news/news3.jpg"
							class="news__item-photo" alt="">
						<h3 class="news__item-title">ЮГАГРО&nbsp;— 2022</h3>
						<div class="news__item-text">
							Торговый Дом&nbsp;«Палессе-Юг» приглашает вас&nbsp;посетить экспозицию нашей компании
							на&nbsp;агропромышленной выставке «ЮГАГРО-2022»
						</div>
					</a> </li>
			</ul>
		</div>
	</div>
</section> <br>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?> -->