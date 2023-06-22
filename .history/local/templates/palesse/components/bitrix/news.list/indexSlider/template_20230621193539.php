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

<? foreach ($arResult["ITEMS"] as $arItem): ?>
	<!-- <article class="swiper-slide local-index" data-slider='combains-cereal'>
		<a href='/catalog.php'>
			<h5 class='swiper-slide__title'>
				<?= $arResult["ITEMS"]["NAME"]; ?>
			</h5>
			 <img class='swiper-slide__img' src='' alt='slide'> -->
	</a>
	</article>
	<?
	echo '<pre>';
	print_r($arResult["ITEMS"]['NAME']);
	echo '</pre>';
	?>

<? endforeach; ?>