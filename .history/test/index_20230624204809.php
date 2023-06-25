<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?><br>
<br>
<br>
<br>
<br>
<br>
<section class="news">
	<div class="container">
		<div class="news__title">Больше о нас в новостях</div>
		<div class="news__inner">
			<ul class="news__list">
				<li class="news__item">
					<a class='news__item-link' href='/news-detail.html'>

						<img class="news__item-photo" src='img/news/news1.jpg' alt=''>
						<h3 class="news__item-title">Выставка «AGRO KAVKAZ–2023»</h3>
						<div class="news__item-text">Торговый Дом «Палессе-Юг» приглашает вас посетить выставку «AGRO
							KAVKAZ–2023», которая будет проходить 1–3 февраля 2023 г. в МВЦ «МинВодыЭкспо».</div>
						<svg class='about-what-do-arrow-keeper svg-news'>
							<use class='about-what-do-arrow'
								xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
						</svg>
					</a>
				</li>
				<li class="news__item">
					<a class='news__item-link' href='/news-detail.html'>
						<img class="news__item-photo" src='img/news/news2.jpg' alt=''>
						<h3 class="news__item-title">Зимняя конференция прямого посева 2023</h3>
						<div class="news__item-text">Торговый Дом «Палессе-Юг» приглашает вас посетить экспозицию нашей компании
							26–27 января 2023 г.</div>
						<svg class='about-what-do-arrow-keeper svg-news'>
							<use class='about-what-do-arrow'
								xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
						</svg>
					</a>
				</li>
				<li class="news__item">
					<a class='news__item-link' href='/news-detail.html'>
						<img class="news__item-photo" src='img/news/news3.jpg' alt=''>
						<h3 class="news__item-title">ЮГАГРО — 2022</h3>
						<div class="news__item-text">Торговый Дом «Палессе-Юг» приглашает вас посетить экспозицию нашей компании
							на агропромышленной выставке «ЮГАГРО-2022»</div>
						<svg class='about-what-do-arrow-keeper svg-news'>
							<use class='about-what-do-arrow'
								xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
						</svg>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>