<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<?foreach($arResult as $arItem):?>
	<?if($arItem["SELECTED"]):?>
		<strong><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></strong>
	<?else:?>
		<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
	<?endif?>
<?endforeach?>
<?endif?>