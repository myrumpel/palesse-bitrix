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

$arResult["PARAMS_HASH"] = md5(serialize($arParams) . $this->GetTemplateName());

$arParams["USE_CAPTCHA"] = (($arParams["USE_CAPTCHA"] != "N" && !$USER->IsAuthorized()) ? "Y" : "N");
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
	$arResult["ERROR_MESSAGE"] = array();
	if (check_bitrix_sessid()) {

		if (empty($arResult["ERROR_MESSAGE"])) {
			$arFields = array(
				"AUTHOR" => $_POST["Name"],
				"PHONE" => $_POST["Phone"],
				"TOPIC" => $_POST["Topic"],
			);
			if (!empty($arParams["EVENT_MESSAGE_ID"])) {
				foreach ($arParams["EVENT_MESSAGE_ID"] as $v)
					if (intval($v) > 0)
						CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", intval($v));
			} else
				CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);
			$_SESSION["MF_NAME"] = htmlspecialcharsbx($_POST["user_name"]);
			$_SESSION["MF_EMAIL"] = htmlspecialcharsbx($_POST["user_email"]);
			$event = new \Bitrix\Main\Event('main', 'onFeedbackFormSubmit', $arFields);
			$event->send();
			LocalRedirect($APPLICATION->GetCurPageParam("success=" . $arResult["PARAMS_HASH"], array("success")));
		}

		$arResult["NAME"] = htmlspecialcharsbx($_POST["Name"]);
		$arResult["PHONE"] = htmlspecialcharsbx($_POST["Phone"]);
		$arResult["TOPIC"] = htmlspecialcharsbx($_POST["Topic"]);
	} else
		$arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
} elseif ($_REQUEST["success"] == $arResult["PARAMS_HASH"]) {
	$arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
}

// if (empty($arResult["ERROR_MESSAGE"])) {
// 	if ($USER->IsAuthorized()) {
// 		$arResult["AUTHOR_NAME"] = $USER->GetFormattedName(false);
// 		$arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($USER->GetEmail());
// 	} else {
// 		if ($_SESSION["MF_NAME"] <> '')
// 			$arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_SESSION["MF_NAME"]);
// 		if ($_SESSION["MF_EMAIL"] <> '')
// 			$arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($_SESSION["MF_EMAIL"]);
// 	}
// }

// if ($arParams["USE_CAPTCHA"] == "Y")
// 	$arResult["capCode"] = htmlspecialcharsbx($APPLICATION->CaptchaGetCode());

$this->IncludeComponentTemplate();