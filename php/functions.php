<?php
$db= 
function dbconnect($db,$host,$user,$pass){
	// Tenta conectar no banco 
	try {
		$dbh = new PDO('mysql:host='+$host+';dbname='+$db, $user, $pass);
		foreach($dbh->query('SELECT * from FOO') as $row) {
			print_r($row);
		}
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
}

function dbquery($query){
	
}
?>