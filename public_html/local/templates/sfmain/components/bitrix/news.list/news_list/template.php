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
$count = count($arResult["ITEMS"]);?>


<?
/*нужно ли загружать ещё новости*/
$start_page = $arResult[NAV_RESULT]->nStartPage;
$end_page = $arResult[NAV_RESULT]->nEndPage;
$page = $_REQUEST["PAGEN_1"]=="" ? 1 : intval($_REQUEST["PAGEN_1"]);
?>




<?$i=0;
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
	if ($arItem["DETAIL_PICTURE"])
	{
		$renderImage270 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 270, "height" => 152), BX_RESIZE_IMAGE_PROPORTIONAL);
		$renderImage540 = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"]["ID"], Array("width" => 540, "height" => 304), BX_RESIZE_IMAGE_PROPORTIONAL);
	}
	
	?>
	
	<?if (($i%2)==0) {?>
		<div class="news_row"><div class="news_item for_left">
	<?}
	else {?>
		<div class="news_item for_right">
	<?}?>
				<div class="for_pad">
					<div class="img_and_title">
						<?if ($arItem["DETAIL_PICTURE"]) {?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$renderImage270["src"]?>" data-retinasrc="<?=$renderImage540['src']?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>"></a>
						<?}?>
						<span class="date"><?=myDate($arItem["DISPLAY_PROPERTIES"]["DATE"]["VALUE"])?></span><br/>
						<h2><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h2>
					</div>
					<p>
						<?=substr(strip_tags($arItem["DETAIL_TEXT"]),0,200)."..."?>
					</p>
				
					
					
					<?if ($i==0) {
					
						if ($page<$end_page)//есть ещё страницы для загрузки
						{?>
							<script>
								next_page = <?=($page+1)?>;
							</script>
						<?}
						else 
						{?>
							<script>
								$("#load_more_news").css("display","none");
							</script>
						<?}
					}?>
					
					
				</div>
				
				<a class="more" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее...</a>
	
	<?if (($i%2)==0) {?>
		</div>
	<?} else {?>
		</div></div>
	<?}?>
	
	<?
	if ($count==($i+1) && ($i%2==0)) {?>
		</div>
	<?}
	
	?>
	
<?
$i++;
endforeach;?>



