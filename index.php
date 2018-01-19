start<br>
<?php

$host = null;
//$host = "35.192.26.31";
$user = "root";
$password = "Treeviewstudios1";
$database = "kavtekdb";
$port = null;
$socket = "/cloudsql/kavtek-api-192517:us-central1:kavtekdb";
//$socket = null;

$conn = new mysqli($host, $user, $password, $database, $port, $socket);

if(mysqli_connect_error()) {
	echo mysqli_connect_error();
	exit();
}

$query = "SELECT * FROM Users";
$result = $conn->query($query);
while($row = $result->fetch_assoc()) {
	echo $row['Name'];
	echo "<br>";
}

?>

<br>end