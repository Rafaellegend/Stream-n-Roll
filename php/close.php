<?php
	//Finaliza Sessão
	session_start();
	session_destroy(); 
	header('location:?page=main.php');
	exit;
?>