<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контакты. Интернет-магазин №❶ компании Форвард: автомобильные запчасти, запчасти для тюнинга, кузовные запчасти. ☏  8(800)707-78-13, 8(495)788-78-13");
$APPLICATION->SetTitle("Контакты");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news", 
    "contacts", 
    array(
        "IBLOCK_TYPE" => "info",
        "IBLOCK_ID" => "100",
        "NEWS_COUNT" => "20",
        "USE_SEARCH" => "N",
        "USE_RSS" => "N",
        "USE_RATING" => "N",
        "USE_CATEGORIES" => "N",
        "USE_REVIEW" => "N",
        "USE_FILTER" => "N",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "NAME",
        "SORT_ORDER2" => "ASC",
        "CHECK_DATES" => "Y",
        "SEF_MODE" => "Y",
        "SEF_FOLDER" => "/contacts/",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "ADD_ELEMENT_CHAIN" => "N",
        "USE_PERMISSIONS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "LIST_PROPERTY_CODE" => array(
            0 => "CONTACT_TOWN",
            1 => "CONTACT_ADRESS",
            2 => "CONTACT_PHONE",
            3 => "CONTACT_EMAIL",
            4 => "CONTACT_SITE",
            5 => "CONTACT_SCHEDULE",
            6 => "CONTACT_COMMENT",
            7 => "CONTACT_MAPS",
            8 => "",
        ),
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "DISPLAY_NAME" => "Y",
        "META_KEYWORDS" => "-",
        "META_DESCRIPTION" => "-",
        "BROWSER_TITLE" => "-",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "DETAIL_PROPERTY_CODE" => array(
            0 => "CONTACT_TOWN",
            1 => "CONTACT_ADRESS",
            2 => "CONTACT_PHONE",
            3 => "CONTACT_EMAIL",
            4 => "CONTACT_SITE",
            5 => "CONTACT_SCHEDULE",
            6 => "CONTACT_COMMENT",
            7 => "CONTACT_MAPS",
            8 => "",
        ),
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_SHOW_ALL" => "Y",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "USE_SHARE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "SEF_URL_TEMPLATES" => array(
            "news" => "",
            "section" => "",
            "detail" => "#ELEMENT_ID#/",
        )
    ),
    false
);?> 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>