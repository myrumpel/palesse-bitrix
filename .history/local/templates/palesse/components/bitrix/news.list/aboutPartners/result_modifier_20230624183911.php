<?
$arResult["MORE_PHOTOS1"] = array();

if (isset($arResult["PROPERTIES"]["MORE_PHOTOS1"]["VALUE"]) && is_array($arResult["PROPERTIES"]["MORE_PHOTOS1"]["VALUE"])) {
	foreach ($arResult["PROPERTIES"]["MORE_PHOTOS1"]["VALUE"] as $FILE) {
		$FILE = CFile::GetFileArray($FILE);
		if (is_array($FILE))
			$arResult["MORE_PHOTOS1"][] = $FILE;
	}
}
?>