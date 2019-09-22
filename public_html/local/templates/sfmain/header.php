<?FirstPageRedirect();?>
<!doctype html>
<html>
<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWZMMDP');</script>
<!-- End Google Tag Manager -->

	<meta charset="UTF-8">
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>

	<link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH?>/files/css/style2.css">

	<script src="<?=SITE_TEMPLATE_PATH?>/files/js/jquery-2.1.4.min.js"></script><!--NEW-->
	<script src="<?=SITE_TEMPLATE_PATH?>/files/js/jquery.easing.1.3.min.js"></script><!--NEW-->
	
	<link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH?>/files/css/lightgallery.min.css">
	<script src="<?=SITE_TEMPLATE_PATH?>/files/js/lightgallery.min.js"></script>
	
	<link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH?>/files/css/swiper.min.css" >
	<script src="<?=SITE_TEMPLATE_PATH?>/files/js/swiper.js"></script>
	<?/*<script src="<?=SITE_TEMPLATE_PATH?>/files/js/swiper.min.js"></script>*/?>
	
	<link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH?>/files/css/select2.css" >
	<script src="<?=SITE_TEMPLATE_PATH?>/files/js/select2.full.min.js"></script>
	
	<link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH?>/files/css/vanillabox.css" >
	<script src="<?=SITE_TEMPLATE_PATH?>/files/js/jquery.vanillabox-0.1.7.min.js"></script>
	
	
	
	<script src="<?=SITE_TEMPLATE_PATH?>/files/js/validate.js"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/files/js/init.js"></script>
	
	
	<meta name="Description" content="Илюзианисты Братья Сафроновы выступают в жанре «Иллюзии» более 14 лет. За это время они заслуженно стали обладателями звания «Лучшие иллюзионисты России», а в 2015 году получили мировое признание выиграв в номинации «World Best big illusion 2015».  " />
	<meta name="copyright" content="&copy; 2016 Братья Сафроновы" />
	<meta property="og:title" content="Братья Сафроновы – иллюзионисты № 1 в России" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://www.safronovy.ru/images/social.jpg" />
	<meta property="og:url" content="https://www.safronovy.ru/ru/" />
	<meta property="og:site_name" content="Братья Сафроновы" />
	<meta property="og:description" content="Илюзианисты Братья Сафроновы выступают в жанре «Иллюзии» более 14 лет. За это время они заслуженно стали обладателями звания «Лучшие иллюзионисты России», а в 2015 году получили мировое признание выиграв в номинации «World Best big illusion 2015».  " />
	<link rel="shortcut icon" href="/favicon.ico" />
	
	
	<link rel="stylesheet" href="//s3.intickets.ru/intickets.min.css">
	<!--<link rel="stylesheet" href="//s3.intickets.ru/intickets-button-simple.min.css">-->
	<script src="//s3.intickets.ru/intickets.min.js"></script>

	
	<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=no" />
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWZMMDP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	
	<?
				$filter_code="yandex";
				$APPLICATION->IncludeComponent("bitrix:news.detail", "text_element", Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
					"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "N",	// Выводить название элемента
					"DISPLAY_PICTURE" => "N",	// Выводить детальное изображение
					"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"ELEMENT_CODE" => $filter_code,	// Код новости
					"ELEMENT_ID" => "",	// ID новости
					"FIELD_CODE" => array(	// Поля
						0 => "DETAIL_TEXT",
						1 => "",
					),
					"IBLOCK_ID" => "17",	// Код информационного блока
					"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
					"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
					"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Страница",	// Название категорий
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
					"USE_SHARE" => "N",	// Отображать панель соц. закладок
				),
				false
			);?>
	

	<div class="menu-opener mobile"></div>
	<div class="top-bar mobile">
		<div class="container top-bar-inner">
			<div class="top-bar-main">
				<ul class="top-menu">
					
				</ul>
			</div>
			
			<?
			//БИЛЕТ
			$APPLICATION->IncludeComponent(
		"bitrix:news.line", 
		"bilet", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "300",
			"CACHE_TYPE" => "A",
			"DETAIL_URL" => "",
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_TEXT",
				2 => "",
			),
			"IBLOCKS" => array(
				0 => "16",
			),
			"IBLOCK_TYPE" => "news",
			"NEWS_COUNT" => "1",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC",
			"COMPONENT_TEMPLATE" => "bilet"
		),
		false
	);?>
			
			
		</div>
	</div>	
	<!--<div class="top_gradient"></div>-->
	<div class="top_menu">
		<div class="width_wrapper for_menu">
			
			<div class="gray_line">
				<a href="/main/" class="logo"></a>
				
				<?
				//верхнее меню
				$APPLICATION->IncludeComponent("bitrix:menu", "topmenu", Array(
				"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
						0 => "",
					),
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_TYPE" => "N",	// Тип кеширования
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				),
				false
			);?>
				
				
			</div>
			<?
			//БИЛЕТ
			$APPLICATION->IncludeComponent(
				"bitrix:news.line", 
				"bilet", 
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "300",
					"CACHE_TYPE" => "A",
					"DETAIL_URL" => "",
					"FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "",
					),
					"IBLOCKS" => array(
						0 => "16",
					),
					"IBLOCK_TYPE" => "news",
					"NEWS_COUNT" => "1",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"COMPONENT_TEMPLATE" => "bilet"
				),
				false
			);?>
		</div>

	</div>

