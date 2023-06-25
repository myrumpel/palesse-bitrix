<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Способы приобретения");
?>
<section class="ways">
	<div class="container">
		<div class="ways__inner">
			<div class="ways__face">
				<? $APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"waysTitleBg",
					array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						// Формат показа даты
						"ADD_SECTIONS_CHAIN" => "N",
						// Включать раздел в цепочку навигации
						"AJAX_MODE" => "N",
						// Включить режим AJAX
						"AJAX_OPTION_ADDITIONAL" => "",
						// Дополнительный идентификатор
						"AJAX_OPTION_HISTORY" => "N",
						// Включить эмуляцию навигации браузера
						"AJAX_OPTION_JUMP" => "N",
						// Включить прокрутку к началу компонента
						"AJAX_OPTION_STYLE" => "Y",
						// Включить подгрузку стилей
						"CACHE_FILTER" => "N",
						// Кешировать при установленном фильтре
						"CACHE_GROUPS" => "N",
						// Учитывать права доступа
						"CACHE_TIME" => "36000000",
						// Время кеширования (сек.)
						"CACHE_TYPE" => "A",
						// Тип кеширования
						"CHECK_DATES" => "Y",
						// Показывать только активные на данный момент элементы
						"DETAIL_URL" => "",
						// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
						"DISPLAY_BOTTOM_PAGER" => "Y",
						// Выводить под списком
						"DISPLAY_DATE" => "N",
						// Выводить дату элемента
						"DISPLAY_NAME" => "Y",
						// Выводить название элемента
						"DISPLAY_PICTURE" => "Y",
						// Выводить изображение для анонса
						"DISPLAY_PREVIEW_TEXT" => "Y",
						// Выводить текст анонса
						"DISPLAY_TOP_PAGER" => "N",
						// Выводить над списком
						"FIELD_CODE" => array(
							// Поля
							0 => "NAME",
							1 => "PREVIEW_PICTURE",
							2 => "",
						),
						"FILTER_NAME" => "",
						// Фильтр
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						// Скрывать ссылку, если нет детального описания
						"IBLOCK_ID" => "12",
						// Код информационного блока
						"IBLOCK_TYPE" => "waysTitleBg",
						// Тип информационного блока (используется только для проверки)
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						// Включать инфоблок в цепочку навигации
						"INCLUDE_SUBSECTIONS" => "N",
						// Показывать элементы подразделов раздела
						"MESSAGE_404" => "",
						// Сообщение для показа (по умолчанию из компонента)
						"NEWS_COUNT" => "20",
						// Количество новостей на странице
						"PAGER_BASE_LINK_ENABLE" => "N",
						// Включить обработку ссылок
						"PAGER_DESC_NUMBERING" => "N",
						// Использовать обратную навигацию
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						// Время кеширования страниц для обратной навигации
						"PAGER_SHOW_ALL" => "N",
						// Показывать ссылку "Все"
						"PAGER_SHOW_ALWAYS" => "N",
						// Выводить всегда
						"PAGER_TEMPLATE" => ".default",
						// Шаблон постраничной навигации
						"PAGER_TITLE" => "Новости",
						// Название категорий
						"PARENT_SECTION" => "",
						// ID раздела
						"PARENT_SECTION_CODE" => "",
						// Код раздела
						"PREVIEW_TRUNCATE_LEN" => "",
						// Максимальная длина анонса для вывода (только для типа текст)
						"PROPERTY_CODE" => array(
							// Свойства
							0 => "",
							1 => "",
						),
						"SET_BROWSER_TITLE" => "N",
						// Устанавливать заголовок окна браузера
						"SET_LAST_MODIFIED" => "N",
						// Устанавливать в заголовках ответа время модификации страницы
						"SET_META_DESCRIPTION" => "N",
						// Устанавливать описание страницы
						"SET_META_KEYWORDS" => "N",
						// Устанавливать ключевые слова страницы
						"SET_STATUS_404" => "N",
						// Устанавливать статус 404
						"SET_TITLE" => "N",
						// Устанавливать заголовок страницы
						"SHOW_404" => "N",
						// Показ специальной страницы
						"SORT_BY1" => "",
						// Поле для первой сортировки новостей
						"SORT_BY2" => "",
						// Поле для второй сортировки новостей
						"SORT_ORDER1" => "",
						// Направление для первой сортировки новостей
						"SORT_ORDER2" => "",
						// Направление для второй сортировки новостей
						"STRICT_SECTION_CHECK" => "N",
						// Строгая проверка раздела для показа списка
					),
					false
				); ?>

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
							"COMPONENT_TEMPLATE" => "waysMainFace",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array(0 => "NAME", 1 => "PREVIEW_TEXT", 2 => "DETAIL_TEXT", 3 => "",
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
							"PROPERTY_CODE" => array(0 => "waysLink", 1 => "",
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
							"STRICT_SECTION_CHECK" => "N"
						)
					); ?>
				</div>
			</div>
			<section class="scheme" id="scheme">
				<h2 class="scheme__title">Схемы финансирования</h2>
				<div class="scheme__inner">
					<div class="scheme__item">
						<img src="img/methods/ros-lizing.png" class="scheme__item-photo" alt="">
						<div class="scheme__item-title">
							Росагролизинг
						</div>
						<ol class="scheme__item-props">
							<li class="scheme__item-prop">от&nbsp;0%</li>
							<li class="scheme__item-prop">до&nbsp;8&nbsp;лет</li>
							<li class="scheme__item-prop">Первоначальный взнос от&nbsp;0%</li>
						</ol>
						<div class="scheme__item-content">
							<p class="scheme__item-text">
								Предлагает предприятиям АПК&nbsp;универсальные лизинговые решения для&nbsp;обновления парка техники.
							</p>
							<p class="scheme__item-text">
								Есть&nbsp;возможность выбора сезонного графика платежей. Рассмотрение по&nbsp;двум документам
							</p>
						</div>
						<a class="ways-link-to-form" href="#feedback">Нужна помощь с выбором</a>
					</div>
					<div class="scheme__item">
						<div class="scheme__item-photo">
							<img src="img/methods/credit.png" class="scheme__item-photo" alt="">
						</div>
						<div class="scheme__item-title">
							Льготный кредит
						</div>
						<ol class="scheme__item-props">
							<li class="scheme__item-prop">от&nbsp;0%</li>
							<li class="scheme__item-prop">&nbsp;до 5 лет</li>
							<li class="scheme__item-prop">Первоначальный взнос от&nbsp;0%</li>
						</ol>
						<div class="scheme__item-content">
							<p class="scheme__item-text">
								Программа от&nbsp;МСХ&nbsp;по&nbsp;субсидированию части стоимости новой техники.
							</p>
							<p class="scheme__item-text">
								Индивидуальный график платежей (оплата по&nbsp;основному долгу 1&nbsp;раз&nbsp;в&nbsp;год,
								в&nbsp;течении года оплата процентов).
							</p>
						</div>
						<a class="ways-link-to-form" href="#feedback">Нужна помощь с выбором</a>
					</div>
					<div class="scheme__item">
						<img src="img/methods/com-lizing.png" class="scheme__item-photo" alt="">
						<div class="scheme__item-title">
							Коммерческий лизинг
						</div>
						<ol class="scheme__item-props">
							<li class="scheme__item-prop">от 11% годовых</li>
							<li class="scheme__item-prop">&nbsp;до 5 лет</li>
							<li class="scheme__item-prop">Cезонный график</li>
						</ol>
						<div class="scheme__item-content">
							<p class="scheme__item-text">
								Платите “аренду” и пользуетесь техникой, спустя время - техника переходит к вам в собственность
							</p>
						</div>
						<a class="ways-link-to-form" href="#feedback">Нужна помощь с выбором</a>
					</div>
				</div>
				<div class="scheme__center-link-keeper">
					<a class="scheme__center-link" href="#feedback">Нужна помощь с выбором</a>
				</div>
			</section>
			<section class="banks">
				<h2 class="banks__title">Мы работаем с большинством банков и лизинговых компаний</h2>
				<div class="banks__inner">
					<div class="banks__img">
						<img src="img/bank/sberbank.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/rosselkhoz.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/vtb.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/alpha-bank.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/uralsib.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/raiffeisen.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/tinkoff.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/kuban-kredit.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/rnkb.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/promsvyaz.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/absolut.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/youg-invest.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/rosagrolizing.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/sber-lizing.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/vtb-lizing.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/alpha-lizing.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/euro-plan.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/baltiyskiy-lizing.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/sovkombank.png" alt="">
					</div>
					<div class="banks__img">
						<img src="img/bank/interlizing.png" alt="">
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>