<!DOCTYPE html>

<html>

  <head>
    <meta charset = "utf-8">
	<meta name = "author" content = "Maja & Róża">
	<meta name = "description" content = "Odnoścniki do przepisów na stronie">
    <title>Przepisy</title>
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
	<link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
	<script type="application/javascript" src="../javascript/recipes_mouseover.js"></script>
	<script type="application/javascript" src="../javascript/window_resize.js"></script>
	<script type="application/javascript" src="../javascript/recipes_question.js"></script>
  </head>
	<body onload="recipes_mouseover(); window_resize(); recipes_question();">
	  <?php require 'header.php';
              require 'recipes_menu.php'?>

    <div class="contents_rhombus">
	<div class='border_image'>
	<p id="recipeInfo">Słodycze można też zrobić w domu! Po lewej znajdziecie listę przepisów nadesłanych przez czytelników naszej strony. (Jak chcecie więcej to nadsyłajcie na encyklopedia@słodyczy.pl)</p>
    </div>
	<br>
	<p>Ile przepisów z naszej strony przygotowałeś/aś w domu?</p>
	<input name='recipes_prepared' type='text' id='recipes_prepared'>
	<button id='recipes_prepared_button'>Wyślij odpowiedź</button>
	<p id='answer'></p>
    </div>
	</div>
	</div>
  </body>

</html>
