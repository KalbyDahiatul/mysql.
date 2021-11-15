<?php 

$connection_string = "mysql:host=localhost";
$username = "root";
$password = "root";

try {
	$conn = new PDO($connection_string, $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo "Connection Successful";
}
catch (PDOException $pdoex) {
	echo "Connection failed: " . $pdoex->getMessage();
}

$conn = null;

?>