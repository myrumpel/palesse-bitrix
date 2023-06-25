<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Способы приобретения");
?>

<section class="ways">
	<div class="container">
		<div class="ways__inner">
			<div class="ways__face">
				<div class="ways__face-title-photo">

					<h1 class='ways__face-title'>
						Процесс покупки техники

					</h1>

					<div class="ways__face-photo">
						<img src='img/pages-bg-pictures/ways-main.jpg' alt=''>
					</div>
				</div>
				<div class="ways__face-line">
					<? $APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"waysMainFace",
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
							"CACHE_TYPE" => "A",
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array(
								0 => "NAME",
								1 => "PREVIEW_TEXT",
								2 => "DETAIL_TEXT",
								3 => "",
							),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "11",
							"IBLOCK_TYPE" => "waysMainFace",
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
							"PROPERTY_CODE" => array(
								0 => "waysLink",
								1 => "",
							),
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "Y",
							"SHOW_404" => "N",
							"SORT_BY1" => "SORT",
							"SORT_BY2" => "",
							"SORT_ORDER1" => "ASC",
							"SORT_ORDER2" => "",
							"STRICT_SECTION_CHECK" => "N",
							"COMPONENT_TEMPLATE" => "waysMainFace"
						),
						false
					); ?>
				</div>
			</div>


			<section class="scheme" id='scheme'>
				<h2 class='scheme__title'>Схемы финансирования</h2>
				<div class="scheme__inner">
					<div class="scheme__item">
						<img class='scheme__item-photo' src='img/methods/ros-lizing.png' alt=''>
						<div class="scheme__item-title">Росагролизинг</div>
						<ol class="scheme__item-props">
							<li class='scheme__item-prop'>от 0%</li>
							<li class='scheme__item-prop'>до 8 лет</li>
							<li class='scheme__item-prop'>Первоначальный взнос от 0%</li>
						</ol>
						<div class="scheme__item-content">
							<p class='scheme__item-text'>Предлагает предприятиям АПК универсальные лизинговые решения для обновления
								парка техники.
							</p>
							<p class='scheme__item-text'>Есть возможность выбора сезонного графика платежей.
								Рассмотрение по двум документам</p>
						</div>
						<a class='ways-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

					</div>
					<div class="scheme__item">
						<div class="scheme__item-photo">
							<img class='scheme__item-photo' src='img/methods/credit.png' alt=''>
						</div>
						<div class="scheme__item-title">Льготный кредит </div>
						<ol class="scheme__item-props">
							<li class='scheme__item-prop'>от 0%</li>
							<li class='scheme__item-prop'> до 5 лет</li>
							<li class='scheme__item-prop'>Первоначальный взнос от 0%</li>
						</ol>
						<div class="scheme__item-content">
							<p class='scheme__item-text'>Программа от МСХ по субсидированию части стоимости новой техники.

							</p>
							<p class='scheme__item-text'>Индивидуальный график платежей (оплата по основному долгу 1 раз в год,
								в течении года оплата процентов).</p>
						</div>
						<a class='ways-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

					</div>
					<div class="scheme__item">
						<img class='scheme__item-photo' src='img/methods/com-lizing.png' alt=''>
						<div class="scheme__item-title">Коммерческий лизинг</div>
						<ol class="scheme__item-props">
							<li class='scheme__item-prop'>от 11% годовых</li>
							<li class='scheme__item-prop'> до 5 лет</li>
							<li class='scheme__item-prop'>Cезонный график</li>
						</ol>
						<div class="scheme__item-content">
							<p class='scheme__item-text'>Платите “аренду” и пользуетесь техникой, спустя время - техника переходит к
								вам в собственность




							</p>

						</div>
						<a class='ways-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

					</div>
				</div>

				<div class="scheme__center-link-keeper">
					<a class='scheme__center-link' href='#feedback'>Нужна помощь с выбором</a>
				</div>
			</section>

			<section class="banks">
				<h2 class="banks__title">Мы работаем с большинством банков
					и лизинговых компаний</h2>
				<div class="banks__inner">
					<div class="banks__img"> <img src='img/bank/sberbank.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/rosselkhoz.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/vtb.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/alpha-bank.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/uralsib.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/raiffeisen.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/tinkoff.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/kuban-kredit.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/rnkb.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/promsvyaz.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/absolut.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/youg-invest.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/rosagrolizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/sber-lizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/vtb-lizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/alpha-lizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/euro-plan.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/baltiyskiy-lizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/sovkombank.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/interlizing.png' alt=''></div>
				</div>
			</section>
		</div>
	</div>
</section>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>