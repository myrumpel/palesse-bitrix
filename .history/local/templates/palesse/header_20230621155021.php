<?php
global $APPLICATION;
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?php 
Use Bitrix\Main\Page\Asset
?>

        <!DOCTYPE html>
        <html lang="ru" data-test="3">

        <head>
            
            <?php

            Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
            Asset::getInstance()->addString('<link rel="icon" type="image/png" href="simg/favicon.png" />');
             Asset::getInstance()->addString('<meta name="format-detection" content="telephone=no">');
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/style.min.css');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/app.min.js');            
            
            ?>
            
            <html lang="ru">
            <?php $APPLICATION->ShowHead();?>
            
		    <title><?php $APPLICATION->ShowTitle();?></title>
        </head>

        <body>
            <div id="panel">
			<?php $APPLICATION->ShowPanel();?>
		    </div>
        <div class="site">
           
            <div class="wrapper">
            <header class="header" id='header'>
                <div class="container">

                    <div class="header__inner">
                        <div class="header-item">

                            <a href='/'>
                                <img class='header__logo' src='<?=SITE_TEMPLATE_PATH;?>/assets/img/logo.png' alt='logo'>
                            </a>
                        </div>

                        <ul class='header__menu'>
                            <li class="header__menu-item">
                                <a href="/about.php" class="header__menu-link header__menu-link--active">
									<span class="header__menu-span">
										О компании
									</span>
                                </a>
                            </li>
                            <li class="header__menu-item">
                                <a href="/catalog.php" class="header__menu-link">
									<span class="header__menu-span">
										Каталог
									</span>
                                </a>
                            </li>
                            <li class="header__menu-item">
                                <a href="/service.php" class="header__menu-link">
									<span class="header__menu-span">
										Сервис
									</span>
                                </a>
                            </li>
                            <li class="header__menu-item">
                                <a href="/spare-parts.php" class="header__menu-link">
									<span class="header__menu-span">
										Запчасти
									</span>
                                </a>
                            </li>
                            <li class="header__menu-item">
                                <a href="/ways.php" class="header__menu-link">
									<span class="header__menu-span">
										Способы приобретения
									</span>
                                </a>
                            </li>
                            <li class="header__menu-item">
                                <a href="/contacts.php" class="header__menu-link">
									<span class="header__menu-span">
										Контакты
									</span>
                                </a>
                            </li>
                        </ul>
                        <div class="header-item">
                            <a class="red-button-link hidden-button header-btn" href="#feedback-form">Связаться с нами</a>
                        </div>
                        <div class="header-item">
                            <button class='mob-menu-btn'>
                                <span class='mob-menu-btn__line mob-menu-btn__line-1'></span>
                                <span class='mob-menu-btn__line mob-menu-btn__line-2'></span>
                                <span class='mob-menu-btn__line mob-menu-btn__line-3'></span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="mobile-menu">
                <ul class='mobile-menu__list'>
                    <li class="mobile-menu__item"><a href="/about.php" class="mobile-menu__link">
                            <span class='mobile-menu__link-span mobile-span-active'>О компании</span>
                        </a></li>
                    <li class="mobile-menu__item"><a href="/catalog.php" class="mobile-menu__link">
                            <span class='mobile-menu__link-span'>Каталог</span> </a></li>
                    <li class="mobile-menu__item"><a href="/service.php" class="mobile-menu__link"><span class='mobile-menu__link-span'>Сервис</span></a></li>
                    <li class="mobile-menu__item"><a href="/spare-parts.php" class="mobile-menu__link"><span class='mobile-menu__link-span'>Запчасти</span></a></li>

                    <li class="mobile-menu__item"><a href="/ways.php" class="mobile-menu__link"> <span class='mobile-menu__link-span'>Способы
								приобретения</span> </a></li>
                    <li class="mobile-menu__item"><a href="/contacts.php" class="mobile-menu__link"> <span class='mobile-menu__link-span'>Контакты</span> </a></li>
                </ul>
                <p class="mobile-menu__phone-keeper">
                    <a href="#" class="mobile-menu__phone-link">+7 (800) 770 70–10</a>
                </p>
                <p class="mobile-menu__copy">ООО ТД «Палессе»</p>
            </div>
            <main class="page">
                 <div class="container">
                    <btn class="btn-to-top"><svg class='arrow-to-top-keeper'>
                            <use class='arrow-to-top' xlink:href='<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/icons.svg#svg-arrow-right'></use>
                        </svg></btn>
                </div>