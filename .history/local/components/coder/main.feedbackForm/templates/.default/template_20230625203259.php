<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>


<section class="feedback-tech">
	<div class="feedback-container container">
		<div class="feedback-container_target">
			<div class="container">


				<div class="feedback__content  form-mobile-size-content">
					<form class="feedback__form feedback-tech__form" action="<?= POST_FORM_ACTION_URI ?>" method="POST"
						id='feedback-form'>
						<?= bitrix_sessid_post() ?>
						<h4 class="feedback__form-title feedback-tech__title service-fomr-item">
							Хотите получить сервисное сопровождение своей техники?

							<p class='feedback__accent-color service-fomr-item'>Оставьте заявку!</p>
						</h4>
						<label for='feedback-name' class='feedback-label service-fomr-item'>
							<input class="feedback__input feedback__name input-field-index<? if (
								$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
								$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
								$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
							) { ?> red-placeholder 
									<?
							} ?>" maxlength='40' id='feedback-name' type="text" name="service_name" <? if (
							 	$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
							 	$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
							 	$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
							 ) { ?> style="border: 1px solid #de4545;"
								placeholder='Укажите имя' <?
							 } else { ?> style="border: 1px solid #4a4f59" <? } ?> type="text"
								name='Name' placeholder='Имя'>
						</label>

						<label for='feedback-phone' class='feedback-label service-fomr-item'>
							<input class="feedback__input feedback__phone input-field-index <? if (
								$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
								$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
								$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона' ||
								$arResult["ERROR_MESSAGE"][3] === 'Укажите номер телефона'
							) { ?> red-placeholder 
									<?
							} ?>" id='feedback-phone' type="tel" name="service_phone" maxlength='20' <? if (
							 	$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
							 	$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
							 	$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона'
							 ) { ?>
								style="border: 1px solid #de4545;" placeholder='Укажите номер телефона' <?
							 } else { ?>
									style="border: 1px solid #4a4f59" <? } ?> placeholder='Телефон'>
						</label>
						<label for='tech-kind' class='feedback-label service-fomr-item'>
							<input class="feedback__input  input-field-index " id='tech-kind' type="text" name="service_kind"
								maxlength='50' placeholder='Вид техники'>
						</label>
						<label for='tech-date' class='feedback-label service-fomr-item'>
							<input class="feedback__input input-field-index " id='tech-date' type="text" name="service_year"
								maxlength='20' placeholder='Год техники'>
						</label>
						<label for='tech-work' class='feedback-label service-fomr-item'>
							<input class="feedback__input input-field-index <? if (
								$arResult["ERROR_MESSAGE"][0] === 'Укажите требуемые работы' ||
								$arResult["ERROR_MESSAGE"][1] === 'Укажите требуемые работы' ||
								$arResult["ERROR_MESSAGE"][2] === 'Укажите требуемые работы' ||
								$arResult["ERROR_MESSAGE"][3] === 'Укажите требуемые работы' ||
								$arResult["ERROR_MESSAGE"][4] === 'Укажите требуемые работы' ||
								$arResult["ERROR_MESSAGE"][5] === 'Укажите требуемые работы' ||
								$arResult["ERROR_MESSAGE"][6] === 'Укажите требуемые работы' ||
								$arResult["ERROR_MESSAGE"][7] === 'Укажите требуемые работы'
							) { ?> red-placeholder 
									<?
							} ?>" id='tech-work' type="text" name="service_job" maxlength='50' <? if (
							 	$arResult["ERROR_MESSAGE"][0] === 'Укажите требуемые работы' ||
							 	$arResult["ERROR_MESSAGE"][1] === 'Укажите требуемые работы' ||
							 	$arResult["ERROR_MESSAGE"][2] === 'Укажите требуемые работы' ||
							 	$arResult["ERROR_MESSAGE"][3] === 'Укажите требуемые работы' ||
							 	$arResult["ERROR_MESSAGE"][4] === 'Укажите требуемые работы' ||
							 	$arResult["ERROR_MESSAGE"][5] === 'Укажите требуемые работы' ||
							 	$arResult["ERROR_MESSAGE"][6] === 'Укажите требуемые работы' ||
							 	$arResult["ERROR_MESSAGE"][7] === 'Укажите требуемые работы'
							 ) { ?> style="border: 1px solid #de4545;" placeholder='Укажите требуемые работы' <?
							 } else { ?> style="border: 1px solid #4a4f59" <? } ?> placeholder='Требуемые работы'>
						</label>
						<label for='tech-farm' class='feedback-label service-fomr-item'>
							<input class="feedback__input input-field-index <? if (
								$arResult["ERROR_MESSAGE"][0] === 'Укажите хозяйство' ||
								$arResult["ERROR_MESSAGE"][1] === 'Укажите хозяйство' ||
								$arResult["ERROR_MESSAGE"][2] === 'Укажите хозяйство' ||
								$arResult["ERROR_MESSAGE"][3] === 'Укажите хозяйство' ||
								$arResult["ERROR_MESSAGE"][4] === 'Укажите хозяйство' ||
								$arResult["ERROR_MESSAGE"][5] === 'Укажите хозяйство' ||
								$arResult["ERROR_MESSAGE"][6] === 'Укажите хозяйство' ||
								$arResult["ERROR_MESSAGE"][7] === 'Укажите хозяйство'
							) { ?> red-placeholder 
									<?
							} ?>" id='tech-farm' type="text" name="service_company" maxlength='50' <? if (
							 	$arResult["ERROR_MESSAGE"][0] === 'Укажите хозяйство' ||
							 	$arResult["ERROR_MESSAGE"][1] === 'Укажите хозяйство' ||
							 	$arResult["ERROR_MESSAGE"][2] === 'Укажите хозяйство' ||
							 	$arResult["ERROR_MESSAGE"][3] === 'Укажите хозяйство' ||
							 	$arResult["ERROR_MESSAGE"][4] === 'Укажите хозяйство' ||
							 	$arResult["ERROR_MESSAGE"][5] === 'Укажите хозяйство' ||
							 	$arResult["ERROR_MESSAGE"][6] === 'Укажите хозяйство' ||
							 	$arResult["ERROR_MESSAGE"][7] === 'Укажите хозяйство'
							 ) { ?> style="border: 1px solid #de4545;" placeholder='Укажите хозяйство' <?
							 } else { ?>
								style="border: 1px solid #4a4f59" <? } ?> placeholder='Название хозяйства'>
						</label>

						<button class="red-button-link feedback__btn feedback-tech__btn service-fomr-item" type="submit"
							name="submit" value="<?= GetMessage("MFT_SUBMIT") ?>"><?
								if ($arResult["OK_MESSAGE"] <> '') {
									?>
								<div class="mf-ok-text">
									<?= $arResult["OK_MESSAGE"] ?>
								</div>
								<?
								} else { ?>
								Отправить
								заявку
								<?
								}
								?>
						</button>
						<p class='feedback__form-privacy feedback-tech__privacy service-fomr-item'>
							Отправляя заявку Вы принимаете условия
							<a class='feedback__form-privacy-link  service-fomr-item' href='/privacy.html'>Политики
								конфиденциальности</a>
						</p>
					</form>
				</div>

			</div>

		</div>
	</div>
	<div class="container">
		<div class="feedback-tech__inner">
			<!-- <div class="feedback-tech__photo">
				<img src='img/pages-bg-pictures/services-big-form.jpg' alt=''>
			</div> -->
			<? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"serviceBgForm",
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
					"IBLOCK_ID" => "17",
					// Код информационного блока
					"IBLOCK_TYPE" => "serviceBgTitleForm",
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
			<div class="feedback__content  form-big-size-content">


				<form class="feedback__form feedback-tech__form" action="<?= POST_FORM_ACTION_URI ?>" method="POST"
					id='feedback-form'>
					<?= bitrix_sessid_post() ?>
					<h4 class="feedback__form-title feedback-tech__title service-fomr-item">
						Хотите получить сервисное сопровождение своей техники?

						<p class='feedback__accent-color service-fomr-item'>Оставьте заявку!</p>
					</h4>
					<label for='feedback-name' class='feedback-label service-fomr-item'>
						<input class="feedback__input feedback__name input-field-index<? if (
							$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
							$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
							$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
						) { ?> red-placeholder 
									<?
						} ?>" maxlength='40' id='feedback-name' type="text" name="service_name" <? if (
						 	$arResult["ERROR_MESSAGE"][0] === 'Укажите имя' ||
						 	$arResult["ERROR_MESSAGE"][1] === 'Укажите имя' ||
						 	$arResult["ERROR_MESSAGE"][2] === 'Укажите имя'
						 ) { ?> style="border: 1px solid #de4545;"
							placeholder='Укажите имя' <?
						 } else { ?> style="border: 1px solid #4a4f59" <? } ?> type="text" name='Name'
							placeholder='Имя'>
					</label>

					<label for='feedback-phone' class='feedback-label service-fomr-item'>
						<input class="feedback__input feedback__phone input-field-index <? if (
							$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
							$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
							$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона' ||
							$arResult["ERROR_MESSAGE"][3] === 'Укажите номер телефона'
						) { ?> red-placeholder 
									<?
						} ?>" id='feedback-phone' type="tel" name="service_phone" maxlength='20' <? if (
						 	$arResult["ERROR_MESSAGE"][0] === 'Укажите номер телефона' ||
						 	$arResult["ERROR_MESSAGE"][1] === 'Укажите номер телефона' ||
						 	$arResult["ERROR_MESSAGE"][2] === 'Укажите номер телефона'
						 ) { ?>
							style="border: 1px solid #de4545;" placeholder='Укажите номер телефона' <?
						 } else { ?>
								style="border: 1px solid #4a4f59" <? } ?> placeholder='Телефон'>
					</label>
					<label for='tech-kind' class='feedback-label service-fomr-item'>
						<input class="feedback__input  input-field-index " id='tech-kind' type="text" name="service_kind"
							maxlength='50' placeholder='Вид техники'>
					</label>
					<label for='tech-date' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index " id='tech-date' type="text" name="service_year"
							maxlength='20' placeholder='Год техники'>
					</label>
					<label for='tech-work' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index <? if (
							$arResult["ERROR_MESSAGE"][0] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][1] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][2] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][3] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][4] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][5] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][6] === 'Укажите требуемые работы' ||
							$arResult["ERROR_MESSAGE"][7] === 'Укажите требуемые работы'
						) { ?> red-placeholder 
									<?
						} ?>" id='tech-work' type="text" name="service_job" maxlength='50' <? if (
						 	$arResult["ERROR_MESSAGE"][0] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][1] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][2] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][3] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][4] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][5] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][6] === 'Укажите требуемые работы' ||
						 	$arResult["ERROR_MESSAGE"][7] === 'Укажите требуемые работы'
						 ) { ?> style="border: 1px solid #de4545;" placeholder='Укажите требуемые работы' <?
						 } else { ?> style="border: 1px solid #4a4f59" <? } ?> placeholder='Требуемые работы'>
					</label>
					<label for='tech-farm' class='feedback-label service-fomr-item'>
						<input class="feedback__input input-field-index <? if (
							$arResult["ERROR_MESSAGE"][0] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][1] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][2] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][3] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][4] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][5] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][6] === 'Укажите хозяйство' ||
							$arResult["ERROR_MESSAGE"][7] === 'Укажите хозяйство'
						) { ?> red-placeholder 
									<?
						} ?>" id='tech-farm' type="text" name="service_company" maxlength='50' <? if (
						 	$arResult["ERROR_MESSAGE"][0] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][1] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][2] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][3] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][4] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][5] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][6] === 'Укажите хозяйство' ||
						 	$arResult["ERROR_MESSAGE"][7] === 'Укажите хозяйство'
						 ) { ?> style="border: 1px solid #de4545;"
							placeholder='Укажите хозяйство' <?
						 } else { ?> style="border: 1px solid #4a4f59" <? } ?>
							placeholder='Название хозяйства'>
					</label>

					<button class="red-button-link feedback__btn feedback-tech__btn service-fomr-item" type="submit" name="submit"
						value="<?= GetMessage("MFT_SUBMIT") ?>"><?
							if ($arResult["OK_MESSAGE"] <> '') {
								?>
							<div class="mf-ok-text">
								<?= $arResult["OK_MESSAGE"] ?>
							</div>
							<?
							} else { ?>
							Отправить
							заявку
							<?
							}
							?>
					</button>
					<p class='feedback__form-privacy feedback-tech__privacy service-fomr-item'>
						Отправляя заявку Вы принимаете условия
						<a class='feedback__form-privacy-link  service-fomr-item' href='/privacy.html'>Политики
							конфиденциальности</a>
					</p>
				</form>
			</div>
		</div>
	</div>

</section>