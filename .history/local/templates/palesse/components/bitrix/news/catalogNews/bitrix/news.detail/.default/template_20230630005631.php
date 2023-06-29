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

<? if ($arResult): ?>
	<div class="detail">
		<div class="container">
			<div class="detail__inner">
				<ol class="breadcrumbs">
					<li class="breadcrumbs__item">
						<a href="/catalog/main.php" class="breadcrumbs__link">Каталог /</a>
					</li>
					<li class="breadcrumbs__item breadcrumbs__item-last">
						<p class="breadcrumbs__link">
							<?= $arResult['NAME'] ? $arResult['NAME'] : ''; ?>
						</p>
					</li>
				</ol>
				<div class="detail__content">
					<div class="detail-box">
						<div class="detail__desc">
							<h1 class='detail-box__title'>
								<?= $arResult['NAME'] ? $arResult['NAME'] : ''; ?>
							</h1>

							<p class='detail-box__description'>
								<?= $arResult['DISPLAY_PROPERTIES']['catalogDetailShortDescription']['DISPLAY_VALUE']; ?>
							</p>
							<div class="detail-box__machine-prop">
								<? foreach ($arResult['PROPERTIES']['previewDesc']['VALUE'] as $Key => $PropVal): ?>
									<p class="catalog-filter__item-description">
										<strong>
											<?= $PropVal; ?>
											:
										</strong>
										<?= $arResult['PROPERTIES']['previewDesc']['DESCRIPTION'][$Key]; ?>
									</p>
								<? endforeach; ?>

							</div>
							<div class="detail-box__all-props detailSpollerScroll" data-detailspoller='propsContent'>Все характеристики
								<svg class='detail-list-keeper'>
									<use class='detail-list' xlink:href='img/icons/icons.svg#svg-list'></use>
								</svg>
							</div>
							<a class='' href=''> <span> </span></a>
							<a class="red-button-link catalog-filter__link detail-link detailSpollerScroll"
								data-detailspoller='feedback'>Оставить заявку</a>

						</div>

					</div>
					<!-- ! Блок под фото, если фотка одна -->
					<? if ($arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE'] <= 1): ?>
						<div class="detail__photo">
							<picture>
								<source
									srcset="<?= $arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE']['SRC'] ? $arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE']['SRC'] : ''; ?>"
									type="image/webp"><img
									src="<?= $arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE']['SRC'] ? $arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE']['SRC'] : ''; ?>" />
							</picture>
						</div>
					<? endif; ?>
					<!-- [FILE_VALUE] -->
					<!-- ! Блок под фото, если фоток больше двух -->
					<div class="detail__slider">
						<div class="swiper mySwiper2">
							<div class="swiper-wrapper">
								<? if ($arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE'] >= 1): ?>

									<? foreach ($arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE'] as $Key => $FileValue): ?>
										<div class="swiper-slide swiper-slide-detail">
											<picture>
												<source srcset="<?= $FileValue['SRC']; ?>" type="image/webp"><img
													src="<?= $arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE']['SRC'][$Key]; ?>" />
											</picture>
										</div>

									<? endforeach; ?>
								<? endif; ?>

							</div>
						</div>

						<div thumbsSlider="" class="swiper mySwiper">

							<div class="swiper-wrapper">
								<? if ($arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE'] >= 1): ?>
									<? foreach ($arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE'] as $Key => $FileValue): ?>
										<div class="swiper-slide swiper-slide-detail">
											<picture>
												<source srcset="<?= $FileValue['SRC']; ?>" type="image/webp"><img
													src="<?= $arResult['DISPLAY_PROPERTIES']['catalogDetailPictureWEBP']['FILE_VALUE']['SRC'][$Key]; ?>" />
											</picture>
										</div>

									<? endforeach; ?>
								<? endif; ?>
							</div>
						</div>
						<div class="swiper-button-prev detail-swiper-button-prev">
							<svg class='detail__swiper-btns'>
								<use class='detail__swiper-btn-prev'
									xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
							</svg>
						</div>
						<div class="swiper-button-next detail-swiper-button-next">
							<svg class='detail__swiper-btns'>
								<use class='detail__swiper-btn-next'
									xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
							</svg>
						</div>


					</div>

					<div class="detail-content-mob">
						<div class="select-box details-mob">
							<div class='select-mob-wrapper details-select-mob'>
								<button class="select-mob"> <span>Что Вас интересует?</span>
									<!-- <svg class='svg-list-select-keeper'>
									<use class='svg-list-select' xlink:href='img/icons/icons.svg#svg-list'></use>
								</svg> -->
									<use>
										<svg class='svg-list-select' width="11" height="8" viewBox="0 0 11 8" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M6.21062 7.2099C5.81149 7.76296 4.98799 7.76296 4.58885 7.2099L0.770261 1.9187C0.292964 1.25734 0.765537 0.333496 1.58115 0.333496L9.21833 0.333497C10.0339 0.333497 10.5065 1.25734 10.0292 1.9187L6.21062 7.2099Z"
												fill="#4A4F59" />
										</svg>
									</use>
								</button>
								<ol class="select-mob__list">

									<li class="select-mob__item select-mob-padding detailsSpollerLinks detailSpollerScroll"
										data-detailspoller='descContent'>
										<div class="select-mob__btn" class=''>Описание
										</div>
									</li>
									<li class="select-mob__item select-mob-padding detailsSpollerLinks detailSpollerScroll"
										data-detailspoller='propsContent'>
										<div class="select-mob__btn" class=''>Технические
											характеристики </div>
									</li>
									<li class="select-mob__item select-mob-padding detailsSpollerLinks detailSpollerScroll"
										data-detailspoller='buyContent'>
										<div class="select-mob__btn" class=''>Способы
											покупки
										</div>
									</li>
									<li class="select-mob__item select-mob-padding detailsSpollerLinks detailSpollerScroll"
										data-detailspoller='feedback'>
										<div class="select-mob__btn">Связаться с нами
										</div>
									</li>
									<!-- <li class="select-mob__item select-mob-padding detail-color-li detailSpollerLink"
									data-detailspoller='feedback'>
									<div class="select-mob__btn" class='detailSpollerLinks'>Связаться с
										нами
									</div>
								</li> -->

								</ol>
							</div>
						</div>
						<h2 class='detail-content-mob__title' data-mobdetail='desc' id='descContent'>Описание</h2>
						<h2 class='detail-content-mob__title' data-mobdetail='props' id='propsContent'>Технические характеристики
						</h2>
						<h2 class='detail-content-mob__title' data-mobdetail='buy' id='buyContent'>Способы покупки</h2>
					</div>


					<div class="detail-content">
						<div class="detail-content__btns-keeper">
							<button class="detail-content__btn-spoller btn-spoller--active" data-tabsDetail='desc'>Описание</button>
							<button class="detail-content__btn-spoller" data-tabsDetail='props'>Технические характеристики</button>
							<button class="detail-content__btn-spoller" data-tabsDetail='buy'>Способы покупки</button>
						</div>
						<ol class='detail-content__list'>
							<li class="detail-content__item detail-item--active" id='desc'>
								<div class="spoller-content" data-mobdetail='desc'>

									<p class=''>
										<?= $arResult['DETAIL_TEXT'] ? $arResult['DETAIL_TEXT'] : ''; ?>
									</p>

									<div class="news-detail__content">


									</div>
									<? if ($arResult["PROPERTIES"]['catalogDetailYoutubeDescription']['VALUE']): ?>
										<? foreach ($arResult["PROPERTIES"]['catalogDetailYoutubeDescription']['VALUE'] as $Link): ?>
											<div class="news-detail__content">
												<iframe width="560" height="315" src="<?= $Link; ?>" title="Player for Palesse" frameborder="0"
													allowfullscreen></iframe>

											</div>
										<? endforeach; ?>
									<? endif; ?>
									<? if ($arResult["PROPERTIES"]['catalogDetailPictureDescription']['VALUE']): ?>
										<? foreach ($arResult["PROPERTIES"]['catalogDetailPictureDescription']['VALUE'] as $Link): ?>
											<div class="news-detail__content">
												<img src='<?= CFile::GetPath($Link); ?>'></img>
											</div>
										<? endforeach; ?>
									<? endif; ?>

									<? foreach ($arResult["PROPERTIES"]['PDF']['VALUE'] as $Key => $Val): ?>

										<a class='download-link' href='<?= CFile::GetPath($Val); ?>'
											download='<?= $arResult["PROPERTIES"]['catalogDetailNameDocuments']['VALUE'][$Key] ? $arResult["PROPERTIES"]['catalogDetailNameDocuments']['VALUE'][$Key] : ''; ?>'>
											<svg class='pdf-keeper'>
												<use class='pdf' xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-pdf'></use>
											</svg>
											<?= $arResult["PROPERTIES"]['catalogDetailNameDocuments']['VALUE'][$Key] ? $arResult["PROPERTIES"]['catalogDetailNameDocuments']['VALUE'][$Key] : ''; ?>
										</a>
									<? endforeach; ?>

								</div>
							</li>
							<li class="detail-content__item" id='props'>
								<div class="spoller-content" data-mobdetail='props'>

									<table class='table-headline'>
										<tr class='table-headline__row'>
											<td class='table-headline__td table-headline__td-first'>Характеристика</td>
											<td class='table-headline__td table-headline__td-second'>
												<ol class='table-headline__td-list'>
													<li class='table-headline__td-item'>
														<em class='circles fill-circle'></em>
														<span>серийно</span>
													</li>
													<li class='table-headline__td-item'>
														<em class='circles empty-circle'></em>
														<span>опционально</span>
													</li>
												</ol>
											</td>
										</tr>
									</table>
									<div class="table-keeper">
										<table class='table-massive'>

											<tr class='table-massive__info-line main-headline-tr'>
												<td class='table-massive__info-td'>
													<p class='table-massive__info-td-item'>Производитель / марка</p>
												</td>
												<td colspan='1' class='table-massive__info-td'>
													<p class='table-massive__info-td-item'> GS8 PRO</p>
												</td>
												<!-- <td colspan='1' class='table-massive__info-td'>
											<p class='table-massive__info-td-item'> ЯМЗфывывы-658</p>
										</td> -->
											</tr>
											<tbody>
												<tr class='table-massive__info-line'>
													<td class='table-massive__info-td'>
														<p class='table-massive__info-td-item info-line-title'>Двигатель</p>
													</td>

												</tr>

												<tr class='table-massive__info-line'>
													<td colspan='1' class='table-massive__info-td'>
														<p class='table-massive__info-td-item'>Мощность двигателя, кВт / л.с.</p>
													</td>
													<td colspan='1' class='table-massive__info-td'>
														<p class='table-massive__info-td-item'>390 / 530</p>
													</td>
													</td>
													<!-- <td class='table-massive__info-td'>
											<p class='table-massive__info-td-item'>390 / 530</p>
										</td> -->
												</tr>

											</tbody>





										</table>
									</div>
								</div>
							</li>

							<li class="detail-content__item" id='buy'>
								<div class="spoller-content" data-mobdetail='buy'>
									<ol class='detail-content__list'>



										<? if ($arResult['PROPERTIES']['rosagrolizing']['VALUE'] === 'Росагролизинг'): ?>
											<li class="detail-content__list-item">

												<div class="detail-content__list-item-img">
													<img src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/methods/ros-lizing.png' alt=''>
												</div>
												<div class="detail-content__list-item-content">
													<div class="detail-content__list-item-title">
														<?= $arResult['PROPERTIES']['rosagrolizing']['NAME']; ?>
													</div>
													<div class="detail-content__list-item-props">
														<p class='detail-content__list-item-prop'>от 0%</p>
														<p class='detail-content__list-item-prop'>до 8 лет</p>
														<p class='detail-content__list-item-prop'>Первоначальный взнос от 0%</p>
													</div>
													<div class="detail-content__list-item-text">Предлагает предприятиям АПК универсальные лизинговые
														решения для обновления парка техники. Есть возможность выбора сезонного графика платежей</div>
												</div>
												<a class='detail-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

											</li>
										<? endif; ?>
										<? if ($arResult['PROPERTIES']['credit']['VALUE'] === 'Льготный кредит '): ?>
											<li class="detail-content__list-item">
												<div class="detail-content__list-item-img">
													<img src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/methods/credit.png' alt=''>
												</div>
												<div class="detail-content__list-item-content">
													<div class="detail-content__list-item-title">
														<?= $arResult['PROPERTIES']['credit']['NAME']; ?>
													</div>
													<div class="detail-content__list-item-props">
														<p class='detail-content__list-item-prop'>фикс. ставка - 5%</p>
														<p class='detail-content__list-item-prop'> до 5 лет</p>
														<p class='detail-content__list-item-prop'>Первоначальный взнос от 0%</p>
													</div>
													<div class="detail-content__list-item-text">Программа от МСХ по субсидированию части стоимости
														новой
														техники.
														Индивидуальный график платежей (оплата по основному долгу 1 раз в год, в течении года оплата
														%).
													</div>
												</div>
												<a class='detail-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

											</li>
										<? endif; ?>
										<? if ($arResult['PROPERTIES']['commlizing']['VALUE'] === 'Коммерческий лизинг'): ?>

											<li class="detail-content__list-item">
												<div class="detail-content__list-item-img">
													<img src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/methods/com-lizing.png' alt=''>
												</div>
												<div class="detail-content__list-item-content">
													<div class="detail-content__list-item-title">
														<?= $arResult['PROPERTIES']['commlizing']['NAME']; ?>
													</div>
													<div class="detail-content__list-item-props">
														<p class='detail-content__list-item-prop'>от 11% годовых</p>
														<p class='detail-content__list-item-prop'>до 5 лет</p>
														<p class='detail-content__list-item-prop'>сезонный график</p>
													</div>
													<div class="detail-content__list-item-text">Платите “аренду” и пользуетесь техникой, спустя
														время
														-
														техника переходит к вам в собственность</div>
												</div>
												<a class='detail-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

											</li>
										<? endif; ?>
										<?
										echo '<pre>';
										// print_r($arResult['PROPERTIES']['cash']);
										echo '</pre>';
										?>
										<? if ($arResult['PROPERTIES']['cash']['VALUE'] === '+'): ?>

											<li class="detail-content__list-item">
												<div class="detail-content__list-item-img">
													<img src='<?= SITE_TEMPLATE_PATH; ?>/assets/img/methods/cash.png' alt=''>
												</div>
												<div class="detail-content__list-item-content">
													<div class="detail-content__list-item-title">
														<?= $arResult['PROPERTIES']['cash']['NAME']; ?>
													</div>
													<div class="detail-content__list-item-props">
														<p class='detail-content__list-item-prop'>без процентов</p>
													</div>
													<div class="detail-content__list-item-text">Самый быстрый способ приобретения</div>
												</div>
												<a class='detail-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

											</li>
										<? endif; ?>

									</ol>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
<? endif; ?>