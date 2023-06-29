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

<? if ($arResult['ITEMS']): ?>
	<ol class='catalog-filter__buttons-list'>
		<? foreach ($arResult['ITEMS'] as $Item): ?>
			<li class="catalog-filter__buttons-item">
				<button class="catalog-filter__buttons-spoller">
					<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
					<svg class='svg-list'>
						<use class='svg-list-item' xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-list'></use>
					</svg>
				</button>
				<!-- <?
				echo '<pre>';
				print_r($Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['DESCRIPTION'][1]);
				echo '</pre>';
				?> -->
				<div class="catalog-filter__spoller">
					<ol class="catalog-filter__spoller-content">
						<? foreach ($Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['VALUE'] as $Key => $Val): ?>
							<li class="catalog-filter__spoller-item">
								<button class="catalog-filter__buttons-item-btn"
									data-catalog="<?= $Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['DESCRIPTION'][$Key] ? $Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['DESCRIPTION'][$Key] : ''; ?>">

									<?= $Val ? $Val : ''; ?>

								</button>
							</li>
						<? endforeach; ?>

					</ol>
				</div>
			<? endforeach; ?>
		</li>


		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"catalogBarButtons",
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
				"AJAX_OPTION_STYLE" => "N",
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
				"DISPLAY_BOTTOM_PAGER" => "N",
				// Выводить под списком
				"DISPLAY_DATE" => "N",
				// Выводить дату элемента
				"DISPLAY_NAME" => "Y",
				// Выводить название элемента
				"DISPLAY_PICTURE" => "N",
				// Выводить изображение для анонса
				"DISPLAY_PREVIEW_TEXT" => "Y",
				// Выводить текст анонса
				"DISPLAY_TOP_PAGER" => "N",
				// Выводить над списком
				"FIELD_CODE" => array(
					// Поля
					0 => "NAME",
					1 => "PREVIEW_TEXT",
					2 => "",
				),
				"FILTER_NAME" => "",
				// Фильтр
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				// Скрывать ссылку, если нет детального описания
				"IBLOCK_ID" => "19",
				// Код информационного блока
				"IBLOCK_TYPE" => "catalogBarButtons",
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
				"SORT_BY1" => "SORT",
				// Поле для первой сортировки новостей
				"SORT_BY2" => "",
				// Поле для второй сортировки новостей
				"SORT_ORDER1" => "ASC",
				// Направление для первой сортировки новостей
				"SORT_ORDER2" => "",
				// Направление для второй сортировки новостей
				"STRICT_SECTION_CHECK" => "N",
				// Строгая проверка раздела для показа списка
			),
			false
		); ?>



	</ol>
<? endif; ?>