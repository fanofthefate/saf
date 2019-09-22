<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "БРАТЬЯ САФРОНОВЫ - Самое Масштабное Космическое Шоу «Тайна трех планет» в ЦВК \"Экспоцентр\"");
$APPLICATION->SetPageProperty("description", "БРАТЬЯ САФРОНОВЫ представляют Новое Космическое Иллюзионное шоу страны в ЦВК Экспоцентр \"Тайна трех планет\" ТОП Рейтинга «Новогодние елки Москвы 2018». Билеты без наценки только на официальном сайте");


?>

<svg style="position: absolute; width: 0; height: 0; overflow: hidden" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
	<symbol id="icon-arrow" viewBox="0 0 32 32">

<title>arrow</title>
<path fill="#fff" style="fill: var(--color1, #fff)" d="M24.191 15.362l-15.095-15.095c-0.355-0.355-0.925-0.355-1.281 0s-0.355 0.925 0 1.281l14.452 14.452-14.452 14.452c-0.355 0.355-0.355 0.925 0 1.281 0.174 0.174 0.409 0.268 0.637 0.268s0.463-0.087 0.637-0.268l15.095-15.095c0.355-0.349 0.355-0.925 0.007-1.274z"></path>
</symbol>
</defs>
</svg>

	<header class="head">
		<div class="mid">
			<div class="head__top">
				<div class="head__logo">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/head__logo.png" alt="Тайна трех планет" class="head__logoimg">
				</div>
				<div class="head__nav wow fadeIn" data-wow-delay=".5s">
					<nav class="nav">
						<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_topmenu"), Array("MODE"=>"php"));?>
						
						<div class="head__slogan wow fadeIn" data-wow-delay=".5s" >
							<img src="<?=SITE_TEMPLATE_PATH?>/img/2019_offer.png" alt="2019 Offer">
						</div>
					</nav>
				</div>
				<div class="head__sell">
					<div class="sell sell_headtop">
						<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy" alt="Купить билеты" style="display: block">
						</a>
						<div class="sell__desc">промокод: 2019</div>
					</div>
				</div>
			</div>
			<div class="cosmo wow zoomIn" data-wow-delay=".5s">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/cosmo1.png"  alt="" class="cosmo__img cosmo__img_1">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/cosmo2.png"  alt="" class="cosmo__img cosmo__img_2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/cosmo3.png"  alt="" class="cosmo__img cosmo__img_3">
			</div>
			<div class="head__title wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
				<img class="head__titleimg" src="<?=SITE_TEMPLATE_PATH?>/img/head__title.png" alt="Космическая одиссея. Тайна трёх планет братьев Сафроновых.">
				<div class="head__age">5+</div>
				<div class="head__desc">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_lainer"), Array("MODE"=>"php"));?>
				</div>
			</div>
			<div class="head__bottom wow zoomIn" data-wow-duration="1s" data-wow-delay=".5s">
				<div class="sell cf d-flex-center">
					<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy" alt="Купить билеты"></a>
					<div class="sell__right">
						<div class="sell__text">БИЛЕТЫ БЕЗ НАЦЕНКИ только на официальном сайте здесь</div>
						<div class="sell__text">Чтобы получить скидку, введите <span class="sell__promo">промокод: 2019</span></div>
					</div>
				</div>
				<div class="rate cf">
					<div class="rate__left">
						<span class="rate__text">Осталось билетов в продаже:</span>
					</div>
					<div class="rate__right">
						<div class="rate__bg">
							<div class="rate__l">
								<div class="rate__d" style="width:<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>%"></div>
							</div>
						</div>
						<div class="rate__perc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>%</div>
					</div>
				</div>
			</div>
		</div>		
	</header>

	<section class="prime">
		<div class="mid wow fadeInUp">
			<h3 class="prime__title">ИЛЛЮЗИОНИСТЫ № 1 В РОССИИ</h3>
			<div class="prime__desc">ПРЕДСТАВЛЯЮТ:</div>
		</div>
		<div class="prime__center wow fadeInUp">
			<div class="mid">
				<div class="prime__rel cf">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_2topname"), Array("MODE"=>"php"));?>
					
					<div class="prime__cosmo">
						<img class="prime__ph prime__ph_1" src="<?=SITE_TEMPLATE_PATH?>/img/prime__ph1.jpg" alt="">
						<img class="prime__ph prime__ph_2" src="<?=SITE_TEMPLATE_PATH?>/img/prime__ph2.jpg" alt="">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/prime__pic1.jpg" alt="" class="prime__pic active">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/prime__pic1.jpg" alt="" class="prime__pic prime__pic_1">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/Foto2.jpg" alt="" class="prime__pic prime__pic_2">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/prime__pic3.jpg" alt="" class="prime__pic prime__pic_3">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/prime__pic4.jpg" alt="" class="prime__pic prime__pic_4">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/Foto5.jpg" alt="" class="prime__pic prime__pic_5">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/Foto6.jpg" alt="" class="prime__pic prime__pic_6">
					</div>
					<ul class="prime__list">
					
						<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_2txt"), Array("MODE"=>"php"));?>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="prime__foot">
			<div class="mid">
				<div class="wow fadeInUp">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_2subtitle"), Array("MODE"=>"php"));?>
				</div>
				<div class="sell cf d-flex-center">
					<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy"  alt="Купить билеты"></a>
					<div class="sell__right">
						<div class="sell__text">БИЛЕТЫ БЕЗ НАЦЕНКИ только на официальном сайте здесь</div>
						<div class="sell__text">Чтобы получить скидку, введите <span class="sell__promo">промокод: 2019</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bro">
	<div class="mid  wow slideInUp">
		<div class="bro__header">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/bro__title.png" alt="Братья Сафроновы" class="bro__title">
		</div>
		<div class="bro_content">
		<div class="bro_groupe">
			<div class="bro__man bro__man_serg"></div>
			<div class="bro__man bro__man_ilya"></div>
			<div class="bro__man bro__man_andr"></div>
		</div>
		
		<div class="bro__con">
			<ul class="bro__list">
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_bro"), Array("MODE"=>"php"));?>
			</ul>
		</div>
	</div>
	</div>
