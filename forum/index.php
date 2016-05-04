<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форум");
?><?$APPLICATION->IncludeComponent("bitrix:forum", ".default", array(
	"THEME" => "blue",
	"SHOW_TAGS" => "Y",
	"SHOW_AUTH_FORM" => "N",
	"SHOW_NAVIGATION" => "N",
	"TMPLT_SHOW_ADDITIONAL_MARKER" => "",
	"SMILES_COUNT" => "100",
	"USE_LIGHT_VIEW" => "Y",
	"FID" => array(
		0 => "1",
	),
	"FILES_COUNT" => "5",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/forum/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_TIME_USER_STAT" => "60",
	"FORUMS_PER_PAGE" => "10",
	"TOPICS_PER_PAGE" => "10",
	"MESSAGES_PER_PAGE" => "10",
	"TIME_INTERVAL_FOR_USER_STAT" => "10",
	"IMAGE_SIZE" => "500",
	"SET_TITLE" => "Y",
	"USE_RSS" => "N",
	"SHOW_VOTE" => "N",
	"SHOW_RATING" => "N",
	"SHOW_SUBSCRIBE_LINK" => "N",
	"SHOW_LEGEND" => "Y",
	"SHOW_STATISTIC" => "N",
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
	"USER_PROPERTY" => "",
	"HELP_CONTENT" => "",
	"RULES_CONTENT" => "",
	"CHECK_CORRECT_TEMPLATES" => "Y",
	"PATH_TO_AUTH_FORM" => "",
	"DATE_FORMAT" => "d.m.Y",
	"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
	"SEND_MAIL" => "E",
	"SEND_ICQ" => "A",
	"SET_NAVIGATION" => "Y",
	"SET_PAGE_PROPERTY" => "Y",
	"SHOW_FORUM_ANOTHER_SITE" => "Y",
	"VARIABLE_ALIASES" => array(
		"FID" => "FID",
		"TID" => "TID",
		"MID" => "MID",
		"UID" => "UID",
	)
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>