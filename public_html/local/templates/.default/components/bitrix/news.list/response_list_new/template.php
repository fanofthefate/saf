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


<div class="swiper_padding_wrapper">
	<div class="swiper-container gallery-foto" id="gallery-foto">
		<div class="swiper-wrapper">
		
			<?foreach($arResult["ITEMS"] as $arItem):
				$renderImage224 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 224, "height" => 115), BX_RESIZE_IMAGE_PROPORTIONAL);
				
			?>
 		
			<div class="swiper-slide"><a class="for_popup" href="<?=CFile::Getpath($arItem["DETAIL_PICTURE"]["ID"])?>" data-fancybox="responses" data-caption="<?=$arItem["NAME"]?>"><img src="<?=$renderImage224["src"]?>"></a></div>
			
			
			<?endforeach;?>
			
		</div>
	</div>
	
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
</div>
