<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Способы приобретения");
?>

<section class="ways">
	<div class="container">
		<div class="ways__inner">
			<div class="ways__face">
				<div class="ways__face-title-photo">

					<h1 class='ways__face-title'> Процесс покупки техники</h1>

					<div class="ways__face-photo">
						<img src='img/pages-bg-pictures/ways-main.jpg' alt=''>
					</div>
				</div>
				<div class="ways__face-line">
					<ol class='ways__face-list'>
						<li class='ways__face-item'>
							<h2 class='ways__face-item-title'>Выбор техники</h2>
							<p class='ways__face-item-text'>Выбирайте сельхозяйственную технику под любые цели и оставляйте заявку на
								сайте </p>
							<a class='ways__face-item-link' href='/catalog.html'>Смотреть каталог
								<svg class='ways-face-arrow-right-keeper'>
									<use class='ways-face-arrow-right'
										xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
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
					</ol>
				</div>
			</div>


			<section class="scheme" id='scheme'>
				<h2 class='scheme__title'>Схемы финансирования</h2>
				<div class="scheme__inner">
					<div class="scheme__item">
						<img class='scheme__item-photo' src='img/methods/ros-lizing.png' alt=''>
						<div class="scheme__item-title">Росагролизинг</div>
						<ol class="scheme__item-props">
							<li class='scheme__item-prop'>от 0%</li>
							<li class='scheme__item-prop'>до 8 лет</li>
							<li class='scheme__item-prop'>Первоначальный взнос от 0%</li>
						</ol>
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
							<img class='scheme__item-photo' src='img/methods/credit.png' alt=''>
						</div>
						<div class="scheme__item-title">Льготный кредит </div>
						<ol class="scheme__item-props">
							<li class='scheme__item-prop'>от 0%</li>
							<li class='scheme__item-prop'> до 5 лет</li>
							<li class='scheme__item-prop'>Первоначальный взнос от 0%</li>
						</ol>
						<div class="scheme__item-content">
							<p class='scheme__item-text'>Программа от МСХ по субсидированию части стоимости новой техники.

							</p>
							<p class='scheme__item-text'>Индивидуальный график платежей (оплата по основному долгу 1 раз в год,
								в течении года оплата процентов).</p>
						</div>
						<a class='ways-link-to-form' href='#feedback'>Нужна помощь с выбором</a>

					</div>
					<div class="scheme__item">
						<img class='scheme__item-photo' src='img/methods/com-lizing.png' alt=''>
						<div class="scheme__item-title">Коммерческий лизинг</div>
						<ol class="scheme__item-props">
							<li class='scheme__item-prop'>от 11% годовых</li>
							<li class='scheme__item-prop'> до 5 лет</li>
							<li class='scheme__item-prop'>Cезонный график</li>
						</ol>
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
					<div class="banks__img"> <img src='img/bank/sberbank.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/rosselkhoz.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/vtb.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/alpha-bank.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/uralsib.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/raiffeisen.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/tinkoff.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/kuban-kredit.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/rnkb.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/promsvyaz.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/absolut.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/youg-invest.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/rosagrolizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/sber-lizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/vtb-lizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/alpha-lizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/euro-plan.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/baltiyskiy-lizing.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/sovkombank.png' alt=''></div>
					<div class="banks__img"> <img src='img/bank/interlizing.png' alt=''></div>
				</div>
			</section>
		</div>
	</div>
</section>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>