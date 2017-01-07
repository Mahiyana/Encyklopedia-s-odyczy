<?php
$servername = "localhost";
$username = "root";
$password = "pass";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error){
  die("Coś nie wyszło z połączeniem, a konkretnie: " . $conn ->connect_error);
}

$sql = "DROP DATABASE ency";

if ($conn->query($sql) === TRUE){
  echo "Baza danych została usunięta<br/>";
}else{
  echo "Coś nie wyszło z usuwaniem bazy danych, a konkretnie: " . $conn->error;
}

$conn->close();
echo "<a href='panel_administratora.php'>Wróć do panelu administratora</a>";
?>
