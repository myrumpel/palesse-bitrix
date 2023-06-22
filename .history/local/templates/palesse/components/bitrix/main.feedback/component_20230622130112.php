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
				"Name" => $_POST["Name"],
				"Phone" => $_POST["Phone"],
				"Topic" => $_POST["Topic"],
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
			$_SESSION["MF_EMAIL"] = htmlspecialcharsbx($_POST["Topic"]);
			$event = new \Bitrix\Main\Event('main', 'onFeedbackFormSubmit', $arFields);
			$event->send();
			LocalRedirect($APPLICATION->GetCurPageParam("success=" . $arResult["PARAMS_HASH"], array("success")));
		}

		$arResult["Name"] = htmlspecialcharsbx($_POST["Name"]);
		$arResult["Phone"] = htmlspecialcharsbx($_POST["Phone"]);
		$arResult["Topic"] = htmlspecialcharsbx($_POST["Topic"]);
	} else
		$arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
} elseif ($_REQUEST["success"] == $arResult["PARAMS_HASH"]) {
	$arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
}



$this->IncludeComponentTemplate();