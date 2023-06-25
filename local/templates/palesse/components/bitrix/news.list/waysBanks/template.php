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

	<section class="banks">

		<? foreach ($arResult['ITEMS'] as $Item): ?>
			<h2 class="banks__title">
				<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>
			</h2>
			<div class="banks__inner">
				<? foreach ($Item["DISPLAY_PROPERTIES"]['waysBanksPictures']['FILE_VALUE'] as $Prop): ?>
					<div class="banks__img">
						<img src="<?= $Prop['SRC'] ? $Prop['SRC'] : ''; ?>" alt="">
					</div>
				<? endforeach; ?>

			<? endforeach; ?>

		</div>
	</section>
<? endif; ?>