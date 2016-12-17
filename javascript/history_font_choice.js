function history_font_choice()
{	
	var info = document.getElementById('history_info');
	var radio1 = document.getElementById('ravi');
	radio1.onclick = raviFont;
	var radio2 = document.getElementById('arial');
	radio2.onclick = arialFont;
	var radio3 = document.getElementById('times');
	radio3.onclick = timesFont;
	var current_font_cookie = getTextFont();
	console.log(current_font_cookie);
	switch (current_font_cookie)
	{
		case 'font_ravi':
			radio1.checked = true;
			break;
		case 'font_arial':
			radio2.checked = true;
			break;
		case 'font_times':
			radio3.checked = true;
			break;
		default:
			radio3.checked = true;
			break;
	}

	function raviFont()
	{
		info.className = 'font_ravi';
		setTextFontCookie('font_ravi');
	}
	function arialFont()
	{
		info.className = 'font_arial';
		setTextFontCookie('font_arial');
	}
	function timesFont()
	{
		info.className = 'font_times';
		setTextFontCookie('font_times');
	}
	
	function setTextFontCookie(textFontName)
	{
		document.cookie = 'text_font=' + textFontName + ';' + ('expires=' + ((new Date()).getTime() + 3600)) + ";path=/";
	}
	
	function getCookie(cname)
	{
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for(var i = 0; i <ca.length; i++)
		{
			var c = ca[i];
			while (c.charAt(0) == ' ')
			{
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	
	function getTextFont()
	{
		var cname = 'text_font=';
		var cookies = document.cookie.split(';');
		for (var i = 0; i < cookies.length; i++)
		{
			var c = cookies[i];
			while (c.charAt(0) == ' ')
			{
				c = c.substring(1);
			}
			if (c.indexOf(cname) == 0)
			{
				return c.substring(cname.length, c.length);
			}
		}
		return ' ';
	}
}
