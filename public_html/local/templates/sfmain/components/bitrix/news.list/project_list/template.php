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
<?/*
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

</svg>*/?>
<?$i=0;?>
<div class="projects-cat">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
	$page_url = $arItem["DETAIL_PAGE_URL"];
	if ($arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"]!="")
		$page_url = $arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"];
	{
		//print_r($arItem);
		
	}
		
	?>
	<div class="project <?=($i==0) ? "first" : ""?>">
	
			<?if ($i==0) {?>
			<a class="mobile-logo mobile" href="/">
				<img src="<?=SITE_TEMPLATE_PATH?>/files/images/logo.png" alt="Братья Сафроновы">
			</a>
			<?}?>
	
	
			<div class="project-inner">
				<div class="project-background-container">
					
					<div class="project-background" style="background-image: url(<?=$arItem["DETAIL_PICTURE"]["SRC"]?>)">
						<svg class="blur-ie">
							<defs>
								<filter id="blur">
									<feGaussianBlur stdDeviation="8" />
								</filter>
							</defs>
							<image xlink:href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" width="1000" height="1080" filter2="url(#blur)"></image>
						</svg>
					</div>
				</div>
				<div class="width_wrapper">
					<div class="pad_wrapper">
						<div class="img_wrp">
							<a href="<?=$page_url?>"><img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt=""></a>
							
							<h2 class="project-title"><a href="<?=$page_url?>"><?=$arItem["NAME"]?></a></h2>
							<p class="text"><?echo $arItem["PREVIEW_TEXT"];?></p>
							
							<?if ($arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"]!="") {?>
								<p class="text_lnk"><a href="<?=$arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"]?>" class="read-more">Купить билет</a></p>
							<?} else {?>
								<p class="text_lnk"><a href="<?=$page_url?>" class="read-more">Подробнее...</a></p>
							<?}?>
							
						</div>
							
					</div>
				</div>
				
				
				
			</div>
			<?/*<div class="read-more-container">
				<div class="read-more-background" style="background-image: url(<?=$arItem["DETAIL_PICTURE"]["SRC"]?>)"></div>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="read-more">Подробнее...</a>
			</div>*/?>
		</div>

<?
	$i++;
  endforeach;?>

	<div class="projects-bottom">
		<?/*<span>Ждем скоро</span><span>новые проекты:)</span>*/?>
		<span>Ждем скоро новые проекты :)<span>
	</div>
</div>