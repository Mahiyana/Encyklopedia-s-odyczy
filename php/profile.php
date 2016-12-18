<!DOCTYPE html>

<html>

  <head>
    <meta charset = "utf-8">
	<meta name = "author" content = "Maja & Róża">
	<meta name = "description" content = "Strona główna Encyklopedii Słodyczy">
    <title>Strona główna</title>
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
    <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet"> 
    <script type="application/javascript" src="../javascript/weekday.js"></script>
	<script type="application/javascript" src="../javascript/index_menu_list_mouse_movement.js"></script>
	<script type="application/javascript" src="../javascript/licznik_linkow.js"></script>
 </head>
  
  <body onload = "weekday(); link_counter();">
  <?php require 'header.php';
        require 'sweet_menu.php'; ?>
	<div class="contents_plain">
    <img src='../pictures/pralinka.png'  class='image_rotate' alt='Przykład samotnej pralinki'><h1 id='powitanie'>Witaj w naszej Encyklopedii Słodyczy</h1>

    <?php
      session_start();
      if(isset($_SESSION["logged"])){
        if(trim($_SESSION["logged"]) == "maja"){ ?>
          <p>Dumna adminka Maja</p> 
          <img src ='../pictures/pszczolka.jpe' alt='pszczółka'>
        <?php  
        }
        else if(trim($_SESSION["logged"]) == "roza"){ ?>
          <p>Dumna adminka Róża</p> 
          <img src ='../pictures/roza.jpg' alt='różyczka'>
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
