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

if ($arParams["ELEMENT_CODE"]=="k_4txt" && $arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"]!="")
{
	if ($arParams["MOBILE"]=="Y")
	{?>
		<div class="center_video">
			<video  width="90%"  src="<?=CFile::GetPath($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"])?>" controls></video>
		</div>
	<?}
	else 
	{?>
		<div class="center_video">
				<video  width="764"  src="<?=CFile::GetPath($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"])?>" controls></video>
		</div>
		
	<?}
	
}

else
{


	if ($arParams["MOBILE"]=="Y" && trim($arResult["DISPLAY_PROPERTIES"]["MTXT"]["~VALUE"]["TEXT"])!="" )
	{
		print($arResult["DISPLAY_PROPERTIES"]["MTXT"]["~VALUE"]["TEXT"]);
	}
	else {

		if ($arParams["INT"])
			print(intval($arResult["DETAIL_TEXT"]));
		else if ($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"]!="")
			print(CFile::GetPath($arResult["DISPLAY_PROPERTIES"]["FILE"]["VALUE"]));
		else 
			print($arResult["DETAIL_TEXT"]);
	}
}
?>
