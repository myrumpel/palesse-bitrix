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


<section class="banks about-partner">
	<div class="container">
		<h2 class="banks__title">Партнёры</h2>
		<div class="banks__inner">

			<div class='banks__img'> <img src='img/partner/bryanskselmash.png' alt=''></div>

		</div>
	</div>
</section>

<?
echo '<pre>';
print_r($arResult['ITEMS']['DISPLAY_PROPERTIES']);
echo '</pre>';
?>