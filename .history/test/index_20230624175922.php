<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новый раздел");
?>

<? if (!empty($arResult["ITEMS"])): ?>
<? endif; ?>


<section class="banks about-partner">
	<div class="container">
		<h2 class="banks__title">Партнёры</h2>
		<div class="banks__inner">
			<? foreach ($arResult["ITEMS"] as $Item): ?>

				<div class='banks__img'> <img src='<?= $Item["PROPERTIES"]["aboutPartners"]["SRC"]; ?>' alt=''></div>
			<? endforeach; ?>

		</div>
	</div>
</section>
<?
echo 'pre';
print_r($arResult["ITEMS"]["PROPERTIES"]);
echo '/pre';
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>