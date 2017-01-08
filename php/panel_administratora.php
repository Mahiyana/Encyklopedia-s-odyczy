<?php
echo "<p><a href='../php/index.php'><button type='button'>Wroc do strony glownej</button></a></p>";
echo "<p><a href='db_up.php'>Przywróć bazę danych do stanu początkowego</a><p>";
echo "<p><a href='db_down.php'>Wywal wszystko D:</a></p>";

$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "ency";

$handle = new mysqli($servername, $username, $password);
$found = mysqli_select_db($handle, $dbname);

if($found){
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if($conn->connect_error){
    die("Coś poszło nie tak z połączeniem, a konkretnie: " . $conn->connect_error);
  }
  
  $sql = "SELECT * FROM users";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
     echo "ID: " . $row['ID'] . "<br/>";
     echo "Login: " . $row['login'] . "<br/>";
     echo "Hasło: " . $row['password'] . "<br/>";
     echo "Imię: " . $row['name'] . "<br/>";
     echo "Email: " . $row['email'] . "<br/>";
     echo "Data założenia konta: " . $row['date'] . "<br/><br/>";
    }
  }
  else{
    echo "Nie ma żadnych użytkowników w bazie danych!";
  }

  $conn->close();
}
else{
  echo "<p>Nie ma żadnej bazy danych na tym serwerze :(</p>";
}
?>
