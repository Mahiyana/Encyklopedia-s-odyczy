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

