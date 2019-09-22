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

<?//print_r($arResult["PROJECTS"]);?>

<?//print_r($arResult["RESPONCE"])?>

<style>
.projects-cat .read-more-container {
	-webkit-clip-path: polygon(0 0, 100% 0, 100% 22%, 8% 100%, 0 22%);
	clip-path: polygon(0 0, 100% 0, 100% 22%, 8% 100%, 0 22%);
	clip-path: url("#read-more-clip");
}
</style>

<svg class="clip-svg">
	<defs>
		<clipPath id="read-more-clip" clipPathUnits="objectBoundingBox">
			<polygon points="0 0, 1 0, 1 0.22, 0.08 1, 0 0.22" />
		</clipPath>
	</defs>

</svg>

<div class="lendos-header">
	
		<a class="mobile-logo mobile" href="/">
				<img src="<?=SITE_TEMPLATE_PATH?>/files/images/logo.png" alt="Братья Сафроновы">
		</a>
		
	
		<div class="background-container">
			<div class="background" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);">
				<svg class="blur-ie" width="1910.7692307692305" height="828">
					<defs>
						<filter id="blur">
							<feGaussianBlur stdDeviation="8"></feGaussianBlur>
						</filter>
					</defs>
					<image xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="1910.7692307692305" height="828" filter="url(#blur)"></image>
				</svg>
			</div>
		</div>
	
		<div class="width_wrapper">
		
					<div class="top_gradient"></div>
			
					<div class="secondary-menu">
						<ul>
							<?foreach ($arResult["PROJECTS"] as $project) {
								if ($project["ID"]==$arResult["ID"])
									$sel = "class=\"selected\"";
								else 
									$sel = "";
								?>
								<li <?=$sel?>><a href="<?=$project["DETAIL_PAGE_URL"]?>"><?=$project["NAME"]?></a></li>
								
							<?}?>
						</ul>
					</div>
					<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
		</div>
	</div>
	
	<div class="project_info"> 
		<div class="width_wrapper">
			<h2 class="pi"><?=$arResult["NAME"]?></h2>
			
			<?=$arResult["DETAIL_TEXT"]?>
			<p>&nbsp;</p>
			
			
			<!--
			<script type="text/javascript">(function() {
			  if (window.pluso)if (typeof window.pluso.start == "function") return;
			  if (window.ifpluso==undefined) { window.ifpluso = 1;
				var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
				s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
				s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
				var h=d[g]('body')[0];
				h.appendChild(s);
			  }})();</script>
			  
			<div class="social">
				Поделиться <div class="pluso" data-background="transparent" data-options="medium,square,line,horizontal,nocounter,theme=01" data-services="vkontakte,facebook,odnoklassniki" data-url="http:///mypage" data-title="название страницы" data-description="Описание страницы"></div>
			</div>
			-->
		</div>
		
	</div>
	
	
	<div class="project_foto_video">
		<h2 class="fv">ФОТО-ВИДЕО</h2>
		
		<?if (count($arResult["DISPLAY_PROPERTIES"]["FOTOS"]["VALUE"])>0) {?>
		
			<div class="width_wrapper video_wrapper <?=(count($arResult["DISPLAY_PROPERTIES"]["VIDEOS"]["VALUE"])==0) ? "padbtm" : ""?>">
				<div class="swiper-container-wrapper">
					<div class="swiper-container" id="foto_slider2">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
						
							<?foreach ($arResult["DISPLAY_PROPERTIES"]["FOTOS"]["VALUE"] as $foto) {
								$renderImage252 = CFile::ResizeImageGet($foto, Array("width" => 252, "height" => 142), BX_RESIZE_IMAGE_EXACT );
								$renderImage504 = CFile::ResizeImageGet($foto, Array("width" => 504, "height" => 284), BX_RESIZE_IMAGE_EXACT );
								$img = CFile::GetPath($foto);
								
								$rsFile = CFile::GetByID($foto);
								$arFile = $rsFile->Fetch();
								$desc = $arFile["DESCRIPTION"];
								
								?>
						
								<div class="swiper-slide">
									<a href="<?=$img?>" data-sub-html="<h4><?=$desc?></h4>" class="pop">
										<img alt="" class="swiper-lazy swiper-lazy-loaded" src="<?=$renderImage252['src']?>" data-retinasrc="<?=$renderImage504['src']?>">
									</a>
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
				<div class="swiper-container" id="video_slider">
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
		
		<?
		//отзывы
		if (count($arResult["RESPONSE"])>0) {?>
		
		
		<div class="feedback">
			<div class="width_wrapper">
				<div class="center_wrapper">
					<div class="pinkttl">ОТЗЫВЫ</div>
				</div>
				
				
				<div class="width_wrapper response_wrapper">
					<div class="swiper-container-wrapper">
						<div class="swiper-container" id="response_slider">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								
								<?foreach ($arResult["RESPONSE"] as $response)
								{
								$renderImage223 = CFile::ResizeImageGet($response["DETAIL_PICTURE"], Array("width" => 223, "height" => 115), BX_RESIZE_IMAGE_EXACT );
								$renderImage446 = CFile::ResizeImageGet($response["DETAIL_PICTURE"], Array("width" => 446, "height" => 230), BX_RESIZE_IMAGE_EXACT );
								$img = CFile::GetPath($response["DETAIL_PICTURE"]);
								?>

								<div class="swiper-slide">
									<a href="<?=$img?>" class="pop">
										<img alt="" class="swiper-lazy swiper-lazy-loaded"  src="<?=$renderImage223['src']?>" data-retinasrc="<?=$renderImage446['src']?>">
									</a>
								</div>
								<?}?>
								
							</div>
						</div>
						<div class="swiper-button-prev response"></div>
						<div class="swiper-button-next response"></div>	
					</div>
				</div>
				
				
				
			</div>
		</div>
		<?}?>
		
		
		
		<?
		//Новости проекта
		if (count($arResult["RESPONSE"])>0) {?>
		
		<div class="news_list">
			<h2 class="pi">Новости проекта</h2>
	
			<div class="width_wrapper">
			<?
			global $arrFltr;
			$arrFltr = array("ID"=>$arResult["NEWS"]);
			
			
			$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"news_list", 
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "N",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_TEXT",
					2 => "PREVIEW_PICTURE",
					3 => "DETAIL_TEXT",
					4 => "DETAIL_PICTURE",
					5 => "",
				),
				"FILTER_NAME" => "arrFltr",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => $_REQUEST["ID"],
				"IBLOCK_TYPE" => "news",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "20",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "DATE",
					2 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "PROPERTY_DATE",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"COMPONENT_TEMPLATE" => "news_list"
			),
			false
		);?>
			
			
		</div>
		<?}?>
		
	</div>