<!DOCTYPE html>

<html>

	<head>
		<meta charset = "utf-8">
		<meta name = "author" content = "Maja & Róża">
		<meta name = "description" content = "Przepis na babeczki z malinami">
		<title>Babeczki z malinami</title>
		<link rel="stylesheet" type="text/css" href="../css/layout.css">
		<link rel="stylesheet" type="text/css" href="../css/recipe.css">
		<link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
	</head>

	<body>
	  <?php require 'header.php';
              require 'recipes_menu.php'?>

    <div class="contents_rhombus">
    <article>
		<h1>Babeczki z malinami</h1>
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
				$ingredients_names = array("masło", "cukier", "mąka pszenna", "maliny");
				$ingredients_weight = array("150 g", "200 g (1 szklanka)", "260 g (2 szklanki)", "40 g (18 sztuk)");
				$ingredients_kcalper100 = array("700 kcal", "400 kcal", "343 kcal", "50 kcal");
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
				<li>Zmieszaj mąkę, cukier i masło w misce.</li>
				<li>Powstałą mieszanką wypełnij papilotki do babeczek, mniej więcej do &frac34; wysokości.</li>
				<li>Do każej z babeczek delikatnie wepchnij po 3 maliny.</li>
				<li>Piecz w piekarniku nagrzanym do 180&#8451; przez 20 minut lub aż wbity w babeczki patyczek będzie suchy (jak będzie mokry od malin to się nie liczy).</li>
			</ol>
			</div>
		</section>
		<br/><br/>

		<div class='image'><img src='../pictures/babeczki_malinowe.jpg' class='image_op' alt='Zdjęcie do przepisu na babeczki malinowe'></div>
    </article>
	</div>
	</div>
	</div>
	</body>

</html>

