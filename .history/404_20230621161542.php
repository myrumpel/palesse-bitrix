<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");
?>
<section class="error-404">
						<div class="container">
							<div class="error-404__inner">
								<h1 class="error-404__title">404</h1>
								<h2 class="error-404__subtitle">СТРАНИЦА НЕ НАЙДЕНА</h2>
								<p class="error-404__text">К сожалению, по вашему запросу страница не найдена.</p>
								<a class="red-button-link error-404__btn" href="/">Вернуться на Главную</a>

							</div>
						</div>
					</section>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
