<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>



<? if (!empty($arResult)): ?>


	<?
	echo '<pre>';
	print_r($arResult);
	echo '</pre>';
	?>

	<div class="mobile-menu">
		<ol class='mobile-menu__list'>
			<?
			foreach ($arResult as $arItem): ?>
				<? if ($arItem["SELECTED"]): ?>

					<li class="mobile-menu__item"><a href="/<?= $arItem["LINK"] ?>" class="mobile-menu__link">
							<span class='mobile-menu__link-span mobile-span-active'>
								<?= $arItem["TEXT"] ?>
							</span>
						</a></li>
				<? else: ?>
					<li class="mobile-menu__item"><a href="/<?= $arItem["LINK"] ?>" class="mobile-menu__link">
							<span class='mobile-menu__link-span'>
								<?= $arItem["TEXT"] ?>
							</span>
						</a></li>
				<? endif ?>
			<? endforeach ?>

		</ol>
		<? $APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "index",
				"PATH" => SITE_TEMPLATE_PATH . "/mobileIncludes/mobileNumberInclude.php"
			)
		); ?>

		<p class="mobile-menu__copy">ООО ТД «Палессе»</p>
	</div>



	<!-- <ol class='header__menu'>
		<?
		foreach ($arResult as $arItem):

			;
			?>
			<? if ($arItem["SELECTED"]): ?>
				<li class="header__menu-item">
					<a href="/<?= $arItem["LINK"] ?>" class="header__menu-link header__menu-link--active">
						<span class="header__menu-span">
							<?= $arItem["TEXT"] ?>
						</span>
					</a>
				</li>

			<? else: ?>
				<li class="header__menu-item">
					<a href="<?= $arItem["LINK"] ?>" class="header__menu-link ">
						<span class="header__menu-span">
							<?= $arItem["TEXT"] ?>
						</span>
					</a>
				</li>

			<? endif ?>

		<? endforeach ?>
	</ol> -->


<? endif ?>