<!DOCTYPE html>

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
  <?php require 'header.php'; 
        require 'sweet_menu.php'?>	
    <div class="contents_plain">
       
      <h1>Ankieta dla fanów słodyczy</h1>
      <p>Witaj drogi czytelniku! Chcialibyśmy poznać bliżej Twoje słodkie zainteresowania dlatego ładnie prosimy o wypełnienie ankiety </p>
      <p id="form_count"></p>

      <form method="post" action="../php/form.php" id="whole_form">
    <section id = '2'>
      <p><label>Imię:
        <input name ="name" type = "text" size="25" id="name"> 
      </label></p><div class="help" id="name_help">np. Jan Kowalski</div>
      <p><label>Nick:
        <input name ="nick" type = "text" size="25" id="nick">
      </label></p> <div class="help" id="nick_help">np. SłodkaBabeczka</div> 
    </section>
	<p><label>Telefon:
        <input name ="telephone" type = "text" size="25" id="telephone">
      </label></p> <div class="help" id="telephone_help">np. 000-000-000</div> 
    </section>
    <section id = '3'>
      <p><label>Twoja opinia na temat lizaków o smaku czekolady:
        <input name ="lolipop_opinion" type = "text" size="100">
      </label></p>
      <p>Jeżeli pojęcie "lizak" jest ci obce, zapraszamy do <a href = "../php/lizaki.php">artykułu o lizakach</a></p>
      <p><label>Ulubiony rodzaj czekolady:
        <select name="chocolate">
          <option>Gorzka</option>
          <option>Mleczna</option>
          <option>Deserowa</option>
          <option>Biała</option>
          <option>Nie mogę jeść czekolady z powodów medycznych</option>
          <option>Nie lubię w ogóle czekolady</option>
        </select>
      </label></p>
    </section>
    <section id = '4'>
	<section id = '4MK'>
      <p><strong>Które cukierki z Mieszanki Krakowskiej lubisz?</strong>
        <label>Pomarańczowe<input name="mieszanka_krakowska[]" type="checkbox" value="pomarańczowe"></label>
        <label>Ananasowe<input name="mieszanka_krakowska[]" type="checkbox" value="ananasowe"></label>
        <label>Cytrynowe<input name="mieszanka_krakowska[]" type="checkbox" value="cytrynowe"></label>
        <label>Malinowe<input name="mieszanka_krakowska[]" type="checkbox" value="malinowe"></label>
      </p>
	</section>
	<section id = '4M'>
      <p><strong>Gdybyś miał wybrać jedną markę spośród wymienionych to co byś wybrał</strong>
        <label>Wedel<input name="marka_czekolady[]" type="radio" value="Wedel"></label>
        <label>Wawel<input name="marka_czekolady[]" type="radio" value="Wawel"></label>
        <label>Goplana<input name="marka_czekolady[]" type="radio" value="Goplana"></label>
        <label>Biedronka<input name="marka_czekolady[]" type="radio" value="Biedronka"></label>
      </p>
	</section>
      <p><label>Masz coś jeszcze do dodania? Nie krępuj się :)
        <textarea name="more" rows="5" cols="50" id="else"></textarea></label></p>
        <div class="help" id="else_help">Naprawdę możesz się z nami tym podzielić :D</div>
    </section>
    <section id = '5'>
      <p>
        <button id="send_button">Wyślij</button>
        <button id="reset_button">Resetuj</button>
      </p>
    </section>  
    </form>
    </div>
	</div>
    </div>
	</body>

</html>
