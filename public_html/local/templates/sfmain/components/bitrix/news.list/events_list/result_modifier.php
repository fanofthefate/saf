<?
//global $arResult;
$towns = array();
$sectionInfo = array();
foreach($arResult["ITEMS"] as $arItem) {
	$name = GetElName($arItem["PROPERTIES"]["TOWN"]["VALUE"]);
	
	$dt = explode(".",$arItem["PROPERTIES"]["DATEFROM"]["VALUE"]);
	$month[intval($dt[1])] = "1";
	
	if ($name.""!="")
	{
		if (in_array($name,$towns)==false)
			$towns[$arItem["PROPERTIES"]["TOWN"]["VALUE"]] = $name;
	}
	asort($towns);
	
	/*sectionImage*/
	$sid = $arItem["IBLOCK_SECTION_ID"];
	if (array_key_exists($sectionInfo, $sid)==false)
		$sectionInfo[$sid] = GetSectionInfo(9, $sid);
	
}
//список городов
$arResult["TOWNS"] = $towns;
$arResult["MONTHS"] = $month;
$arResult["SECTIONINFO"] = $sectionInfo;

?>