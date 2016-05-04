<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<!--noindex-->
<div>
<?if(count($arResult["ERRORS"]) > 0):?>
	<?foreach($arResult["ERRORS"] as $strError):?>
		<p class="errortext"><?echo $strError?></p>
	<?endforeach?>
	<?$this->setFrameMode(false);?>
<?elseif(count($arResult["RUBRICS"]) <= 0):?>
	<p class="errortext"><?echo GetMessage("CT_BSS_NO_RUBRICS_FOUND")?></p>
	<?$this->setFrameMode(false);?>
<?else:?>
	<?$frame=$this->createFrame()->begin();?>
	<?if($arResult["MESSAGE"]):?>
		<p class="notetext"><?echo $arResult["MESSAGE"]?></p>
	<?endif?>
    <div class="prisces_edit">
	<form method="POST" action="<?echo $arResult["FORM_ACTION"]?>" class="subscribe-form">
		<table class="data-table">
			<tbody>
			<tr>
				<td>
					<?foreach($arResult["RUBRICS"] as $arRubric):?>
                    <?if($arRubric["ID"] == 4){?>
                        <input name="RUB_ID[]" value="<?echo $arRubric["ID"]?>" id="RUB_<?echo $arRubric["ID"]?>" type="checkbox" <?if($arRubric["CHECKED"]) echo "checked";?>><label class="style_edit_prices" for="RUB_<?echo $arRubric["ID"]?>"><?echo $arRubric["NAME"]?></label><br>
                    <?}?>					
                    <?endforeach?>
					<br>
					<!--<input name="FORMAT" value="text" id="FORMAT_text" type="radio" <?if($arResult["FORMAT"] === "text") echo "checked";?>><label for="FORMAT_text"><?echo GetMessage("CT_BSS_TEXT")?></label>
					&nbsp;/&nbsp;
					<input name="FORMAT" value="html" id="FORMAT_html" type="radio" <?if($arResult["FORMAT"] === "html") echo "checked";?>><label for="FORMAT_html"><?echo GetMessage("CT_BSS_HTML")?></label>
				--></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<td> 
                    <input type="text" name="sf_EMAIL" size="20" value="<?=$USER->GetEmail()?>" title="<?=GetMessage("subscr_form_email_title")?>" />
					<?echo bitrix_sessid_post();?>
					<input  class="submit_edit" type="submit" name="Update" value="<?echo GetMessage("CT_BSS_FORM_BUTTON")?>">
				</td>
			</tr>
			</tfoot>
		</table>
	</form>
</div>
	<?$frame->beginStub();?>
	<form method="POST" action="<?echo $arResult["FORM_ACTION"]?>">
		<table class="data-table">
			<tbody>
			<tr>
				<td>
					<?foreach($arResult["RUBRICS"] as $arRubric):?>
						<input name="RUB_ID[]" value="<?echo $arRubric["ID"]?>" id="RUB_<?echo $arRubric["ID"]?>" type="checkbox"><label for="RUB_<?echo $arRubric["ID"]?>"><?echo $arRubric["NAME"]?></label><br>
					<?endforeach?>
					<br>
					<input name="FORMAT" value="text" id="FORMAT_text" type="radio"><label for="FORMAT_text"><?echo GetMessage("CT_BSS_TEXT")?></label>
					&nbsp;/&nbsp;
					<input name="FORMAT" value="html" id="FORMAT_html" type="radio"><label for="FORMAT_html"><?echo GetMessage("CT_BSS_HTML")?></label>
				</td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<td>
                    <input type="text" name="sf_EMAIL" size="20" value="<?=$USER->GetEmail()?>" title="<?=GetMessage("subscr_form_email_title")?>" />
					<input type="submit" name="Update" value="<?echo GetMessage("CT_BSS_FORM_BUTTON")?>">
				</td>
			</tr>
			</tfoot>
		</table>
	</form>
    </div>
    <!--noindex-->
	<?$frame->end();?>
<?endif?>
