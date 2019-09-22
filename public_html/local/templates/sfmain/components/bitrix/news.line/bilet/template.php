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

if (count($arResult["ITEMS"])>0) {
	$arItem = $arResult["ITEMS"][0];
?>
		<?/*<a href="#" class="ticket ticketwidget myticket-popup-button">БИЛЕТ</a>*/?>
		
		<?=$arItem["~PREVIEW_TEXT"]?>
		
		
		
<?}
else 
{?>
	<a href="/nobilet.html" class="ticket myticket-popup-button2"></a>
<?}?>