<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "БРАТЬЯ САФРОНОВЫ - Самое Масштабное Космическое Шоу «Тайна трех планет» в ЦВК \"Экспоцентр\"");
$APPLICATION->SetPageProperty("description", "БРАТЬЯ САФРОНОВЫ представляют Новое Космическое Иллюзионное шоу страны в ЦВК Экспоцентр \"Тайна трех планет\" ТОП Рейтинга «Новогодние елки Москвы 2018». Билеты без наценки только на официальном сайте");
?>
<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowMeta("keywords")?>
	<?$APPLICATION->ShowMeta("description")?>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWZMMDP');</script>
<!-- End Google Tag Manager -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:image" content="<?=SITE_TEMPLATE_PATH?>/mobile/img/Fotonka.jpg">
	<?/*
	<link rel="shortcut icon"  href="<?=SITE_TEMPLATE_PATH?>/mobile/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon"  href="<?=SITE_TEMPLATE_PATH?>/mobile/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72"  href="<?=SITE_TEMPLATE_PATH?>/mobile/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114"  href="<?=SITE_TEMPLATE_PATH?>/mobile/img/favicon/apple-touch-icon-114x114.png">
	*/?>
	<link  href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<link rel="stylesheet"  href="<?=SITE_TEMPLATE_PATH?>/mobile/css/main.min.css">

</head>

