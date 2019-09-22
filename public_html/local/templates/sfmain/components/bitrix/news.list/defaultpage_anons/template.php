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
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
	$lnk = $arItem["DISPLAY_PROPERTIES"]["LINK"]["DISPLAY_VALUE"]!="" ? $arItem["DISPLAY_PROPERTIES"]["LINK"]["DISPLAY_VALUE"] : "/";
	?>
	
	<div class="width_wrapper last_action_wrapper">
				<div class="last_action">
					<div class="for_last_action_img"><a class="more" href="<?=$lnk?>">ПОДРОБНЕЕ..</a>
						<a href="<?=$lnk?>"><img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"></a>
					</div>
					<div class="for_dates">
						<?if ($arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"]!="") {?>
							<span class="ico2"><?=$arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"]?></span>
						<?}?>
						<?if ($arItem["DISPLAY_PROPERTIES"]["TIME"]["DISPLAY_VALUE"]!="") {?>
							<span class="ico3"><?=$arItem["DISPLAY_PROPERTIES"]["TIME"]["DISPLAY_VALUE"]?></span>
						<?}?>
						<?if ($arItem["DISPLAY_PROPERTIES"]["PLACE"]["DISPLAY_VALUE"]!="") {?>
							<span class="ico1"><?=$arItem["DISPLAY_PROPERTIES"]["PLACE"]["DISPLAY_VALUE"]?></span>
						<?}?>
					</div>
					
					<a class="pink_link" href="<?=$lnk?>"><?=$arItem["NAME"]?></a>
					
					<p class="txt">
						<?echo $arItem["DETAIL_TEXT"];?>
					</p>
					
					
				</div>
			</div>
	
	<?/*<div class="width_wrapper last_action_wrapper">
		<div class="last_action" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="for_last_action_img">
				<a class="more" href="<?=$lnk?>">ПОДРОБНЕЕ..</a><a href="<?=$lnk?>"><img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"></a>
			
				<div class="for_dates">
					<?if ($arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"]!="") {?>
						<span class="ico2"><?=$arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"]?></span>
					<?}?>
					<?if ($arItem["DISPLAY_PROPERTIES"]["TIME"]["DISPLAY_VALUE"]!="") {?>
						<span class="ico3"><?=$arItem["DISPLAY_PROPERTIES"]["TIME"]["DISPLAY_VALUE"]?></span>
					<?}?>
					<?if ($arItem["DISPLAY_PROPERTIES"]["PLACE"]["DISPLAY_VALUE"]!="") {?>
						<span class="ico1"><?=$arItem["DISPLAY_PROPERTIES"]["PLACE"]["DISPLAY_VALUE"]?></span>
					<?}?>
				</div>
				<a class="pink_link" href="<?=$lnk?>"><?=$arItem["NAME"]?></a>
				
				<p class="txt">
					<?echo $arItem["DETAIL_TEXT"];?>
				</p>
			</div>
		</div>
	</div>*/?>

<?endforeach;?>
