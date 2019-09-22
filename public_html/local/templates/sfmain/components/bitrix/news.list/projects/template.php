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

			<div class="year_navigator_pad2">
				<div class="year_navigator slider-pagination" data-slider="#blog_slider">
					<div class="val_wrapper">Биография&nbsp;</div>
					
					<?
					$i=1;
					$countYears = count($arResult["YEARS"]);
					foreach($arResult["YEARS"] as $year) {
					?>
						<div class="left_wrapper <?=$i==1 ? "selected" : ""?>"> </div>
						<div class="val_wrapper <?=$i==1 ? "selected" : ""?>"><a href="#" data-href="<?=$year?>"><?=$year?></a></div>
						<?if ($i<$countYears) {?>
						<div class="right_wrapper <?=$i==1 ? "selected" : ""?>"> </div>
						<?}?>
					<?
					$i++;
					}?>
				</div>	
			</div>
		
		
		
			<div class="swiper-container-wrapper">
				<div class="swiper-container fabout" id="blog_slider">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">	
						<?
						$i=0;
						foreach($arResult["ITEMS"] as $arItem) {
						
						$year = intval($arItem["NAME"]);
						if ($year==0) $year = date("Y");
						
						$renderImage353 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 353, "height" => 212), BX_RESIZE_IMAGE_PROPORTIONAL);
						$renderImage706 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 706, "height" => 414), BX_RESIZE_IMAGE_PROPORTIONAL);
						
						?>
						
						<div class="swiper-slide" data-hash="<?=$year?>">
							<div class="news_blog_item" >
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
									<img src="<?=$renderImage353['src']?>" data-retinasrc="<?=$renderImage706['src']?>">
								</a>
								
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="for_name">
									<?=$arItem["NAME"]?>
								</a>
								<p><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="for_name2"><?=strip_tags($arItem["DETAIL_TEXT"])?></a></p>
								
							</div>
						</div>
						<?$i++;
						}?>
						
					</div>
				</div>
				
				<div class="swiper-button-prev nb"></div>
				<div class="swiper-button-next nb"></div>
			</div>
			
	<?/*
			

		
			<div class="swiper-container-wrapper">
				<div class="swiper-container" id="blog_slider">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">	
						
						
						<?
						$i=0;
						foreach($arResult["ITEMS"] as $arItem):
						
						$year = intval($arItem["NAME"]);
						if ($year==0) $year = date("Y");
						
						$renderImage353 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 353, "height" => 212), BX_RESIZE_IMAGE_PROPORTIONAL);
						$renderImage706 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 706, "height" => 414), BX_RESIZE_IMAGE_PROPORTIONAL);
						
						?>
						
						<div class="swiper-slide">
							<div class="news_blog_item" data-hash="<?=$year?>">
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
									<img src="<?=$renderImage353['src']?>" data-retinasrc="<?=$renderImage706['src']?>">
								</a>
								
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="for_name">
									<?=$arItem["NAME"]?> <?=$i?>
								</a>
								
								<?=substr($arItem["DETAIL_TEXT"],0,200)."..."?>
								
							</div>
						</div>
						<?$i++;
						endforeach;?>
						
					</div>
				</div>
				
				<div class="swiper-button-prev nb"></div>
				<div class="swiper-button-next nb"></div>
			</div>
			
			*/?>
