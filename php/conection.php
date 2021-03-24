<?php
	function dbconnect(){
		//Criando conexão com o Banco de Dados e Verificando a conexão
		$hostname="192.185.223.140";
		$username="raffoz89_Project";
		$password="13!~GFnWT^@B";
		$dbname="raffoz89_StreamNRoll";
		
		try {
		  $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
		return;
	}
	function dbclose(){
		$conn->close();
	}
	function dbquery($act,$tab,$where,$what){
		Switch($act){
			case 'INSERT': $sql = "INSERT INTO '$tab' () VALUES ('')";
		}
		
	}
	/*
	//Criando conexão com o Banco de Dados e Verificando a conexão
	$hostname="localhost";
	$username="root";
	$password="usbw";
	$dbname="StreamNRoll";
	
	$conn = mysqli_connect($hostname,$username,$password); 
	mysqli_select_db($dbname) or die( "Não foi possível conectar ao banco MySQL");
	if (!$conn) {echo "Não foi possível conectar ao banco MySQL.
	"; exit;}
	else {echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
	";}
	mysqli_close();
	
	*/
?>