<?php
global $APPLICATION;
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Контакты');
?>
<main class="contacts">
						<div class="container">
							<h1 class='contacts__title'>Контакты</h1>
							<section class="contacts-accordion">
								<article class="contacts-accordion__item">
									<button class="contacts-accordion__btn">Отдел полнокомплектной техники
										<p class='accordion-cross'>
											<span class='accordion-cross__line '></span>
										</p>
									</button>
									<div class="contacts-accordion__content">
										<div class="items-section">
											<div class="district">
												<div class="district__inner">
													<article class="card-item big-card">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/sidyakin.webp" type="image/webp"><img class="card-item__photo" src="img/team/sidyakin.jpg" alt=""></picture>
														<h4 class="card-item__name">
															Сидякин Антон
														</h4>
														<p class="card-item__position">Заместитель генерального директора
														</p>
														<a class="card-item__phone" href="#">+7 (905) 470 88-00</a>
													</article>
													<article class="card-item big-card">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/trudkov.webp" type="image/webp"><img class="card-item__photo" src="img/team/trudkov.jpg" alt=""></picture>
														<h4 class="card-item__name">
															Трудков Евгений
														</h4>
														<p class="card-item__position">Руководитель Ставропольского подразделения</p>
														<a class="card-item__phone" href="#">+7 (962) 441 99-49</a>
													</article>


												</div>
											</div>
											<div class="district">
												<div class="district__title">Краснодарский край</div>
												<div class="district__inner district-mini">
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/dziuba.webp" type="image/webp"><img class="card-item__photo" src="img/team/dziuba.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Дзюба</p>
															<p>Александр</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (905) 495 58-85</a>
													</article>
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/chernenko.webp" type="image/webp"><img class="card-item__photo" src="img/team/chernenko.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Черненко </p>
															<p>Кирилл</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (961) 506 93-19</a>
													</article>
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/roschepkin.webp" type="image/webp"><img class="card-item__photo" src="img/team/roschepkin.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Рощепкин </p>
															<p>Михаил</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (961) 506 93-42</a>
													</article>
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/khanaeva.webp" type="image/webp"><img class="card-item__photo" src="img/team/khanaeva.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Ханаева</p>
															<p>Галина</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (961) 506 87-63</a>
													</article>
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/avdalov.webp" type="image/webp"><img class="card-item__photo" src="img/team/avdalov.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Авдалов</p>
															<p>Борис</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (964) 902 41-72</a>
													</article>

												</div>
											</div>
											<div class="district">
												<div class="district__title fz-20">ЛНР, ДНР</div>
												<div class="district__inner district-mini">
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/mogila.webp" type="image/webp"><img class="card-item__photo" src="img/team/mogila.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Могила </p>
															<p>Антон</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (918) 932 25-08</a>
													</article>
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/zezyulin.webp" type="image/webp"><img class="card-item__photo" src="img/team/zezyulin.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Зезюлин</p>
															<p>Евгений</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (964) 902 45-49</a>
													</article>

												</div>
											</div>
											<!-- <div class="district">
							<div class="district__title fz-20">Республики СКФО</div>
							<div class="district__inner">
								<article class="card-item">
									<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/dziuba.webp" type="image/webp"><img class="card-item__photo" src="img/team/dziuba.jpg" alt=""></picture>
									<h4 class="card-item__name">
										<p>Дзюба</p>
										<p>Александр</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (905) 495 58-85</a>
								</article>
								<article class="card-item">
									<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/dziuba.webp" type="image/webp"><img class="card-item__photo" src="img/team/dziuba.jpg" alt=""></picture>
									<h4 class="card-item__name">
										<p>Дзюба</p>
										<p>Александр</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (905) 495 58-85</a>
								</article>

							</div>
						</div> -->
											<div class="district">
												<div class="district__title fz-20">Ставропольский край</div>
												<div class="district__inner district-mini">
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/kovalenko.webp" type="image/webp"><img class="card-item__photo" src="img/team/kovalenko.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Коваленко </p>
															<p>Николай</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (962) 026 21-18</a>
													</article>
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/laptev.webp" type="image/webp"><img class="card-item__photo" src="img/team/laptev.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Лаптев </p>
															<p>Евгений</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (961) 507 07-34</a>
													</article>

												</div>
											</div>
										</div>
									</div>

								</article>
								<article class="contacts-accordion__item">
									<button class="contacts-accordion__btn">Отдел запасных частей
										<p class='accordion-cross'>
											<span class='accordion-cross__line '></span>
										</p>
									</button>
									<div class="contacts-accordion__content">

										<div class="items-section">
											<div class="district">
												<div class="district__inner">
													<article class="card-item big-card">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/zavgorodny.webp" type="image/webp"><img class="card-item__photo" src="img/team/zavgorodny.jpg" alt=""></picture>
														<h4 class="card-item__name">
															Завгородний Алексей
														</h4>
														<p class="card-item__position">Заместитель генерального директора по продажам запасных частей</p>
														<a class="card-item__phone" href="#">+7 961 590-92-55</a>
													</article>



												</div>
											</div>
											<div class="district">
												<div class="district__title fz-20">
													<p> Краснодарский край,
													</p>
													<p> ЛНР, ДНР
													</p>
												</div>
												<div class="district__inner">
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/balakarev.webp" type="image/webp"><img class="card-item__photo" src="img/team/balakarev.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Балакарев</p>
															<p>Илья</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (961) 507 03-65</a>
													</article>
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/alyabiev.webp" type="image/webp"><img class="card-item__photo" src="img/team/alyabiev.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Алябьев</p>
															<p>Максим </p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (960) 492 33-55</a>
													</article>



												</div>
											</div>
											<div class="district">
												<div class="district__title  fz-20">
													<p>Ставропольский край,</p>
													<p>Республики СКФО
													</p>
												</div>
												<div class="district__inner">
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/tsokol.webp" type="image/webp"><img class="card-item__photo" src="img/team/tsokol.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Цокол</p>
															<p>Виталий</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (961) 489 57-00</a>
													</article>
													<article class="card-item">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/naimushin.webp" type="image/webp"><img class="card-item__photo" src="img/team/naimushin.jpg" alt=""></picture>
														<h4 class="card-item__name">
															<p>Наймушин</p>
															<p>Александр</p>
														</h4>
														<p class="card-item__position">Специалист отдела продаж</p>
														<a class="card-item__phone" href="#">+7 (989) 128 11-55</a>
													</article>



												</div>
											</div>


										</div>
									</div>
								</article>

								<article class="contacts-accordion__item">
									<button class="contacts-accordion__btn">Отдел сервисного обслуживания
										<p class='accordion-cross'>
											<span class='accordion-cross__line '></span>
										</p>
									</button>
									<div class="contacts-accordion__content">
										<div class="items-section">
											<div class="district">
												<div class="district__inner">
													<article class="card-item big-card">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/belokon.webp" type="image/webp"><img class="card-item__photo" src="img/team/belokon.jpg" alt=""></picture>
														<h4 class="card-item__name">
															Белоконь Сергей </h4>
														<p class="card-item__position">Руководитель сервисной службы</p>
														<a class="card-item__phone" href="#">+7 (905) 402 54-44</a>
													</article>
													<article class="card-item big-card">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/kondrashov.webp" type="image/webp"><img class="card-item__photo" src="img/team/kondrashov.jpg" alt=""></picture>
														<h4 class="card-item__name">
															Кондрашов Денис </h4>
														<p class="card-item__position">Технический директор</p>
														<a class="card-item__phone" href="#">+7 (903) 458 55-59</a>
													</article>
													<article class="card-item big-card">
														<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/tsokol2.webp" type="image/webp"><img class="card-item__photo" src="img/team/tsokol2.jpg" alt=""></picture>
														<h4 class="card-item__name">
															Цокол Виталий </h4>
														<p class="card-item__position">Руководитель сервисной службы ставропольского подразделения</p>
														<a class="card-item__phone" href="#">+7 (961) 489 57-00</a>
													</article>

													<!-- <article class="card-item">
									<picture><source srcset="<?=SITE_TEMPLATE_PATH;?>/assets/img/team/tsokol.webp" type="image/webp"><img class="card-item__photo" src="img/team/tsokol.jpg" alt=""></picture>
									<h4 class="card-item__name">
										<p>Цокол</p>
										<p>Виталий</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (961) 489 57-00</a>
								</article> -->

												</div>
											</div>



										</div>
									</div>


								</article>


							</section>

						</div>
					</main>
					<section class="feedback">
						<div class="feedback-container container">
							<div class="feedback-container_target"></div>
						</div>
						<div class="container-fluid">
							<div class="feedback__bg" style='background-image: url(<?=SITE_TEMPLATE_PATH;?>/assets/img/pages-bg-pictures/bot-form.jpg);'>
								<div class="container">
									<div class="feedback__inner">
										<div class="feedback__content">
											<form class="feedback__form contact-map" id='feedback-form'>
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
													<a class='feedback__form-privacy-link form-item' href='/privacy.php'>Политики конфиденциальности</a>
												</p>
											</form>
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>
					<section class="map">
						<div class="container-fluid">
							<div class="map__bg ">

								<div class='yandex-map'>

								</div>

								<div class='yandex-map-mobile'>

								</div>
								<div class="container">
									<div class="map__inner">
										<div class="map__content">
											<div class="map__mail map-row-info">
												<h6 class='map__left-title map-item'>

													<div class='svg-geo-contacts-keeper'>
														<use class='contacts-svg'><svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
																<g clip-path="url(#clip0_401_1966)">
																	<path d="M0.624805 5.8823C0.776032 5.21967 1.14779 4.62802 1.67919 4.20427C2.21059 3.78051 2.87013 3.54976 3.5498 3.5498H21.5498C22.2295 3.54976 22.889 3.78051 23.4204 4.20427C23.9518 4.62802 24.3236 5.21967 24.4748 5.8823L12.5498 13.1708L0.624805 5.8823ZM0.549805 7.5953V18.2513L9.2543 12.9143L0.549805 7.5953ZM10.6913 13.7948L0.836305 19.8353C1.07979 20.3487 1.46409 20.7824 1.94448 21.086C2.42486 21.3895 2.98157 21.5503 3.5498 21.5498H21.5498C22.1179 21.5499 22.6744 21.3887 23.1546 21.0849C23.6347 20.7812 24.0186 20.3473 24.2618 19.8338L14.4068 13.7933L12.5498 14.9288L10.6913 13.7948ZM15.8453 12.9158L24.5498 18.2513V7.5953L15.8453 12.9143V12.9158Z" />
																</g>
																<defs>
																	<clipPath id="clip0_401_1966">
																		<rect width="24" height="24" transform="translate(0.549805 0.549805)" />
																	</clipPath>
																</defs>
															</svg>
														</use>
													</div>
													Почта
												</h6>
												<div class="map__right-content">
													<a href='mailto:tdpalesse@yandex.ru'>tdpalesse@yandex.ru</a>
												</div>
											</div>


											<div class="map__adress map-row-info">
												<h6 class='map__left-title map-item'>
													<!-- <svg class='svg-geo-contacts-keeper'>
									<use class='contacts-svg svg-geo-contacts' xlink:href='img/icons/icons.svg#svg-geo'></use>
								</svg> -->
													<div class='svg-geo-contacts-keeper'>
														<use class='contacts-svg svg-geo-contacts'>
															<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
																<g clip-path="url(#clip0_401_1970)">
																	<path d="M12.5498 24.5498C12.5498 24.5498 21.5498 16.0208 21.5498 9.5498C21.5498 7.16286 20.6016 4.87367 18.9138 3.18584C17.2259 1.49802 14.9368 0.549805 12.5498 0.549805C10.1629 0.549805 7.87367 1.49802 6.18584 3.18584C4.49802 4.87367 3.5498 7.16286 3.5498 9.5498C3.5498 16.0208 12.5498 24.5498 12.5498 24.5498ZM12.5498 14.0498C11.3563 14.0498 10.2117 13.5757 9.36782 12.7318C8.52391 11.8879 8.0498 10.7433 8.0498 9.5498C8.0498 8.35633 8.52391 7.21174 9.36782 6.36782C10.2117 5.52391 11.3563 5.0498 12.5498 5.0498C13.7433 5.0498 14.8879 5.52391 15.7318 6.36782C16.5757 7.21174 17.0498 8.35633 17.0498 9.5498C17.0498 10.7433 16.5757 11.8879 15.7318 12.7318C14.8879 13.5757 13.7433 14.0498 12.5498 14.0498Z" />
																</g>
																<defs>
																	<clipPath id="clip0_401_1970">
																		<rect width="24" height="24" transform="translate(0.549805 0.549805)" />
																	</clipPath>
																</defs>
															</svg>
														</use>
													</div>


													Адреса офисов
												</h6>

												<div class="map__right-content map-item">
													<div class="map__right-content-adress">

														<p class='map__city'>Усть-Лабинск</p>
														ул. Белорусская, 1

													</div>
													<div class="map__right-content-adress">
														<p class='map__city'>Ставрополь</p>


														(с. Верхнерусское,

														ул. Батайская 27)

													</div>
												</div>
											</div>
											<div class="map__schedule map-row-info">

												<h6 class='map__left-title map-item'>
													<!-- <svg class='svg-clock-contacts-keeper'>
									<use class='contacts-svg svg-clock-contacts' xlink:href='img/icons/icons.svg#svg-clock'></use>
								</svg> -->
													<div class='svg-geo-contacts-keeper'>
														<use class='contacts-svg svg-clock-contacts'>
															<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
																<g clip-path="url(#clip0_401_1976)">
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5498 24.5498C19.1772 24.5498 24.5498 19.1772 24.5498 12.5498C24.5498 5.92239 19.1772 0.549805 12.5498 0.549805C5.92239 0.549805 0.549805 5.92239 0.549805 12.5498C0.549805 19.1772 5.92239 24.5498 12.5498 24.5498ZM12.3301 5.26947C12.4708 5.41013 12.5498 5.60089 12.5498 5.7998V13.6148L17.4218 16.3988C17.5895 16.5 17.711 16.6627 17.7603 16.8522C17.8095 17.0418 17.7827 17.2431 17.6856 17.4131C17.5884 17.5831 17.4286 17.7084 17.2403 17.7622C17.052 17.8159 16.8501 17.7939 16.6778 17.7008L11.4278 14.7008C11.313 14.6352 11.2176 14.5405 11.1512 14.4262C11.0848 14.3118 11.0498 14.182 11.0498 14.0498V5.7998C11.0498 5.60089 11.1288 5.41013 11.2695 5.26947C11.4101 5.12882 11.6009 5.0498 11.7998 5.0498C11.9987 5.0498 12.1895 5.12882 12.3301 5.26947Z" />
																</g>
																<defs>
																	<clipPath id="clip0_401_1976">
																		<rect width="24" height="24" transform="translate(0.549805 0.549805)" />
																	</clipPath>
																</defs>
															</svg>
														</use>
													</div>
													График работы
												</h6>
												<div class="map__right-content map-item">

													<p class='map__main-schedule'> <span> Пн-Пт:</span> с 8:00 до 17:00</p>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</section>

				</main>


<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>