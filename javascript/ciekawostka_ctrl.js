function ciekawostka_ctrl()
{
	document.getElementById('ciekawostka').addEventListener("click",ctrlCiekawostka)
	function ctrlCiekawostka(event)
	{
		if (event.ctrlKey)
		{
			knowMore();
		}
	}
}