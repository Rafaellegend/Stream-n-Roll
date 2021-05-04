<?php
//function dbconnect(){
//	$servername = "localhost";
//	$username = "root";
//	$password = "usbw";
//
//	try {
//	  $conn = new PDO("mysql:host=$servername;dbname=streamnroll", $username, $password);
//	  // set the PDO error mode to exception
//	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//	  echo "foi porra";
//	  echo "Connected successfully";
//	} catch(PDOException $e) {
//	  echo "Connection failed: " . $e->getMessage();
//	}
//	return;
//};

function themes($t){
	switch($t){
		case 'dnd': $theme = "img\overlay\dnd";
		break;
		default: $theme = "img\overlay\template";
		break;
	}
	return $theme;
};
//Funções XML
	//Metodo construtor XML, apartir de um arrays
function array2XML($main,$type,$tag,$arr,$file) {
	$xml = '<?xml version="1.0" encoding="utf-8"?>';
	$xml .= '<'.$main.'>';
	for ( $i = 0; $i < count($arr); $i++ ) {
		$xml .= '<'.$type.'>';
		for( $x = 0; $x <count($tag);$x++){
			$xml.= '<'.$tag[$x].'>'.$arr[$i][$x].'</'.$tag[$x].'>';
		};
		$xml .= '</'.$type.'>';
	};
	$xml .= '</'.$main.'>';
	$fp = fopen($file, 'w+');
	fwrite($fp, $xml);
	fclose($fp);
	
	return;
}
	//Pegar uma informação do XML
function XMLget($what,$where,$pos,$file){
	$xml = simplexml_load_file($file);
	$res = $xml->$where[$pos]->$what;
	return $res;
}
	//Roll
function Roll($d){
	$r = mt_rand(1,$d);
	return $r;
}
?>