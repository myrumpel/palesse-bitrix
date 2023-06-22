<?php
global $APPLICATION;
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Способы приобретения');
?>
<section class="ways">
						<div class="container">
							<div class="ways__inner">
								<div class="ways__face">
									<div class="ways__face-title-photo">

										<h1 class='ways__face-title'> Процесс покупки техники</h1>

										<div class="ways__face-photo">
											<img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/pages-bg-pictures/ways-main.jpg' alt=''>
										</div>
									</div>
									<div class="ways__face-line">
										<ul class='ways__face-list'>
											<li class='ways__face-item'>
												<h2 class='ways__face-item-title'>Выбор техники</h2>
												<p class='ways__face-item-text'>Выбирайте сельхозяйственную технику под любые цели и оставляйте заявку на
													сайте </p>
												<a class='ways__face-item-link' href='/catalog.html'>Смотреть каталог
													<svg class='ways-face-arrow-right-keeper'>
														<use class='ways-face-arrow-right' xlink:href='img/icons/icons.svg#svg-arrow-right'></use>
													</svg></a>
											</li>
											<li class='ways__face-item'>
												<h2 class='ways__face-item-title'>Консультация</h2>
												<p class='ways__face-item-text'>После заявки с вами свяжется специалист компании и проконсультирует
													вас по технике и подберёт схему приобретения</p>
											</li>
											<li class='ways__face-item'>
												<h2 class='ways__face-item-title'>Подписание договора и оплата</h2>
												<p class='ways__face-item-text'>Ознакамливаетесь, подписываете договор и оплачиваете по выбранной схеме
													преобретения</p>
												<a class='ways__face-item-link' href='#scheme'>Схемы финансирования
													<svg class='ways-face-arrow-right-keeper'>
														<use class='ways-face-arrow-right' xlink:href='img/icons/icons.svg#svg-arrow-right'></use>
													</svg></a>

											</li>
											<li class='ways__face-item'>
												<h2 class='ways__face-item-title'>Получаете технику</h2>


											</li>
										</ul>
									</div>
								</div>


								<section class="scheme" id='scheme'>
									<h2 class='scheme__title'>Схемы финансирования</h2>
									<div class="scheme__inner">
										<div class="scheme__item">
											<img class='scheme__item-photo' src='<?=SITE_TEMPLATE_PATH;?>/assets/img/methods/ros-lizing.png' alt=''>
											<div class="scheme__item-title">Росагролизинг</div>
											<ul class="scheme__item-props">
												<li class='scheme__item-prop'>от 0%</li>
												<li class='scheme__item-prop'>до 8 лет</li>
												<li class='scheme__item-prop'>Первоначальный взнос от 0%</li>
											</ul>
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
												<img class='scheme__item-photo' src='<?=SITE_TEMPLATE_PATH;?>/assets/img/methods/credit.png' alt=''>
											</div>
											<div class="scheme__item-title">Льготный кредит </div>
											<ul class="scheme__item-props">
												<li class='scheme__item-prop'>от 0%</li>
												<li class='scheme__item-prop'> до 5 лет</li>
												<li class='scheme__item-prop'>Первоначальный взнос от 0%</li>
											</ul>
											<div class="scheme__item-content">
												<p class='scheme__item-text'>Программа от МСХ по субсидированию части стоимости новой техники.

												</p>
												<p class='scheme__item-text'>Индивидуальный график платежей (оплата по основному долгу 1 раз в год,
													в течении года оплата процентов).</p>
											</div>
											<a class='ways-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

										</div>
										<div class="scheme__item">
											<img class='scheme__item-photo' src='<?=SITE_TEMPLATE_PATH;?>/assets/img/methods/com-lizing.png' alt=''>
											<div class="scheme__item-title">Коммерческий лизинг</div>
											<ul class="scheme__item-props">
												<li class='scheme__item-prop'>от 11% годовых</li>
												<li class='scheme__item-prop'> до 5 лет</li>
												<li class='scheme__item-prop'>Cезонный график</li>
											</ul>
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
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/sberbank.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/rosselkhoz.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/vtb.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/alpha-bank.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/uralsib.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/raiffeisen.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/tinkoff.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/kuban-kredit.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/rnkb.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/promsvyaz.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/absolut.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/youg-invest.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/rosagrolizing.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/sber-lizing.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/vtb-lizing.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/alpha-lizing.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/euro-plan.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/baltiyskiy-lizing.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/sovkombank.png' alt=''></div>
										<div class="banks__img"> <img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/bank/interlizing.png' alt=''></div>
									</div>
								</section>
							</div>
						</div>
					</section>
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