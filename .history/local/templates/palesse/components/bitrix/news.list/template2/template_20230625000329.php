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
	<section class="news">
		<div class="container">
			<div class="news__title">
				Больше о&nbsp;нас&nbsp;в&nbsp;новостях
			</div>
			<div class="news__inner">
				<ul class="news__list">
					<? foreach ($arResult['ITEMS'] as $Item): ?>
						<li class="news__item"> <a class="news__item-link" href="/news-detail.html"> <img
									src="<?= $Item['PREVIEW_PICTURE']['SRC']; ?>" class="news__item-photo" alt="">
								<h3 class="news__item-title">
									<?= $Item['NAME']; ?>
								</h3>
								<div class="news__item-text">
									<?= $Item['PREVIEW_TEXT']; ?>
								</div>
							</a> </li>
					<? endforeach; ?>

				</ul>
			</div>
		</div>
	</section>
	</div>
	</section>
<? endif; ?>