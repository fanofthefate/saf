

<script>
	var ostalos_biletov = <?=$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>
</script>
<?
$APPLICATION->SetAdditionalCSS("//s3.intickets.ru/intickets.min.css", true);
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/init.js" );
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/init2.js" );
$APPLICATION->AddHeadScript("//s3.intickets.ru/intickets.min.js" );
?>

</body>
</html>
