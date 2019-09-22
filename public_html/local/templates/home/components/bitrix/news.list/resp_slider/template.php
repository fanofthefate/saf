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


<?foreach($arResult["ITEMS"] as $arItem):?>
<?

$picture = "";
if ($arItem["PREVIEW_PICTURE"]){
	//$picture = CFile::GetPath($arItem["PREVIEW_PICTURE"]["ID"]);

	$renderImage160 = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], Array("width" => 160, "height" => 160), BX_RESIZE_IMAGE_EXACT);
	$picture = $renderImage160["src"];
}
else {
	$renderImage160 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], Array("width" => 160, "height" => 160), BX_RESIZE_IMAGE_EXACT);
	$picture = $renderImage160["src"];
	
	
}
?>

<div class="slider__box">
	<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"  class="slider__link">
		<img data-lazy="<?=$picture ?>"  alt="Отзыв №1" class="slider__pic d">
	</a>
</div>

<?endforeach;?>
