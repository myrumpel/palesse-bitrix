<?
$arResult["aboutPartners"] = array();

if (isset($arResult["PROPERTIES"]["aboutPartners"]["VALUE"]) && is_array($arResult["PROPERTIES"]["aboutPartners"]["VALUE"])) {
	foreach ($arResult["PROPERTIES"]["aboutPartners"]["VALUE"] as $FILE) {
		$FILE = CFile::GetFileArray($FILE);
		if (is_array($FILE))
			$arResult["aboutPartners"][] = $FILE;
	}
}
?>