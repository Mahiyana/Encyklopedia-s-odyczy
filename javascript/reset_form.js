function reset_form()
{
	document.getElementById("reset_button").addEventListener("click", reset_f);
	
	function reset_f()
	{
	  document.getElementById("whole_form").reset();
  }
}


