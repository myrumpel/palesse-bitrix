<?php
global $APPLICATION;
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Выставка «AGRO KAVKAZ-2023»');
?>
<div class="site">

<section class="news-detail">
						<div class="container">
							<div class="news-detail__inner">
								<ul class="breadcrumbs">
									<li class="breadcrumbs__item">
										<a href="/about.php" class="breadcrumbs__link">О компании /</a>
									</li>
									<li class="breadcrumbs__item breadcrumbs__item-last">
										<p class="breadcrumbs__link">Выставка «AGRO KAVKAZ-2023»</p>
									</li>
								</ul>
								<div class="news-detail__headline">
									<h1 class="news-detail__title">Выставка «AGRO KAVKAZ-2023»</h1>
									<h6 class="news-detail__date">17.03.2023</h6>
								</div>
								
									
                              
									<div class="news-detail__text">
										<p class=''> Торговый Дом «Палессе-Юг» приглашает Вас посетить выставку «AGRO KAVKAZ-2023», которая будет
											проходить 1-3 февраля 2023 г. в МВЦ «МинВодыЭкспо».</p>
											<p class=''> На стенде нашей компании будет представлен трактор производства ООО «Брянский тракторный завод»,
												жатка очесывающая «Озон» ЖО7.
												Данная техника участвует в программе «Росагролизинг».</p>
												
												
												
											</div>
											<? endif; ?>
								<div class="news-detail__content">
									<iframe width="560" height="315" src="https://www.youtube.com/embed/pmKCZ-YJvqc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

									<img src='<?=SITE_TEMPLATE_PATH;?>/assets/img/news/news1.jpg' alt=''>
								</div>
							</div>
						</div>
					</section>



<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>