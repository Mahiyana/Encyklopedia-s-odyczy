function set_button()
{
	document.getElementById("regbutton").addEventListener("click", check_data);
}	
function check_data()
{
	var login = document.getElementById("reglogin").value;
	var pass = document.getElementById("regpassword").value;
	var reppass = document.getElementById("repregpassword").value;
	var name = document.getElementById("regname").value;
	var email = document.getElementById("regemail").value;
	var correct = true;
	
	if (login == "")
	{
		document.getElementById("login_err").innerHTML="Musisz podac login!";
		correct = false;
	}
	else
	{
		document.getElementById("login_err").innerHTML="";
	}
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
	if (name == "")
	{
		document.getElementById("name_err").innerHTML="Musisz podac imie!";
		correct = false;
	}
	else
	{
		document.getElementById("name_err").innerHTML="";
	}
	if (email == "")
	{
		document.getElementById("email_err").innerHTML="Musisz podac email!";
		correct = false;
	}
	else
	{
		if (!validateEmail(email))
		{
			document.getElementById("email_err").innerHTML="Niepoprawny email!";
			correct = false;
		}
		else
		{
			document.getElementById("email_err").innerHTML="";
		}
	}
	if (correct)
	{
		document.getElementById("reg_form").submit();
	}
}

function validateEmail(email)
{
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
        return false;
    }
	return true;
}


