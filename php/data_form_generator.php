<?php
if (!isset($_SESSION["logged"]))
{
	echo "<form method='post' id='reg_form' action='../php/registration_result.php'>";
	echo "<p>Login: <text id='login_err'></text>";
	echo "<br>";
	echo "<input name ='reglogin' type = 'text' size='60' maxlength='30' id='reglogin'></p>";
	echo "<p>Haslo: <text id='password_err'></text>";
	echo "<br>";
	echo "<input name ='regpassword' type = 'password' size='60' maxlength='30' id='regpassword'></p>";
	echo "<p>Powtorz haslo: <text id='reppassword_err'></text>";
	echo "<br>";
	echo "<input name ='repregpassword' type = 'password' size='60' maxlength='30' id='repregpassword'></p>";
	echo "<p>Imie: <text id='name_err'></text>";
	echo "<br>";
	echo "<input name ='regname' type = 'text' size='60' maxlength='30' id='regname'></p>";
	echo "<p>Email: <text id='email_err'></text>";
	echo "<br>";
	echo "<input name ='regemail' type = 'text' size='60' maxlength='50' id='regemail'></p>";
	echo "<p><button type='button' id='regbutton'>Zarejestruj</button></p>";
	echo "</form>";
}
else
{
	echo "<form method='post' id='reg_form' action='../php/edit_result.php'>";
	echo "<p>Login: <text id='login_err'></text>";
	echo "<br>";
	echo "<input name ='reglogin' type = 'text' size='60' maxlength='30' id='reglogin' value='" . trim($_SESSION['logged']) . "'></p>";
	echo "<p>Nowe haslo: <text id='password_err'></text>";
	echo "<br>";
	echo "<input name ='regpassword' type = 'password' size='60' maxlength='30' id='regpassword'></p>";
	echo "<p>Powtorz nowe haslo: <text id='reppassword_err'></text>";
	echo "<br>";
	echo "<input name ='repregpassword' type = 'password' size='60' maxlength='30' id='repregpassword'></p>";
	echo "<p>Imie: <text id='name_err'></text>";
	echo "<br>";
	echo "<input name ='regname' type = 'text' size='60' maxlength='30' id='regname' value='" . $curr_name . "'></p>";
	echo "<p>Email: <text id='email_err'></text>";
	echo "<br>";
	echo "<input name ='regemail' type = 'text' size='60' maxlength='50' id='regemail' value='" . $curr_email . "'></p>";
	echo "<p><button type='button' id='regbutton'>Akceptuj zmiany</button></p>";
	echo "</form>";
}
?>