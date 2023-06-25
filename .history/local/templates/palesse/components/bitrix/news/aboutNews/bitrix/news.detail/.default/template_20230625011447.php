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
$dateCreate = CIBlockFormatProperties::DateFormat(
	'j F Y',
	MakeTimeStamp(
		$arItem["DATE_CREATE"],
		CSite::GetDateFormat()
	)
);
?>


<? if (!empty($arResult)): ?>


	<section class="news-detail">
		<div class="container">
			<div class="news-detail__inner">
				<ol class="breadcrumbs">
					<li class="breadcrumbs__item">
						<a href="/about.html" class="breadcrumbs__link">О компании /</a>
					</li>
					<li class="breadcrumbs__item breadcrumbs__item-last">
						<p class="breadcrumbs__link">
							<?= $arResult['NAME']; ?>
						</p>
					</li>
				</ol>
				<div class=" news-detail__headline">
					<h1 class="news-detail__title">
						<?= $arResult['NAME']; ?>
					</h1>
					<h6 class=" news-detail__date">
						<? echo $dateCreate; ?>

					</h6>
				</div>
				<div class="news-detail__text">
					<?= $arResult['PREVIEW_TEXT']; ?>



				</div>
				<div class=" news-detail__content">
					<? foreach ($arResult['DISPLAY_PROPERTIES']['aboutNewsDetailVideo']['VALUE'] as $Vid): ?> <iframe width="560"
						height="315" src="<?= $Vid; ?>" title="YouTube video player" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						allowfullscreen></iframe>

				<? endforeach; ?>
					<? foreach ($arResult['DISPLAY_PROPERTIES']['aboutNewsDetailPictures']['FILE_VALUE'] as $Pic): ?>


						<img class="news__item-photo" src='<?= $Pic['SRC']; ?>' alt=''>
					<? endforeach; ?>
				</div>
			</div>
		</div>

	</section>

<? endif; ?>