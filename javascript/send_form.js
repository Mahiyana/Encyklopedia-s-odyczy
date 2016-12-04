function send_form()
{
	document.getElementById("send_button").addEventListener("click", send_f);
	
	function send_f()
	{
	  document.getElementById("whole_form").submit();
  }
}


