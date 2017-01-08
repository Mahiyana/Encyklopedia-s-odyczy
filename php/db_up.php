<?php
$servername = "localhost";
$username = "root";
$password = "pass";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error){
  die("Coś nie wyszło z połączeniem, a konkretnie: " . $conn ->connect_error);
}

$sql0 = "DROP DATABASE IF EXISTS ency;";
if ($conn->query($sql0) === TRUE){
  echo "Jeżeli istniała poprzednia baza danych to już jej nie ma! <br/>";
}else{
  die("Coś nie wyszło z ewentualnym usuwaniem poprzedniej bazy danych, a konkretnie: " . $conn->error);
}

$sql = "CREATE DATABASE ency;";
if ($conn->query($sql) === TRUE){
  echo "Baza danych została utworzona!<br/>";
}else{
  die("Coś nie wyszło z tworzeniem bazy danych, a konkretnie: " . $conn->error);
}

$sql2 = "USE ency;";
if ($conn->query($sql2) === TRUE){
  echo "Baza danych została wybrana żeby utworzyć w niej tabele!<br/>";
}else{
  die("Coś nie wyszło z wybraniem bazy danych żeby utworzyć w niej tabele, a konkretnie: " . $conn->error);
}

$sql3 = "CREATE TABLE users(
ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
date TIMESTAMP
);";
if ($conn->query($sql3) === TRUE){
  echo "Tabela została dodana do bazy danych!<br/>";
}else{
  die("Coś nie wyszło z dodawaniem tabeli do bazy danych bazy danych, a konkretnie: " . $conn->error);
}

$sql4 = "INSERT INTO users (login, password, name, email) VALUES ('roza', 'haslorozy', 'Róża', 'roza@slodkaency.pl');";
if ($conn->query($sql4) === TRUE){
  echo "Dane adminki Róży zostały dodane do bazy!<br/>";
}else{
  die("Coś nie wyszło z dodawaniem danych adminki Róży, a konkretnie: " . $conn->error);
}

$sql5 = "INSERT INTO users (login, password, name, email) VALUES ('maja', 'haslomai', 'Maja', 'maja@slodkaency.pl');";
if ($conn->query($sql5) === TRUE){
  echo "Dane adminki Mai zostały dodane do bazy!<br/>";
}else{
  die("Coś nie wyszło z dodawaniem danych adminki Mai, a konkretnie: " . $conn->error);
}

$conn->close();
echo "<a href='panel_administratora.php'>Wróć do panelu administratora</a>";
?>
