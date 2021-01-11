<?php
dbconnect();
function dbconnect(){
	$servername = "localhost";
	$username = "root";
	$password = "usbw";

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=streamnroll", $username, $password);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  echo "foi porra";
	  echo "Connected successfully";
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}
	return;
}

?>