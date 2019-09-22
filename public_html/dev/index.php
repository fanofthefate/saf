<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<?
/*$el = new CIBlockElement;

$arSelect = Array("ID", "NAME", "CODE");
$arFilter = Array("IBLOCK_ID"=>8, "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("ID" => "DESC"), $arFilter, false, false, $arSelect);
while($arFields = $res->GetNext()){
	$arParams = array("replace_space"=>"-","replace_other"=>"-");
	$trans = Cutil::translit($arFields['NAME'],"ru",$arParams);
	$arLoadProductArray['CODE'] = $trans;
	$result = $el->Update($arFields['ID'], $arLoadProductArray);
}*/


?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>