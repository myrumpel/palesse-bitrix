<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Forum");
?><? $APPLICATION->IncludeComponent(
	"bitrix:forum",
	".default",
	array(
		"THEME" => COption::GetOptionString("main", "wizard_" . SITE_TEMPLATE_ID . "_forum_theme_id", "gray", SITE_ID),
		"SHOW_TAGS" => "Y",
		"SHOW_AUTH_FORM" => "Y",
		"SHOW_NAVIGATION" => "Y",
		"TMPLT_SHOW_ADDITIONAL_MARKER" => "",
		"SMILES_COUNT" => "100",
		"USE_LIGHT_VIEW" => "Y",
		// "FID" => #FORUM_ID#,
		"FILES_COUNT" => "5",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "#SITE_DIR#forum/",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_TIME_USER_STAT" => "60",
		"FORUMS_PER_PAGE" => "10",
		"TOPICS_PER_PAGE" => "10",
		"MESSAGES_PER_PAGE" => "10",
		"TIME_INTERVAL_FOR_USER_STAT" => "10",
		"IMAGE_SIZE" => "500",
		"SET_TITLE" => "Y",
		"USE_RSS" => "Y",
		"RSS_COUNT" => "30",
		"SHOW_VOTE" => "N",
		"SHOW_RATING" => "N",
		"SHOW_SUBSCRIBE_LINK" => "N",
		"SHOW_LEGEND" => "Y",
		"SHOW_STATISTIC" => "Y",
		"SHOW_NAME_LINK" => "Y",
		"SHOW_FORUMS" => "Y",
		"SHOW_FIRST_POST" => "N",
		"SHOW_AUTHOR_COLUMN" => "N",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"PATH_TO_ICON" => "/bitrix/images/forum/icon/",
		"PAGE_NAVIGATION_TEMPLATE" => "forum",
		"PAGE_NAVIGATION_WINDOW" => "5",
		"WORD_WRAP_CUT" => "23",
		"WORD_LENGTH" => "50",
		"SEO_USER" => "N",
		"USER_PROPERTY" => array(
		),
		"HELP_CONTENT" => "",
		"RULES_CONTENT" => "",
		"CHECK_CORRECT_TEMPLATES" => "Y",
		"RSS_CACHE" => "1800",
		"PATH_TO_AUTH_FORM" => "",
		"DATE_FORMAT" => "F j, Y",
		"DATE_TIME_FORMAT" => "F j, Y h:i a",
		"SEND_MAIL" => "E",
		"SEND_ICQ" => "A",
		"SET_NAVIGATION" => "Y",
		"SET_PAGE_PROPERTY" => "Y",
		"SHOW_FORUM_ANOTHER_SITE" => "Y",
		"RSS_TYPE_RANGE" => array(
			0 => "RSS1",
			1 => "RSS2",
			2 => "ATOM",
		),
		"RSS_TN_TITLE" => "",
		"RSS_TN_DESCRIPTION" => "",
		"SEF_URL_TEMPLATES" => array(
			"index" => "index.php",
			"list" => "forum#FID#/",
			"read" => "forum#FID#/topic#TID#/",
			"message" => "messages/forum#FID#/topic#TID#/message#MID#/",
			"help" => "help/",
			"rules" => "rules/",
			"message_appr" => "messages/approve/forum#FID#/topic#TID#/",
			"message_move" => "messages/move/forum#FID#/topic#TID#/message#MID#/",
			"rss" => "rss/#TYPE#/#MODE#/#IID#/",
			"search" => "search/",
			"subscr_list" => "subscribe/",
			"active" => "topic/new/",
			"topic_move" => "topic/move/forum#FID#/topic#TID#/",
			"topic_new" => "topic/add/forum#FID#/",
			"topic_search" => "topic/search/",
			"user_list" => "users/",
			"profile" => "user/#UID#/edit/",
			"profile_view" => "user/#UID#/",
			"user_post" => "user/#UID#/post/#mode#/",
			"message_send" => "user/#UID#/send/#TYPE#/",
		)
	),
	false
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>