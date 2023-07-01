<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Политика конфиденциальности");
?>
<section class="privacy">
	<div class="container">
		<div class="privacy__inner">
			<h1 class="privacy__title">Политика в отношении обработки персональных данных</h1>


			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "index",
					"PATH" => SITE_TEMPLATE_PATH . "/privacyIncludes/privacy.php"
				)
			); ?>
		</div>
	</div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>