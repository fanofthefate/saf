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
<div class="p_wrapper">
<?foreach($arResult["ITEMS"] as $arItem):?>
<?
$picture = "";
$renderImage160 = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 294, "height" => 176), BX_RESIZE_IMAGE_EXACT);
$picture = $renderImage160["src"];
?>
<div class="shop">
	<img src="<?=$picture?>"  alt="">
	<div class="shop_inner">
		<span class="grey"><b><?=$arItem["NAME"]?></b></span>
		<?=$arItem["PREVIEW_TEXT"]?>
	</div>
</div>
<?endforeach;?>
 </div>