<body style=" margin:  0 auto; ">
	<!-- svg код для иконок на странице -->
	<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<defs>
			<symbol id="icon-arrow" viewBox="0 0 32 32">
				<title>arrow</title>
				<path fill="#fff" style="fill: var(--color1, #fff)" d="M24.191 15.362l-15.095-15.095c-0.355-0.355-0.925-0.355-1.281 0s-0.355 0.925 0 1.281l14.452 14.452-14.452 14.452c-0.355 0.355-0.355 0.925 0 1.281 0.174 0.174 0.409 0.268 0.637 0.268s0.463-0.087 0.637-0.268l15.095-15.095c0.355-0.349 0.355-0.925 0.007-1.274z"></path>
			</symbol>
			<symbol id="icon-facebook-logo" viewBox="0 0 32 32">
				<title>facebook-logo</title>
				<path d="M23.999 0.007l-4.15-0.007c-4.662 0-7.675 3.091-7.675 7.875v3.631h-4.172c-0.361 0-0.652 0.292-0.652 0.653v5.261c0 0.361 0.292 0.652 0.652 0.652h4.172v13.275c0 0.361 0.292 0.653 0.652 0.653h5.444c0.361 0 0.652-0.292 0.652-0.652v-13.275h4.878c0.361 0 0.652-0.292 0.652-0.652l0.002-5.261c0-0.173-0.069-0.339-0.191-0.461s-0.289-0.191-0.462-0.191h-4.88v-3.078c0-1.479 0.353-2.23 2.28-2.23l2.795-0.001c0.36 0 0.652-0.292 0.652-0.652v-4.885c0-0.36-0.292-0.652-0.651-0.652z"></path>
			</symbol>
			<symbol id="icon-instagram-logo" viewBox="0 0 32 32">
				<title>instagram-logo</title>
				<path d="M28.8 0h-25.6c-1.76 0-3.2 1.44-3.2 3.2v25.6c0 1.76 1.44 3.2 3.2 3.2h25.6c1.76 0 3.2-1.44 3.2-3.2v-25.6c0-1.76-1.44-3.2-3.2-3.2zM16 9.6c3.52 0 6.4 2.88 6.4 6.4s-2.88 6.4-6.4 6.4c-3.52 0-6.4-2.88-6.4-6.4s2.88-6.4 6.4-6.4zM4 28.8c-0.48 0-0.8-0.32-0.8-0.8v-13.6h3.36c-0.16 0.48-0.16 1.12-0.16 1.6 0 5.28 4.32 9.6 9.6 9.6s9.6-4.32 9.6-9.6c0-0.48 0-1.12-0.16-1.6h3.36v13.6c0 0.48-0.32 0.8-0.8 0.8h-24zM28.8 7.2c0 0.48-0.32 0.8-0.8 0.8h-3.2c-0.48 0-0.8-0.32-0.8-0.8v-3.2c0-0.48 0.32-0.8 0.8-0.8h3.2c0.48 0 0.8 0.32 0.8 0.8v3.2z"></path>
			</symbol>
			<symbol id="icon-vk-social-network-logo" viewBox="0 0 32 32">
				<title>vk-social-network-logo</title>
				<path d="M31.83 23.36c-0.039-0.084-0.075-0.153-0.108-0.208-0.555-1-1.616-2.227-3.182-3.682l-0.033-0.033-0.017-0.016-0.017-0.017h-0.017c-0.711-0.678-1.161-1.133-1.349-1.366-0.345-0.444-0.422-0.894-0.234-1.35 0.133-0.344 0.633-1.071 1.5-2.182 0.456-0.589 0.816-1.061 1.083-1.416 1.922-2.555 2.755-4.187 2.499-4.898l-0.099-0.166c-0.067-0.1-0.239-0.192-0.516-0.275s-0.633-0.097-1.067-0.042l-4.798 0.033c-0.078-0.028-0.189-0.025-0.333 0.008s-0.217 0.050-0.217 0.050l-0.084 0.042-0.066 0.050c-0.056 0.033-0.117 0.091-0.183 0.175s-0.122 0.181-0.166 0.292c-0.522 1.344-1.116 2.594-1.783 3.749-0.411 0.689-0.788 1.286-1.133 1.791s-0.633 0.877-0.866 1.116c-0.233 0.239-0.444 0.43-0.633 0.575s-0.333 0.206-0.433 0.183c-0.1-0.022-0.194-0.045-0.284-0.067-0.155-0.1-0.28-0.236-0.375-0.408s-0.158-0.389-0.192-0.65c-0.033-0.261-0.053-0.486-0.058-0.675s-0.003-0.456 0.008-0.8c0.012-0.344 0.017-0.578 0.017-0.7 0-0.422 0.008-0.88 0.025-1.375s0.030-0.886 0.042-1.174c0.011-0.289 0.017-0.594 0.017-0.916s-0.020-0.575-0.058-0.758c-0.038-0.183-0.097-0.361-0.174-0.533s-0.192-0.305-0.342-0.4c-0.15-0.094-0.336-0.169-0.558-0.225-0.589-0.133-1.338-0.205-2.249-0.216-2.066-0.022-3.393 0.111-3.982 0.4-0.233 0.122-0.444 0.289-0.633 0.5-0.2 0.244-0.228 0.378-0.084 0.4 0.667 0.1 1.138 0.339 1.416 0.716l0.1 0.2c0.078 0.144 0.156 0.4 0.233 0.766s0.128 0.772 0.15 1.216c0.055 0.811 0.055 1.505 0 2.083s-0.108 1.027-0.158 1.35-0.125 0.583-0.225 0.783c-0.1 0.2-0.167 0.322-0.2 0.366s-0.061 0.072-0.083 0.083c-0.144 0.055-0.295 0.084-0.45 0.084s-0.344-0.078-0.566-0.233c-0.222-0.156-0.453-0.369-0.691-0.641s-0.508-0.653-0.808-1.141c-0.3-0.489-0.611-1.066-0.933-1.733l-0.267-0.483c-0.167-0.311-0.394-0.764-0.683-1.358s-0.544-1.169-0.766-1.725c-0.089-0.233-0.222-0.411-0.4-0.533l-0.083-0.050c-0.055-0.044-0.144-0.091-0.266-0.142s-0.25-0.086-0.383-0.108l-4.565 0.033c-0.467 0-0.783 0.106-0.95 0.317l-0.067 0.1c-0.033 0.056-0.050 0.144-0.050 0.267s0.033 0.272 0.1 0.45c0.666 1.566 1.391 3.077 2.174 4.532s1.463 2.627 2.041 3.515c0.578 0.889 1.166 1.727 1.766 2.516s0.997 1.294 1.191 1.516c0.194 0.222 0.347 0.389 0.458 0.5l0.417 0.4c0.267 0.267 0.658 0.586 1.175 0.958s1.089 0.739 1.716 1.1c0.628 0.361 1.358 0.655 2.191 0.883s1.644 0.319 2.433 0.275h1.916c0.389-0.034 0.683-0.156 0.883-0.367l0.066-0.084c0.045-0.066 0.086-0.169 0.125-0.308s0.058-0.292 0.058-0.458c-0.011-0.478 0.025-0.908 0.108-1.291s0.178-0.672 0.284-0.866c0.106-0.194 0.225-0.358 0.358-0.491s0.228-0.214 0.284-0.242c0.055-0.028 0.099-0.047 0.133-0.058 0.267-0.089 0.58-0.003 0.942 0.258s0.7 0.583 1.016 0.966c0.317 0.383 0.697 0.814 1.141 1.291s0.833 0.833 1.166 1.066l0.333 0.2c0.222 0.133 0.511 0.256 0.867 0.367s0.666 0.139 0.933 0.083l4.265-0.067c0.422 0 0.75-0.070 0.983-0.208s0.372-0.292 0.417-0.458c0.045-0.167 0.047-0.355 0.008-0.567s-0.078-0.358-0.117-0.441z"></path>
			</symbol>
			<symbol id="icon-library" viewBox="0 0 34 32">
				<title>library</title>
				<path d="M32 30v-2h-2v-12h2v-2h-6v2h2v12h-6v-12h2v-2h-6v2h2v12h-6v-12h2v-2h-6v2h2v12h-6v-12h2v-2h-6v2h2v12h-2v2h-2v2h34v-2h-2z"></path>
				<path d="M16 0h2l16 10v2h-34v-2l16-10z"></path>
			</symbol>
		</defs>
	</svg>
	
	
	
	
	
	
	
	<header class="head">
		<div class="mid">
			<div class="head__top">
				<div class="head__nav">
					<nav class="nav">
						<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_topmenu","MOBILE"=>"Y"), Array("MODE"=>"php"));?>
						
					</nav>
				</div>
				<div class="head__logo">
					<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/head__logo.png" alt="" class="head__logoimg">
					<div class="head__slogan">
						...ГРЯДЕТ 2019... ГЛАВНОЕ НОВОГОДНЕЕ ШОУ СТРАНЫ 
						КОСМИЧЕСКОЕ ПУТЕШЕСТВИЕ ДЛЯ ВЗРОСЛЫХ И ДЕТЕЙ
					</div>
				</div>
			</div>
			<!-- Добавился HTML -->
			<div class="cosmo">
				<span class="cosmo__area cosmo__1--active-area"  onclick=""></span>
				<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/cosmo1.png" alt="" class="cosmo__img cosmo__img_1"  onclick="">
				
				<span class="cosmo__area cosmo__2--active-area"  onclick=""></span>	
				<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/cosmo2.png" alt="" class="cosmo__img cosmo__img_2"  onclick="">
				

				<span class="cosmo__area cosmo__3--active-area"  onclick=""></span>
				<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/cosmo3.png" alt="Т" class="cosmo__img cosmo__img_3"  onclick="">
				
			</div>

			<div class="head__title">
				<img class="head__titleimg" src="<?=SITE_TEMPLATE_PATH?>/mobile/img/head__title.png" alt="Космическая одиссея. Тайна трёх планет братьев Сафроновых.">
				<div class="head__age">5+</div>
				<div class="head__desc">
					
					<?
					/*межгалактический лайнер готов к полёту*/
					$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_lainer","MOBILE"=>"Y"), Array("MODE"=>"php"));?>
				</div>
			</div>
			<div class="head__bottom">
				<div class="sell sell_col cf">
					<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button"><img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell.png" alt="Кнопка купить"></a>
					<div class="sell__right">
						<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_beznacenki"), Array("MODE"=>"php", "MOBILE"=>"Y"));?>
					</div>
				</div>
				<div class="rate cf">
					<div class="rate__left">
						<span class="rate__text">Осталось билетов в продаже:</span>
					</div>
					<div class="rate__right">
						<div class="rate__bg">
							<div class="rate__l">
								<div class="rate__d"></div>
							</div>
						</div>
						<div class="rate__perc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov","MOBILE"=>"Y"), Array("MODE"=>"php"));?>%</div>
					</div>
				</div>
			</div>
		</div>		
	</header>

	<section class="prime">
		<div class="mid">
			<h3 class="prime__title">ИЛЛЮЗИОНИСТЫ № 1 В РОССИи</h3>
			<div class="prime__desc">ПРЕДСТАВЛЯЮТ:</div>
		</div>
		<div class="prime__center">
			<div class="mid">
				<div class="prime__rel cf">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_2topname", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
					
					<div class="prime__cosmo">						
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/prime__pic1.jpg" alt="Картинка 1" class="prime__pic active" data-step-slide="1">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/Foto2.jpg" alt="Картинка 2" class="prime__pic" data-step-slide="2">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/prime__pic3.jpg" alt="Картинка 3" class="prime__pic" data-step-slide="3">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/prime__pic4.jpg" alt="Картинка 4" class="prime__pic" data-step-slide="4">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/Foto5.jpg" alt="Картинка 5" class="prime__pic" data-step-slide="5">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/Foto6.jpg" alt="Картинка 6" class="prime__pic" data-step-slide="6">
					</div>
					<ul class="prime__list">
						
						
						<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_2txt", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="prime__foot">
			<div class="mid">
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_2subtitle", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
				<div class="sell cf d-flex-center">
					<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button"><img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell.png" alt="Кнопка купить"></a>
					<div class="sell__right">
						<div class="sell__text"><span class="sell__promo sell__promo_mid">промокод: 2019</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bro">
	<div class="mid">
		<div class="bro__header">
			<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/bro__title.png" alt="Братья Сафроновы" class="bro__title">
		</div>
		<div class="bro_block">
			<span class="bro__area bro__1--active-area" onclick=""></span>
			<div class="bro__man bro__man_serg" onclick=""></div>
			<span class="bro__area bro__2--active-area" onclick=""></span>
			<div class="bro__man bro__man_ilya" onclick=""></div>
			<span class="bro__area bro__3--active-area" onclick=""></span>
			<div class="bro__man bro__man_andr" onclick=""></div>
		</div>
		<div class="bro__con">
			<ul class="bro__list">
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_bro", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
			</ul>
		</div>
	</div>
