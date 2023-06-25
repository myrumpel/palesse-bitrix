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

<? if (!empty($arResult['ITEMS'])): ?>
	<section class="banks about-partner">
		<div class="container">
			<h2 class="banks__title">Партнёры</h2>
			<div class="banks__inner">
				<? foreach ($arResult['ITEMS'] as $Item): ?>
					<? foreach ($Item["DISPLAY_PROPERTIES"]['aboutPartners']['FILE_VALUE'] as $Prop): ?>
						<div class='banks__img'> <img src='<?= $Prop['SRC']; ?>' alt=''></div>

					<? endforeach; ?>
				<? endforeach; ?>


			</div>
		</div>
	</section>
<? endif; ?>