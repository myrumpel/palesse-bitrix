<?php
global $APPLICATION;
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Каталог');
?>
<div class="container">
					<btn class="btn-to-top"><svg class='arrow-to-top-keeper'>
							<use class='arrow-to-top' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
						</svg></btn>
				</div>
				<main class="page">
					<!-- Круги для таблицы
	 <em class='circles fill-circle'></em>
<em class='circles empty-circle'></em> -->

					<div class="detail">
						<div class="container">
							<div class="detail__inner">
								<ul class="breadcrumbs">
									<li class="breadcrumbs__item">
										<a href="/catalog.html" class="breadcrumbs__link">Каталог /</a>
									</li>
									<li class="breadcrumbs__item breadcrumbs__item-last">
										<p class="breadcrumbs__link">Зерноуборочный комбайн GS2124</p>
									</li>
								</ul>
								<div class="detail__content">
									<div class="detail-box">
										<div class="detail__desc">
											<h1 class='detail-box__title'>Зерноуборочный комбайн GS2124</h1>
											<p class='detail-box__description'>Зерноуборочный комбайн GOMSELMASH GS2124 – идеальное сочетание
												производительности, комфорта и
												Ваших пожеланий.</p>
											<div class="detail-box__machine-prop">
												<p class="catalog-filter__item-description">
													<strong>Двигатель:</strong>
													530 л.с.
												</p>
												<p class="catalog-filter__item-description">
													<strong>Тип МСУ:</strong>
													гибридный
												</p>
												<p class="catalog-filter__item-description">
													<strong>Бункер:</strong>
													10,5 м3
												</p>
												<p class="catalog-filter__item-description">
													<strong>Общая площадь очистки:</strong>
													5,8 м2
												</p>
											</div>
											<div class="detail-box__all-props detailSpollerScroll" data-detailspoller='propsContent'>Все характеристики
												<svg class='detail-list-keeper'>
													<use class='detail-list' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-list'></use>
												</svg>
											</div>
											<a class='' href=''> <span> </span></a>
											<a class="red-button-link catalog-filter__link detail-link detailSpollerScroll" data-detailspoller='feedback'>Оставить заявку</a>

										</div>

									</div>
									<!-- ! Блок под фото, если фотка одна -->
									<!-- <div class="detail__photo">
										<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
									</div> -->

									<!-- ! Блок под фото, если фоток больше двух -->
									<div class="detail__slider">
										<div class="swiper mySwiper2">
											<div class="swiper-wrapper">
												<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
												
												<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
												
												<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
												
												<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
												
												<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
												
												<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
												
											</div>
										</div>

										<div thumbsSlider="" class="swiper mySwiper">

											<div class="swiper-wrapper">
											<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
											<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
											<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
											<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
											<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
											<div class="swiper-slide swiper-slide-detail">
													<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/catalog/combain.jpg" /></picture>
												</div>
											
												
											</div>
										</div>
										<div class="swiper-button-prev detail-swiper-button-prev">
											<svg class='detail__swiper-btns'>
												<use class='detail__swiper-btn-prev' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
											</svg>
										</div>
										<div class="swiper-button-next detail-swiper-button-next">
											<svg class='detail__swiper-btns'>
												<use class='detail__swiper-btn-next' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
											</svg>
										</div>


									</div>

									<div class="detail-content-mob">
										<div class="select-box details-mob">
											<div class='select-mob-wrapper details-select-mob'>
												<button class="select-mob"> <span>Что Вас интересует?</span>
													<!-- <svg class='svg-list-select-keeper'>
									<use class='svg-list-select' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-list'></use>
								</svg> -->
													<use>
														<svg class='svg-list-select' width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M6.21062 7.2099C5.81149 7.76296 4.98799 7.76296 4.58885 7.2099L0.770261 1.9187C0.292964 1.25734 0.765537 0.333496 1.58115 0.333496L9.21833 0.333497C10.0339 0.333497 10.5065 1.25734 10.0292 1.9187L6.21062 7.2099Z" fill="#4A4F59" />
														</svg>
													</use>
												</button>
												<ul class="select-mob__list">

													<li class="select-mob__item select-mob-padding detailsSpollerLinks detailSpollerScroll" data-detailspoller='descContent'>
														<div class="select-mob__btn" class=''>Описание
														</div>
													</li>
													<li class="select-mob__item select-mob-padding detailsSpollerLinks detailSpollerScroll" data-detailspoller='propsContent'>
														<div class="select-mob__btn" class=''>Технические
															характеристики </div>
													</li>
													<li class="select-mob__item select-mob-padding detailsSpollerLinks detailSpollerScroll" data-detailspoller='buyContent'>
														<div class="select-mob__btn" class=''>Способы
															покупки
														</div>
													</li>
													<li class="select-mob__item select-mob-padding detailsSpollerLinks detailSpollerScroll" data-detailspoller='feedback'>
														<div class="select-mob__btn">Связаться с нами
														</div>
													</li>
													<!-- <li class="select-mob__item select-mob-padding detail-color-li detailSpollerLink"
									data-detailspoller='feedback'>
									<div class="select-mob__btn" class='detailSpollerLinks'>Связаться с
										нами
									</div>
								</li> -->

												</ul>
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
										<ul class='detail-content__list'>
											<li class="detail-content__item detail-item--active" id='desc'>
												<div class="spoller-content" data-mobdetail='desc'>
													<p class=''>Зерноуборочный комбайн GS2124 – идеальное сочетание производительности, комфорта и Ваших
														пожеланий. Система обмолота и сепарации HYBRID-FLOW обеспечивает повышенную производительность и
														качество вымолота даже на сложных хлебах. Высокий уровень автоматизации выполняемых процессов
														обеспечивает стабильную работу комбайна на любых агрофонах, исключая возможность ошибки комбайнера.
														Выбирая данную модель комбайна, Вы можете быть уверены, что получите наилучшие показатели в уборке
														урожая при максимальном комфорте.</p>

													<!-- <div class="news-detail__content"> -->
													<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/pmKCZ-YJvqc"
									title="Player for Palesse" frameborder="0" allowfullscreen></iframe> -->

													<!-- </div> -->

													<a class='download-link' href='' download=''>
														<svg class='pdf-keeper'>
															<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
														</svg>
														Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>

												</div>
											</li>
											<li class="detail-content__item" id='props'>
												<div class="spoller-content" data-mobdetail='props'>

													<table class='table-headline'>
														<tr class='table-headline__row'>
															<td class='table-headline__td table-headline__td-first'>Характеристика</td>
															<td class='table-headline__td table-headline__td-second'>
																<ul class='table-headline__td-list'>
																	<li class='table-headline__td-item'>
																		<em class='circles fill-circle'></em>
																		<span>серийно</span>
																	</li>
																	<li class='table-headline__td-item'>
																		<em class='circles empty-circle'></em>
																		<span>опционально</span>
																	</li>
																</ul>
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
													<ul class='detail-content__list'>
														<li class="detail-content__list-item">

															<div class="detail-content__list-item-img">
																<img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/methods/ros-lizing.png' alt=''>
															</div>
															<div class="detail-content__list-item-content">
																<div class="detail-content__list-item-title">Росагролизинг</div>
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
														<li class="detail-content__list-item">
															<div class="detail-content__list-item-img">
																<img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/methods/credit.png' alt=''>
															</div>
															<div class="detail-content__list-item-content">
																<div class="detail-content__list-item-title">Росагролизинг</div>
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
														<li class="detail-content__list-item">
															<div class="detail-content__list-item-img">
																<img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/methods/com-lizing.png' alt=''>
															</div>
															<div class="detail-content__list-item-content">
																<div class="detail-content__list-item-title">Коммерческий лизинг</div>
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
														<li class="detail-content__list-item">
															<div class="detail-content__list-item-img">
																<img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/methods/cash.png' alt=''>
															</div>
															<div class="detail-content__list-item-content">
																<div class="detail-content__list-item-title">Собственные средства</div>
																<div class="detail-content__list-item-props">
																	<p class='detail-content__list-item-prop'>без процентов</p>
																</div>
																<div class="detail-content__list-item-text">Самый быстрый способ приобретения</div>
															</div>
															<a class='detail-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

														</li>
													</ul>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<section class="feedback" id='feedback'>
						<div class="feedback-container container">
							<div class="feedback-container_target"></div>
						</div>
						<div class="container-fluid">
							<div class="feedback__bg" style='background-image: url(<?=SITE_TEMPLATE_PATH;?>/assets/img/pages-bg-pictures/bot-form.jpg);'>
								<div class="container">
									<div class="feedback__inner">
										<div class="feedback__content">
											<form class="feedback__form" id='feedback-form'>
												<h4 class="feedback__form-title form-item">
													Остались вопросы?

													<p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>
												</h4>
												<label for='feedback-name' class='feedback-label form-item'>
													<input class="feedback__input feedback__name input-field-index" maxlength='40' id='feedback-name' type="text" name='Name'>
													<span class='label-span'>Имя</span>
												</label>

												<label for='feedback-phone' class='feedback-label form-item'>
													<input class="feedback__input feedback__phone input-field-index" id='feedback-phone' type="tel" name='Phone' maxlength='20'>
													<span class='label-span'> Телефон</span>
												</label>
												<label for='feedback-topic' class='feedback-label form-item'>
													<input class="feedback__input feedback__name input-field-index" maxlength='80' id='feedback-topic' type="text" name='Topic'>
													<span class='label-span'>Тема сообщения</span>
												</label>



												<button class="red-button-link feedback__btn form-item" type="submit">Отправить заявку</button>
												<p class='feedback__form-privacy form-item'>
													Отправляя заявку Вы принимаете условия
													<a class='feedback__form-privacy-link form-item' href='/privacy.html'>Политики конфиденциальности</a>
												</p>
											</form>
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>
					<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>