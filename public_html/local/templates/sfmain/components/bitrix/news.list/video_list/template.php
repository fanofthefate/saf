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

<div class="width_wrapper video_wrapper">
	<div class="swiper-container-wrapper">
		<div class="swiper-container" id="video_slider">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<?foreach($arResult["ITEMS"] as $arItem) 	
				{
					$video = $arItem["DISPLAY_PROPERTIES"]["VIDEO"]["VALUE"];
					$pos = strpos($video,"?v=");
					$code = substr($video,($pos+3));
					?>
				<div class="swiper-slide">
					<a href="<?=$video?>" data-sub-html="<h4><?=$arItem["NAME"]?></h4>" class="video-play pop">
						<img alt="" class="swiper-lazy swiper-lazy-loaded" src="http://img.youtube.com/vi/<?=$code?>/mqdefault.jpg">
					</a>
				</div>
				<?}?>
				
			</div>
			
		</div>
		
		<div class="swiper-button-prev video"></div>
		<div class="swiper-button-next video"></div>	
		
	</div>
</div>