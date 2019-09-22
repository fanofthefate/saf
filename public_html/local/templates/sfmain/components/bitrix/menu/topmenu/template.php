<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="top-menu-ul">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="selected"><a href="<?=$arItem["LINK"]?>" <?=$arItem["PARAMS"]["data-hash"]?>><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>" <?=$arItem["PARAMS"]["data-hash"]?>><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>
	<?// echo '<pre>'; print_r($arResult); echo '</pre>';?>
</ul>
<?endif?>