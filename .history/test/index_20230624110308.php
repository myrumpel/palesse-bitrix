<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>



<br>
<br>
<br>
<br>
<br>
<br>

<section class="what-do">
	<div class="container">
		<h2 class="what-do__title">
			Что мы делаем?
		</h2>
		<ul class="what-do__list">
			<li class="what-do__item">
				<a class="what-do__link" href="/ways.html">
					<div class="what-do__item-inner">
						<div class="what-do__item-title">Продаём</div>
						<div class="what-do__item-content">Мы реализуем сельскохозяйственную технику: зерно — и кормоуборочных
							комбайнов, тракторов различных марок, почвообрабатывающих орудий, а также техники предназначенной
							для прямого посева и возделывания культур.</div>
						<div class="what-do__item-arrow">
							<svg class='about-what-do-arrow-keeper about-what-do-arrow-absolute'>
								<use class='about-what-do-arrow'
									xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
							</svg>
						</div>
					</div>
				</a>
			</li>
			<li class="what-do__item">
				<a class="what-do__link" href="/service.html">
					<div class="what-do__item-inner">
						<div class="what-do__item-title">Гарантируем</div>
						<div class="what-do__item-content">
							<ol class="what-do__item-content-list">
								<li class='what-do__item-content-item'>Досборку новой техники «под ключ», её обкатка в строгом
									соответствии с регламентом, утверждённым заводом-изготовителем, как на базе сервисный центр,
									так и на территории потребителя;</li>
								<li class='what-do__item-content-item'>Бесплатное проведение инструктажа механизаторов,
									консультативная помощь в технических и эксплуатационных вопросах.</li>
								<li class='what-do__item-content-item'> Доставка запасных частей «в поле» в период уборки.
								</li>
								<li class='what-do__item-content-item'> Проведение регламентного технического обслуживания;
								</li>
								<li class='what-do__item-content-item'> Постгарантийное обслуживание техники.
								</li>
							</ol>



						</div>
						<div class="what-do__item-arrow">
							<svg class='about-what-do-arrow-keeper about-what-do-arrow-absolute'>
								<use class='about-what-do-arrow'
									xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
							</svg>
						</div>
					</div>
				</a>
			</li>
			<li class="what-do__item">
				<a class="what-do__link" href="/spare-parts.html">
					<div class="what-do__item-inner">
						<div class="what-do__item-title">Обеспечиваем</div>
						<div class="what-do__item-content">На нашем складе представлен широкий выбор запасных частей.
							Специалисты всегда готовы проконсультировать вас по вопросам подбора и покупки запчастей
							для сельскохозяйственной техники.</div>
						<div class="what-do__item-arrow">
							<svg class='about-what-do-arrow-keeper about-what-do-arrow-absolute'>
								<use class='about-what-do-arrow'
									xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
							</svg>
						</div>
					</div>
				</a>
			</li>

		</ul>
	</div>
</section>







<br>
<br>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>