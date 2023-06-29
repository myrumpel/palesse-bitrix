<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>

<section class="catalog">
	<div class="container">
		<div class="catalog__inner">
			<h1 class="catalog__title">Каталог техники</h1>

			<div class="catalog-filter">
				<div class="select-box ">
					<div class='select-mob-wrapper catalog__select-wrapper'>
						<button class="select-mob"> <span>Выберите вид техники</span>

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
							<li class="select-mob__item">
								<div class="category-title">Комбайны</div>
								<ol class='select-mob__inner-list'>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="combains-cereal">Зерноуборочные</div>
									</li>
									<li class="select-mob__item select-mob__item--active select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="combains-combo">Кормоуброчные</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="combains-cob">Початкоуборочные</div>
									</li>
								</ol>
							</li>
							<li class="select-mob__item">
								<div class="category-title">Тракторы</div>
								<ol class='select-mob__inner-list'>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="tractors-mtz">МТЗ</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="tractors-btz">БТЗ</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="tractors-sadin">SADIN</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="tractors-vtg">ВТГ</div>
									</li>
								</ol>
							</li>
							<li class="select-mob__item">
								<div class="category-title">Опрыскиватели</div>
								<ol class='select-mob__inner-list'>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="sprayers-self">Самоходные</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="sprayers-trailed">Прецепные</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="sprayers-hinged">Навесные</div>
									</li>
								</ol>
							</li>
							<li class="select-mob__item">
								<div class="category-title">Сеялки</div>
								<ol class='select-mob__inner-list'>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="seeders-tilled">Пропашные</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="seeders-cereals">Зерновые</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="seeders-notill">NO-TILL</div>
									</li>
								</ol>
							</li>
							<li class="select-mob__item">
								<div class="category-title">Почво-обрабатывающая техника</div>
								<ol class='select-mob__inner-list'>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="cultivators-cult">Культиваторы</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="cultivators-disk">Дискаторы</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="cultivators-plow">Плуги</div>
									</li>
									<li class="select-mob__item select-mob__inner-item">
										<div class="select-mob__btn" data-catalogmob="cultivators-roll">Катки</div>
									</li>
								</ol>
							</li>
							<li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="reapers">Жатки</div>
							</li>
							<li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="mulcher">Мульчеры</div>
							</li>

							<li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="mowers">Косилки</div>
							</li>
							<li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="loaders">Погрузчики</div>
							</li>


							<li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="spreaders">Навозо-разбрасыватели</div>
							</li>
							<li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="feeders">Кормораздатчики</div>
							</li>
							<li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="balers">Пресс-подборщики</div>
							</li>
							<li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="trailers">Прицепы</div>
							</li>

							</ul>
					</div>
				</div>
				<div class="catalog-filter__buttons">
					<div class="catalog-filter__buttons-inner">
						<h2 class="catalog-filter__buttons-title">Выберите технику</h2>
						<ol class='catalog-filter__buttons-list'>
							<li class="catalog-filter__buttons-item">
								<button class="catalog-filter__buttons-spoller">
									Комбайны
									<svg class='svg-list'>
										<use class='svg-list-item'
											xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-list'></use>
									</svg>
								</button>
								<div class="catalog-filter__spoller">
									<ol class="catalog-filter__spoller-content">
										<li class="catalog-filter__spoller-item">
											<button class="catalog-filter__buttons-item-btn" data-catalog="combains-cereal">

												Зерноуборочные
											</button>
										</li>

									</ol>
								</div>
							</li>

							<li class="catalog-filter__buttons-item">
								<button class="catalog-filter__buttons-item-btn" data-catalog="reapers">
									Жатки
								</button>
							</li>

						</ol>
					</div>
				</div>
				<div class="catalog-filter__contents">
					<ol class='catalog-filter__contents-list'>
						<li class="catalog-filter__contents-item" id='combains-cereal'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">combains-cereal</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='combains-combo'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">combains-combo</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='combains-cob'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">combains-cob</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='tractors-mtz'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">tractors-mtz</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='tractors-btz'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">tractors-btz</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='tractors-sadin'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">tractors-sadin</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='tractors-vtg'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">tractors-vtg</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='sprayers-self'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">sprayers-self</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='sprayers-trailed'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">sprayers-trailed</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='sprayers-hinged'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">sprayers-hinged</h4>
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
									</a>
								</li>


							</ol>

						</li>



						<li class="catalog-filter__contents-item" id='seeders-tilled'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">seeders-tilled</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='seeders-cereals'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">seeders-cereals</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='seeders-notill'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">seeders-notill</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='cultivators-cult'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">cultivators-cult</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='cultivators-disk'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">cultivators-disk</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='cultivators-plow'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">cultivators-plow</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='cultivators-roll'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">cultivators-roll</h4>
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
									</a>
								</li>


							</ol>

						</li>
						<li class="catalog-filter__contents-item" id='mowers'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title"> mowers</h4>
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
									</a>
								</li>


							</ol>
						</li>
						<li class="catalog-filter__contents-item" id='loaders'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title"> loaders</h4>
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
									</a>
								</li>


							</ol>
						</li>
						<li class="catalog-filter__contents-item" id='mulcher'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title"> mulcher</h4>
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
									</a>
								</li>


							</ol>
						</li>
						<li class="catalog-filter__contents-item" id='reapers'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title">reapers</h4>
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
									</a>
								</li>


							</ol>
						</li>
						<li class="catalog-filter__contents-item" id='balers'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title"> balers</h4>
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
									</a>
								</li>


							</ol>
						</li>

						<!-- <li class="catalog-filter__contents-item" id='cultivators'>Здесь должна быть почво-обрабатывающая техника
						</li> -->
						<li class="catalog-filter__contents-item" id='spreaders'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title"> spreaders</h4>
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
									</a>
								</li>


							</ol>
						</li>
						<li class="catalog-filter__contents-item" id='feeders'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title"> feeders</h4>
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
									</a>
								</li>


							</ol>
						</li>
						<li class="catalog-filter__contents-item" id='trailers'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title"> trailers</h4>
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
									</a>
								</li>


							</ol>
						</li>
						<li class="catalog-filter__contents-item" id='subsoilers'>
							<ol class='catalog-filter__items-list'>
								<li class="catalog-filter__item">
									<a href='/catalog-detail.html'>
										<img class='catalog-filter__item-img' src='img/catalog/combain.png' alt=''>
										<h4 class="catalog-filter__item-title"> subsoilers</h4>
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
									</a>
								</li>


							</ol>
						</li>
						</ul>
				</div>

			</div>
		</div>
	</div>
	<div class="end-trigger"></div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>