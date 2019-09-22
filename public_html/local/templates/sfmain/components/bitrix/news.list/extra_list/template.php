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
<div class="quad_block">
	<?
	$i=1;
	foreach($arResult["ITEMS"] as $arItem) 	
	{?>
	
		<div class="b<?=$i?>" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')">
			<div class="mag_wrapper">
				<div class="mag_wrapper_txt">
					<div class="mag_txt">
						<h3><?=$arItem["NAME"]?></h3>
						<p><?=$arItem["PREVIEW_TEXT"]?></p>
					</div>
				</div>
			</div>
		</div>
	
	<?
	$i++;
	}?>
</div>