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
   <div class='background'>
	<div id='menu_header' class='absolute'>
	<nav>
	<p id='title'> Encyklopedia Słodyczy</p>
		<table id='menu_header_table'>
			<tr>
				<td><a href = '../html/index.html'>Strona główna</a></td>
				<td><a href = '..php/recipes.php'>Przepisy</a></td>
				<td><a href = '../html/history.html'>Historia</a></td>
			</tr>
		</table>
    </nav>
	</div>
	<div class="box">
	<div id="menu_list">
	<table id='menu_list_table'>
    
    <?php
     $links = array(
        'Babeczki z malinami'   => '../php/recipe1.php',
        'Naleśniki waniliowe'   => '../php/recipe2.php',
      ); 

      foreach ($links as $key => $value) {
        print("<tr><td><a href ='" . $value . "'>" . $key . "</a></td></tr>");
      }
    ?>

	</table>
	</div>
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
