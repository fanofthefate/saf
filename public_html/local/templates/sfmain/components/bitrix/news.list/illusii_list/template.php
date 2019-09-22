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

/*нужно ли загружать ещё новости*/
$start_page = $arResult[NAV_RESULT]->nStartPage;
$end_page = $arResult[NAV_RESULT]->nEndPage;
$page = $_REQUEST["PAGEN_1"]=="" ? 1 : intval($_REQUEST["PAGEN_1"]);
//echo '<pre>'; print_r($_REQUEST); echo '</pre>'; 
?>


		<?
		$i=0;
		foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$id = $arItem["ID"];
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		$renderImage446 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 446, "height" => 250), BX_RESIZE_IMAGE_EXACT);
		
		
		if ($i==0) {
					
			if ($page<$end_page)//есть ещё страницы для загрузки
			{?>
				<script>
					next_page = <?=($page+1)?>;
				</script>
			<?}
			else 
			{?>
				<script>
				$( document ).ready(function() {
					$("#load_more_illuzii").each(function() {
					  $(this).css('display', 'none');
					});
				});

				</script>
			<?}
		}
		
		
		?>
		
			<div class="iitem">
				<div class="for_img desktop">
					<?if (intval($arItem["DETAIL_PICTURE"]["ID"]>0)) {?>
					<a  id="i<?=$arItem["ID"]?>i" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" class="big-slider-image pop"><img src="<?=$renderImage446['src']?>"></a>
					<?}?>
					<?// echo '<pre>'; print_r($arResult[$id]); echo '</pre>';?>
					<div class="small_list">
						<?if ($arResult[$id]["MEDIA_COUT"]<=$SMALLCOUNT) {
							foreach ($arResult[$id]["VIDEOS"] as $itm)
							{
							?>
							<a href="<?=$itm["HREF"]?>" data-sub-html="<h4><?=$arItem["NAME"]?></h4>" class="video-play big-slider-image pop"><img src="<?=$itm["PREVIEW1"]?>" class="for_iload" <?=$itm["PREVIEW2"]!="" ? "data-retinasrc=\"".$itm["PREVIEW2"]."\"" : ""?>></a>
							<?
							}
							foreach ($arResult[$id]["IMAGES"] as $itm)
							{
							?>
							<a href="<?=$itm["HREF"]?>" data-sub-html="<h4><?=$itm["DESCRIPTION"]?></h4>" class="big-slider-image pop"><img class="for_iload" src="<?=$itm["PREVIEW1"]?>" <?=$itm["PREVIEW2"]!="" ? "data-retinasrc=\"".$itm["PREVIEW2"]."\"" : ""?>></a>
							<?
							}
							
						}?>
					</div>
				</div>
				
				<?/*<span class="dt"><?=$arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"]?></span>*/?>
				<h3><?=$arItem["NAME"]?></h3>
				<?if ($arItem["PREVIEW_TEXT"]!="") {?>
					<span class="likeh4"><?=$arItem["PREVIEW_TEXT"]?> </span>
				<?}?>
				<?=$arItem["DETAIL_TEXT"]?>	
				
				
				
				<div class="for_img mobile">
					<?if (intval($arItem["DETAIL_PICTURE"]["ID"]>0)) {?>
					<a  id="i<?=$arItem["ID"]?>i2" href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" class="big-slider-image pop"><img src="<?=$renderImage446['src']?>"></a>
					<?}?>
					<div class="small_list">
						<?if ($arResult[$id]["MEDIA_COUT"]<=$SMALLCOUNT) {
							foreach ($arResult[$id]["VIDEOS"] as $itm)
							{
							?>
							<a href="<?=$itm["HREF"]?>" data-sub-html="<h4><?=$arItem["NAME"]?></h4>" class="video-play big-slider-image pop"><img src="<?=$itm["PREVIEW1"]?>" class="for_iload" <?=$itm["PREVIEW2"]!="" ? "data-retinasrc=\"".$itm["PREVIEW2"]."\"" : ""?>></a>
							<?
							}
							foreach ($arResult[$id]["IMAGES"] as $itm)
							{
							?>
							<a href="<?=$itm["HREF"]?>" data-sub-html="<h4><?=$itm["DESCRIPTION"]?></h4>" class="big-slider-image pop"><img class="for_iload" src="<?=$itm["PREVIEW1"]?>" <?=$itm["PREVIEW2"]!="" ? "data-retinasrc=\"".$itm["PREVIEW2"]."\"" : ""?>></a>
							<?
							}
							
						}?>
					</div>
				</div>
				
				
				
				<?if ($arResult[$id]["MEDIA_COUT"]>$SMALLCOUNT) {?>
				
				
				<br class="clear"/>
				<div class="swiper-container-wrapper">
					<div class="swiper-container common_slider" id="cs<?=$id?>">
						<div class="swiper-wrapper">
				
						<?foreach ($arResult[$id]["VIDEOS"] as $itm)
						{?>
							<div class="swiper-slide">
								<a href="<?=$itm["HREF"]?>" class="video-play pop"><img src="<?=$itm["PREVIEW11"]?>" <?=$itm["PREVIEW2"]!="" ? "data-retinasrc=\"".$itm["PREVIEW2"]."\"" : ""?>></a>
							</div>
						<?
						}
						foreach ($arResult[$id]["IMAGES"] as $itm)
						{
						?>
							<div class="swiper-slide">
								<a href="<?=$itm["HREF"]?>" class="pop"><img src="<?=$itm["PREVIEW11"]?>" <?=$itm["PREVIEW2"]!="" ? "data-retinasrc=\"".$itm["PREVIEW2"]."\"" : ""?>></a>
							</div>
						<?
						}?>
						</div>
					</div>
					<div class="swiper-button-prev common cs<?=$id?>"></div>
					<div class="swiper-button-next common cs<?=$id?>"></div>
				</div>
				
					
				<?}?>

<?// echo '<pre>'; print_r($arItem); echo '</pre>';?>
				<div class="read_illyzii_parent">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="read_more_illyzii">Подробнее</a>
				</div>
			</div>
		<?
		$i++;
		endforeach;?>

