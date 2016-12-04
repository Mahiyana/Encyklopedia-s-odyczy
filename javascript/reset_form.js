function reset_form()
{
	document.getElementById("reset_button").addEventListener("click", reset);
	
	function reset()
	{
	  document.getElementById("whole_form").reset();
  }
}


