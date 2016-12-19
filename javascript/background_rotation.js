function background_rotation()
{
	var pattern = getBackgroundValue();
	var box = document.getElementById("background_box");
	document.getElementById("button_background_rotation").addEventListener("click", rotateBackground);
	
	function rotateBackground()
	{
		switch(pattern)
		{
			case 1:
				box.className="contents_rhombus";
				setBackgroundCookie("contents_rhombus");
				pattern = 2;
				break;
			case 2:
				box.className="contents_plain";
				setBackgroundCookie("contents_plain");
				pattern = 3;
				break;
			case 3:
				box.className="contents_star";
				setBackgroundCookie("contents_star");
				pattern = 1;
				break;
		}
		setBackgroundValue(pattern);
	}
	
	function setBackgroundCookie(backgroundClassName)
	{
		var exp_date = new Date();
		exp_date.setFullYear(exp_date.getFullYear() + 1);
		document.cookie = 'background_pattern=' + backgroundClassName + ';' + ('expires=' + exp_date.toUTCString()) + ";path=/";
	}
	
	function setBackgroundValue(backgroundValue)
	{
		var exp_date = new Date();
		exp_date.setFullYear(exp_date.getFullYear() + 1);
		document.cookie = 'background_value=' + backgroundValue + ';' + ('expires=' + exp_date.toUTCString()) + ";path=/";
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
	
	function getBackgroundValue()
	{
		var cname = 'background_value=';
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
				return parseInt(c.substring(cname.length, c.length));
			}
		}
		return 1;
	}
}

