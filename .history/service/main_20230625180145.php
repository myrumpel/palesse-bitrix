<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Сервисный центр");
?>

<section class="service">
	<div class="container">
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"serviceMainFace",
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
			"CACHE_GROUPS" => "Y",
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
				3 => "DETAIL_TEXT",
				4 => "DETAIL_PICTURE",
				5 => "",
			),
			"FILTER_NAME" => "",
			// Фильтр
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			// Скрывать ссылку, если нет детального описания
			"IBLOCK_ID" => "15",
			// Код информационного блока
			"IBLOCK_TYPE" => "serviceMainFace",
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
	</div>
	<section class="about-leaders service-trust">

		<div class="container-fluid">
			<div class="about-leaders__bg service-trust__bg"
				style='background-image: url(img/pages-bg-pictures/services-wheat.jpg);'>
				<div class="container">
					<div class="about-leaders__inner">
						<div class="service-trust__content">
							<h4 class="service-trust__content-title"> Нам можно доверять!</h4>
							<div class="service-trust__content-text">
								<p class="service-trust__text">Оперативность и полный спектр услуг по сервисному сопровождению техники в
									полевых условиях обеспечиваются выездными бригадами на специализированных автомашинах,
									укомплектованных самым современным диагностическим оборудованием, являющихся по своей сути
									универсальной передвижной мастерской.</p>
								<p class="service-trust__red-text">Забота, оперативность и профессионализм торгового дома Палессе ЮГ
									сделает Вашу работу на нашей техники стабильной и продлит её срок эксплуатации!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="mob-container"></div>
		</div>
	</section>
	<section class="feedback-tech">
		<div class="feedback-container container">
			<div class="feedback-container_target"></div>
		</div>
		<div class="container">
			<div class="feedback-tech__inner">
				<div class="feedback-tech__photo">
					<img src='img/pages-bg-pictures/services-big-form.jpg' alt=''>
				</div>
				<form class="feedback__form feedback-tech__form" id='feedback-form'>
					<h4 class="feedback__form-title feedback-tech__title service-fomr-item">
						Хотите получить сервисное сопровождение своей техники?

						<p class='feedback__accent-color service-fomr-item'>Оставьте заявку!</p>
					</h4>
					<label for='feedback-name' class='feedback-label service-fomr-item'>
						<input class="feedback__input feedback__name input-field-index" maxlength='40' id='feedback-name'
							type="text" name='Name'>
						<span class='label-span'>Имя</span>
					</label>

					<label for='feedback-phone' class='feedback-label service-fomr-item'>
						<input class="feedback__input feedback__phone input-field-index" id='feedback-phone' type="tel" name='Phone'
							maxlength='20'>
						<span class='label-span'> Телефон</span>
					</label>
					<label for='tech-kind' class='feedback-label service-fomr-item'>
						<input class="feedback__input  input-field-index" id='tech-kind' type="text" name='tech-kind'
							maxlength='50'>
						<span class='label-span'> Вид техники</span>
					</label>
					<label for='tech-date' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index" id='tech-date' type="text" name='tech-date' maxlength='20'>
						<span class='label-span'> Год техники</span>
					</label>
					<label for='tech-work' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index" id='tech-work' type="text" name='tech-work' maxlength='50'>
						<span class='label-span'> Необходимые работы</span>
					</label>
					<label for='tech-farm' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index" id='tech-farm' type="text" name='tech-farm' maxlength='50'>
						<span class='label-span'> Название хозяйства</span>
					</label>

					<button class="red-button-link feedback__btn feedback-tech__btn service-fomr-item" type="submit">Отправить
						заявку</button>
					<p class='feedback__form-privacy feedback-tech__privacy service-fomr-item'>
						Отправляя заявку Вы принимаете условия
						<a class='feedback__form-privacy-link  service-fomr-item' href='/privacy.html'>Политики
							конфиденциальности</a>
					</p>
				</form>
			</div>
		</div>

	</section>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>