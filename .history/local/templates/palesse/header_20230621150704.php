<?php
global $APPLICATION;
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>


        <!DOCTYPE html>
        <html lang="ru" data-test="3">

        <head>
            <html lang="ru">
            <?php $APPLICATION->ShowHead();?>
		    <title><?php $APPLICATION->ShowTitle();?></title>
            <meta name="format-detection" content="telephone=no">
            <!-- <style>body{opacity: 0;}</style> -->
            <link rel="icon" type="image/png" href="simg/favicon.png" />
            <!-- <meta name="robots" content="noindex, nofollow"> -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <link rel="stylesheet" href="css/style.min.css?_v=20230621140303"> -->
            <?php
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH. '/assets/css/style.min.css')
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. '/assets/js/app.min.js')?>
            <script>
                console.log('стили загружены')
            </script>
        </head>

        <body>
            <div id="panel">
			<?php $APPLICATION->ShowPanel();?>
		</div>
        <div class="site">
            <div class="wrapper">
						