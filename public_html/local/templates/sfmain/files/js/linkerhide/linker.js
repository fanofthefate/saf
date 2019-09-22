$(document).ready(function(){
	var seoHrefs = {
		'd234fa1e015c1bf530a3e12b529f1d62':'L2NvbnRhY3RzLw===',//contacts
		'cd051701093f9bb23bb1f83bb7729c72':'L2NvbXBhbnkvbmFzaGktcmFib3R5Lw==', //наши работы
		'cd051701093f9bb23bb1f83bb7729c72':'L25hc2hpLXJhYm90eS8=', //наши работы
		'4b2403c56d870781c4178ffa7b88cef9':'L2luZm8vc3RvY2sv', //info/stock/
		'b19a316fc5ead2a6dd271458950429a1':'L2NvbXBhbnkvcGlzbWEv', //company/pisma/
		'eb05470204dd87954b03199a38b10e3f':'L2NvbXBhbnkvcmVrdml6aXR5Lw==', //company/rekvizity/
		'6b3a03403341f8ca9762f0d69f238e25':'L2NvbXBhbnkvc290cnVkbmlraS8=', //company/sotrudniki/
		'76f4a86a92ebc29c9c99e5aabf5ed4f5':'L2NvbXBhbnkvbGl0c2VuemlpLw==', //company/litsenzii/
		'11256e11ef788191637b019557035074':'L2luZm8v', //info/
		'22bbb803ce2c939ba21947c1cf49812d':'L290enl2eS8=', //otzyvy/
		'42d5681ee4a7b414ecf31cdceac6a3d2':'L3BvbGl0LWNvbmYv', //polit-conf/
		'380faf5146da344546646b8223c2fde1':'L3VzbHVnaS8=', //uslugi/
		'7408eda68cf01a099fcca879d93dba5c':'L2NvbXBhbnkv', //company/

	};
	$('a[hashString]').each(function(){
		var key = $(this).attr('hashString');

		if($(this).attr('hashType') == 'href'){
			$(this).attr('href', Base64.decode(key));
		}
		console.log($(this).attr('href'));
	});
});