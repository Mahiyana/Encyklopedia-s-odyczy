<?php
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "ency";

$handle = new mysqli($servername, $username, $password);
$found = mysqli_select_db($handle, $dbname);

if ($found)
{
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error){
		die("Coś nie wyszło z połączeniem, a konkretnie: " . $conn ->connect_error);
	}

	$sql2 = "USE ency;";
	if ($conn->query($sql2) === TRUE){
	}else{
		die("Coś nie wyszło z wybraniem bazy danych żeby utworzyć w niej tabele, a konkretnie: " . $conn->error);
	}
	
	$sql = "SELECT * FROM users WHERE login='" . $curr_login . "'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$curr_name = $row['name'];
	$curr_email = $row['email'];
	$account_date = $row['date'];

	$conn->close();
}
else
{
	echo "<p>Nie ma żadnej bazy danych na tym serwerze :(</p>";
}

?>
