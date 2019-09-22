<?
define('STOP_STATISTICS', true);
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$GLOBALS['APPLICATION']->RestartBuffer();
CModule::IncludeModule("iblock");


$result = array();
$result['errors'] = array();
$result['status'] = false;
$result['message'] = '';


if(!empty($_POST["name"]) && !empty($_POST["phone"]))
{
	
		$el = new CIBlockElement;
		
		$PROP["TYPE"]  =  $_POST["type"];
		$PROP["TOWN"]  = $_POST["town"];
		$PROP["DATE"]  = $_POST["date"];
		$PROP["NAME"]  = $_POST["name"];
		$PROP["PHONE"]  = $_POST["phone"];
		$PROP["EMAIL"] = $_POST["email"];
		$PROP["TXT"]   = $_POST["txt"];
		
		
		$arLoadProductArray = Array(
			"IBLOCK_SECTION_ID" => false,
			"IBLOCK_ID"      => 12,
			"PROPERTY_VALUES"=> $PROP,
			"NAME"           => "Заказ мероприятия ".date('d.m.Y H:i:s'),
			"ACTIVE"         => "Y"
		);
		
		
		if ($el->Add($arLoadProductArray))
		{
			$result['status'] = true;
			$result['message'] = "Ваше сообщение отправлено. Мы свяжемся с вами в кратчайшие сроки";
		}
		else 
		{
			$result['message'] = "->".$el->LAST_ERROR;
		}

}
		
    
	
exit(json_encode($result));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>
