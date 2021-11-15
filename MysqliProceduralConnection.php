<?php 

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if ($conn) {
	echo "Connection Successful";
}
else {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);

?>