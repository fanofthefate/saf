<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
?>
		<?
		$foto = $arResult["DETAIL_PICTURE"]["ID"];
																   //print_r($foto);
 		$renderImage110 = CFile::ResizeImageGet($foto, Array("width" => 330, "height" => 186), BX_RESIZE_IMAGE_EXACT );
		$renderImage108 = CFile::ResizeImageGet($foto, Array("width" => 324, "height" => 186), BX_RESIZE_IMAGE_EXACT );
		$renderImage220 = CFile::ResizeImageGet($foto, Array("width" => 230, "height" => 300), BX_RESIZE_IMAGE_EXACT );
		$item_foto["PREVIEW1"] = $renderImage110['src'];
		$item_foto["PREVIEW11"] = $renderImage108['src'];
		$item_foto["PREVIEW2"] = $renderImage220['src'];
																   //echo '<pre>'; print_r($item_foto); echo '</pre>';?>
<div class="review-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<div class="iitem" style="text-align: center">
				<a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="pop">
					<img
					class="review_detail_picture"
					src="<?=$item_foto['PREVIEW2']?>"
					alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
					title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
					/>
			</a>
		</div>
	<?endif?>
	<?if($arResult['PROPERTIES']['date_publish']['VALUE']):?>
		<p>Дата публикации: <?=$arResult['PROPERTIES']['date_publish']['VALUE']?></p>
	<?endif?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
	<a class="review-detail-url" href="<?=$arResult["PROPERTIES"]["url_reviewer"]["VALUE"]?>"><h2 class="review-detail-name">Отзыв от <?=$arResult["PROPERTIES"]["name_reviewer"]["VALUE"]?></h2> </a>
	<?endif;?>
	<h2 class="pi">Текст отзыва</h2>
	<?if($arResult["PROPERTIES"]["full_text"]["VALUE"]["TEXT"]):?>
	<p class="review_detail_text"><?=$arResult["PROPERTIES"]["full_text"]["VALUE"]["TEXT"]?></p>
	<?endif?>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,twitter,viber,whatsapp,skype,telegram" data-counter=""></div>

	<? // echo '<pre>'; print_r($arResult); echo '</pre>'; ?>
<?
$arSelect = Array("ID","NAME", "DETAIL_PAGE_URL", "PROPERTIES");
$arFilter = Array("IBLOCK_ID"=>$arResult["IBLOCK_ID"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SECTION_ID"=>$arResult['IBLOCK_SECTION_ID']);
$res = CIBlockElement::GetList(Array($arParams["ELEMENT_SORT_FIELD"]=>$arParams["ELEMENT_SORT_ORDER"]), $arFilter, false, Array("nPageSize"=>1,"nElementID"=>$arResult['ID']), $arSelect);
while($ob = $res->GetNext())
{
$links[]=$ob;
}
if(count($links)>1)
{
?>

<?if($links[1]["ID"]==$arResult['ID']){?>
                                       <a href="<?=$links[0]["DETAIL_PAGE_URL"]?>" class="nav_review prev">Предыдущий отзыв </a>
<?if(is_array($links[2])){?>
                                       <a href="<?=$links[2]["DETAIL_PAGE_URL"]?>" class="nav_review next">Следующий отзыв</a>
<?}}elseif(is_array($links[1])){?>
                                       <a href="<?=$links[1]["DETAIL_PAGE_URL"]?>" class="nav_review next">Следующий отзыв</a>
<?}?>

                                 
<?}?>
</div>

	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
		/*$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
*/?>
			</noindex>
		</div>
		<?
	}
	?>
</div>