<?php
  if(!isset($_SESSION['logged'])){
  $accounts = array(
    'maja' => 'haslomai',
    'roza' => 'haslorozy',
  );
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
  if(isset($_POST['login']) && isset($_POST['password'])){
    $username=trim($_POST['login']);
    $password=trim($_POST['password']);
   
      if((array_key_exists($username, $accounts) && $accounts[$username] == $password) && !empty($_POST['login']) && !empty($_POST['password']) ){
         print("");
      }  
      else{
         if(!empty($_POST['login']) || !empty($_POST['password']) ){
         print("<p>Zły login i/lub hasło</p>");
         }
      }
    }

?>
    
    <form method="post" action="">
     <p><label>Login:
        <input name ="login" type = "text" size="25" id="login"></p>
     <p><label>Hasło:
        <input name ="password" type = "password" size="25" id="password"></p>
     <p><input type="submit" value="Zaloguj"></p>   
    </form>
	
  <?php }
  else{ 
  echo "<p> Witaj " . $_SESSION['logged'] . "!</p>";
  
  ?>
  
    <form method="post" action="">
    <input type="hidden" name="logout" value="logout">
     <p><input type="submit" value="Wyloguj"></p> 
    </form> 
  <?php }?>
