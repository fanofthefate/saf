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
global $mnths2;
?>


<table cellpadding="0" cellspacing="0">
	<tr>
		<th>Дата</th>
		<th>Город</th>
		<th>Название программы</th>
	</tr>
	

	<?foreach($arResult["ITEMS"] as $arItem) {
		
	$town_name = strip_tags($arItem["DISPLAY_PROPERTIES"]["TOWN"]["DISPLAY_VALUE"]);
	$address = $arItem["DISPLAY_PROPERTIES"]["ADDRESS"]["~VALUE"];
	$place = trim($arItem["DISPLAY_PROPERTIES"]["PLACE"]["~VALUE"])."";
	
	$time = $arItem["DISPLAY_PROPERTIES"]["TIMEFROM"]["VALUE"]!="" ? " с ".$arItem["DISPLAY_PROPERTIES"]["TIMEFROM"]["VALUE"] : "";
	$time .= $arItem["DISPLAY_PROPERTIES"]["TIMETO"]["VALUE"]!="" ? " по ".$arItem["DISPLAY_PROPERTIES"]["TIMETO"]["VALUE"] : "";
	
	$time = str_replace("-",":", $time);
	
	$town_name = $town_name.($place!="" ? ", ".$place : "");
	$town_name = $town_name.($address!="" ? ", ".$address : "");
	
	$imageID = $arResult["SECTIONINFO"][$arItem["IBLOCK_SECTION_ID"]]["IMGID"];
	
	$renderImage100 = CFile::ResizeImageGet($imageID, Array("width" => 100, "height" => 50), BX_RESIZE_IMAGE_PROPORTIONAL);
	$renderImage200 = CFile::ResizeImageGet($imageID, Array("width" => 200, "height" => 100), BX_RESIZE_IMAGE_PROPORTIONAL);
	
	$url = $arResult["SECTIONINFO"][$arItem["IBLOCK_SECTION_ID"]]["DETAIL_PAGE_URL"];
	$date = FormatDateFromTo($arItem["DISPLAY_PROPERTIES"]["DATEFROM"]["~VALUE"], $arItem["DISPLAY_PROPERTIES"]["DATETO"]["~VALUE"]);
	
	
	if (intval($arItem["IBLOCK_SECTION_ID"])>0) {
		?>
	<tr>
		<td class="first"><?=$date?><br/><?=$time?></td>
		<td><?=$town_name?></td>
		<td>
			<a class="for_name" href="<?=$url?>"><?=TextFormat($arResult["SECTIONINFO"][$arItem["IBLOCK_SECTION_ID"]]["NAME"])?></a>
			<a class="for_list" href="<?=$url?>"><img src="<?=$renderImage100["src"]?>" data-retinasrc="<?=$renderImage200['src']?>" alt="" class="ticket-popup-image"></a>
			<p class="descr">
			<?=TextFormat(strip_tags($arResult["SECTIONINFO"][$arItem["IBLOCK_SECTION_ID"]]["TEXT"]))?>
			</p>
		</td>
	</tr>
	<?} else {
		
		$renderImage100 = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 100, "height" => 50), BX_RESIZE_IMAGE_PROPORTIONAL);
		$renderImage200 = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], Array("width" => 200, "height" => 100), BX_RESIZE_IMAGE_PROPORTIONAL);
		?>
	
	<tr>
		<td class="first"><?=$date?><br/><?=$time?></td>
		<td><?=$town_name?></td>
		<td>
			<span class="for_name"><?=$arItem["NAME"]?></span>
			<span class="for_list"><img src="<?=$renderImage100["src"]?>" data-retinasrc="<?=$renderImage200['src']?>" alt="" class="ticket-popup-image"></span>
			<p class="descr">
			<?=TextFormat(strip_tags($arItem["PREVIEW_TEXT"]))?>
			</p>
		</td>
	</tr>
	
	<?}?>
	
	
	
	<?}?>
	
</table>