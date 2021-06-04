<?php
	//Finaliza Sessão, Limpa os dados e destroi a sessão
	if ($_SESSION['STATUS']){
		
		//Aviso de Logout
		echo "<script>alert('Logout efetuado com sucesso');</script>";
		
		session_unset();
		session_destroy(); 
		
		//Redireciona o visitante
		//header("Location: ?page=main"); exit;
		echo "<script>window.location.href = '?page=main';</script>";
		
	}
?>