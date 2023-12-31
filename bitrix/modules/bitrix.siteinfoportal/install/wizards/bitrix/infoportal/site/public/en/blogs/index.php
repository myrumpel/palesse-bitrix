<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Blog");
?><? $APPLICATION->IncludeComponent(
	"bitrix:blog",
	".default",
	array(
		"MESSAGE_COUNT" => "25",
		"PERIOD_DAYS" => "30",
		"MESSAGE_COUNT_MAIN" => "10",
		"BLOG_COUNT_MAIN" => "5",
		"COMMENTS_COUNT" => "25",
		"MESSAGE_LENGTH" => "100",
		"BLOG_COUNT" => "20",
		"DATE_TIME_FORMAT" => "F j, Y h:i a",
		"NAV_TEMPLATE" => "",
		"SMILES_COUNT" => "4",
		"SMILES_COLS" => "4",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "#SITE_DIR#blogs/",
		"AJAX_POST" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_TIME_LONG" => "604800",
		"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",
		"SET_TITLE" => "Y",
		"SET_NAV_CHAIN" => "Y",
		"USER_PROPERTY" => array(
		),
		"BLOG_PROPERTY" => array(
		),
		"BLOG_PROPERTY_LIST" => array(
		),
		"POST_PROPERTY" => array(
		),
		"POST_PROPERTY_LIST" => array(
		),
		"USE_ASC_PAGING" => "N",
		"NOT_USE_COMMENT_TITLE" => "Y",
		"SHOW_RATING" => "N",
		"THEME" => "",
		// "GROUP_ID" => #BLOG_GROUP_ID#,
		"SHOW_NAVIGATION" => "Y",
		"USER_PROPERTY_NAME" => "",
		"PERIOD_NEW_TAGS" => "",
		"PERIOD" => "",
		"COLOR_TYPE" => "Y",
		"WIDTH" => "100%",
		"SEO_USER" => "N",
		"NAME_TEMPLATE" => "",
		"SHOW_LOGIN" => "Y",
		"USE_SHARE" => "Y",
		"PATH_TO_SONET_USER_PROFILE" => "/club/user/#user_id#/",
		"PATH_TO_MESSAGES_CHAT" => "/club/messages/chat/#user_id#/",
		"ALLOW_POST_MOVE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SEF_URL_TEMPLATES" => array(
			"index" => "index.php",
			"group" => "group/#group_id#.php",
			"blog" => "#blog#/",
			"user" => "user/#user_id#.php",
			"user_friends" => "friends/#user_id#.php",
			"search" => "search.php",
			"user_settings" => "#blog#/user_settings.php",
			"user_settings_edit" => "#blog#/user_settings_edit.php?id=#user_id#",
			"group_edit" => "#blog#/group_edit.php",
			"blog_edit" => "#blog#/blog_edit.php",
			"category_edit" => "#blog#/category_edit.php",
			"post_edit" => "#blog#/post_edit.php?id=#post_id#",
			"draft" => "#blog#/draft.php",
			"moderation" => "#blog#/moderation.php",
			"trackback" => POST_FORM_ACTION_URI . "&blog=#blog#&id=#post_id#&page=trackback",
			"post" => "#blog#/#post_id#.php",
			"post_rss" => "#blog#/rss/#type#/#post_id#",
			"rss" => "#blog#/rss/#type#",
			"rss_all" => "rss/#type#/#group_id#",
		),
		"VARIABLE_ALIASES" => array(
			"user_settings_edit" => array(
				"user_id" => "id",
			),
			"post_edit" => array(
				"post_id" => "id",
			),
			"trackback" => array(
				"blog" => "blog",
				"post_id" => "id",
			),
		)
	),
	false
); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>