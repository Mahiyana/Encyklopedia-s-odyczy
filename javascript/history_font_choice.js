function history_font_choice()
{	
	var bfont = document.getElementById('history_font_btn');
	document.getElementById('times').checked = true;
	bfont.onclick = ffont;

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
}
