<?php
	//Finaliza Sessão, Limpa os dados e destroi a sessão
	if ($_SESSION['STATUS']){
		echo "<script>alert('Logout Efetuado com sucesso');</script>";
		session_start();
		session_unset();
		session_destroy(); 
		header("Location:?page=main"); exit; 
	}
?>