<?php
  if(!isset($_SESSION['logged'])){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
  if(isset($_POST['login']) && isset($_POST['password'])){
    $username=trim($_POST['login']);
    $password=trim($_POST['password']);
     

    $servername = "localhost";
    $username_server = "root";
    $password_server = "pass";
    $dbname = "ency";
   
    $handle = new mysqli($servername, $username_server, $password_server);
    $found = mysqli_select_db($handle, $dbname);
    
    if($found){
      $conn = new mysqli($servername, $username_server, $password_server, $dbname);
      
      if($conn->connect_error){
        die("Coś poszło nie tak z połączeniem, a konkretnie: " . $conn->connect_error);
      }
      
      $sql = "SELECT ID FROM users WHERE login = '$username' and password = '$password'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $_SESSION['logged']=$username;
        header("Location: profile.php");

      }else{
        echo "<p>Zły login i/lub hasło</p>";
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
