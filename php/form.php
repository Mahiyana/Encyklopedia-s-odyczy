<html>

  <head>
    <meta charset = "utf-8">
	<meta name = "author" content = "Maja & Róża">
	<meta name = "description" content = "Strona główna Encyklopedii Słodyczy">
    <title>Ankieta</title>
	<link rel="stylesheet" type="text/css" href="../css/layout.css">
    <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet"> 
	<script type="application/javascript" src="../javascript/index_menu_list_mouse_movement.js"></script>
	<script type="application/javascript" src="../javascript/licznik_formularzy.js"></script>
	<script type="application/javascript" src="../javascript/focus_ankietowy.js"></script>
	<script type="application/javascript" src="../javascript/reset_form.js"></script>
	<script type="application/javascript" src="../javascript/send_form.js"></script>
	<script type="application/javascript" src="../javascript/form_focus.js"></script>
 </head>
  
  <body onload = "form_counter(); focusuj(); reset_form(); send_form(); give_focuses();">
    <div class='background'>
	<div id='menu_header' class='absolute'>
	<nav>
	<p id='title'> Encyklopedia Słodyczy</p>
		<table id='menu_header_table'>
			<tr>
				<td><a href = '../html/index.html'>Strona główna</a></td>
				<td><a href = '../html/recipes.html'>Przepisy</a></td>
				<td><a href = '../html/history.html'>Historia</a></td>
			</tr>
		</table>
    </nav>
	</div>
    <div class="box">
	<div onmouseover='menu_mouseover()' onmouseout='menu_mouseout()' id="menu_list">
	<table id='menu_list_table'>
		<tr>
			<td>
				<details>
				<summary><a href = 'sweet_chocolate.html'>Czekolada</a></summary>
				<ul>
				<li>Mleczna</li>
				<li>Biała</li>
				<li>Gorzka</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td><a href='karmel.html'>Karmel</a></td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='lizaki.html'>Lizaki</a></summary>
				<ul>
				<li>Wodne</li>
				<li>Mleczne</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='lody.html'>Lody</a></summary>
				<ul>
				<li>Wodne</li>
				<li>Mleczne</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='ciastka.html'>Ciastka</a></summary>
				<ul>
				<li>Pszenne</li>
				<li>Owsiane</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='zelki.html'>Żelki</a></summary>
				<ul>
				<li>Zwykłe</li>
				<li>Kwaśne</li>
				<li>Z pianką mleczną</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td><a href='miod.html'>Miód</a></td>
		</tr>
		<tr>
			<td><a href='cukier.html'>Cukier</a></td>
		</tr>
		<tr>
			<td><a href='krowki.html'>Krówki</a></td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='rurki.html'>Rurki</a></summary>
				<ul>
				<li>Z kremem</li>
				<li>W czekoladzie</li>
				</ul>
				</details>
			</td>
		</tr>
	</table>
	</div>
	<div class="contents_plain">
       
      <h1>Ankieta dla fanów słodyczy</h1>
      
	 <?php
		if ( strcmp($_POST["chocolate"], "Nie lubię w ogóle czekolady") == 0 )
           die( "Jak można nie lubić czekolady?" );
	 ?>
	  
     <?php 
        $welcome = "Witaj ";
        if(empty(trim($_POST["name"])) || trim($_POST["name"]) == "" )
          $welcome = $welcome . "Tajemniczy podróżniku ";
        else
          $welcome = $welcome . $_POST["name"];
        if(!empty(trim($_POST["nick"])) && trim($_POST["nick"]) != "" )
          $welcome = $welcome . " czy może " . $_POST["nick"];
        $welcome = $welcome . "! Dziękujemy za wypełnienie ankiety!";
        print($welcome);
     ?>
	 
	 <?php
		$user_telephone;
		echo'<br>';
		echo'<br>';
		if(empty(trim($_POST["telephone"])) || trim($_POST["telephone"]) == "")
		{
			$user_telephone = "";
			echo "Nie podałeś/aś nam niestety swojego numeru telefonu więc nie jesteśmy w stanie do Ciebie zadzwonić w razie słodyczowej niejasności.";
		}
		else
		{
			$user_telephone = $_POST["telephone"];
			echo "Podałeś nam swój numer telefonu i oto on: " . $user_telephone;
			echo "<br>";
			if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/",$user_telephone))
			{
				echo "Co więcej, podany przez ciebie numer telefonu jest w dokładnie takiej formie, w jakiej prosiłyśmy(###-###-###)! Brawo!";
			}
			else
			{
				echo "Jednak podany przez ciebie numer telefonu nie jest w takiej formie, w jakiej prosiłyśmy(###-###-###) :<<";
				echo "<br>";
				echo "Jeżeli zamiast myślników wpisałeś/aś spacje, to spróbujemy to naprawić!";
				echo "<br>";
				$user_telephone = preg_replace('/\s+/', '-', $user_telephone);
				if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/",$user_telephone))
				{
					echo "Udało się! Twój numer telefonu (" . $user_telephone . ") pasuje teraz do naszego wzoru!";
				}
				else
				{
					echo "Nie udało się! Twój numer telefonu (" . $user_telephone . ") nadal nie pasuje do naszego wzoru. Jeżeli chcesz, byśmy mogły się z tobą skontaktować to niestety nie będzie to możliwe. :<";
				}
			}
			
		}
	 ?>
     
      <?php 
        if(empty(trim($_POST["chocolate"])) || trim($_POST["chocolate"]) == "" )
          print("<p> Nie napisałeś nam żadnej opinii na temat lizaków o smaku czekolady... Smutek.</p>");
        else
          print("<p>Dostaliśmy od Ciebie następującą opinię na temat lizaków o smaku czekolady: <p>\n<p>" .  $_POST["chocolate"] . "</p>");
     ?>
 
      <p><?php
      if ( strcmp($_POST["chocolate"], "Gorzka") == 0 )
           print( "Wiemy już, że lubisz gorzką czekoladę!" );
      elseif (strcmp( $_POST["chocolate"], "Mleczna") == 0 )
           print( "Wiemy już, że lubisz mleczną czekoladę!" );
      elseif ( strcmp($_POST["chocolate"],"Deserowa") == 0 )
           print( "Wiemy już, że lubisz deserową czekoladę!" );
      elseif ( strcmp($_POST["chocolate"], "Nie mogę jeść czekolady z powodów medycznych") == 0 )
           print( "Wyrażamy wielkie wyrazy smutku, że nie możesz jeść czekolady :( Ale nie martw się! Są też inne słodycze! W naszej encyklopedii znajdziesz ich mnóstwo :)" );
      ?> </p>

     
    <p><?php
	  $ans = "";
	  if(empty($_POST["mieszanka_krakowska"]))
	    $ans =  "Wygląda na to, że nie lubisz mieszanki Krakowskiej :<";  
	  else {
	    $mk =  $_POST["mieszanka_krakowska"];
        if (count($mk) == 1)
          $ans = "Wygląda na to, że lubisz jeden rodzaj cukierków z mieszanki Krakowskiej i są to " . $mk[0];
        elseif (count($mk) == 2)
          $ans =  "Wygląda na to, że lubisz dwa rodzaje cukierków z mieszanki Krakowskiej i są to " . $mk[0] . " i " . $mk[1];
        elseif (count($mk) == 3)
          $ans =  "Wygląda na to, że lubisz dwa rodzaje cukierków z mieszanki Krakowskiej i są to " . $mk[0] . ", " . $mk[1] . " i " . $mk[2] ;
        elseif (count($mk) == 4)
		  $ans = "Wygląda na to, że lubisz całą mieszankę Krakowska!";
	  }
      print($ans);
    ?></p>


    <p><?php 
      if(empty($_POST["marka_czekolady"]))
        print("Nie podzieliłeś się z nami Twoją ulubioną marką czekolady :(");
      else 
       print( "Twoja ulubiona marka czekolady to " . $_POST["marka_czekolady"][0] ); 
   ?></p>
   
    <?php 
    if(empty(trim($_POST["more"])) || trim($_POST["more"]) == "" )
      print("<p> Nie napisałeś nam żadnej wiadomości... Smutek.</p>");
    else
      print("<p>Dodatkowo napisałeś nam następującą wiadomość: <p>");
      print("<p>" .  $_POST["more"] . "</p>");
     ?>
    </div>
	</div>
    </div>
	</body>

</html>
