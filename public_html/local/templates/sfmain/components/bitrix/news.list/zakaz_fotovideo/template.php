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
	<div class="center_wrapper">
		<div class="pinkttl">ФОТО/ВИДЕО</div>
	</div>

</div>

	<div class="swiper-container-wrapper nopad">
	<div class="swiper-container" id="foto_slider">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			
			<?
					
					
					
					
					foreach($arResult["ITEMS"] as $arItem) 	
					{
						$count = count($arItem["PROPERTIES"]["FOTOS"]["VALUE"]);
						$i=0;
						foreach($arItem["PROPERTIES"]["FOTOS"]["VALUE"] as $foto) 	
						{
							$id = $arItem["ID"];
							
							$imgpath = CFile::GetPath($foto);
							
							
							 
							
							
							//print("(".($count-1).",".($count-2).",".($count-3).") i=$i ".($i%5)."[".($count%5)."]<br/>");
							if ($i%5==0)
							{
								//print("4x4<br/>");
								
								$renderImage464 = CFile::ResizeImageGet($foto, Array("width" => 464, "height" => 332), BX_RESIZE_IMAGE_EXACT);
								?>
								<div class="swiper-slide">
									<div class="slide-2x2">
										<a href="<?=$imgpath?>" class="pop" data-sub-html="<h4></h4>" style="background: url(<?=$renderImage464['src']?>) 100% 100% no-repeat; background-size: cover;"></a>
									</div>
								</div>
								<?
								
							}
							else 
							{
								if (($i==($count-1)) && ($count%5)!=0  && ($count%5)!=1 && ($count%5)!=3 )
								{
	//								print("4X4<br/>");
									$renderImage464 = CFile::ResizeImageGet($foto, Array("width" => 464, "height" => 332), BX_RESIZE_IMAGE_EXACT);
									?>
									<div class="swiper-slide">
										<div class="slide-2x2">
											<a href="<?=$imgpath?>" class="pop" data-sub-html="<h4></h4>" style="background: url(<?=$renderImage464['src']?>) 100% 100% no-repeat; background-size: cover;"></a>
										</div>
									</div>
								<?
								}
								else 
								{
									if ($i%5==1 || $i%5==3)
									{
										//print("[");
										?><div class="swiper-slide"><div class="4x4wrapper"><?
									}
									
									//print("1x1 ");
									$renderImage232 = CFile::ResizeImageGet($foto, Array("width" => 232, "height" => 166), BX_RESIZE_IMAGE_EXACT);
									
									?>
										<div class="slide-1x1">
											<a href="<?=$imgpath?>" class="pop" data-sub-html="<h4></h4>" style="background: url(<?=$renderImage232['src']?>) 100% 100% no-repeat; background-size: cover;"></a>
										</div>										
									<?
									}

									if ($i%5==4|| $i%5==2)
									{
										//print("]<br/>");
										print("</div></div>");
									}

								}
						
							$i++;									
						}
					}
				
			?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>	
	</div>
</div>
