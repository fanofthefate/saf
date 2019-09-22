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

<div class="press_line">
			<a class="mobile-logo mobile" href="/">
				<img src="<?=SITE_TEMPLATE_PATH?>/files/images/logo.png" alt="сафроновы">
			</a>
			<div class="width_wrapper toppad">
				<div class="top_gradient"></div>
				<div class="year_navigator_pad">
					<div class="year_navigator slider-pagination" data-slider="#press_slider">
						<div class="val_wrapper">Пресса&nbsp;</div>
						
						
						<?
						$i=1;
						$countYears = count($arResult["YEARS"]);
						foreach($arResult["YEARS"] as $year) {
						?>
							<div class="left_wrapper <?=($i==1) ? "selected" : ""?>"> </div>
							<div class="val_wrapper <?=($i==1) ? "selected" : ""?>"><a href="#" data-href="<?=$year?>"><?=$year?></a></div>
							<?if ($i<$countYears) {?>
							<div class="right_wrapper <?=($i==1) ? "selected" : ""?>"> </div>
							<?}?>
						<?
						$i++;
						}?>
					</div>
				</div>
				
				
				<div class="swiper-container-wrapper">
					<div class="swiper-container" id="press_slider">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">	
							
							
		<?
		$i=0;
		foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$id = $arItem["ID"];
		
		$dateArr = explode('.',$arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"]);
		$year = intval($dateArr[2]);
		
		
		$renderImage297 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 281, "height" => 360), BX_RESIZE_IMAGE_EXACT);
		$renderImage594 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 562, "height" => 720), BX_RESIZE_IMAGE_EXACT);
		$img = CFile::GetPath($arItem["DETAIL_PICTURE"]["ID"]);
		
		
		if ($i==0)
		{
			$first_name=$arItem["NAME"];
			$first_img = $img;
			$first_date = $arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"];
			$first_year = $year;
			$first_link = $arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"];
		}
		
		$link = trim($arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"])!="" ? trim($arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"]) : "-" ;
		
		//$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		//$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
							<div class="swiper-slide" data-hash="<?=$year?>">
								<div class="press_item">
									<a href="#" data-img="<?=$img?>"  class="<?=$i==0 ? "selected" : ""?>" data-link="<?=$link?>">
										<img class="swiper-lazy swiper-lazy-loaded" src="<?=$renderImage297['src']?>"  data-retinasrc="<?=$renderImage594['src']?>">>
										<span><?=$arItem["NAME"]?></span>
									</a>
									<p><?=$arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"]?></p>
									
								</div>
							</div>
		<?
		
			foreach(array_reverse($arItem["PROPERTIES"]["FOTOS"]["VALUE"]) as $foto) {
				
				$img = CFile::GetPath($foto);
				$renderImage297 = CFile::ResizeImageGet($foto, Array("width" => 281, "height" => 360), BX_RESIZE_IMAGE_EXACT);
				$renderImage594 = CFile::ResizeImageGet($foto, Array("width" => 562, "height" => 720), BX_RESIZE_IMAGE_EXACT);
				?>
					<div class="swiper-slide" data-hash="<?=$year?>">
						<div class="press_item">
							<a href="#" data-img="<?=$img?>"  class="<?=$i==0 ? "selected" : ""?>" data-link="<?=$link?>">
								<img class="swiper-lazy swiper-lazy-loaded" src="<?=$renderImage297['src']?>"  data-retinasrc="<?=$renderImage594['src']?>">>
								<span><?=$arItem["NAME"]?></span>
							</a>
							<p><?=$arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"]?></p>
							
						</div>
					</div>
			
			<?
			$i++;
			}
		
		
		$i++;
		endforeach;?>
							
						</div>
					</div>
					
					<div class="swiper-button-prev pr"></div>
					<div class="swiper-button-next pr"></div>
				</div>

			</div>
	</div>
	
	<div class="width_wrapper">
		<div class="press_detail">
			<h1><?=$first_name?></h1>
			<div class="for_date"><?=$first_date?>
				<span style="<?=($first_link!="") ? "display: block;" : "display: none;"?>" class="for-link1">Источник: <a href="<?=$first_link?>" class="for-link2"><?=$first_link?></a></span>
			</div>
			<img src="<?=$first_img?>">
		</div>
		<div class="totop">
			<a href="#">НАВЕРХ</a>
		</div>
	</div>