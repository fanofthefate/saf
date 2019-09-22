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
global $mnths2;
?>

<div class="events concert-chooser">
	<div class="width_wrapper">
				<a class="mobile-logo mobile">
					<img src="<?=SITE_TEMPLATE_PATH?>/files/images/logo.png" alt="сафроновы">
				</a>
	
				<div class="styled-select slate">
					<select class="city">
						<option value="all">город</option>
						<?foreach($arResult["TOWNS"] as $key=>$town) {?>
							<option value="<?=$key?>"><?=$town?></option>
						<?}?>
					</select>
				</div>
				<div class="styled-select slate">
					<select class="month">
						
							<option value="all">месяц</option>
							
							<?
							$current_month = intval(date("n"));
							$current_month=12;
							for($i=0;$i<12;$i++)
							{
								$mn = (($current_month+$i)%13)+(intval(($current_month+$i)/13));
								
								if($arResult["MONTHS"][$mn]=="1")
									print("<option value=\"".$mn."\">".$mnths2[$mn]." </option>");
								
							}	
							?>
					</select>
				</div>
				
				<a href="/tourandevents/order/" class="read-more-bordered neworder2">заказ мероприятия</a>
				
	</div>
</div>


<div class="rel_block">
	<div class="width_wrapper meropr">
		<div class="left_info">
			<div class="affix-ticket affix-top">
				<a href="#" class="ticket neworder">заказать</a>
			</div>
		
			<h2>Заказ мероприятия</h2>
			
			<?$APPLICATION->IncludeFile(
			"/include/pages/order.php",
			Array(),
			Array("MODE"=>"html")
			);?>
			
			<h2 class="purple">фото прошедших мероприятий</h2>
		</div>	
	
	
	
	
<div class="big-map" id="googleMap"></div>


<?/*<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1WbHwT5k3UqXvJiWsUqvU8gre7vs356Q&callback=initializeBigMap"  type="text/javascript"></script>*/?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1WbHwT5k3UqXvJiWsUqvU8gre7vs356Q"  type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/files/js/oms.min.js"></script>


<script type="text/javascript">
var bigMapMarkers = [
<?
$i=0;
foreach($arResult["ITEMS"] as $arItem) {
	
	$coordsArr = explode(",",$arItem["DISPLAY_PROPERTIES"]["COORDS"]["~VALUE"]);
	if ($coordsArr[0]=="" || $coordsArr[1]=="") continue;
	
	$id = $arItem["ID"];
	$dt = trim($arItem["DISPLAY_PROPERTIES"]["DATETO"]["~VALUE"]) != "" ? $arItem["DISPLAY_PROPERTIES"]["DATETO"]["~VALUE"] :  $arItem["DISPLAY_PROPERTIES"]["DATEFROM"]["~VALUE"];
	$dt = compareDate($dt);
	$month = explode(".",$dt)[1];
	$price = $arItem["DISPLAY_PROPERTIES"]["PRICE"]["~VALUE"];
	$townid = $arItem["DISPLAY_PROPERTIES"]["TOWN"]["~VALUE"];
	$town_name = strip_tags($arItem["DISPLAY_PROPERTIES"]["TOWN"]["DISPLAY_VALUE"]);
	$address = $arItem["DISPLAY_PROPERTIES"]["ADDRESS"]["~VALUE"];
	
	if ($price.""!="") {$price = '<img src="'.SITE_TEMPLATE_PATH.'/files/images/icon-ticket.png" width="16" style="margin: 0 5px 4px 0">'.$price;}
	
	$date = FormatDateFromTo($arItem["DISPLAY_PROPERTIES"]["DATEFROM"]["~VALUE"], $arItem["DISPLAY_PROPERTIES"]["DATETO"]["~VALUE"]);
	
	
	$place = trim($arItem["DISPLAY_PROPERTIES"]["PLACE"]["~VALUE"])."";
	if ($place!="" && ($town_name!="" || $address!=""))
		$place = $place.", ".($address!="" ? $address : $town_name);
	else 
		$place = ($address!="" ? $address : $town_name);
	
	$place = $place.''!='' ? '<img src="'.SITE_TEMPLATE_PATH.'/files/images/icon-pin.png" width="16" style="margin: 0 5px 4px 0">'.$place : $place; 
	
		
	$status = $arItem["DISPLAY_PROPERTIES"]["STATUS"]["VALUE_ENUM_ID"];
	if ($dt >= date("Y.m.d"))
	{
		$type = "type-soon";
		$icon = SITE_TEMPLATE_PATH."/files/images/pin-ticket.png";
		$buttonText = "Билеты в кассах";
		$buttonLink = "#";
		
		if ($status==1)//Билеты в кассах
		{
			
		}
		else if ($status==3)//Мероприятие
		{
			$type = "type-free";
			$icon = SITE_TEMPLATE_PATH."/files/images/pin-free.png";
			
		}
		if ($status==4)//Онлайн-продажа
		{
			$type = "type-ticket";
			$buttonText = "купить билет";
			$buttonLink = $arItem["DISPLAY_PROPERTIES"]["LINK"]["~VALUE"];
		}
		
	}
	else
	{
		$type = "type-finished";
		$icon = SITE_TEMPLATE_PATH."/files/images/pin-finished.png";
		$buttonText = "завершено";
	}
	?>
	
	
	<?
	if ($i>0) print(",");
	
	$image = $arResult["SECTIONINFO"][$arItem["IBLOCK_SECTION_ID"]]["IMG"];
	
	
	?>
	{
	item: 'item<?=$id?>',
	lat: <?=$coordsArr[0]?>,
	lng: <?=$coordsArr[1]?>,
	type: '<?=$type?>',
	city: '<?=$townid?>',
	icon: '<?=$icon?>',
	month: ',<?=$month?>,',
	title: '<?=TextFormat($arResult["SECTIONINFO"][$arItem["IBLOCK_SECTION_ID"]]["NAME"])?>',
	image: '<?=$image?>',
	text: '<?=TextFormat($arResult["SECTIONINFO"][$arItem["IBLOCK_SECTION_ID"]]["TEXT"])?>',
	show: '<div class="ticket-popup-details clearfix"><div class="ticket-popup-date"><img src="<?=SITE_TEMPLATE_PATH?>/files/images/icon-date.png" width="16" style="margin: 0 5px 5px 0"><?=$date?></div><div class="ticket-popup-price"><?=$price?></div><br clear="all"><?=$place?></div>',
	buttonText: '<?=$buttonText?>',
	buttonLink: '<?=$buttonLink?>'
	}
<?$i++;}?>
]

google.maps.event.addDomListener(window, 'load', initializeBigMap);
</script>

</div>
</div>
	
	