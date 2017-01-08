<!DOCTYPE html>

<html>

  <head>
    <meta charset = "utf-8">
	<meta name = "author" content = "Maja & Róża">
	<meta name = "description" content = "Strona główna Encyklopedii Słodyczy">
    <title>Profil</title>
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
	<link rel="stylesheet" type="text/css" href="../css/text_registration.css">
    <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
	<script type="application/javascript" src="../javascript/index_menu_list_mouse_movement.js"></script>
	<script type="application/javascript" src="../javascript/profile_edit.js"></script>
 </head>
  
  <body onload = "set_button();">
  <?php require 'header.php';?>
	<div class="contents_plain">
    <img src='../pictures/pralinka.png'  class='image_rotate' alt='Przykład samotnej pralinki'><h1 id='powitanie'>Witaj w naszej Encyklopedii Słodyczy</h1>

    <?php
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
      if(isset($_SESSION["logged"])){
        if(trim($_SESSION["logged"]) == "maja"){ ?>
          <p>Dumna adminka Maja</p> 
		  <p><a href="../php/panel_administratora.php"><button type="button">Przejdz do panelu administratora</button></a></p>
          <img src ='../pictures/pszczolka.jpe' alt='pszczółka'>
        <?php  
        }
        else if(trim($_SESSION["logged"]) == "roza"){ ?>
          <p>Dumna adminka Róża</p> 
		  <p><a href="../php/panel_administratora.php"><button type="button">Przejdz do panelu administratora</button></a></p>
          <img src ='../pictures/roza.jpg' alt='różyczka'>
        <?php  
        }
		else
		{ 
			$curr_login = trim($_SESSION["logged"]); ?>
			<?php require '../php/db_load_data.php'; ?>
			<h2>Profil uzytkownika</h2>
			<h3>Tutaj mozesz edytowac swoje dane.</h3>
			<p>Twoj login: <?php echo "'" . trim($_SESSION["logged"]) . "'" ?></p>
			<p>Twoje imie: <?php echo "'" . $curr_name . "'"?></p>
			<p>Twoj email: <?php echo "'" . $curr_email . "'"?></p>
			<p>Data zalozenia konta: <?php echo $account_date ?></p>
			<br>
			<br>
			<form method='post' id='reg_form' action='../php/edit_success.php'>
			<p>Nowy login: 
			<br>
			<input name ="reglogin" type = "text" size="60" maxlength='30' id="reglogin"></p>
			<p>Nowe haslo: <text id='password_err'></text>
			<br>
			<input name ="regpassword" type = "password" size="60" maxlength='30' id="regpassword"></p>
			<p>Powtorz nowe haslo: <text id='reppassword_err'></text>
			<br>
			<input name ="repregpassword" type = "password" size="60" maxlength='30' id="repregpassword"></p>
			<p>Nowe imie:
			<br>
			<input name ="regname" type = "text" size="60" maxlength='30' id="regname"></p>
			<p>Email:
			<br>
			<input name ="regemail" type = "text" size="60" maxlength='50' id="regemail"></p>
			<p><button type="button" id='regbutton'>Akceptuj zmiany</button></p>
			<p>(Puste pole oznacza brak zmiany danego pola)</p>			
			</form>
		<?php
		}
      }
      else{
       print("Przykro mi niezalogowany użytkowniku, nic tu dla Ciebie nie ma.");
      }
       
    ?>

	</div>
	</div>
    </div>
	</body>

</html>
