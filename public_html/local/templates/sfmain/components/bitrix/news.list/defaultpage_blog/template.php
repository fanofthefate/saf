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
<div class="center_wrapper">
	<a href="/news/" class="<?=$arParams["TITLECLASS"]!="" ? $arParams["TITLECLASS"] : "purplettl"?>">НОВОСТИ / БЛОГ</a>
</div>


<?=$arParams["NEEDWRAPPER"]=="Y" ? "<div class=\"width_wrapper\">" : ""?>
	<div class="swiper-container-wrapper">
		<div class="swiper-container" id="blog_slider">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
	$renderImage353 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 353, "height" => 212), BX_RESIZE_IMAGE_EXACT);
	$renderImage706 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 706, "height" => 414), BX_RESIZE_IMAGE_EXACT);
	?>
	
	<div class="swiper-slide">
		<div class="news_blog_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="calend_wrapper"><a class="calend" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=myDate($arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"])?></a></div>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<img src="<?=$renderImage353['src']?>" data-retinasrc="<?=$renderImage706['src']?>">
			</a>
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="for_name">
				<?=$arItem["NAME"]?>
			</a>
			<p>
				<?=$arItem["PREVIEW_TEXT"]!="" ? strip_tags($arItem["PREVIEW_TEXT"]) : substr(strip_tags($arItem["DETAIL_TEXT"]),0,200)."..."?>
			</p>
			<a class="more" href="<?=$arItem["DETAIL_PAGE_URL"]?>">ПОДРОБНЕЕ..</a>
		</div>
	</div>
	
<?endforeach;?>

								</div>
							</div>
							
							<div class="swiper-button-prev nb"></div>
							<div class="swiper-button-next nb"></div>
	</div>
<?=$arParams["NEEDWRAPPER"]=="Y" ? "</div>" : ""?>						