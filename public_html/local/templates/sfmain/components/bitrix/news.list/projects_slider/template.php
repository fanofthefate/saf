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
		<div class="swiper-container" id="projects_slider">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				
				$renderImage543 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 543, "height" => 245), BX_RESIZE_IMAGE_PROPORTIONAL);
				$renderImage1086 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 1086, "height" => 490), BX_RESIZE_IMAGE_PROPORTIONAL);
				?>
				<div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a class="prj_item" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$renderImage543["src"]?>" data-retinasrc="<?=$renderImage1086['src']?>"></a>
				</div>
				
				<?endforeach;?>
			</div>
		</div>
		
		<div class="swiper-button-prev ps"></div>
		<div class="swiper-button-next ps"></div>
	
	</div>
</div>