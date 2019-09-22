<?
include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");?>

<?
$obCache = new CPageCache;

$lifeTime = 3*60;# время кеширования в секундах
 
# формируем ID кеша в зависимости от всех параметров 
# которые могут повлиять на результирующий HTML
$cacheID = $APPLICATION->GetCurPage();
 
# инициализируем буферизирование вывода
if($obCache->StartDataCache($lifeTime, $cacheID, "/")){
?>

<?
global $resultArr;
$resultArr = array();
GetImages(7); //картинки иллюзий 
GetImages(3); //картинки проектов

$years = array_keys($resultArr);
$years_count = count($years);
$all_count = AllCount($resultArr);
?>				

<div class="width_wrapper">
					<div class="center_wrapper">
						<div class="pinkttl">ФОТО/ВИДЕО</div>
					</div>
					
					<!--
					<div class="year_navigator slider-pagination" data-slider="#foto_slider">
						<div class="val_wrapper">Биография&nbsp;</div>
						
						<?
						$i=1;
						foreach ($years as $year) {
							?>
							<div class="left_wrapper"> </div>
							<div class="val_wrapper"><a href="#" data-href="<?=$year?>"><?=$year?></a></div>
							
							<?if ($i<$years_count) {?><div class="right_wrapper"> </div><?}
						$i++;
						}?>
					</div>
					-->
				</div>
					
					<div class="swiper-container-wrapper nopad">
					<div class="swiper-container" id="foto_slider">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							
							<?
								$coeff = 0.5;
								$i=0;
								foreach($years as $year)
								{
									foreach($resultArr[$year] as $imgArr)
									{
										$img = $imgArr["foto"];
										$desc = $imgArr["description"];
										if ($i%3==1) 
										{
											if ($i==($count-1))
											{//заменяем на двойной
											
											$imgpath = CFile::GetPath($img);
											$renderImage928 = CFile::ResizeImageGet($img, Array("width" => 928*$coeff, "height" => 664*$coeff), BX_RESIZE_IMAGE_PROPORTIONAL);
											
											?>
											<div class="swiper-slide" data-hash="<?=$year?>">
												<div class="slide-2x2">
													<a href="<?=$imgpath?>" class="pop" data-sub-html="<h4><?=$desc?></h4>" style="background-image: url('<?=$renderImage928['src']?>')) 100% 100% no-repeat;"></a>
												</div>
											</div>
											<?
											}
											else 
											{//начало
											$imgpath = CFile::GetPath($img);
											$renderImage464 = CFile::ResizeImageGet($img, Array("width" => 464*$coeff, "height" => 332*$coeff), BX_RESIZE_IMAGE_PROPORTIONAL);
											
											?>
											<div class="swiper-slide" data-hash="<?=$year?>">
												<div class="slide-1x1">
													<a href="<?=$imgpath?>" class="pop" data-sub-html="<h4><?=$desc?></h4>" style="background: url(<?=$renderImage464['src']?>) 100% 100% no-repeat; background-size: cover;"></a>
												</div>										
											<?
											}
										}
										
										if ($i%3==2) 
										{//конец
											$imgpath = CFile::GetPath($img);
											$renderImage464 = CFile::ResizeImageGet($img, Array("width" => 464*$coeff, "height" => 332*$coeff), BX_RESIZE_IMAGE_PROPORTIONAL);
											?>
												<div class="slide-1x1">
														<a href="<?=$imgpath?>" class="pop" data-sub-html="<h4><?=$desc?></h4>"  style="background: url(<?=$renderImage464['src']?>) 100% 100% no-repeat; background-size: cover;"></a>
												</div>		
											</div>
											<?
										}
										
										//print("конец");
										if ($i%3==0 && ($i%6)==0)
										{//4x4
											$imgpath = CFile::GetPath($img);
											$renderImage464 = CFile::ResizeImageGet($img, Array("width" => 868*$coeff, "height" => 664*$coeff), BX_RESIZE_IMAGE_PROPORTIONAL);
											
										?>
											<div class="swiper-slide" data-hash="<?=$year?>">
												<div class="slide-2x2">
													<a href="<?=$imgpath?>" class="pop" data-sub-html="<h4><?=$desc?></h4>" style="background: url(<?=$renderImage464['src']?>) 100% 100% no-repeat; background-size: cover;"></a>
												</div>
											</div>
										<?
										}
										
										if ($i%3==0 && ($i%6)==3) 
										{//4x2
											$imgpath = CFile::GetPath($img);
											$renderImage464 = CFile::ResizeImageGet($img, Array("width" => 464*$coeff, "height" => 664*$coeff), BX_RESIZE_IMAGE_PROPORTIONAL);
											?>
											<div class="swiper-slide" data-hash="<?=$year?>">
												<div class="slide-1x2">
													<a href="<?=$imgpath?>" class="pop" data-sub-html="<h4><?=$desc?></h4>" style="background: url(<?=$renderImage464['src']?>) 100% 100% no-repeat; background-size: cover;"></a>
												</div>
											</div>
											<?
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
				
<?
	$obCache->EndDataCache(); 
}
?>