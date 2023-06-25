<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
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
									<picture>
										<source srcset="img/team/sidyakin.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/sidyakin.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										Сидякин Антон
									</h4>
									<p class="card-item__position">Заместитель генерального директора
									</p>
									<a class="card-item__phone" href="#">+7 (905) 470 88-00</a>
								</article>
								<article class="card-item big-card">
									<picture>
										<source srcset="img/team/trudkov.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/trudkov.jpg" alt="">
									</picture>
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
									<picture>
										<source srcset="img/team/dziuba.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/dziuba.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										<p>Дзюба</p>
										<p>Александр</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (905) 495 58-85</a>
								</article>
								<article class="card-item">
									<picture>
										<source srcset="img/team/chernenko.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/chernenko.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										<p>Черненко </p>
										<p>Кирилл</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (961) 506 93-19</a>
								</article>
								<article class="card-item">
									<picture>
										<source srcset="img/team/roschepkin.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/roschepkin.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										<p>Рощепкин </p>
										<p>Михаил</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (961) 506 93-42</a>
								</article>
								<article class="card-item">
									<picture>
										<source srcset="img/team/khanaeva.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/khanaeva.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										<p>Ханаева</p>
										<p>Галина</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (961) 506 87-63</a>
								</article>
								<article class="card-item">
									<picture>
										<source srcset="img/team/avdalov.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/avdalov.jpg" alt="">
									</picture>
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
									<picture>
										<source srcset="img/team/mogila.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/mogila.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										<p>Могила </p>
										<p>Антон</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (918) 932 25-08</a>
								</article>
								<article class="card-item">
									<picture>
										<source srcset="img/team/zezyulin.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/zezyulin.jpg" alt="">
									</picture>
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
									<picture><source srcset="img/team/dziuba.webp" type="image/webp"><img class="card-item__photo" src="img/team/dziuba.jpg" alt=""></picture>
									<h4 class="card-item__name">
										<p>Дзюба</p>
										<p>Александр</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (905) 495 58-85</a>
								</article>
								<article class="card-item">
									<picture><source srcset="img/team/dziuba.webp" type="image/webp"><img class="card-item__photo" src="img/team/dziuba.jpg" alt=""></picture>
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
									<picture>
										<source srcset="img/team/kovalenko.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/kovalenko.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										<p>Коваленко </p>
										<p>Николай</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (962) 026 21-18</a>
								</article>
								<article class="card-item">
									<picture>
										<source srcset="img/team/laptev.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/laptev.jpg" alt="">
									</picture>
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
									<picture>
										<source srcset="img/team/zavgorodny.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/zavgorodny.jpg" alt="">
									</picture>
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
									<picture>
										<source srcset="img/team/balakarev.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/balakarev.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										<p>Балакарев</p>
										<p>Илья</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (961) 507 03-65</a>
								</article>
								<article class="card-item">
									<picture>
										<source srcset="img/team/alyabiev.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/alyabiev.jpg" alt="">
									</picture>
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
									<picture>
										<source srcset="img/team/tsokol.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/tsokol.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										<p>Цокол</p>
										<p>Виталий</p>
									</h4>
									<p class="card-item__position">Специалист отдела продаж</p>
									<a class="card-item__phone" href="#">+7 (961) 489 57-00</a>
								</article>
								<article class="card-item">
									<picture>
										<source srcset="img/team/naimushin.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/naimushin.jpg" alt="">
									</picture>
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
									<picture>
										<source srcset="img/team/belokon.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/belokon.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										Белоконь Сергей </h4>
									<p class="card-item__position">Руководитель сервисной службы</p>
									<a class="card-item__phone" href="#">+7 (905) 402 54-44</a>
								</article>
								<article class="card-item big-card">
									<picture>
										<source srcset="img/team/kondrashov.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/kondrashov.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										Кондрашов Денис </h4>
									<p class="card-item__position">Технический директор</p>
									<a class="card-item__phone" href="#">+7 (903) 458 55-59</a>
								</article>
								<article class="card-item big-card">
									<picture>
										<source srcset="img/team/tsokol2.webp" type="image/webp"><img class="card-item__photo"
											src="img/team/tsokol2.jpg" alt="">
									</picture>
									<h4 class="card-item__name">
										Цокол Виталий </h4>
									<p class="card-item__position">Руководитель сервисной службы ставропольского подразделения</p>
									<a class="card-item__phone" href="#">+7 (961) 489 57-00</a>
								</article>

								<!-- <article class="card-item">
									<picture><source srcset="img/team/tsokol.webp" type="image/webp"><img class="card-item__photo" src="img/team/tsokol.jpg" alt=""></picture>
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
		<div class="feedback__bg" style='background-image: url(img/pages-bg-pictures/bot-form.jpg);'>
			<div class="container">
				<div class="feedback__inner">
					<div class="feedback__content">
						<form class="feedback__form contact-map" id='feedback-form'>
							<h4 class="feedback__form-title form-item">
								Остались вопросы?

								<p class='feedback__accent-color form-item'>Мы свяжемся с Вами!</p>
							</h4>
							<label for='feedback-name' class='feedback-label form-item'>
								<input class="feedback__input feedback__name input-field-index" maxlength='40' id='feedback-name'
									type="text" name='Name'>
								<span class='label-span'>Имя</span>
							</label>

							<label for='feedback-phone' class='feedback-label form-item'>
								<input class="feedback__input feedback__phone input-field-index" id='feedback-phone' type="tel"
									name='Phone' maxlength='20'>
								<span class='label-span'> Телефон</span>
							</label>
							<label for='feedback-topic' class='feedback-label form-item'>
								<input class="feedback__input feedback__name input-field-index" maxlength='80' id='feedback-topic'
									type="text" name='Topic'>
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


</main>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>