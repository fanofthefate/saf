<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Шоу экстрасенсов");
?>
<div class="k2">
		<div class="top_gradient"></div>
		<a class="zakaz neworder" href="#"><span>Заказать мероприятие</span></a>
		
		<a class="mobile-logo mobile">
			<img src="<?=SITE_TEMPLATE_PATH?>/files/images/logo.png" alt="сафроновы">
		</a>
		
		<div class="absolute_bottom">
			<div class="extra_title"><img class="mobile" src="<?=SITE_TEMPLATE_PATH?>/files/images/sprites/icons/extra_title.png"></div>
			<div class="title_wrapper">
				&nbsp;Окунитесь в мир магии и волшебства
			</div>
		</div>
	</div>
	
	
	<div class="anons_line2">
		<div class="width_wrapper">
			
			<?
				$filter_code="extra_txt1";
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
	
	<div class="circle_block2">
	
		<?
				$filter_code="extra_txt2";
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
	
	
	<?
	//экстрасенсы
	$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"extra_list", 
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
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "15",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
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
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "extra_list"
	),
	false
);?>
	
	<div class="seo_text1">
		<div class="width_wrapper">
		<?
				$filter_code="extra_txt3";
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
	
	
	<div class="magenta-black-line">
	
		<?
				$filter_code="extra_txt4";
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
	
	
	<div class="seo_text1">
		<div class="width_wrapper">
		
		<?
				$filter_code="extra_txt5";
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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>