<!DOCTYPE html>
<?php
$cookie_background_pattern = 'background_pattern';
$cookie_background_value = 'background_value';
$cookie_text_font = 'text_font';
$cookie_times_visited = 'times_visited';
setcookie($cookie_times_visited, 1, time() + (86400 * 30), "/");
if (isset($_COOKIE["text_font"]))
{
	$chosen_font=$_COOKIE["text_font"];
}
else
{
	$chosen_font='font_times';
}
if (isset($_POST['hfont']))
{
	$chosen_font=$_POST['hfont'];
}
setcookie($cookie_text_font, $chosen_font, time() + (86400 * 30), "/");
?>
<html>

  <head>
    <meta charset = "utf-8">
	<meta name = "author" content = "Maja & Róża">
	<meta name = "description" content = "Historia słodyczy w różnych miejscach na Ziemi">
    <title>Historia słodyczy</title>
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts.css">
	<link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
    <script language="javascript" src="../javascript/ciekawostka.js"></script>
	<script language="javascript" src="../javascript/background_rotation.js"></script>
	<script language="javascript" src="../javascript/history_hide_show.js"></script>
	<script language="javascript" src="../javascript/history_font_choice.js"></script>
	<script language="javascript" src="../javascript/ciekawostka_ctrl.js"></script>
  </head>

  <body onload = "knowMore(); background_rotation(); history_hide_show(); history_font_choice();">
  <?php require 'header.php';
         require 'history_menu.php'?>
	<div class=
		<?php
			if(isset($_COOKIE[$cookie_background_pattern]))
			{
				echo $_COOKIE[$cookie_background_pattern];
			}
			else
			{
				echo "contents_star";
			}
		?> id="background_box">
	<div id='history_box'>
	<?php
		if (isset($_COOKIE['times_visited']))
		{
			$times_vis = $_COOKIE[$cookie_times_visited] + 1;
			setcookie($cookie_times_visited, $times_vis, time() + (86400 * 30), "/");
			echo "<p> Odwiedziles ta strone juz " . $times_vis . " razy!</p>";
		}
		else
		{
			echo "<p> Odwiedziles ta strone dopiero pierwszy raz!</p>";
		}
	?>
	<button id='bhide'>Ukryj</button>
    <div id="history_general" class="columns">
    <p id='history_info' class=
		<?php
			echo $chosen_font;
		?> >Już nasi dalecy przodkowie wiedzieli co dobre. W odległych czasach, w różnych krajach ludzie raczyli swe podniebienia słodkimi pysznościami. I choć nie istniały sklepy z półkami wypełnionymi po brzegi czekoladowymi, marcepanowymi czy lukrowanymi łakociami w kolorowych opakowaniach – starożytni mieszkańcy naszego świata radzili sobie bez nich znakomicie. Kiedy jeszcze nie był znany cukier z buraków czy trzciny rolę słodyczy pełniły owoce i orzechy maczane w miodzie. Podobno pierwsi „wynaleźli” słodycze Egipcjanie 4000 lat temu. Mieszkańcy kraju faraonów do wymienionych wyżej specjałów oprócz miodu dodawali słodkie ziarna z drzewa świętojańskiego. Natomiast w starożytnej Grecji i Rzymie w miodzie obtaczano nie tylko owoce i orzechy, ale także kwiaty i łodygi roślin. Jak głosi legenda pierwsze cukierki zostały wymyślone przez rzymskiego niewolnika, który stworzył je na cześć swojego pana. Ale drażetki nie rozpowszechniły się w Imperium Romanum – ich smakiem mogli cieszyć się
jedynie arystokraci.
W ascetycznym średniowieczu nie było zbyt wiele miejsca na słodkości. Ale w niektórych środowiskach raczono się nimi regularnie. Na dworze bizantyjskiego cesarza Konstantyna VII Porfirogenety jadano galaretki oraz konfitury z gruszek, jabłek, pigwy, śliwek czy róży. Dla średniowiecznej kuchni charakterystyczny był również deser składający się z grzanego wina, drażetek oraz dojrzałego sera. Potrawa przez całe tysiąclecie ewoluowała i pod koniec epoki dodawano do niej coraz częściej owoce obtoczone w cukrze, syropie i miodzie oraz owocowe pasty. Znane były również naleśniki z cukrem, custard (słodki sos angielski), wafle, ciasta czy dania z mleczka migdałowego. Co jest warte podkreślenia: początkowo cukier był traktowany jako lekarstwo. Łączony z rozmaitymi przyprawami miał zapobiegać dolegliwościom układu pokarmowego. Dopiero z czasem doceniono walory smakowe cukru i zaczęto go stosować w kuchni, ale ze względu na jego bardzo wysoką cenę słodkie dania były zarezerwowane dla elit.</p> 
   </div>
   <div id='history_font'>
   <br>
	Wybierz czcionkę powyższego tekstu:<br>
	<form method='post' action="<?=$_SERVER["PHP_SELF"];?>">
	<input type="radio" name="hfont" id='ravi' value='font_ravi'> Ravi Prakash <br>
	<input type="radio" name="hfont" id='arial'value='font_arial'> Arial <br>
	<input type="radio" name="hfont" id='times' value='font_times'> Times New Roman (Domyślna) <br>
	<input type="submit" name="submit_font" value="Zapisz">
	</form>
  </div>
   </div>
   <br/>
   <p id='ciekawostka' onmousedown='ciekawostka_ctrl(event)'>Tu powinna być ciekawostka</p>
   <div class='crossfading'>
     <img src='../pictures/ciastko.jpg'  class='image_bottom' alt='Profesjonalna kremówka z owocami'>
     <img src='../pictures/owocki.jpg'  class='image_top' alt='Miska pełna owoców'>
   </div>	
   <button id="button_background_rotation">Zmień Tło</button>
    </div>
	</div>
	</div>

  
  
  </body>

</html>

