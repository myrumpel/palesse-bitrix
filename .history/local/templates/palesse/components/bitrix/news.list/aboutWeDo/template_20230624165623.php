<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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



<section class="what-do">
	<?if(!empty($arResult['ITEMS'])):?>
		
		<div class="container">
			<h2 class="what-do__title">
				Что&nbsp;мы&nbsp;делаем? </h2>
				<ol class="what-do__list">
					<?foreach($arResult['ITEMS'] as $Item):?>
			<li class="what-do__item"> <a class="what-do__link" href="/ways.html">
					<div class="what-do__item-inner">
						<div class="what-do__item-title">
							
						</div>
						<div class="what-do__item-content">
							
						</div>
						<div class="what-do__item-arrow">
						</div>
					</div>
				</a> </li>
				<?endforeach;?>
			
		</ol>
	</div>
	<?endeif;?>

</section>
