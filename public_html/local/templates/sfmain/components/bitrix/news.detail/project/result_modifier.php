<?


//global $arResult;
$towns = array();
$sectionInfo = array();
//foreach($arResult["ITEMS"]

$project_id = intval($arResult["ID"]);

if ($project_id>0)
{
	
	
	//проекты
	$projects = array();
	$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "PROPERTY_LINK");
	$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array("PROPERYTY_DATE"=>"DESC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement())
	{
						
	
		$arFields = $ob->GetFields();
		 $arProps = $ob->GetProperties();
		
		$page_url = $arFields["DETAIL_PAGE_URL"];
		if ($arProps["LINK"]["VALUE"]!="")
		{
			$page_url = $arProps["LINK"]["VALUE"];
		}
		
		
		$item["ID"] = $arFields["ID"];
		$item["NAME"] = $arFields["NAME"];
		$item["DETAIL_PAGE_URL"] = $page_url;
		$projects[] = $item;
	}
	
	$arResult["PROJECTS"] = $projects;
	
	//отзывы
	$response = array();
	$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "DETAIL_PICTURE");
	$arFilter = Array("IBLOCK_ID"=>6, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y","PROPERTY_REL"=>$project_id);
	$res = CIBlockElement::GetList(Array("PROPERYTY_DATE"=>"DESC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();
		$item["ID"] = $arFields["ID"];
		$item["NAME"] = $arFields["NAME"];
		$item["DETAIL_PICTURE"] = $arFields["DETAIL_PICTURE"];
		$response[] = $item;
	}
	$arResult["RESPONSE"] = $response;
	
	
	//новости проекта
	$news = array();
	$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "DETAIL_PICTURE", "DETAIL_TEXT");
	$arFilter = Array("IBLOCK_ID"=>2, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y","PROPERTY_REL"=>$project_id);
	$res = CIBlockElement::GetList(Array("PROPERYTY_DATE"=>"DESC"), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();
		$item["ID"] = $arFields["ID"];
		$item["NAME"] = $arFields["NAME"];
		$item["DETAIL_PICTURE"] = $arFields["DETAIL_PICTURE"];
		$item["DETAIL_PAGE_URL"] = $arFields["DETAIL_PAGE_URL"];
		$item["ANONS"] = substr(strip_tags($arFields["DETAIL_TEXT"]),0,200)."...";
		$news[] = $item;
		$arResult["NEWS"][] =  $arFields["ID"];
	}
	//	$arResult["NEWS"] = $news;
	
	
	
}

?>