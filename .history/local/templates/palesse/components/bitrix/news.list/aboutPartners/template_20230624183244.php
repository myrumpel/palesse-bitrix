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
			<? foreach ($arResult['ITEMS'] as $Item): ?>
				<? foreach ($Item["DISPLAY_PROPERTIES"]['aboutPartners'] as $Prop): ?>
					<?
					echo '<pre>';
					print_r($Prop["Array"]);
					echo '</pre>';
					?>
				<? endforeach; ?>
			<? endforeach; ?>

			<!-- <?
			if (CModule::IncludeModule('iblock'))
				$arSelect = array("SRC");
			$arFilter = array("IBLOCK_ID" => 29);
			$res = CIBlockElement::GetList(array('RAND' => 'ASC'), $arFilter, false, array("nPageSize" => 1), $arSelect);
			while ($ob = $res->GetNextElement()) {
				$arFields = $ob->GetFields();
				echo $arFields["SRC"];
			} ?> -->
		</div>
	</div>
</section>