<?$APPLICATION->IncludeFile(
"/include/popup.php",
Array(),
Array("MODE"=>"html")
);?>

<div class="footer">
		<div class="width_wrapper">
			<div class="left_col">
				<div class="flogo"></div>
				
				<div class="social_links">
					<?
					$filter_code="social";
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
				
				<div class="copyright">&copy; <?=date("Y")?> ООО &laquo;Братья САФРОНОВЫ&raquo;</div>
				
			</div>
			<div class="right_col">
				<div class="bottom_menu">
					
				<?
				$filter_code="footer_menu";
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
				
					
					<span></span>
				</div>
				
				
				<?
				$filter_code="footer_contacts";
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
		<div id="forload"></div>
	</div>
	

<script src="/bitrix/templates/sfmain/files/js/linkerhide/BASE64.js"></script>
<script src="/bitrix/templates/sfmain/files/js/linkerhide/linker.js"></script>
	
</body>
</html>
