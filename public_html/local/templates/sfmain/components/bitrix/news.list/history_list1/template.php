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
	
	<?/*<div class="pad_wrapper">
		<div class="year_navigator slider-pagination" data-slider="#foto_slider">
			<div class="val_wrapper">Биография&nbsp;</div>
			
			<?
			$i=1;
			foreach ($arResult["YEARS"] as $year) {
				?>
				<div class="left_wrapper"> </div>
				<div class="val_wrapper"><a href="#" data-href="<?=$year?>"><?=$year?></a></div>
				
				<?if ($i<$years_count) {?><div class="right_wrapper"> </div><?}
			$i++;
			}?>
		</div>
	</div>*/?>
</div>

<?
/*4 [1 1] [1 1]
$count=11;
for ($i=0;$i<$count;$i++)
{
	//print("(".($count-1).",".($count-2).",".($count-3).") i=$i ".($i%5)."[".($count%5)."]<br/>");
	//print("(".($count%5).")<br/>");
	if ($i%5==0)
	{
		print("4x4<br/>");
	}
	else 
	{
		//if (($i==($count-1) || $i==($count-2) || $i==($count-3)) && ($count%5)!=0  && ($count%5)!=1)
		if (($i==($count-1)) && ($count%5)!=0  && ($count%5)!=1 && ($count%5)!=3 )
		{
			print("4X4<br/>");
		}
		else 
		{
			if ($i%5==1 || $i%5==3)
			{
				print("[");
			}
			
			print("1x1 ");
			
			if ($i%5==4|| $i%5==2)
			{
				print("]<br/>");
			}

		}
		
		
	}
}

?>

<?/*
4 [1 1 1 1] 4 [1 1 1 1]
$count=15;
for ($i=0;$i<$count;$i++)
{
	//print("(".($count-1).",".($count-2).",".($count-3).") i=$i ".($i%5)."[".($count%5)."]<br/>");
	if ($i%5==0)
	{
		print("4x4<br/>");
	}
	else 
	{
		if (($i==($count-1) || $i==($count-2) || $i==($count-3)) && ($count%5)!=0  && ($count%5)!=1)
		{
			print("4X4<br/>");
		}
		else 
		{
			if ($i%5==1)
			{
				print("[");
			}
			
			print("1x1 ");
			
			if ($i%5==4)
			{
				print("]<br/>");
			}

		}
		
		
	}
}
die();
*/
?>
	<div class="swiper-container-wrapper nopad">
	<div class="swiper-container" id="foto_slider">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">
			
			<?
					$count = count($arResult["ITEMS"]);
					$i=0;
					foreach($arResult["ITEMS"] as $arItem) 	
					{
						$id = $arItem["ID"];
						$dateArr = explode('.',$arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"]);
						$year = intval($dateArr[2]);
						$img = $arItem["DETAIL_PICTURE"]["ID"];
						$imgpath = CFile::GetPath($img);
						
						
						
						
						//print("(".($count-1).",".($count-2).",".($count-3).") i=$i ".($i%5)."[".($count%5)."]<br/>");
						if ($i%5==0)
						{
							//print("4x4<br/>");
							
							$renderImage464 = CFile::ResizeImageGet($img, Array("width" => 464, "height" => 332), BX_RESIZE_IMAGE_EXACT);
							?>
							<div class="swiper-slide" data-hash="<?=$year?>">
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
								$imgpath = CFile::GetPath($img);
								$renderImage464 = CFile::ResizeImageGet($img, Array("width" => 464, "height" => 332), BX_RESIZE_IMAGE_EXACT);
								?>
								<div class="swiper-slide" data-hash="<?=$year?>">
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
									?><div class="swiper-slide" data-hash="<?=$year?>"><div class="4x4wrapper"><?
								}
								
								//print("1x1 ");
								$imgpath = CFile::GetPath($img);
								$renderImage232 = CFile::ResizeImageGet($img, Array("width" => 232, "height" => 166), BX_RESIZE_IMAGE_EXACT);
								
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
				
			?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>	
	</div>
</div>
