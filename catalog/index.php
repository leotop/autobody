<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("РљР°С‚Р°Р»РѕРі");
    //arshow($_GLOBALS["SITE_VARIABLES"]);
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"main_catalog",
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket/",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"COMPARE_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_PROPERTY_CODE" => array(
			0 => "FIRM",
			1 => "WARRANTY",
			2 => "",
		),
		"COMPONENT_TEMPLATE" => "main_catalog",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUR",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "FIRM",
			1 => "COUNTRY",
			2 => "STATUS",
			3 => "DESCRIPTION",
			4 => "UNC",
			5 => "UNIT",
			6 => "SIZE",
			7 => "EXPIRED",
			8 => "WARRANTY",
			9 => "WEIGHT",
			10 => "CONSIGNMEN",
			11 => "RESERV",
			12 => "MAX_ORDER",
			13 => "OPT_QUANTITY",
			14 => "OPT_QUANTITY_INC",
			15 => "OPT_PRICE",
			16 => "OPT_PRICE_INC",
			17 => "SPEC_OFFER",
			18 => "ADD_GOODS",
			19 => "ADD_IMAGES",
			20 => "H1",
			21 => "TITLE",
			22 => "KEYWORDS",
			23 => "MAIN_SECTION",
			24 => "DESCRIPTION2",
			25 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FIELDS" => array(
			0 => "",
			1 => "",
		),
		"FILTER_VIEW_MODE" => "VERTICAL",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "88",
		"IBLOCK_TYPE" => "OSG_WEB_SHOP",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "1",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_PROPERTY_CODE" => array(
			0 => "FIRM",
			1 => "COUNTRY",
			2 => "STATUS",
			3 => "DESCRIPTION",
			4 => "UNC",
			5 => "UNIT",
			6 => "SIZE",
			7 => "EXPIRED",
			8 => "WARRANTY",
			9 => "WEIGHT",
			10 => "CONSIGNMEN",
			11 => "RESERV",
			12 => "MAX_ORDER",
			13 => "OPT_QUANTITY",
			14 => "OPT_QUANTITY_INC",
			15 => "OPT_PRICE",
			16 => "OPT_PRICE_INC",
			17 => "SPEC_OFFER",
			18 => "ADD_GOODS",
			19 => "ADD_IMAGES",
			20 => "MAIN_SECTION",
			21 => "",
		),
		"MAIN_TITLE" => "РќР°Р»РёС‡РёРµ РЅР° СЃРєР»Р°РґР°С…",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "Р’ РєРѕСЂР·РёРЅСѓ",
		"MESS_BTN_BUY" => "РљСѓРїРёС‚СЊ",
		"MESS_BTN_COMPARE" => "РЎСЂР°РІРЅРµРЅРёРµ",
		"MESS_BTN_DETAIL" => "РџРѕРґСЂРѕР±РЅРµРµ",
		"MESS_NOT_AVAILABLE" => "РќРµС‚ РІ РЅР°Р»РёС‡РёРё",
		"MIN_AMOUNT" => "1",
		"OFFERS_FIELDS" => array(
			0 => "NAME",
			1 => "",
		),
		"OFFERS_PROPERTIES" => array(
			0 => "",
			1 => "",
		),
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "catalog",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "100",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => $_GLOBALS["SITE_VARIABLES"]["PRICE_CODE"],
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "1",
		"SEF_FOLDER" => "/catalog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "N",
		"STORES" => array(
		),
		"STORE_PATH" => "/store/#store_id#",
		"TEMPLATE_THEME" => "blue",
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"USE_ALSO_BUY" => "N",
		"USE_COMPARE" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_MIN_AMOUNT" => "Y",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "Y",
		"USE_REVIEW" => "N",
		"USE_SALE_BESTSELLERS" => "Y",
		"USE_STORE" => "Y",
		"USE_STORE_PHONE" => "N",
		"USE_STORE_SCHEDULE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_ID#/",
			"element" => "#SECTION_ID#/#ELEMENT_ID#/",
			"compare" => "test.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.bigdata.products",
	"autobody.bigdata.products",
	array(
		"ACTION_VARIABLE" => "action",
		"ADDITIONAL_PICT_PROP_88" => "",
		"ADDITIONAL_PICT_PROP_93" => "",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CART_PROPERTIES_88" => array(
			0 => "",
			1 => "",
		),
		"CART_PROPERTIES_93" => array(
			0 => "PRODUCT",
		),
		"COMPONENT_TEMPLATE" => "autobody.bigdata.products",
		"CONVERT_CURRENCY" => "N",
		"DEPTH" => "",
		"DETAIL_URL" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "88",
		"IBLOCK_TYPE" => "OSG_WEB_SHOP",
		"ID" => $_REQUEST["PRODUCT_ID"],
		"LABEL_PROP_88" => "-",
		"LABEL_PROP_93" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"PAGE_ELEMENT_COUNT" => "6",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE_88" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE_93" => array(
			0 => "PRODUCT",
		),
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_CODE" => "",
		"SECTION_ELEMENT_ID" => "",
		"SECTION_ID" => "",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_PRODUCTS_88" => "Y",
		"SHOW_PRODUCTS_93" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_PRODUCT_QUANTITY" => "N"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>