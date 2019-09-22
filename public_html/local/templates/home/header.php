<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowHead();?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="https://safronovy.ru<?=SITE_TEMPLATE_PATH?>/img/Fotonka.jpg">
	<meta property="og:image:secure_url" content="https://safronovy.ru<?=SITE_TEMPLATE_PATH?>/img/Fotonka.jpg">
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#001725">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#001725">
	<!-- iOS Safari -->

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700"  rel="stylesheet">
	<!-- End Fonts -->
	<!-- Styles -->
	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/normalize.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/js/slick/slick.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/js/slick/slick-theme.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/adaptive.css");

	?>
	<!-- End Styles -->
	<!-- Java Script Files -->
	<?	
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.min.js" );
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/_lazy.js" );
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/slick/slick.js" );
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js" );
	?>
	<!-- End JS -->
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWZMMDP');</script>
<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWZMMDP"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<section class="svg">
			<!-- svg код для иконок на странице -->
			<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				<defs>
					<symbol id="icon-facebook-logo" viewBox="0 0 32 32">
						<title>facebook-logo</title>
						<path d="M23.999 0.007l-4.15-0.007c-4.662 0-7.675 3.091-7.675 7.875v3.631h-4.172c-0.361 0-0.652 0.292-0.652 0.653v5.261c0 0.361 0.292 0.652 0.652 0.652h4.172v13.275c0 0.361 0.292 0.653 0.652 0.653h5.444c0.361 0 0.652-0.292 0.652-0.652v-13.275h4.878c0.361 0 0.652-0.292 0.652-0.652l0.002-5.261c0-0.173-0.069-0.339-0.191-0.461s-0.289-0.191-0.462-0.191h-4.88v-3.078c0-1.479 0.353-2.23 2.28-2.23l2.795-0.001c0.36 0 0.652-0.292 0.652-0.652v-4.885c0-0.36-0.292-0.652-0.651-0.652z"></path>
					</symbol>
					<symbol id="icon-instagram-logo" viewBox="0 0 32 32">
						<title>instagram-logo</title>
						<path d="M28.8 0h-25.6c-1.76 0-3.2 1.44-3.2 3.2v25.6c0 1.76 1.44 3.2 3.2 3.2h25.6c1.76 0 3.2-1.44 3.2-3.2v-25.6c0-1.76-1.44-3.2-3.2-3.2zM16 9.6c3.52 0 6.4 2.88 6.4 6.4s-2.88 6.4-6.4 6.4c-3.52 0-6.4-2.88-6.4-6.4s2.88-6.4 6.4-6.4zM4 28.8c-0.48 0-0.8-0.32-0.8-0.8v-13.6h3.36c-0.16 0.48-0.16 1.12-0.16 1.6 0 5.28 4.32 9.6 9.6 9.6s9.6-4.32 9.6-9.6c0-0.48 0-1.12-0.16-1.6h3.36v13.6c0 0.48-0.32 0.8-0.8 0.8h-24zM28.8 7.2c0 0.48-0.32 0.8-0.8 0.8h-3.2c-0.48 0-0.8-0.32-0.8-0.8v-3.2c0-0.48 0.32-0.8 0.8-0.8h3.2c0.48 0 0.8 0.32 0.8 0.8v3.2z"></path>
					</symbol>
					<symbol id="icon-whatsapp" viewBox="0 0 32 32">
						<title>whatsapp</title>
						<path d="M15.994 0c-8.833 0-15.994 7.161-15.994 15.994v0c0 2.985 0.057 4.34 1.481 6.728l-1.481 9.277 8.726-1.745c1.921 1.106 4.225 1.758 6.68 1.758 0.207 0 0.412-0.005 0.617-0.014l-0.029 0.001c0.128 0.004 0.278 0.006 0.429 0.006 8.84 0 16.006-7.166 16.006-16.006s-7.166-16.006-16.006-16.006c-0.151 0-0.301 0.002-0.451 0.006l0.022-0zM15.994 28.705c-0.005 0-0.011 0-0.017 0-2.282 0-4.423-0.609-6.267-1.674l0.061 0.032-5.638 0.827 0.964-5.408c-1.111-1.833-1.768-4.048-1.768-6.417 0-0.025 0-0.049 0-0.074l-0 0.004c0-6.975 5.655-12.63 12.63-12.63s12.63 5.655 12.63 12.63c0 6.975-5.655 12.63-12.63 12.63v0z"></path>
						<path d="M8.91 21.816c-0.197-0.428-0.314-0.929-0.321-1.456l-0-0.003c-0.004-0.034-0.007-0.074-0.007-0.115s0.002-0.080 0.007-0.12l-0 0.005c0.16-0.202 0.359-0.364 0.587-0.478l0.010-0.005 1.274-0.723 0.769-0.413 0.253-0.138 0.367-0.218c0.087-0.041 0.19-0.067 0.298-0.069h0.001c0.172 0 0.402 0.161 0.677 0.471s0.563 0.631 0.827 0.953 0.482 0.471 0.643 0.471c0.036 0.007 0.078 0.011 0.121 0.011s0.084-0.004 0.125-0.011l-0.004 0.001 0.218-0.092 0.253-0.138 0.195-0.126c1.857-1.018 3.336-2.526 4.29-4.352l0.027-0.058s0.057-0.092 0.126-0.195l0.138-0.253 0.092-0.218c0.007-0.036 0.011-0.078 0.011-0.121s-0.004-0.084-0.011-0.125l0.001 0.004c-0.035-0.199-0.144-0.368-0.296-0.481l-0.002-0.001c-0.197-0.198-0.406-0.382-0.628-0.552l-0.015-0.011c-0.244-0.176-0.458-0.365-0.652-0.572l-0.002-0.002c-0.156-0.131-0.264-0.315-0.298-0.523l-0.001-0.005c0.002-0.109 0.027-0.211 0.071-0.303l-0.002 0.005c0.057-0.103 0.126-0.23 0.218-0.367l0.195-0.276s0.103-0.195 0.218-0.413 0.23-0.436 0.356-0.654l0.39-0.689c0.113-0.225 0.231-0.416 0.364-0.597l-0.008 0.011c0.068-0.102 0.148-0.189 0.239-0.262l0.002-0.002h0.23c0.031-0.001 0.068-0.002 0.105-0.002 0.526 0 1.027 0.11 1.48 0.309l-0.024-0.009c0.542 0.316 0.95 0.813 1.143 1.406l0.005 0.018c0.288 0.547 0.468 1.191 0.493 1.875l0 0.008c0.005 0.074 0.008 0.16 0.008 0.247s-0.003 0.173-0.009 0.258l0.001-0.012q0 0.264-0.069 0.448c-0.041 0.186-0.089 0.343-0.146 0.496l0.008-0.025c-0.044 0.171-0.092 0.312-0.147 0.45l0.009-0.025c0 0.092-0.092 0.253-0.184 0.482l-0.161 0.436c-0.77 1.793-1.871 3.31-3.237 4.536l-0.012 0.011c-1.256 1.339-2.788 2.404-4.507 3.104l-0.085 0.031-0.436 0.161-0.482 0.184-0.425 0.138c-0.127 0.049-0.285 0.096-0.446 0.133l-0.025 0.005-0.448 0.069h-0.494c-0.011 0-0.024 0-0.036 0-0.652 0-1.271-0.14-1.829-0.39l0.028 0.011c-0.588-0.211-1.064-0.616-1.36-1.136l-0.007-0.012z"></path>
					</symbol>
				</symbol>
				<symbol id="icon-library" viewBox="0 0 34 32">
					<title>library</title>
					<path d="M32 30v-2h-2v-12h2v-2h-6v2h2v12h-6v-12h2v-2h-6v2h2v12h-6v-12h2v-2h-6v2h2v12h-6v-12h2v-2h-6v2h2v12h-2v2h-2v2h34v-2h-2z"></path>
					<path d="M16 0h2l16 10v2h-34v-2l16-10z"></path>
				</symbol>
			</defs>
		</svg>
		<!-- Конец svg код для иконок на странице -->
	</section>
