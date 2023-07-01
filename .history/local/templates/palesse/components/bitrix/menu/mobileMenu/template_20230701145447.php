<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>



<? if (!empty($arResult)): ?>




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
		<p class="mobile-menu__phone-keeper">
			<a href="#" class="mobile-menu__phone-link">+7 (800) 770 70–10</a>
		</p>
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