function history_font_choice()
{	
	var bfont = document.getElementById('history_font_btn');
	document.getElementById('times').checked = true;
	bfont.onclick = ffont;
	//nowe
	var info = document.getElementById('history_info');
	var radio1 = document.getElementById('ravi');
	radio1.onclick = raviFont;
	var radio2 = document.getElementById('arial');
	radio2.onclick = arialFont;
	var radio3 = document.getElementById('times');
	radio3.onclick = timesFont;

	function ffont()
	{
		var info = document.getElementById('history_info');
		var radio1 = document.getElementById('ravi');
		var radio2 = document.getElementById('arial');
		var radio3 = document.getElementById('times');
		if (radio1.checked)
		{
			info.className = 'font_ravi';
		}
		if (radio2.checked)
		{
			info.className = 'font_arial';
		}
		if (radio3.checked)
		{
			info.className = 'font_times';
		}
	}
	
	//nowe
	function raviFont()
	{
		info.className = 'font_ravi';
	}
	function arialFont()
	{
		info.className = 'font_arial';
	}
	function timesFont()
	{
		info.className = 'font_times';
	}
}
