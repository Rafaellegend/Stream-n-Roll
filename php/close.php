<?php
	//Finaliza Sessão
	session_start();
	session_destroy(); 
	header('location:../index.php/?page=main');
	exit;
?>