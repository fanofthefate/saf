<?
$years = array();

foreach($arResult["ITEMS"] as $arItem) {
	
	$dateArr = explode('.',$arItem["PROPERTIES"]["DATE"]["VALUE"]);
	
	$year = intval($dateArr[2]);
	
	if ($year==0) $year = date("Y");

	if ($year!="")
	{
		if (in_array($year,$years)==false)
			$years[] = $year;
	
	}	
	
}
arsort($years);
$arResult["YEARS"] = $years;

?>