<?php
global $APPLICATION;
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Палессе');
?>










<section class="main-part">
    <div class="container-fluid">
        <div class="main-part__bg"
            style='background-image: url(<?= SITE_TEMPLATE_PATH; ?>/assets/img/pages-bg-pictures/index-main.jpg);'>
            <div class="container">
                <div class="main-part__inner">
                    <h1 class="main-part__title">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "index",
                                "PATH" => SITE_TEMPLATE_PATH . "/indexIncludes/mainFace/indexMainTitle.php"
                            )
                        ); ?>

                    </h1>
                    <h2 class="main-part__subtitle">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "index",
                                "PATH" => SITE_TEMPLATE_PATH . "/indexIncludes/mainFace/indexMainSubtitle.php"
                            )
                        ); ?>

                    </h2>
                    <a class='main-part__leave-bid' href='#feedback-form'>

                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "index",
                                "PATH" => SITE_TEMPLATE_PATH . "/indexIncludes/mainFace/indexMainTitleBtn.php"
                            )
                        ); ?>
                    </a>


                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "indexSlider",
                        array(
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "N",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "N",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "N",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "1",
                            "IBLOCK_TYPE" => "indexSliderPage",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
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
                                0 => "dataslider",
                                1 => "dataimg",
                                2 => "",
                            ),
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
                            "STRICT_SECTION_CHECK" => "N",
                            "COMPONENT_TEMPLATE" => "indexSlider"
                        ),
                        false
                    ); ?>


                </div>
                <div class="index-swiper-nav">

                    <div class="index-swiper-nav__keeper">
                        <div class="swiper-button-prev swiper-button__prev">
                            <svg class='index-swiper-arrow-keeper index-swiper-arrow-keeper-left'>
                                <use class='index-swiper-arrows index-swiper-arrow-prev'
                                    xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'>
                                </use>
                            </svg>
                        </div>
                        <div class="swiper-button-next swiper-button__next">
                            <svg class='index-swiper-arrow-keeper index-swiper-arrow-keeper-right'>
                                <use class='index-swiper-arrows index-swiper-arrow-next'
                                    xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'>
                                </use>
                            </svg>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>
<section class="how-buy">
    <div class="container">
        <div class="how-buy__title-link">
            <h2 class="how-buy__title">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "index",
                        "PATH" => SITE_TEMPLATE_PATH . "/indexIncludes/indexHowBuy/indexHowBuyTitle.php"
                    )
                ); ?>

            </h2>
            <a class='how-buy__link' href='/ways.php'>

                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "index",
                        "PATH" => SITE_TEMPLATE_PATH . "/indexIncludes/indexHowBuy/indexHowBuyLink.php"
                    )
                ); ?>



                <svg class='how-buy-arrow-keeper'>
                    <use class='how-buy-arrow'
                        xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
                </svg>
            </a>
        </div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "indexHowBuy",
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
                    1 => "",
                ),
                "FILTER_NAME" => "",
                // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "2",
                // Код информационного блока
                "IBLOCK_TYPE" => "IndexHowBuy",
                // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",
                // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",
                // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "6",
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
                    0 => "indexHowBuyProp",
                    1 => "indexHowBuyText",
                    2 => "",
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


    </div>
</section>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "IndexAboutBgText",
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
        "DISPLAY_PICTURE" => "Y",
        // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",
        // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",
        // Выводить над списком
        "FIELD_CODE" => array(
            // Поля
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "PREVIEW_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "3",
        // Код информационного блока
        "IBLOCK_TYPE" => "indexAboutBgText",
        // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "Y",
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

<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "IndexAboutNumbers",
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
        "DISPLAY_PICTURE" => "Y",
        // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",
        // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",
        // Выводить над списком
        "FIELD_CODE" => array(
            // Поля
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "DETAIL_TEXT",
            3 => "",
        ),
        "FILTER_NAME" => "",
        // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "4",
        // Код информационного блока
        "IBLOCK_TYPE" => "indexAboutBgText",
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

<section class="benefit">
    <div class="container">
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "IndexBenefit",
            array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "N",
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
                "IBLOCK_ID" => "5",
                "IBLOCK_TYPE" => "IndexBenefit",
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
                    0 => "",
                    1 => "",
                ),
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
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "IndexBenefit"
            ),
            false
        ); ?>
    </div>
</section>



<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>