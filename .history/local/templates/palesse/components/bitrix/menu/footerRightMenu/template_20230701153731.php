<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>


<?
foreach ($arResult as $arItem): ?>
	<nav class='footer__inner-item footer-menu'>
		<ol class='footer__menu footer__menu-right'>
			<? if ($arItem["SELECTED"]): ?>
				<li class='footer__menu-item'><a class='footer__menu-link footer__menu-link--active'
						href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
			<? else: ?>
				<li class='footer__menu-item'><a class='footer__menu-link' href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
				</li>
			</ol>
		</nav>
	<? endif ?>
<? endforeach ?>