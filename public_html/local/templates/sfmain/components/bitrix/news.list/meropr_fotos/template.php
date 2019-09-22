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

//print_r($arResult["ITEMS"]);
?>

<div class="width_wrapper" id="for_mobile_title">
		<div class="swiper-container-wrapper">
					<div class="swiper-container events_slider">
						<div class="swiper-wrapper">
							
							
							<?foreach($arResult["ITEMS"] as $arItem) {
								
								foreach ($arItem["DISPLAY_PROPERTIES"]["FOTOS"]["VALUE"] as $imgID)
								{
									$renderImage160 = CFile::ResizeImageGet($imgID, Array("width" => 160, "height" => 90), BX_RESIZE_IMAGE_PROPORTIONAL);
									$imgPath = CFile::GetPath($imgID);?>
									<div class="swiper-slide"><a href="<?=$imgPath?>" class="big-slider-image pop"><img src="<?=$renderImage160["src"]?>"></a></div>
									<?
								}
							}?>
						</div>
					</div>
					
					<div class="swiper-button-prev evnt"></div>
					<div class="swiper-button-next evnt"></div>
				
				</div>
	</div>

