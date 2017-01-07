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
    $db_name = "ency";

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
}  
if(isset($_POST['logout'])){
    unset($_SESSION['logged']);
    header("Location: index.php");
}

?>

<div class='background'>
<div class = 'box'>
	<div id='menu_header'>
	<nav>
	<p id='title'> Encyklopedia Słodyczy</p>
		<table id='menu_header_table'>
			<tr>
				<td><a href = '../php/index.php'>Strona główna</a></td>
				<td><a href = '../php/recipes.php'>Przepisy</a></td>
				<td><a href = '../php/history.php'>Historia</a></td>
<?php
if(isset($_SESSION['logged'])){
  ?>

				<td><a href = '../php/profile.php'>Profil</a></td>
<?php } ?>
			</tr>
		</table>
    </nav>
  </div>
  <div id='menu_header_login'>
  <?php
  require "login_menu.php";
  ?>
  </div>
</div>  
