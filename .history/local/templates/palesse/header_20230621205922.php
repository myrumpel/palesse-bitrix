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
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/style.css');
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
           
            <div class="wrapper">
                
           
                <? if ($APPLICATION->GetCurPage(false) === '/' 
                ): ?>
                                    <div class="site">
                                        <? endif; ?>
           
                <? if ($APPLICATION->GetCurPage(false) === '/about.php' 
                ): ?>
                                    <div class="site">
                                        <? endif; ?>
                <? if ($APPLICATION->GetCurPage(false) === '/catalog.php' 
                ): ?>
                                    <div class="site">
                                        <? endif; ?>
                <? if ($APPLICATION->GetCurPage(false) === '/service.php' 
                ): ?>
                                    <div class="site">
                                        <? endif; ?>
               
                <? if ($APPLICATION->GetCurPage(false) === '/spare-parts.php' 
                ): ?>
                                    <div class="site">
                                        <? endif; ?>
                <? if ($APPLICATION->GetCurPage(false) === '/ways.php' 
                ): ?>
                                    <div class="site">
                                        <? endif; ?>
                                        
            <header class="header" id='header'>
                <div class="container">

                    <div class="header__inner">
                        <div class="header-item">
                        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "index",
        "PATH" => SITE_TEMPLATE_PATH."/indexIncludes/headerInclude/indexHeaderInclude.php"
        )
);?>
                            
                        </div>

                        
                        <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"mainMenu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
                           <div class="header-item">
	<a class="red-button-link hidden-button header-btn" href="#feedback-form">
                           <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "index",
        "PATH" => SITE_TEMPLATE_PATH."/indexIncludes/headerInclude/indexHeaderIncludeBtn.php"
        )
);?>
         </a>
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