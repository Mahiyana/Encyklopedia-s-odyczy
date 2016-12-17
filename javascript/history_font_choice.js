function history_font_choice()
{	
	var info = document.getElementById('history_info');
	var radio1 = document.getElementById('ravi');
	radio1.onclick = raviFont;
	var radio2 = document.getElementById('arial');
	radio2.onclick = arialFont;
	var radio3 = document.getElementById('times');
	radio3.onclick = timesFont;
	radio3.checked = true;

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
