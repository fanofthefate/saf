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


<div class="width_wrapper">
	<div class="swiper-container-wrapper">
		<div class="swiper-container" id="illusion_slider">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				
				$renderImage359 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 359, "height" => 201), BX_RESIZE_IMAGE_EXACT);
				$renderImage718 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 718, "height" => 402), BX_RESIZE_IMAGE_EXACT);
				?>
				<div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a class="prj_item" href="/illyuzii/#i<?=$arItem["ID"]?>"><div class="intro"><div class="title"><?=$arItem["NAME"]?></div></div><img src="<?=$renderImage359["src"]?>" data-retinasrc="<?=$renderImage718['src']?>"></a>
				</div>
				
				<?endforeach;?>
				
			</div>
		</div>
		
		<div class="swiper-button-prev il"></div>
		<div class="swiper-button-next il"></div>
	
	</div>
</div>
