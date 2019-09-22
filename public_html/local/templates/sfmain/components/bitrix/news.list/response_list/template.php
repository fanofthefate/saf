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
		<div class="pinkttl">ОТЗЫВЫ</div>
	</div>
	
	
	<div class="width_wrapper response_wrapper">
		<div class="swiper-container-wrapper">
			<div class="swiper-container" id="response_slider">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
				
					<?foreach($arResult["ITEMS"] as $arItem):
						
						$year = intval($arItem["NAME"]);
						if ($year==0) $year = date("Y");
						
						$renderImage223 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 223, "height" => 115), BX_RESIZE_IMAGE_PROPORTIONAL);
						$renderImage446 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 446, "height" => 230), BX_RESIZE_IMAGE_PROPORTIONAL);
						
					?>
						
				
					<div class="swiper-slide">
						<a href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" class="pop">
							<img alt="" class="swiper-lazy swiper-lazy-loaded" src="<?=$renderImage223["src"]?>" data-retinasrc="<?=$renderImage446['src']?>">
						</a>
					</div>
					
						<?endforeach;?>
				
				</div>
			</div>
			<div class="swiper-button-prev response"></div>
			<div class="swiper-button-next response"></div>	
		</div>
	</div>
