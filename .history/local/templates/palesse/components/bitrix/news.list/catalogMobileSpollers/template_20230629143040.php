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
<? if ($arResult['ITEMS']): ?>

	<ol class="select-mob__list">
		<? foreach ($arResult['ITEMS'] as $Item): ?>

			<li class="select-mob__item">
				<div class="category-title">
					<?= $Item['NAME'] ? $Item['NAME'] : ''; ?>

				</div>
				<ol class='select-mob__inner-list'>
					<? foreach ($Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['VALUE'] as $Key => $Val): ?>
						<li class="select-mob__item select-mob__inner-item">
							<div class="select-mob__btn"
								data-catalogmob="<?= $Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['DESCRIPTION'][$Key] ? $Item['DISPLAY_PROPERTIES']['catalogBarSpollers']['DESCRIPTION'][$Key] : ''; ?>">
								<?= $Val ? $Val : ''; ?></div>
						</li>
					<? endforeach; ?>

				</ol>
			</li>
		<? endforeach; ?>

		<li class="select-mob__item select-mob-padding">
			<div class="select-mob__btn" data-catalogmob="reapers">Жатки</div>
		</li>

	</ol>
<? endif; ?>