<?
$res2 = array();
foreach($arResult as $item)
{
	if ($APPLICATION->GetCurPage()=="/extra/" && $item["LINK"]=="/show/")
	{
		$item["SELECTED"] = true;
	}
	$res2[] = $item;

}
$arResult = $res2;
?>