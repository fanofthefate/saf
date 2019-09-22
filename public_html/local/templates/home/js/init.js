jQuery(document).ready(function( $ ) {
	_init_calendar();
	_init_percent();
});


function _init_percent()
{
	ostalos_biletov = parseFloat(ostalos_biletov);
	
	var percent = 100-ostalos_biletov;
	if (percent>99)
	{
		percent = 99;
	}
	
	$(".rate__d").css("width", percent+"%");
}

function _init_calendar()
{
	var now = new Date();
	var dt = new Date(2019, 01, 08, 18, 00);
	

	var month_coeff = 30*24*60*60*1000;
	var day_coeff = 24*60*60*1000;
	var hour_coeff = 60*60*1000;
	
	var dif = dt.getTime()-now.getTime();
	
	var months = parseInt(dif/month_coeff);
	
	dif = dif-months*month_coeff;

	var days = parseInt(dif/day_coeff);
	dif = dif-days*day_coeff;
	
	var hours = parseInt(dif/hour_coeff);
	
	//hard!
	months=0;
	var monthsStr = months.toString();
	var daysStr = days.toString();
	
	if (months>9)
	{
		$("#m_name1").text(monthsStr[0]);	
		$("#m_name2").text(monthsStr[1]);
	}
	else 
	{
		$("#m_name1").text("0");	
		$("#m_name2").text(monthsStr[0]);
	}
	
	if (days>9)
	{
		$("#d_name1").text(daysStr[0]);	
		$("#d_name2").text(daysStr[1]);
	}
	else 
	{
		$("#d_name1").text("0");	
		$("#d_name2").text(daysStr[0]);
		
	}
	
	

	
	$("#m_name").text(declOfNum(months,['МЕСЯЦ','МЕСЯЦА','МЕСЯЦЕВ']));
	$("#d_name").text(declOfNum(days,['ДЕНЬ','ДНЯ','ДНЕЙ']));
	//$("#h_name").text(declOfNum(hours,['ЧАС','ЧАСА','ЧАСОВ']));
		
}

function declOfNum(number, titles)  
{  
    cases = [2, 0, 1, 1, 1, 2];  
    return titles[(number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5]];  
}