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

	<ol class='ways__face-list'>

		<? foreach ($arResult['ITEMS'] as $Item): ?>
			<li class='ways__face-item'>
				<h2 class='ways__face-item-title'>
					<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
				</h2>
				<p class='ways__face-item-text'>
					<?= $Item['PREVIEW_TEXT'] ? $Item['PREVIEW_TEXT'] : ''; ?>
				</p>
				<? if (!empty($Item['DETAIL_TEXT'])): ?>
					<a class='ways__face-item-link' href='<?= $Item['DETAIL_TEXT'] ? $Item['DETAIL_TEXT'] : ''; ?>'>
						<? foreach ($Item['DISPLAY_PROPERTIES'] as $Prop): ?>
							<?
echo '<pre>';
print_r($Prop);
echo '</pre>';
?>
							<? $Prop['waysLink']['VALUE'] ?>
						<? endforeach; ?>
						<svg class='ways-face-arrow-right-keeper'>
							<use class='ways-face-arrow-right'
								xlink:href='<?= SITE_TEMPLATE_PATH; ?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
						</svg></a>
				<? endif; ?>

			</li>
		<? endforeach; ?>

	</ol>
<? endif; ?>