</section>

<section class="show">
	<div class="mid">
		<div class="show__sell">
			<div class="sell sell_col cf">
				<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button"><img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell.png" alt="Кнопка купить"></a>
				<div class="sell__right">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_beznacenki"), Array("MODE"=>"php", "MOBILE"=>"Y"));?>
				</div>
			</div>
		</div>
		<div class="show__head">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_4title", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
		</div>
		<div class="show__con cf">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_4txt", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>			
			
			<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/show__box.png" alt="ТАЙНА ТРЕХ ПЛАНЕТ" class="show__box">
		</div>
	</div>
</section>

<section class="ship">
	<div class="mid">
		<div class="ship__head">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_5title", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
		</div>
	</div>	
	<div class="ship__box">
		<div class="mid mid_small">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_5txt", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
			
		</div>
	</div>
	<div class="ship__sell">
		<div class="sell sell_col cf">
			<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button"><img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell.png" alt=""></a>
			<div class="sell__right">
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_beznacenki"), Array("MODE"=>"php", "MOBILE"=>"Y"));?>
			</div>
		</div>
	</div>
</section>

<section class="world">
	<div class="mid">
		<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_6txt", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
		
	</div>
</section>

<section class="hand">
	<div class="mid">
		<div class="hand__sell">
			
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_6txt2","MOBILE"=>"Y"), Array("MODE"=>"php"));?>
			
			<div class="sell sell_col cf">
				<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button"><img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell.png" alt=""></a>
				<div class="sell__right">
					<div class="sell__text"><span class="sell__promo">промокод: 2019</span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="hand__box">
		<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/hand__bot.png"  alt="Кликайте для увеличения" class="hand__bot">
		<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/hand__top.png" alt="Кликайте для увеличения" class="hand__top">
		<div class="head__age hand__age">5+</div>
		<div class="mid">
			<div class="hand_gallary">
				
				<?/*Нашим пассажирам*/?>
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_8txt","MOBILE"=>"Y"), Array("MODE"=>"php"));?>
				
				<div class="hand__pops cf">
					<a  href="img/pop1.png" class="hand__pop hand__pop_1" data-fancybox="gallery">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/pop1.png" alt="" class="hand__pic" data-fancybox="gallery">
					</a>
					<a  href="img/pop2.png" class="hand__pop hand__pop_2" data-fancybox="gallery" >
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/pop2.png" alt="" class="hand__pic">
					</a>
					<a  href="img/pop3.png" class="hand__pop hand__pop_3" data-fancybox="gallery">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/pop3.png" alt="" class="hand__pic">
					</a>
					<a  href="img/pop4.png" class="hand__pop hand__pop_4" data-fancybox="gallery">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/pop4.png" alt="" class="hand__pic">
					</a>
					<a  href="img/pop5.png" class="hand__pop hand__pop_5" data-fancybox="gallery">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/pop5.png" alt="" class="hand__pic">
					</a>
					<a  href="img/pop6.png" class="hand__pop hand__pop_6" data-fancybox="gallery">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/pop6.png" alt="" class="hand__pic">
					</a>
					<a  href="img/pop6.1.png" class="hand__pop hand__pop_6 hidden" data-fancybox="gallery">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/pop6.1.png" alt="" class="hand__pic">
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="hand__foot">
		<div class="mid">
			<div class="sell sell_col cf">
				<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button"><img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell.png" alt="Кнопка купить"></a>
				<div class="sell__right">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_beznacenki"), Array("MODE"=>"php", "MOBILE"=>"Y"));?>
				</div>
			</div>
			<div class="rate cf">
				<div class="rate__left">
					<span class="rate__text">Осталось билетов в продаже:</span>
				</div>
				<div class="rate__right">
					<div class="rate__bg">
						<div class="rate__l">
							<div class="rate__d"></div>
						</div>
					</div>
					<div class="rate__perc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov","MOBILE"=>"Y"), Array("MODE"=>"php"));?>%</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bike">
	<div class="mid mid_small">
		<div class="bike__head">
			<?/*Тайна трех планет - САМОЕ ожидаемое ШОУ 2018-2019*/?>
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_9txt", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
			
			<div class="light__block">
				<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/light.png" alt="light">
			</div>
			<p class="bike__desc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_9txt2", "MOBILE"=>"Y"), Array("MODE"=>"php"));?></p>
		</div>
		<div class="bike_man">
			<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/bike-man.png" alt="bike">
		</div>
		<div class="bike__con">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_9txt3", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
			
		</div>
		<div class="timer">				
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
				<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button2","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button sell__button_big"><img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell2.png" alt=""></a>
			</div>
			<div class="rate cf">
				<div class="rate__left">
					<span class="rate__text">Осталось билетов в продаже:</span>
				</div>
				<div class="rate__right">
					<div class="rate__bg">
						<div class="rate__l">
							<div class="rate__d"></div>
						</div>
					</div>
					<div class="rate__perc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov","MOBILE"=>"Y"), Array("MODE"=>"php"));?>%</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="vid">
	<div class="mid mid_small">
		<div class="vid__head">
			<?/*«ТАЙНА ТРЕХ ПЛАНЕТ» - СОВЕРШЕННО НОВЫЙ ВЗГЛЯД НА ШОУ!*/?>
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_10title", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
		</div>
		<div class="vid__con">
			<div class="vid__right">
				<div class="vid__res">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_10youtube"), Array("MODE"=>"php"));?>
				</div>
			</div>
			<div class="vid__left">
				
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_10txt", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
				
				
			</div>
		</div>
		<div class="vid__sell">
			<div class="sell sell_col cf">
				<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button"><img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell.png" alt=""></a>
				<div class="sell__right">
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_beznacenki"), Array("MODE"=>"php", "MOBILE"=>"Y"));?>
				</div>
			</div>
			<div class="rate cf">
				<div class="rate__left">
					<span class="rate__text">Осталось билетов в продаже:</span>
				</div>
				<div class="rate__right">
					<div class="rate__bg">
						<div class="rate__l">
							<div class="rate__d"></div>
						</div>
					</div>
					<div class="rate__perc"><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov","MOBILE"=>"Y"), Array("MODE"=>"php"));?>%</div>
				</div>
			</div>
			<a class="vid__pdf white" href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_10download"), Array("MODE"=>"php"));?>" target="_blank">скачать презентацию</a>
		</div>
		<div class="vid__foot">
			<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k10_director", "MOBILE"=>"Y"), Array("MODE"=>"php"));?>
		</div>
	</div>
