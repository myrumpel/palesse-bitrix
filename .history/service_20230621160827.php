<?php
global $APPLICATION;
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Сервисный центр');
?>

<section class="service">
						<div class="container">
							<div class="service__inner">
								<div class="service__main">
									<div class="service__headline">
										<h1 class="service__headline-title">Сервисный центр</h1>
										<h2 class="service__headline-subtitle">Сервисная служба представлена 20 сервисными бригадами, оборудованными
											согласно требованиям заводов изготовителей. Специалисты сервисной службы прошли обучения на заводах и имеют
											соответствующие сертификаты. Ежегодно на сервисном сопровождении находится не менее 250 единиц техники.</h2>
										<a class="red-button-link service-btn" href="#feedback-form">Оставить заявку</a>

									</div>
									<div class="service__main-bg-box">
										<div class="service__main-bg-two" style='background-image: url(<?=SITE_TEMPLATE_PATH;?>/assets/img/pages-bg-pictures/services-main-two.jpg);'>

										</div>
										<div class="service__main-bg-one" style='background-image: url(<?=SITE_TEMPLATE_PATH;?>/assets/img/pages-bg-pictures/services-main-one.jpg);'>

										</div>
									</div>
								</div>

							</div>
						</div>
						<section class="about-leaders service-trust">

							<div class="container-fluid">
								<div class="about-leaders__bg service-trust__bg" style='background-image: url(<?=SITE_TEMPLATE_PATH;?>/assets/img/pages-bg-pictures/services-wheat.jpg);'>
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
										<img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/pages-bg-pictures/services-big-form.jpg' alt=''>
									</div>
									<form class="feedback__form feedback-tech__form" id='feedback-form'>
										<h4 class="feedback__form-title feedback-tech__title service-fomr-item">
											Хотите получить сервисное сопровождение своей техники?

											<p class='feedback__accent-color service-fomr-item'>Оставьте заявку!</p>
										</h4>
										<label for='feedback-name' class='feedback-label service-fomr-item'>
											<input class="feedback__input feedback__name input-field-index" maxlength='40' id='feedback-name' type="text" name='Name'>
											<span class='label-span'>Имя</span>
										</label>

										<label for='feedback-phone' class='feedback-label service-fomr-item'>
											<input class="feedback__input feedback__phone input-field-index" id='feedback-phone' type="tel" name='Phone' maxlength='20'>
											<span class='label-span'> Телефон</span>
										</label>
										<label for='tech-kind' class='feedback-label service-fomr-item'>
											<input class="feedback__input  input-field-index" id='tech-kind' type="text" name='tech-kind' maxlength='50'>
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
											<a class='feedback__form-privacy-link  service-fomr-item' href='/privacy.php'>Политики
												конфиденциальности</a>
										</p>
									</form>
								</div>
							</div>

						</section>
					</section>



<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>