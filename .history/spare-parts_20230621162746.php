<?php
global $APPLICATION;
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Каталог запчастей');
?><div class="site">

<section class="spare-parts">
						<div class="container">
							<div class="spare-parts__inner">

								<div class="spare-parts__headline">
									<h1 class="spare-parts__title">Каталог запчастей</h1>
									<h2 class="spare-parts__subtitle">На складе площадью 1500 кв. метров всегда в наличии широкий ассортимент
										запасных
										частей</h2>
								</div>



								<div class="catalog-filter">
									<div class="select-box ">
										<div class='select-mob-wrapper catalog__select-wrapper'>
											<button class="select-mob"> <span>Выберите вид техники</span>
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
												<li class="select-mob__item">
													<div class="category-title">Комбайны</div>
													<ul class='select-mob__inner-list'>
														<li class="select-mob__item select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="combains-cereal">Зерноуборочные</div>
														</li>
														<li class="select-mob__item select-mob__item--active select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="combains-combo">Кормоуброчные</div>
														</li>
														<li class="select-mob__item select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="combains-cob">Початкоуборочные</div>
														</li>
													</ul>
												</li>
												<li class="select-mob__item">
													<div class="category-title">Тракторы</div>
													<ul class='select-mob__inner-list'>
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
													</ul>
												</li>
												<li class="select-mob__item">
													<div class="category-title">Опрыскиватели</div>
													<ul class='select-mob__inner-list'>
														<li class="select-mob__item select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="sprayers-self">Самоходные</div>
														</li>
														<li class="select-mob__item select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="sprayers-trailed">Прецепные</div>
														</li>
														<li class="select-mob__item select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="sprayers-hinged">Навесные</div>
														</li>
													</ul>
												</li>
												<li class="select-mob__item">
													<div class="category-title">Сеялки</div>
													<ul class='select-mob__inner-list'>
														<li class="select-mob__item select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="seeders-tilled">Пропашные</div>
														</li>
														<li class="select-mob__item select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="seeders-cereals">Зерновые</div>
														</li>
														<li class="select-mob__item select-mob__inner-item">
															<div class="select-mob__btn" data-catalogmob="seeders-notill">NO-TILL</div>
														</li>
													</ul>
												</li>
												<li class="select-mob__item">
													<div class="category-title">Почво-обрабатывающая техника</div>
													<ul class='select-mob__inner-list'>
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
													</ul>
												</li>
												<!-- <li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="seeders">Сеялки</div>
							</li> -->
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
												<!-- <li class="select-mob__item select-mob-padding">
								<div class="select-mob__btn" data-catalogmob="cultivators">Почво-обрабатывающая техника</div>
							</li> -->

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
											<ul class='catalog-filter__buttons-list'>
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-spoller">
														Комбайны
														<svg class='svg-list'>
															<use class='svg-list-item' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-list'></use>
														</svg>
													</button>
													<div class="catalog-filter__spoller">
														<ul class="catalog-filter__spoller-content">
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="combains-cereal">

																	Зерноуборочные
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="combains-combo">

																	Кормоуброчные
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="combains-cob">

																	Початкоуборочные
																</button>
															</li>
														</ul>
													</div>
												</li>

												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-spoller">
														Тракторы

														<svg class='svg-list'>
															<use class='svg-list-item' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-list'></use>
														</svg>
													</button>
													<div class="catalog-filter__spoller">
														<ul class="catalog-filter__spoller-content">

															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="tractors-mtz">

																	МТЗ
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="tractors-btz">

																	БТЗ
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="tractors-sadin">

																	SADIN
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="tractors-vtg">

																	ВТГ
																</button>
															</li>
														</ul>
													</div>
												</li>

												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-spoller">
														Опрыскиватели
														<svg class='svg-list'>
															<use class='svg-list-item' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-list'></use>
														</svg>
													</button>
													<div class="catalog-filter__spoller">
														<ul class="catalog-filter__spoller-content">
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="sprayers-self">

																	Самоходные
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="sprayers-trailed">
																	Прецепные
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="sprayers-hinged">

																	Навесные
																</button>
															</li>
														</ul>
													</div>
												</li>
												<!-- 
							<li class="catalog-filter__buttons-item">
								<button class="catalog-filter__buttons-item-btn" data-catalog="seeders">
									Сеялки
								</button>
							</li> -->
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-spoller">
														Сеялки

														<svg class='svg-list'>
															<use class='svg-list-item' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-list'></use>
														</svg>
													</button>
													<div class="catalog-filter__spoller">
														<ul class="catalog-filter__spoller-content">

															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="seeders-tilled">

																	Пропашные
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="seeders-cereals">

																	Зерновые
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="seeders-notill">

																	NO-TILL
																</button>
															</li>

														</ul>
													</div>
												</li>
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-spoller">
														Почво-обрабатывающая техника

														<svg class='svg-list'>
															<use class='svg-list-item' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-list'></use>
														</svg>
													</button>
													<div class="catalog-filter__spoller">
														<ul class="catalog-filter__spoller-content">

															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="cultivators-cult">

																	Культиваторы
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="cultivators-disk">

																	Дискаторы
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="cultivators-plow">

																	Плуги
																</button>
															</li>
															<li class="catalog-filter__spoller-item">
																<button class="catalog-filter__buttons-item-btn" data-catalog="cultivators-roll">

																	Катки
																</button>
															</li>
														</ul>
													</div>
												</li>
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-item-btn" data-catalog="reapers">
														Жатки
													</button>
												</li>
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-item-btn" data-catalog="mulcher">
														Мульчер
													</button>
												</li>
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-item-btn" data-catalog="mowers">
														Косилки
													</button>
												</li>
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-item-btn" data-catalog="loaders">
														Погрузчики
													</button>
												</li>
												<!-- <li class="catalog-filter__buttons-item">
								<button class="catalog-filter__buttons-item-btn" data-catalog="cultivators">
									Почво-обрабатывающая техника
								</button>
							</li> -->

												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-item-btn" data-catalog="spreaders">
														Навозо-разбрасыватели </button>
												</li>
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-item-btn" data-catalog="feeders">
														Кормораздатчики </button>
												</li>

												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-item-btn" data-catalog="balers">
														Пресс-подборщики </button>
												</li>
												<li class="catalog-filter__buttons-item">
													<button class="catalog-filter__buttons-item-btn" data-catalog="trailers">
														Прицепы </button>
												</li>
											</ul>
										</div>
									</div>
									<div class="catalog-filter__contents">
										<ul class='catalog-filter__contents-list'>
											<li class="catalog-filter__contents-item" id='combains-cereal'>
												<h3 class='spare-parts__content-title'>Зерноуборочные комбайны</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='combains-combo'>
												<h3 class='spare-parts__content-title'>Кормоуброчные комбайны</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='combains-cob'>
												<h3 class='spare-parts__content-title'>Початкоуборочные комбайны</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='tractors-mtz'>
												<h3 class='spare-parts__content-title'>МТЗ Тракторы</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='tractors-btz'>
												<h3 class='spare-parts__content-title'>БТЗ Тракторы</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='tractors-sadin'>
												<h3 class='spare-parts__content-title'>САДИН Тракторы</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='tractors-vtg'>
												<h3 class='spare-parts__content-title'>ВТГ Тракторы</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='sprayers-self'>
												<h3 class='spare-parts__content-title'>САМОХОДНЫЕ ОПРАСКИВАТЕЛИ</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='sprayers-trailed'>
												<h3 class='spare-parts__content-title'>Навесные опрыскиватели</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='sprayers-hinged'>
												<h3 class='spare-parts__content-title'>Культиваторы</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>

											<li class="catalog-filter__contents-item" id='seeders-tilled'>
												<h3 class='spare-parts__content-title'>Сеялки пропашные</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='seeders-cereals'>
												<h3 class='spare-parts__content-title'>Сеялки зерновые</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='seeders-notill'>
												<h3 class='spare-parts__content-title'>сеялки no-till</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='cultivators-cult'>
												<h3 class='spare-parts__content-title'>Культиваторы</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='cultivators-disk'>
												<h3 class='spare-parts__content-title'>Дискаторы</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='cultivators-plow'>
												<h3 class='spare-parts__content-title'>Плуги</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='cultivators-roll'>
												<h3 class='spare-parts__content-title'>Катки</h3>
												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>

											</li>
											<li class="catalog-filter__contents-item" id='mowers'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='loaders'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='mulcher'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='reapers'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='balers'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>

											<!-- <li class="catalog-filter__contents-item" id='cultivators'>Здесь должна быть почво-обрабатывающая техника
						</li> -->
											<li class="catalog-filter__contents-item" id='spreaders'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='feeders'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='trailers'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
											<li class="catalog-filter__contents-item" id='subsoilers'>
												<h3 class='spare-parts__content-title'>Катки</h3>

												<article class="spare-parts__content-item">
													<h4 class='spare-parts__content-subtitle'>Зерноуборочный комбайн GH800</h4>
													<div class="spare-parts__content-files">
														<a class='download-link' href='' download=''>
															<svg class='pdf-keeper'>
																<use class='pdf' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-pdf'></use>
															</svg>
															Брошюра Зерноуборочный комбайн GOMSELMASH GS2124 </a>
													</div>
												</article>
											</li>
										</ul>
									</div>

								</div>
							</div>
						</div>
					</section>
					<section class="feedback">
						<div class="feedback-container container">
							<div class="feedback-container_target"></div>
						</div>
						<div class="container-fluid">
							<div class="feedback__bg" style='background-image: url(img/pages-bg-pictures/bot-form.jpg);'>
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
													<a class='feedback__form-privacy-link form-item' href='/privacy.php'>Политики конфиденциальности</a>
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