</section>

<section class="show">
	<div class="mid">
		<div class="show__sell">
			<div class="sell cf  d-flex-center">
				<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy"  alt="Купить билеты"></a>
				<div class="sell__right">
					<div class="sell__text">БИЛЕТЫ БЕЗ НАЦЕНКИ только на официальном сайте здесь</div>
					<div class="sell__text">Чтобы получить скидку, введите <span class="sell__promo">промокод: 2019</span></div>
				</div>
			</div>
		</div>
		<div class="show__head wow fadeInUp">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_4title"), Array("MODE"=>"php"));?>
		</div>
		<div class="show__con cf wow fadeInUp">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/show__box.png"  alt="ТАЙНА ТРЕХ ПЛАНЕТ" class="show__box">
			<div class="show__right">
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_4txt"), Array("MODE"=>"php"));?>
			</div>
		</div>
		<div class="show__foot">
			<div class="sell cf  d-flex-center">
				<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy" alt="Купить билеты"></a>
				<div class="sell__right">
					<div class="sell__text">БИЛЕТЫ БЕЗ НАЦЕНКИ только на официальном сайте здесь</div>
					<div class="sell__text">Чтобы получить скидку, введите <span class="sell__promo">промокод: 2019</span></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ship">
	<div class="ship_asteroid ">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/ship_asteroid.png"  class="asteroid asteroid__item1 " alt="asteroid">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/ship_asteroid2.png" class="asteroid asteroid__item2 " alt="asteroid">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/ship_asteroid3.png" class="asteroid asteroid__item3 " alt="asteroid">
	</div>
	<div class="space_ship" >
		<img src="<?=SITE_TEMPLATE_PATH?>/img/ship.png" alt="ship">
	</div>

	<div class="mid">
		<div class="ship__head">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_5title"), Array("MODE"=>"php"));?>
		</div>
	</div>	
	<div class="ship__box wow slideInUp">
		<div class="mid mid_small">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_5txt"), Array("MODE"=>"php"));?>
			
		</div>
	</div>
	<div class="ship__sell">
		<div class="sell sell_col cf d-flex-center">
			<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy" alt="Купить билеты"></a>
			<div class="sell__right">
				<div class="sell__text">БИЛЕТЫ БЕЗ НАЦЕНКИ только на официальном сайте здесь</div>
				<div class="sell__text">Чтобы получить скидку, введите <span class="sell__promo">промокод: 2019</span></div>
			</div>
		</div>
	</div>
