<?php

	//Criando conexão com o Banco de Dados e Verificando a conexão
	$hostname="localhost";
	$username="root";
	$password="usbw";
	$dbname="StreamNRoll";
	
	mysqli_connect($hostname,$username, $password) or die 
	("Erro ao conectar ao bando de dados");
	mysqli_select_db($dbname);
	
?>