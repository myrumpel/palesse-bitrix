<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */


$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if ($arParams["EVENT_NAME"] == '')
	$arParams["EVENT_NAME"] = "FEEDBACK_FORM";
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
if ($arParams["EMAIL_TO"] == '')
	$arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if ($arParams["OK_TEXT"] == '')
	$arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"])) {
	// $arResult["ERROR_MESSAGE"] = array();
	if (check_bitrix_sessid()) {


		if (empty($arResult["ERROR_MESSAGE"])) {
			$arFields = array(
				"AUTHOR" => $_POST["Name"],
				"AUTHOR_PHONE" => $_POST["Phone"],
				"TEXT" => $_POST["Topic"],
				"EMAIL_TO" => $arParams["EMAIL_TO"],
			);
			if (!empty($arParams["EVENT_MESSAGE_ID"])) {
				foreach ($arParams["EVENT_MESSAGE_ID"] as $v)
					if (intval($v) > 0)
						CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", intval($v));
			} else
				CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);
			$_SESSION["MF_NAME"] = htmlspecialcharsbx($_POST["Name"]);
			$_SESSION["MF_EMAIL"] = htmlspecialcharsbx($_POST["Phone"]);
			$event = new \Bitrix\Main\Event('main', 'onFeedbackFormSubmit', $arFields);
			$event->send();
			// LocalRedirect($APPLICATION->GetCurPageParam("success=" . $arResult["PARAMS_HASH"], array("success")));
		}

		$arResult["MESSAGE"] = htmlspecialcharsbx($_POST["Topic"]);
		$arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_POST["Name"]);
		$arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_POST["Phone"]);
	}
	// $arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");

}



$this->IncludeComponentTemplate();