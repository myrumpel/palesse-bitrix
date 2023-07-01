<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>


<nav class='footer__inner-item footer-menu'>
	<ol class='footer__inner-item footer__menu-left'>
		<?
		foreach ($arResult as $arItem): ?>
			<? if ($arItem["SELECTED"]): ?>
				<li class='footer__menu-item'><a class='footer__menu-link footer__menu-link--active'
						href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
			<? else: ?>
				<li class='footer__menu-item'><a class='footer__menu-link' href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
				</li>
			<? endif ?>
		<? endforeach ?>
	</ol>
</nav>