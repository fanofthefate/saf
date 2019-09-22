<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Братья Сафроновы – иллюзионисты № 1 в России");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>
<div class="top_gradient"></div>
<div class="main_block">
		<div class="width_wrapper brthr" id="for_mobile_height">
			<a class="mobile-logo mobile">
				<img src="<?=SITE_TEMPLATE_PATH?>/files/images/logo.png" alt="Братья Сафроновы">
			</a>
			<div class="brothers_wrapper">
				<div class="brothers">
					<a class="placeholder ilya"></a>
					<img src="<?=SITE_TEMPLATE_PATH?>/files/images/ilya.png" class="brother ilya" alt="">
					<a class="placeholder sergey"></a>
					<img src="<?=SITE_TEMPLATE_PATH?>/files/images/sergey.png" class="brother sergey" alt="">
					<a class="placeholder andrey"></a>
					<img src="<?=SITE_TEMPLATE_PATH?>/files/images/andrey.png" class="brother andrey" alt="">
					<img src="<?=SITE_TEMPLATE_PATH?>/files/images/brothers.png" class="brother all" alt="">
				</div>
			</div>
		</div>
		
		<div class="absolute_block">
		
			<?
			/*анонс последнего события*/
			$APPLICATION->IncludeComponent("bitrix:news.list", "defaultpage_anons", Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"DISPLAY_DATE" => "N",	// Выводить дату элемента
				"DISPLAY_NAME" => "N",	// Выводить название элемента
				"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
				"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"FIELD_CODE" => array(	// Поля
					0 => "NAME",
					1 => "DETAIL_TEXT",
					2 => "DETAIL_PICTURE",
					3 => "",
				),
				"FILTER_NAME" => "",	// Фильтр
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
				"IBLOCK_ID" => "11",	// Код информационного блока
				"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
				"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
				"NEWS_COUNT" => "1",	// Количество новостей на странице
				"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
				"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
				"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
				"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
				"PAGER_TITLE" => "Новости",	// Название категорий
				"PARENT_SECTION" => "",	// ID раздела
				"PARENT_SECTION_CODE" => "",	// Код раздела
				"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
				"PROPERTY_CODE" => array(	// Свойства
					0 => "",
					1 => "DATE",
					2 => "TIME",
					3 => "PLACE",
					4 => "LINK",
					5 => "",
				),
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"SET_STATUS_404" => "N",	// Устанавливать статус 404
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SHOW_404" => "N",	// Показ специальной страницы
				"SORT_BY1" => "RAND",	// Поле для первой сортировки новостей
				"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
				"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
				"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
				"COMPONENT_TEMPLATE" => ".default"
			),
			false
		);?>
		
			<?
			 /*Special новости*/
			 $arrFilter = array("PROPERTY_SPECIAL"=>5);
			 $APPLICATION->IncludeComponent("bitrix:news.list", "news_slider", Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "N",	// Выводить название элемента
					"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "NAME",
						1 => "DETAIL_TEXT",
						2 => "DETAIL_PICTURE",
						3 => "",
					),
					"FILTER_NAME" => "arrFilter",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "2",	// Код информационного блока
					"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "50",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "SPECIAL",
						2 => "DATE",
						3 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "PROPERTY_DATE",	// Поле для первой сортировки новостей
					"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
				),
				false
			);?>
		</div>
		
		
	</div>
	
	
	<div class="trio_block">
		
		<div class="width_wrapper">
			<div class="trio_menu">
				<a href="#" class="menu_type1 selected" data-tab="1" data-bg="<?=SITE_TEMPLATE_PATH?>/files/images/bg2.jpg">О коллективе</a>
				<a href="#" class="menu_type1" data-tab="2" data-bg="<?=SITE_TEMPLATE_PATH?>/files/images/bg3.jpg">Проекты</a>
				<a href="#" class="menu_type1" data-tab="3" data-bg="<?=SITE_TEMPLATE_PATH?>/files/images/bg4.jpg">Лучшие иллюзии</a>
				<a href="#" class="menu_type1" data-tab="4" data-bg="<?=SITE_TEMPLATE_PATH?>/files/images/bg5.jpg">Фото-видео</a>
			</div>
			<div class="trio_info tab_div opn" data-tab="1">
			
				<div class="trio"><img src="<?=SITE_TEMPLATE_PATH?>/files/images/trio.png"></div>
				<div class="txtinfo">
				
					
					
					<?
					$filter_code="mp_about";
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
				
				</div>
				
				
			</div>
			
			<!--слайдер проектов-->
			<div class="p_v tab_div" data-tab="2">
			
				<?$APPLICATION->IncludeComponent("bitrix:news.list", "projects_slider", Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
						"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
						"AJAX_MODE" => "N",	// Включить режим AJAX
						"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
						"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
						"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
						"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
						"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
						"CACHE_GROUPS" => "N",	// Учитывать права доступа
						"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"CACHE_TYPE" => "A",	// Тип кеширования
						"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
						"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
						"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
						"DISPLAY_DATE" => "N",	// Выводить дату элемента
						"DISPLAY_NAME" => "N",	// Выводить название элемента
						"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
						"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
						"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
						"FIELD_CODE" => array(	// Поля
							0 => "NAME",
							1 => "DETAIL_TEXT",
							2 => "DETAIL_PICTURE",
							3 => "",
						),
						"FILTER_NAME" => "",	// Фильтр
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
						"IBLOCK_ID" => "3",	// Код информационного блока
						"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
						"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
						"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
						"NEWS_COUNT" => "20",	// Количество новостей на странице
						"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
						"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
						"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
						"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
						"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
						"PAGER_TITLE" => "Новости",	// Название категорий
						"PARENT_SECTION" => "",	// ID раздела
						"PARENT_SECTION_CODE" => "",	// Код раздела
						"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
						"PROPERTY_CODE" => array(	// Свойства
							0 => "",
							1 => "DATE",
							2 => "",
						),
						"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
						"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
						"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
						"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
						"SET_STATUS_404" => "N",	// Устанавливать статус 404
						"SET_TITLE" => "N",	// Устанавливать заголовок страницы
						"SHOW_404" => "N",	// Показ специальной страницы
						"SORT_BY1" => "PROPERTY_DATE",	// Поле для первой сортировки новостей
						"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
						"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
						"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
				
			</div>
			
			<!--слайдер иллюзий-->
			<div class="il_block tab_div" data-tab="3">
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.list", 
					"illusii_slider", 
					array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "N",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "N",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "N",
						"DISPLAY_PICTURE" => "N",
						"DISPLAY_PREVIEW_TEXT" => "N",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array(
							0 => "NAME",
							1 => "DETAIL_TEXT",
							2 => "DETAIL_PICTURE",
							3 => "",
						),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "7",
						"IBLOCK_TYPE" => "news",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "N",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "20",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Новости",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"PREVIEW_TRUNCATE_LEN" => "",
						"PROPERTY_CODE" => array(
							0 => "DATE",
							1 => "",
						),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "PROPERTY_DATE",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "DESC",
						"SORT_ORDER2" => "ASC",
						"COMPONENT_TEMPLATE" => "illusii_slider"
					),
					false
				);?>
			</div>

			<!--фото и видео-->
			
			
			
			<div class="foto_video tab_div" data-tab="4">
				
				<?
				//фото-видео
				$APPLICATION->IncludeComponent(
				"bitrix:news.list", 
				"mainpage_fotovideo", 
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "N",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "N",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "N",
					"DISPLAY_PICTURE" => "N",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(
						0 => "NAME",
						1 => "PREVIEW_TEXT",
						2 => "PREVIEW_PICTURE",
						3 => "DETAIL_TEXT",
						4 => "DETAIL_PICTURE",
						5 => "",
					),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "18",
					"IBLOCK_TYPE" => "news",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "N",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "500",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(
						0 => "VIDEOS",
						1 => "FOTOS",
						2 => "",
					),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "PROPERTY_DATE",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"COMPONENT_TEMPLATE" => "zakaz_fotovideo"
				),
				false
			);?>
				
				
				<?/*$APPLICATION->IncludeFile(
					"/include/foto_slider.php",
					Array(),
					Array("MODE"=>"html")
					);*/?>
				
				<?/*$APPLICATION->IncludeFile(
					"/include/video_slider.php",
					Array(),
					Array("MODE"=>"html")
					);*/?>
				
				
				
				
				
			</div>
		</div>
		
		<div class="absolute_block">
			<div class="right_triangle_block">
				<div class="width_wrapper">
					<?/*новости/блог*/?>
					
					<?$APPLICATION->IncludeComponent(
					"bitrix:news.list", 
					"defaultpage_blog", 
					array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "N",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "N",
						"DISPLAY_PICTURE" => "N",
						"DISPLAY_PREVIEW_TEXT" => "N",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array(
							0 => "ID",
							1 => "CODE",
							2 => "XML_ID",
							3 => "NAME",
							4 => "TAGS",
							5 => "SORT",
							6 => "PREVIEW_TEXT",
							7 => "PREVIEW_PICTURE",
							8 => "DETAIL_TEXT",
							9 => "DETAIL_PICTURE",
							10 => "DATE_ACTIVE_FROM",
							11 => "ACTIVE_FROM",
							12 => "DATE_ACTIVE_TO",
							13 => "ACTIVE_TO",
							14 => "SHOW_COUNTER",
							15 => "SHOW_COUNTER_START",
							16 => "IBLOCK_TYPE_ID",
							17 => "IBLOCK_ID",
							18 => "IBLOCK_CODE",
							19 => "IBLOCK_NAME",
							20 => "IBLOCK_EXTERNAL_ID",
							21 => "DATE_CREATE",
							22 => "CREATED_BY",
							23 => "CREATED_USER_NAME",
							24 => "TIMESTAMP_X",
							25 => "MODIFIED_BY",
							26 => "USER_NAME",
							27 => "",
						),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => $_REQUEST["ID"],
						"IBLOCK_TYPE" => "news",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "N",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "20",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Новости",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"PREVIEW_TRUNCATE_LEN" => "",
						"PROPERTY_CODE" => array(
							0 => "DATE",
							1 => "",
						),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "PROPERTY_DATE",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "DESC",
						"SORT_ORDER2" => "ASC",
						"COMPONENT_TEMPLATE" => "defaultpage_blog"
					),
					false
				);?>
					
					
					
				</div>
			</div>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>