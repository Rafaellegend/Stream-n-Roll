<?php
	
	$status = 'ON';
	$nivel_necessario = 2;
	
	if ($_SESSION['STATUS'] != $status){
		
		//Aviso
		echo "<script>alert('Você precisa estar logado pra acessar essa página');</script>";
		//Redireciona o usuário
		//header("Location: ?page=main");
		echo "<script>window.location.href = '?page=main';</script>";
		
	}
	else if ($_SESSION['UsuarioNivel'] > $nivel_necessario){
		
		//Aviso
		echo "<script>alert('Seu nível de usuário não permite acessar essa página');</script>";
		//Redireciona o usuário
		//header("Location: ?page=main");
		echo "<script>window.location.href = '?page=main';</script>";
		
	}
	
	/*
	
	*/
	
?>

<!-- Teste de redirecionamento-->
<div><h1>Mesa</h1></div>