<?php

	
	//Criando conexão com o Banco de Dados e Verificando a conexão
	$hostname="localhost";
	$username="root";
	$password="usbw";
	$dbname="StreamNRoll";
	
	mysqli_connect($hostname,$username, $password) or die 
	("Erro ao conectar ao bando de dados");
	mysqli_select_db($dbname);
	
	
	
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