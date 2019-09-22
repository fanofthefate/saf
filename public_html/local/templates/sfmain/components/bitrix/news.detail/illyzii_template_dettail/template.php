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
$SMALLCOUNT = 1024;
?>
<div class="news-detail-illyzii" itemscope itemtype="http://schema.org/BlogPosting">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			itemprop="thumbnailUrl"
			class="detail_picture_illyzii"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3 class="h3_illyzii" itemprop="name"><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<div itemprop="articleBody"><?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
	<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
		<?endif?>
	</div>
	<? //echo '<pre>'; print_r($arResult); echo '</pre>';?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>

		<div class="news-detail-share">
			<noindex>
			<?
		/*$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
*/?>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,twitter,viber,whatsapp,skype,telegram" data-counter=""></div>

			</noindex>
		</div>
		<?
	}
	?>
</div>
</div>
</div>
</div>
	<div class="project_foto_video">
		<h2 class="fv">ФОТО-ВИДЕО</h2>
		
		<?if (count($arResult["PROPERTIES"]["FOTOS"]["VALUE"])>0) {?>
		
			<div class="width_wrapper video_wrapper <?=(count($arResult["DISPLAY_PROPERTIES"]["VIDEOS"]["VALUE"])==0) ? "padbtm" : ""?>">
				<div class="swiper-container-wrapper">
					<div class="swiper-container" id="foto_slider2_il">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">

							<?foreach ($arResult["IMAGES"] as $itm) {
								?>
						
								<div class="swiper-slide">
									<a href="<?=$itm["HREF"]?>" data-sub-html="<h4><?=$itm["DESCRIPTION"]?></h4>" class="pop"><img class="for_iload" src="<?=$itm["PREVIEW1"]?>" <?=$itm["PREVIEW2"]!="" ? "data-retinasrc=\"".$itm["PREVIEW2"]."\"" : ""?>></a>
								</div>
								
							<?}?>
							
							
						</div>
					</div>
					<div class="swiper-button-prev fs2"></div>
					<div class="swiper-button-next fs2"></div>	
				</div>
			</div>
			
		
		
		<?}?>
		
		<?if (count($arResult["DISPLAY_PROPERTIES"]["VIDEOS"]["VALUE"])>0) {?>
		<div class="width_wrapper video_wrapper">
			<div class="swiper-container-wrapper">
				<div class="swiper-container" id="video_slider_il">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
					
						
						<?foreach ($arResult["DISPLAY_PROPERTIES"]["VIDEOS"]["VALUE"] as $video) {
							$pos = strpos($video,"?v=");
							$code = substr($video,($pos+3));
							
						?>
						<div class="swiper-slide">
							<a href="<?=$video?>" data-sub-html="<h4><?=$arResult["NAME"]?></h4>" class="video-play pop">
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
		<?}?>
	</div>
</div>
