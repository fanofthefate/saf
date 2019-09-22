<?
	foreach ($arResult["PROPERTIES"]["VIDEOS"]["VALUE"] as $video)
	{
		$pos = strpos($video,"?v=");
		$pos2 = strpos($video,"&");
		
		if ($pos2!==false)
			$code = substr($video,($pos+3), $pos2-($pos+3));	
		else 
			$code = substr($video,($pos+3));
		
		$item["PREVIEW1"] = "http://img.youtube.com/vi/".$code."/mqdefault.jpg";
		$item["PREVIEW11"] = "http://img.youtube.com/vi/".$code."/mqdefault.jpg";
		$item["PREVIEW2"] = "";
		$item["HREF"] = $video;
		
		
		$arResult["VIDEOS"][] = $item;	
	}
	
	foreach ($arResult["PROPERTIES"]["FOTOS"]["VALUE"] as $foto)
	{
		$renderImage110 = CFile::ResizeImageGet($foto, Array("width" => 330, "height" => 186), BX_RESIZE_IMAGE_EXACT );
		$renderImage108 = CFile::ResizeImageGet($foto, Array("width" => 324, "height" => 186), BX_RESIZE_IMAGE_EXACT );
		$renderImage220 = CFile::ResizeImageGet($foto, Array("width" => 660, "height" => 372), BX_RESIZE_IMAGE_EXACT );
		$img = CFile::GetPath($foto);
		
		$rsFile = CFile::GetByID($foto);
		$arFile = $rsFile->Fetch();
		$desc = $arFile["DESCRIPTION"];
		
		
		$item_foto["PREVIEW1"] = $renderImage110['src'];
		$item_foto["PREVIEW11"] = $renderImage108['src'];
		$item_foto["PREVIEW2"] = $renderImage220['src'];
		$item_foto["HREF"] = $img;
		$item_foto["DESCRIPTION"] = $desc;

		$arResult["IMAGES"][] = $item_foto;
		
	}
	
	
	
	
	$arResult["MEDIA_COUT"] = count($arResult["VIDEOS"])+count($arResult["IMAGES"]);
	
	/*
	print("<pre>$id");
	print_r($arResult[$id]["VIDEOS"]);
	print("</pre>");
	print("<hr/>");
	*/

?>