<!DOCTYPE html>

<html>

  <head>
    <meta charset = "utf-8">
	<meta name = "author" content = "Maja & Róża">
	<meta name = "description" content = "Strona główna Encyklopedii Słodyczy">
    <title>Rejestracja</title>
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
	<link rel="stylesheet" type="text/css" href="../css/text_registration.css">
    <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
	<script type="application/javascript" src="../javascript/registration_send.js"></script>	
  </head>
  
  <body onload='set_button();'>
  <?php require 'header.php'?>
	<div class="contents_plain">
	<h1>Rejestracja</h1>
	<form method='post' id='reg_form' action='../php/registration_success.php'>
	<p>Login: <text id='login_err'></text>
	<br>
	<input name ="reglogin" type = "text" size="60" maxlength='30' id="reglogin"></p>
	<p>Haslo: <text id='password_err'></text>
	<br>
	<input name ="regpassword" type = "password" size="60" maxlength='30' id="regpassword"></p>
	<p>Powtorz haslo: <text id='reppassword_err'></text>
	<br>
	<input name ="repregpassword" type = "password" size="60" maxlength='30' id="repregpassword"></p>
	<p>Imie: <text id='name_err'></text>
	<br>
	<input name ="regname" type = "text" size="60" maxlength='30' id="regname"></p>
	<p>Email: <text id='email_err'></text>
	<br>
	<input name ="regemail" type = "text" size="60" maxlength='50' id="regemail"></p>
	<p><button type="button" id='regbutton'>Zarejestruj</button></p> 
	</form>
    </div>
	</div>
	</div>
	</body>

</html>
