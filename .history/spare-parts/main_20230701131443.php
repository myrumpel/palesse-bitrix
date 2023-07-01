<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Каталог запчастей");
?>
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

							<use>
								<svg class='svg-list-select' width="11" height="8" viewBox="0 0 11 8" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M6.21062 7.2099C5.81149 7.76296 4.98799 7.76296 4.58885 7.2099L0.770261 1.9187C0.292964 1.25734 0.765537 0.333496 1.58115 0.333496L9.21833 0.333497C10.0339 0.333497 10.5065 1.25734 10.0292 1.9187L6.21062 7.2099Z"
										fill="#4A4F59" />
								</svg>
							</use>
						</button>
						<? $APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"catalogMobileSpollers",
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "N",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(0 => "NAME", 1 => "",
								),
								"FILTER_NAME" => "",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "18",
								"IBLOCK_TYPE" => "catalogBarSpollers",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "N",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "20",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "Новости",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"PROPERTY_CODE" => array(0 => "catalogBarSpollers", 1 => "",
								),
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SORT_BY1" => "SORT",
								"SORT_BY2" => "",
								"SORT_ORDER1" => "ASC",
								"SORT_ORDER2" => "",
								"STRICT_SECTION_CHECK" => "N"
							)
						); ?>
					</div>
				</div>
				<div class="catalog-filter__buttons">
					<div class="catalog-filter__buttons-inner">
						<h2 class="catalog-filter__buttons-title">Выберите технику</h2>
						<? $APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"catalogBarSpollers",
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "N",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "N",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"COMPONENT_TEMPLATE" => "catalogBarSpollers",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "N",
								"DISPLAY_PREVIEW_TEXT" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(
									0 => "NAME",
									1 => "",
								),
								"FILTER_NAME" => "",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "18",
								"IBLOCK_TYPE" => "catalogBarSpollers",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "N",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "20",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "Новости",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"PROPERTY_CODE" => array(
									0 => "catalogBarSpollersData",
									1 => "catalogBarSpollers",
									2 => "",
								),
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SORT_BY1" => "SORT",
								"SORT_BY2" => "",
								"SORT_ORDER1" => "ASC",
								"SORT_ORDER2" => "",
								"STRICT_SECTION_CHECK" => "N"
							)
						); ?>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
											<use class='pdf' xlink:href='img/icons/icons.svg#svg-pdf'></use>
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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>