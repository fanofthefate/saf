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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<?
		$foto = $arItem["PREVIEW_PICTURE"]["ID"];
																   //print_r($foto);
 		$renderImage110 = CFile::ResizeImageGet($foto, Array("width" => 330, "height" => 186), BX_RESIZE_IMAGE_EXACT );
		$renderImage108 = CFile::ResizeImageGet($foto, Array("width" => 324, "height" => 186), BX_RESIZE_IMAGE_EXACT );
		$renderImage220 = CFile::ResizeImageGet($foto, Array("width" => 230, "height" => 300), BX_RESIZE_IMAGE_EXACT );
		$item_foto["PREVIEW1"] = $renderImage110['src'];
		$item_foto["PREVIEW11"] = $renderImage108['src'];
		$item_foto["PREVIEW2"] = $renderImage220['src'];
																   //echo '<pre>'; print_r($item_foto); echo '</pre>';?>
<div class="col-sm-4 review-parent">
	<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
		<div class="review-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<img
							class="preview_picture"
							border="0"
							src="<?=$item_foto["PREVIEW2"]?>"
							alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
							style="float:left"
							/>
				<?else:?>
					<img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/>
				<?endif;?>
			<?endif?>
			<?// echo '<pre>'; print_r($arItem); echo '</pre>';?>

			<div class="review_name">Отзыв от <?echo $arItem['PROPERTIES']['name_reviewer']['VALUE']?></div>
			
		</div>
	</a>
</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
