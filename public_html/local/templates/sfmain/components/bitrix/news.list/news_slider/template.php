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


<div class="triangle_block">
	<div class="width_wrapper">
		
		<div class="swiper-container-wrapper">
			<div class="swiper-container" id="news_slider">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
				
					<?
					foreach($arResult["ITEMS"] as $arItem):?>
					<?
					
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

					$renderImage250 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 261, "height" => 154), BX_RESIZE_IMAGE_EXACT);
					$renderImage500 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 522, "height" => 308), BX_RESIZE_IMAGE_EXACT);
					
					?>
				
					<div class="swiper-slide">
							<div class="news_list_item">
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="for_nn_img"><img src="<?=$renderImage250['src']?>" data-retinasrc="<?=$renderImage250['src']?>"></a>
								
								<div class="txt_wrapper">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="ttl"><?=myDate($arItem["DISPLAY_PROPERTIES"]["DATE"]["DISPLAY_VALUE"])?></a>
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="ttl2"><?=$arItem["NAME"]?></a><br/>
									<div class="forj"><?=$arItem["DETAIL_TEXT"]?></div>
								</div>
								
								<?/*<a class="more" href="<?=$arItem["DETAIL_PAGE_URL"]?>">ПОДРОБНЕЕ..</a>*/?>
							</div>
					</div>
					
					<?endforeach;?>
					
				</div>
			</div>
			
			<div class="swiper-button-prev nn"></div>
			<div class="swiper-button-next nn"></div>
		
		</div>
	</div>
</div>