</section>

<section id="rev" class="rev">
	<div class="rev__border">
		<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/blink.png" alt="Блик" class="rev__blink">
		<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/blink.png" alt="Блик" class="rev__blink2">
		<div class="mid">
			<h3 class="rev__title">А ВЫ ГОТОВЫ ЭТО УВИДЕТЬ?</h3>
			<div class="slider" >
				
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
		<div class="sell sell_col rev__sell cf">
			<a  href="<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_button","MOBILE"=>"Y"), Array("MODE"=>"php"));?>" class="sell__button">
				<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/sell.png" alt="">
			</a>
			<div  id="order" class="sell__right ">
				<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_beznacenki"), Array("MODE"=>"php", "MOBILE"=>"Y"));?>
			</div>
		</div>
	</div>
</div>
</section>

<footer class="foot">
	<div class="mid">
		<div class="foot__con">
			<div class="foot__l">
				<div class="foot__bay yellow">Заказ билетов:<br><?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_tel","MOBILE"=>"Y"), Array("MODE"=>"php"));?></div>
				<div class="social_bot">
					<a target="_blank" href="https://api.whatsapp.com/send?phone=79227984996&text=%D0%9E%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D1%8C%D1%82%D0%B5%20%D0%BD%D0%B5%20%D0%B8%D0%B7%D0%BC%D0%B5%D0%BD%D1%8F%D1%8F%20%D1%8D%D1%82%D0%BE%20%D1%81%D0%BE%D0%BE%D0%B1%D1%89%D0%B5%D0%BD%D0%B8%D0%B5%20subscribe_a7fa2f71-aa99-9427-ea0b-01646572ba39"><img src="<?=SITE_TEMPLATE_PATH?>/img/whatsapp.svg" alt="WhatsApp"></a>
					<a target="_blank" href="https://wep.wf/ecdnsz"><img src="<?=SITE_TEMPLATE_PATH?>/img/tg.svg" alt="telegram"></a>
					<a target="_blank" href="https://wep.wf/ecdnsz"><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.svg" alt="Vk"></a>
					<a target="_blank" href="https://wep.wf/ecdnsz"><img src="<?=SITE_TEMPLATE_PATH?>/img/massenger.svg" alt="mess"></a>
				</div>
				<div class="mess_cont">
					<p>Связаться с нами</p>
				</div>
				<div class="foot__r">
					
					<?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_footer_txt","MOBILE"=>"Y"), Array("MODE"=>"php"));?>
					
				</div>
				<div class="social_contact">
					<div class="logo_footer">
						<img src="<?=SITE_TEMPLATE_PATH?>/mobile/img/logo.png" alt="" class="foot__logo">
					</div>
					<div class="social_icon">
						<div class="icon__flex">
							<a target="_blank" href="https://instagram.com/safronovy_kosmos/" class="social__link"><svg class="icon icon-instagram-logo"><use xlink:href="#icon-instagram-logo"></use></svg></a>
							<a target="_blank" href="https://vk.com/safronovybrothers" class="social__link"><svg class="icon icon-vk-social-network-logo"><use xlink:href="#icon-vk-social-network-logo"></use></svg></a>
							<a target="_blank" href="https://www.facebook.com/bratyasafronovy/" class="social__link"><svg class="icon icon-facebook-logo"><use xlink:href="#icon-facebook-logo"></use></svg></a>
						</div>	
						<span>Наши каналы</span>
					</div>		
				</div>

				<div class="foot__mail">
					<a  href="/main/" class="foot__link foot__link_last">Перейти на общий сайт</a>
				</div>
			</div>
		</div>
	</footer>

	<script>var ostalos_biletov = <?$APPLICATION->IncludeFile("/include/txt_info.php", Array("CODE"=>"k_ostalos_biletov"), Array("MODE"=>"php"));?>;</script>
	<script src="<?=SITE_TEMPLATE_PATH?>/mobile/js/scripts.min.js?v=1.4"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/init.js?v=3.7"></script>

	<link rel="stylesheet" href="//s3.intickets.ru/intickets.min.css">

	<script src="//s3.intickets.ru/intickets.min.js"></script>
</body>

</html>
