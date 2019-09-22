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
<div class="top_gradient"></div>
<div class="width_wrapper detn">
<?if ($arResult["DETAIL_PICTURE"]["SRC"]!="") {?>
<img class="detail_image" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>">
<?}?>
					
<span class="date"><?=myDate($arResult["DISPLAY_PROPERTIES"]["DATE"]["VALUE"])?></span>
<div class="banner-area"></div>
<h1><?=$arResult["NAME"]?></h1>

<?echo $arResult["DETAIL_TEXT"];?>
</div>