<!DOCTYPE html>

<html>

	<head>
		<meta charset = "utf-8">
		<meta name = "author" content = "Maja & Róża">
		<meta name = "description" content = "Przepis na babeczki z malinami">
		<title>Waniliowe Naleśniki</title>
		<link rel="stylesheet" type="text/css" href="../css/layout.css">
		<link rel="stylesheet" type="text/css" href="../css/recipe.css">
		<link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
	</head>

	<body>
	<div class='background'>
	<div id='menu_header' class='absolute'>
	<nav>
	<p id='title'> Encyklopedia Słodyczy</p>
		<table id='menu_header_table'>
			<tr>
				<td><a href = '../html/index.html'>Strona główna</a></td>
				<td><a href = '../php/recipes.php'>Przepisy</a></td>
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
    <article>
		<h1>Waniliowe Naleśniki</h1>
		<p>Trudność przepisu:
		<meter min = "0"
			max = "5"
			value = "1">
		</meter>
		Łatwy!</p>
		<br>
		<section id ='ingredients_section'>
			<h2>Składniki: </h2>
			<?php
				define("HUMAN_KCAL_A_DAY", 2000);
				$ingredients_names = array("mleko", "mąka pszenna", "jajka", "cukier waniliowy", "sól");
				$ingredients_weight = array("230 g (1 szklanka)", "130 g (1 szklanka)", "130 g (2 sztuki)", "12 g (3 łyżeczki)", "1 g (1 szczypta)");
				$ingredients_kcalper100 = array("47 kcal", "343 kcal", "139 kcal", "394 kcal", "0 kcal");
				$ingredients_kcal;
				$amount_of_ingredients = count($ingredients_names);
			
			?>
				<table id='ingredients'>
				<?php
					echo '<tr> 
						<th>Nazwa Składnika</th>
						<th>Potrzebna Ilość</th>
						<th>Kcal / ilość produktu</th>
						<th>Suma kcal</th>
					</tr>';
					for ($i = 0; $i < $amount_of_ingredients; $i++)
					{
						echo'<tr>';
						echo'<td>' . $ingredients_names[$i] . '</td>';
						echo'<td>' . $ingredients_weight[$i] . '</td>';
						echo'<td>' . $ingredients_kcalper100[$i] . ' / 100 g</td>';
						$ingredients_kcal[$i] = intval($ingredients_weight[$i]) * intval($ingredients_kcalper100[$i]) / 100;
						echo'<td>' . $ingredients_kcal[$i] . '</td>';
						echo'</tr>';
					}
					$kcal_sum = 0;
					for ($i = 0; $i < $amount_of_ingredients; $i++)
					{
						$kcal_sum = $kcal_sum + $ingredients_kcal[$i];
					}
					echo'<tr>';
					echo'<td colspan="3"></td>';
					$kcal_in_total = "Razem: ";
					$kcal_in_total = $kcal_in_total . (string) $kcal_sum;
					echo'<td>' . $kcal_in_total . ' </td>';
					?>
				</table>
				<?php
					echo'<br>';
					echo'Ludzkie średnie zapotrzebowanie kaloryczne (na dzień) wynosi ' . HUMAN_KCAL_A_DAY . ' kcal.';
					echo'<br>';
					if ($kcal_sum > HUMAN_KCAL_A_DAY)
					{
						echo'Co znaczy, że nie powinieneś/nie powinnaś jednego dnia zjeść tego, co przygotowałeś/aś w tym przepisie. Przykro nam :<';
					}
					else
					{
						echo'Co znaczy, że możesz bez przeszkód jednego dnia zjeść wszystko co właśnie przygotowałeś/aś! Hura!';
					}
				?>
			
		</section>
		<br/><br/>
		<section id = 'preparing'>
			<h2>Przygotowanie</h2>
			<div class='contents_box'>
			<ol>
				<li>Zmieszaj mąkę, mleko, jajka, sól i cukier w misce. Ubij mikserem.</li>
				<li>Na rozgrzaną patelnię wylewaj po jednej chochli przygotowanej masy naleśnikowej.</li>
				<li>Po usmażeniu każdego naleśnika z obu stron na jasno-złoty kolor, naleśniki są gotowe do spożycia! Najlepiej smakują na ciepło z dodatkiem takim jak nutella czy bita śmietana.</li>
			</ol>
			</div>
		</section>
		<br/><br/>

		<div class='image'><img src='../pictures/pancake.jpg' class='image_op' alt='Zdjęcie do przepisu na naleśniki waniliowe'></div>
    </article>
	</div>
	</div>
	</div>
	</body>

</html>

