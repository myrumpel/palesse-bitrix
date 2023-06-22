<?php
global $APPLICATION;
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>


        <!DOCTYPE html>
        <html lang="ru" data-test="3">

        <head>
            <html lang="ru">
            <?php $APPLICATION->ShowHead();?>
		    <title><?php $APPLICATION->ShowTitle();?></title>
            <meta name="format-detection" content="telephone=no">
            <link rel="icon" type="image/png" href="simg/favicon.png" />
            <?php
            use Bitrix\Main\Page\Asset;

            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/style.min.css');
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/app.min.js');
            Asset::getInstance()->addString('            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            ');
            
            ?>
            
           
        </head>

        <body>
            <div id="panel">
			<?php $APPLICATION->ShowPanel();?>
		</div>
        <div class="site">
            <div class="wrapper">
						