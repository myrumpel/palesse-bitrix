<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
echo '<pre>';
print_r($arResult);
echo '</pre>';
?>
<?php foreach ($arResult["ITEMS"] as $Item): ?>
	<section class="index-about">
		<div class="container-fluid">
			<div class="index-about__bg"
				style='background-image: url(<?= SITE_TEMPLATE_PATH; ?>/assets/img/pages-bg-pictures/index-second.jpg);'>
				<div class="container">
					<div class="index-about__inner">
						<div class="index-about__content">
							<h4 class="index-about__content-title"> ООО ТД «Палессе-Юг»</h4>
							<p class="index-about__content-text">поставщик отечественной и зарубежной сельхозтехники.
								Работает в сфере
								АПК с
								2014 года. Компания осуществляет материально-техническое сопровождение
								сельскохозяйственного
								производства:
								поставляет современную технику, запчасти, оказывает услуги сервисного центра.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<? endforeach; ?>