</section>

<section class="world">
	<div class="mid">
		<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_6txt"), Array("MODE"=>"php"));?>
	</div>
</section>

<!-- 	<script>
		$('.world').ripples({
			resolution: 64,
			dropRadius: 16,
			perturbance: 0.001,
		});
	</script> -->

	<section class="hand">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/hand__r.png" alt="" class="hand__img hand__img_r">
		<div class="mid">
			<div class="hand__sell">
				<div class="wow slideInUp">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_6txt2"), Array("MODE"=>"php"));?>
				</div>
				
				<div class="sell sell_col cf ">
					<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy" alt="Купить билеты"></a>
					<div class="sell__right">
						<div class="sell__text"><span class="sell__promo">промокод: 2019</span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="hand__box wow slideInUp">
			<div class="mid">
				<?/*Нашим пассажирам*/?>
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_8txt"), Array("MODE"=>"php"));?>
				
				<div class="hand__pops">
					<a href="/img/pop1.png" class="hand__pop hand__pop_1">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/pop1-1.png"  alt="" class="hand__pic">
					</a>
					<a href="/img/pop2.png" class="hand__pop hand__pop_2">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/pop2-2.png"  alt="" class="hand__pic">
					</a>
					<a href="/img/pop3.png" class="hand__pop hand__pop_3">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/pop3-3.png"  alt="" class="hand__pic">
					</a>
					<a href="/img/pop4.png" class="hand__pop hand__pop_4">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/pop4-4.png"  alt="" class="hand__pic">
					</a>
					<a href="/img/pop5.png"  class="hand__pop hand__pop_5">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/pop5-5.png"  alt="" class="hand__pic">
					</a>
					<a href="/img/pop6.png" class="hand__pop hand__pop_6">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/pop6-6.png"  alt="" class="hand__pic">
					</a>
				</div>
			</div>
		</div>
		<div class="hand__foot">
			<div class="mid">
				<div class="sell sell_col cf d-flex-center">
					<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy"  alt="Купить билеты"></a>
					<div class="sell__right">
						<div class="sell__text">БИЛЕТЫ БЕЗ НАЦЕНКИ только на официальном сайте здесь</div>
						<div class="sell__text">Чтобы получить скидку, введите <span class="sell__promo">промокод: 2019</span></div>
					</div>
				</div>
				<div class="rate cf">
					<div class="rate__left">
						<span class="rate__text">Осталось билетов в продаже:</span>
					</div>
					<div class="rate__right">
						<div class="rate__bg">
							<div class="rate__l">
								<div class="rate__d" style="width:<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>%"></div>
							</div>
						</div>
						<div class="rate__perc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>%</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bike">
		<img src="<?=SITE_TEMPLATE_PATH?>/img/bike__man.png" alt="Космический байкер" class="bike__man">
		<div class="mid mid_small">
			<?/*Тайна трех планет - САМОЕ ожидаемое ШОУ 2018-2019*/?>
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_9txt"), Array("MODE"=>"php"));?>
			<div class="timer">				
				<?
				?>
				<div class="timer__head">До взлёта осталось:</div>
				<div class="timer__body">
					<div class="timer__block">
						<div class="timer__box" id="m_name1">0</div>
						<div class="timer__box timer__box_l" id="m_name2">0</div>
					</div>
					<div class="timer__block">
						<div class="timer__box timer__box_r" id="d_name1">0</div>
						<div class="timer__box"  id="d_name2">0</div>
					</div>
				</div>
				<div class="timer__text">
					<span class="timer__m" id="m_name">Месяцев</span>
					<span class="timer__d" id="d_name">Дней</span>
				</div>
			</div>
			<div class="bike__foot">
				<div class="sell sell_col cf">
					<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button2"), Array("MODE"=>"php"));?>" class="sell__button sell__button_big abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/ButtonsPR_01.png" class="link-prim"  alt="Купить билеты"></a>
				</div>
				<div class="rate rate_col cf d-flex-center">
					<div class="rate__left">
						<span class="rate__text">Осталось билетов в продаже:</span>
					</div>
					<div class="rate__right">
						<div class="rate__bg">
							<div class="rate__l">
								<div class="rate__d" style="width:<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>%"></div>
							</div>
						</div>
						<div class="rate__perc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>%</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="vid">
		<div class="mid mid_small">
			<div class="vid__head wow fadeInUp">
				<?/*«ТАЙНА ТРЕХ ПЛАНЕТ» - СОВЕРШЕННО НОВЫЙ ВЗГЛЯД НА ШОУ!*/?>
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_10title"), Array("MODE"=>"php"));?>
				
			</div>
			<div class="vid__con">
				<div class="vid__left wow fadeInLeft">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_10txt"), Array("MODE"=>"php"));?>
					<a class="vid__pdf yellow" href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_10download"), Array("MODE"=>"php"));?>" style="display: block;">скачать</a>
				</div>
				<div class="vid__right">
					<div class="vid__res">
						<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_10youtube"), Array("MODE"=>"php"));?>
					</div>
				</div>
			</div>
			<div class="vid__sell">
				<div class="sell cf d-flex-center">
					<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk"><img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy" alt="Купить билеты"></a>
					<div class="sell__right">
						<div class="sell__text">БИЛЕТЫ БЕЗ НАЦЕНКИ только на официальном сайте здесь</div>
						<div class="sell__text">Чтобы получить скидку, введите <span class="sell__promo">промокод: 2019</span></div>
					</div>
				</div>
				<div class="rate cf">
					<div class="rate__left">
						<span class="rate__text">Осталось билетов в продаже:</span>
					</div>
					<div class="rate__right">
						<div class="rate__bg">
							<div class="rate__l">
								<div class="rate__d" style="width:<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>%"></div>
							</div>
						</div>
						<div class="rate__perc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>%</div>
					</div>
				</div>
			</div>
			<div class="vid__foot wow fadeInUp">
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k10_director"), Array("MODE"=>"php"));?>
			</div>
		</div>
	</section>

	<section class="rev">
		<div class="rev__border">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/blink.png"  alt="Блик" class="rev__blink">
			<div class="mid">
				<h3 id="anchor_rev" class="rev__title">А ВЫ ГОТОВЫ ЭТО УВИДЕТЬ?</h3>
				<div class="slider">
				
				
					<?
					/*анонс последнего события*/
						$APPLICATION->IncludeComponent("bitrix:news.list", "resp_slider", Array(
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
							3 => "PREVIEW_PICTURE",
						),
						"FILTER_NAME" => "",	// Фильтр
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
						"IBLOCK_ID" => "19",	// Код информационного блока
						"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
						"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
						"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
						"NEWS_COUNT" => "100",	// Количество новостей на странице
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
				
				</div>
			</div>
			<div class="sell cf d-flex-center">
				<a href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button"), Array("MODE"=>"php"));?>" class="sell__button abiframelnk">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/Buttons_01.png"  class="link-buy" alt="Купить билеты">
				</a>
				<div class="sell__right">
					<div class="sell__text">БИЛЕТЫ БЕЗ НАЦЕНКИ только на официальном сайте здесь</div>
					<div class="sell__text">Чтобы получить скидку, введите <span class="sell__promo">промокод: 2019</span></div>
				</div>
			</div>
		</div>
	</div>
</section>



<footer class="foot">
	<div class="mid">
		<div class="foot__con">
			<div class="foot__l wow fadeInLeft">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="" class="foot__logo">
				<div class="foot__bay yellow">Заказ билетов:<br><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_tel"), Array("MODE"=>"php"));?></div>
				<div class="foot_messenger">
					<a target="_blank" href="https://api.whatsapp.com/send?phone=79227984996&text=%D0%9E%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D1%8C%D1%82%D0%B5%20%D0%BD%D0%B5%20%D0%B8%D0%B7%D0%BC%D0%B5%D0%BD%D1%8F%D1%8F%20%D1%8D%D1%82%D0%BE%20%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D0%BD%D0%B8%D0%B5%20subscribe_a7fa2f71-aa99-9427-ea0b-01646572ba39"><img src="<?=SITE_TEMPLATE_PATH?>/img/whatsapp.svg" alt="WhatsApp"></a>
					<a target="_blank" href="https://wep.wf/ecdnsz"><img src="<?=SITE_TEMPLATE_PATH?>/img/tg.svg" alt="telegram"></a>
					<a target="_blank" href="https://wep.wf/ecdnsz"><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.svg" alt="Vk"></a>
					<a target="_blank" href="https://wep.wf/ecdnsz"><img src="<?=SITE_TEMPLATE_PATH?>/img/massenger.svg" alt="mess"></a>
				</div>
				<div class="mess_cont">
					<p>Наши каналы</p>
				</div>
				<div class="foot__mail">
					<p>Контактная информация</p>
					<a href="#" class="foot__link">Концерный директор</a><br>
					<a href="#" class="foot__link">PR менеджер</a>
				</div>
				<div>
					<div class="icon__flex">
						<a target="_blank" href="https://instagram.com/safronovy_kosmos/" class="social__link"><svg class="icon icon-instagram-logo"><use xlink:href="#icon-instagram-logo"></use></svg></a>
						<a target="_blank" href="https://vk.com/safronovybrothers" class="social__link"><svg class="icon icon-vk-social-network-logo"><use xlink:href="#icon-vk-social-network-logo"></use></svg></a>
						<a target="_blank" href="https://www.facebook.com/bratyasafronovy/" class="social__link"><svg class="icon icon-facebook-logo"><use xlink:href="#icon-facebook-logo"></use></svg></a>
					</div>	
					
					<!--<div class="icon__foot blue">Наши каналы</div>-->
				</div>
				<div class="foot__mail">
					<a href="/main/" class="foot__link foot__link_last">Перейти на общий сайт</a>
				</div>
			</div>
			<div class="foot__r wow fadeInUp">
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_footer_txt"), Array("MODE"=>"php"));?>
				<img src="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"partners_img"), Array("MODE"=>"php"));?>"  alt="Наши партнёры" class="foot__logo">
			</div>
		</div>
	</div>
</footer>


<?/*
<footer class="foot">
	<div class="mid">
		<div class="foot__con">
			<div class="foot__l">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="Логотип Братьев Сафроновых" class="foot__logo">
				<div class="foot__bay yellow">Заказ билетов:<br><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_tel"), Array("MODE"=>"php"));?></div>
				<div class="icon">
					<div class="icon__flex">
						<a href="https://t.me/safronovybot" class="icon__item">
							<svg class="icon__svg" height="512" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs12"/><g id="g3885" transform="translate(297.22034,0)"><rect height="512" id="rect2987" style="fill:#000000;fill-opacity:0;fill-rule:nonzero;stroke:none" width="512" x="-297.22034" y="5.6843419e-014"/><path d="M 127.88103,94.198045 -218.4667,227.78507 c -23.63879,9.48433 -23.4986,22.66901 -4.30871,28.54816 l 86.38017,26.96101 33.05108,101.33207 c 4.018041,11.09077 2.03732,15.48953 13.683731,15.48953 8.98786,0 12.97504,-4.09778 17.98087,-8.98786 3.1833,-3.11513 22.08378,-21.49087 43.18752,-42.00936 l 89.85158,66.38643 c 16.5339,9.12161 28.47227,4.39617 32.58935,-15.35577 L 152.92948,122.20987 C 158.96812,98.000015 143.69981,87.018565 127.88103,94.198045 z M -122.83885,277.09998 71.862531,154.2616 c 9.71969,-5.89458 18.63166,-2.72542 11.31455,3.76981 l -166.71528,150.41932 -6.49136,69.23533 -32.809291,-100.58608 z" class="icon__color"/></g></svg></a>
						<a href="https://instagram.com/safronovy_kosmos/" class="icon__item"><svg class="icon__svg" height="512" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs12"/><g id="g5758"><rect height="512" id="rect2987" style="fill:#000000;fill-opacity:0;fill-rule:nonzero;stroke:none" width="512" x="0" y="0"/><path d="M 366.4272,76.00001 H 145.5754 c -38.3663,0 -69.5753,31.2032 -69.5753,69.57555 v 73.48163 147.3776 c 0,38.3633 31.209,69.5652 69.5753,69.5652 H 366.435 c 38.3611,0 69.5649,-31.2019 69.5649,-69.5652 V 219.04421 145.55217 c -0.013,-38.36066 -31.209,-69.55216 -69.5727,-69.55216 z m 19.9573,41.48604 7.9549,-0.0298 v 7.91868 53.10168 l -60.8151,0.19486 -0.2078,-61.01518 53.068,-0.17017 z M 204.6148,219.04421 c 11.5387,-15.95299 30.24,-26.40861 51.3858,-26.40861 21.146,0 39.8537,10.45562 51.3691,26.40861 7.5041,10.41275 11.9998,23.1637 11.9998,36.94995 0,34.93781 -28.4527,63.36633 -63.3767,63.36633 -34.937,0 -63.3596,-28.42852 -63.3596,-63.36633 0.013,-13.78625 4.4878,-26.5372 11.9816,-36.94995 z m 196.3,147.37508 c 0,19.0355 -15.4708,34.4922 -34.4889,34.4922 H 145.5754 c -19.026,0 -34.4993,-15.4554 -34.4993,-34.4922 V 219.04421 h 53.7409 c -4.6438,11.41428 -7.2509,23.88205 -7.2509,36.94995 0,54.25908 44.152,98.43403 98.4358,98.43403 54.2864,0 98.4332,-44.17624 98.4332,-98.43403 0,-13.06921 -2.6251,-25.53567 -7.2612,-36.94995 h 53.7422 v 147.37508 z" class="icon__color"/></g></svg></a>
						<a href="https://www.youtube.com/user/BrothersSafronovy" class="icon__item"><svg class="icon__svg" height="512" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs12"/><g id="g5124"><rect height="512" id="rect2987" style="fill:#000000;fill-opacity:0;fill-rule:nonzero;stroke:none" width="512" x="0" y="0"/><path d="m 456,250.85266 c 0,107.60904 -87.9126,194.8442 -196.36397,194.8442 -34.43066,0 -66.77677,-8.80168 -94.9199,-24.24162 L 56.000005,456 91.437745,351.45584 C 73.559715,322.08872 63.265025,287.65523 63.265025,250.85124 63.265025,143.23516 151.18049,56 259.63463,56 368.0874,56.001 456,143.23657 456,250.85266 z M 259.63603,87.03196 c -91.04092,0 -165.093965,73.49248 -165.093965,163.8207 0,35.84056 11.683465,69.04162 31.446055,96.04529 l -20.62177,60.83151 63.44285,-20.16403 c 26.07126,17.11323 57.29196,27.09805 90.82543,27.09805 91.02965,0 165.09396,-73.48543 165.09396,-163.81224 0,-90.3268 -74.06292,-163.81928 -165.09256,-163.81928 z m 99.15526,208.68972 c -1.20989,-1.98879 -4.4185,-3.18602 -9.22424,-5.5706 -4.81705,-2.3874 -28.48964,-13.94551 -32.894,-15.53429 -4.41845,-1.59301 -7.63122,-2.39304 -10.83838,2.38458 -3.20432,4.79028 -12.42856,15.53429 -15.24273,18.72031 -2.80853,3.19166 -5.60863,3.59026 -10.42569,1.20003 -4.80578,-2.38739 -20.32177,-7.4284 -38.70826,-23.70215 -14.30749,-12.65815 -23.96978,-28.2854 -26.77831,-33.07147 -2.80854,-4.77903 -0.2972,-7.3622 2.10993,-9.73975 2.16626,-2.14796 4.81423,-5.58186 7.22416,-8.36364 2.40712,-2.79447 3.20715,-4.78184 4.80861,-7.96926 1.61272,-3.18884 0.80002,-5.97485 -0.3986,-8.3707 -1.20286,-2.38317 -10.83274,-25.88955 -14.84415,-35.449 -4.01138,-9.55947 -8.0115,-7.96646 -10.82568,-7.96646 -2.80996,0 -6.01569,-0.40002 -9.22987,-0.40002 -3.20997,0 -8.42703,1.19864 -12.83562,5.97344 -4.41001,4.78325 -16.84138,16.33291 -16.84138,39.83365 0,23.50497 17.24279,46.21133 19.65273,49.39594 2.40431,3.17756 33.28838,52.9721 82.21811,72.10228 48.94802,19.11328 48.94802,12.74407 57.77365,11.937 8.81437,-0.78735 28.46992,-11.54403 32.48832,-22.70072 4.0086,-11.14964 4.0086,-20.71896 2.8114,-22.70917 z" class="icon__color" style="fill-rule:evenodd"/></g></svg></a>
						<a href="https://www.facebook.com/bratyasafronovy/" class="icon__item"><svg class="icon__svg" height="512" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs12"/><g id="g5991"><rect height="512" id="rect2987" style="fill:#000000;fill-opacity:0;fill-rule:nonzero;stroke:none" width="512" x="0" y="0"/><path d="M 286.96783,455.99972 V 273.53753 h 61.244 l 9.1699,-71.10266 h -70.41246 v -45.39493 c 0,-20.58828 5.72066,-34.61942 35.23496,-34.61942 l 37.6554,-0.0112 V 58.807915 c -6.5097,-0.87381 -28.8571,-2.80794 -54.8675,-2.80794 -54.28803,0 -91.44995,33.14585 -91.44995,93.998125 v 52.43708 h -61.40181 v 71.10266 h 61.40039 v 182.46219 h 73.42707 z" class="icon__color"/></g></svg></a>
					</div>	

					<div class="icon__foot blue">Наши каналы</div>
				</div>
				<div class="foot__mail">
					<p>Контактная информация</p>
					<a href="#" class="foot__link">Концерный директор</a><br><a href="#" class="foot__link">PR менеджер</a><br><br><br>
					<a href="/main/" class="foot__link foot__link_last">Перейти на общий сайт</a>
				</div>
			</div>
			<div class="foot__r">
				<p>Продолжительность шоу — 1 час 30 минут без перерыва.</p>
				<p>Шоу рекомендовано для зрителей от 5 лет. Для входа в зал каждому зрителю, независимо от возраста, необходимо приобретать отдельный билет. Сцена находится на комфортной высоте, с каждых рядов хорошо и удобно видно. </p>
				<p>VIP ПАРТЕР «Магические места» - первые три ряда на одном уровне. В VIP- Билеты включены: места с повышенной комфортностью, VIP парковка на территории ЦВК «Эспоцентр» , а также фотоссесия с Братьями Сафроновыми. Схема проезда на парковку в электронном билете.</p>
				<p>ТРИБУНА  начинается сразу за VIP- партером. Каждый ее последующий ряд выше предыдущего. Последние 6 рядов (сектор «Иследователи Галактики»)  особенно возвышены по отношению ко всей трибуне.</p>
				<p>Билет на подарок вы можете приобрести вместе с билетом на шоу. Подарок можно получить по билету до или после представления.</p>
				<p>Внимание! Вы можете покупать по 10 билетов, один раз в 15 минут или обратиться в наш стол групповых заказов билетов по телефону.</p>
				<p>При покупке билета здесь, на нашем официальном сайте, Вы можете оплатить билеты банковской картой и получить электронные билеты на электронную почту. Их необходимо распечатать для входа в зал на представление.</p>
				<p class="yellow">Увидимся на нашем шоу! Ваши Братья Сафроновы!</p>
				
				
				<img src="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"partners_img"), Array("MODE"=>"php"));?>"  alt="Наши партнёры" class="foot__logo">
			</div>
		</div>
	</div>
</footer>
*/?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>