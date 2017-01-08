function set_button()
{
	document.getElementById("regbutton").addEventListener("click", check_data);
}	
function check_data()
{
	var pass = document.getElementById("regpassword").value;
	var reppass = document.getElementById("repregpassword").value;
	var correct = true;
	
	if (pass == "" && reppass == "")
	{
		document.getElementById("password_err").innerHTML="";
	}
	else
	{
		if (reppass != pass)
		{
			document.getElementById("password_err").innerHTML="Hasla musza sie zgadzac!";
			document.getElementById("reppassword_err").innerHTML="Hasla musza sie zgadzac!";
			correct = false;
		}
	}
	if (correct)
	{
		document.getElementById("reg_form").submit();
	}
}


