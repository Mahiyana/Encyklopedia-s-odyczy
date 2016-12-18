<?php
  if(!isset($_SESSION['logged'])){
  ?>
    
    <form method="post" action="">
     <p><label>Login:
        <input name ="login" type = "text" size="25" id="login"></p>
     <p><label>Hasło:
        <input name ="password" type = "password" size="25" id="password"></p>
     <p><input type="submit" value="Zaloguj"></p>   
    </form>
	
  <?php }
  else{ ?>
  
    <form method="post" action="">
    <input type="hidden" name="logout" value="logout">
     <p><input type="submit" value="Wyloguj"></p> 
    </form> 
  <?php }?>
