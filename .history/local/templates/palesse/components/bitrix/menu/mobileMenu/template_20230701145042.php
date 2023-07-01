<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>



<? if (!empty($arResult)): ?>




	<div class="mobile-menu">
		<ul class='mobile-menu__list'>
			<li class="mobile-menu__item"><a href="/about.php" class="mobile-menu__link">
					<span class='mobile-menu__link-span mobile-span-active'>О компании</span>
				</a></li>
			<li class="mobile-menu__item"><a href="/catalog.php" class="mobile-menu__link">
					<span class='mobile-menu__link-span'>Каталог</span> </a></li>
			<li class="mobile-menu__item"><a href="/service.php" class="mobile-menu__link"><span
						class='mobile-menu__link-span'>Сервис</span></a></li>
			<li class="mobile-menu__item"><a href="/spare-parts.php" class="mobile-menu__link"><span
						class='mobile-menu__link-span'>Запчасти</span></a></li>

			<li class="mobile-menu__item"><a href="/ways.php" class="mobile-menu__link"> <span
						class='mobile-menu__link-span'>Способы
						приобретения</span> </a></li>
			<li class="mobile-menu__item"><a href="/contacts.php" class="mobile-menu__link"> <span
						class='mobile-menu__link-span'>Контакты</span> </a></li>
		</ul>
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