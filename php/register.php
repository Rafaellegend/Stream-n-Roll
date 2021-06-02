<?php

	$status = 'ON';
	$nivel_necessario = 2;
	
	if ($_SESSION['STATUS'] != $status){
		echo "<script>alert('Você precisa estar logado pra acessar essa página');</script>";
		session_unset();
		session_destroy(); 
		header("Location: ?page=main");
	}
	else if ($_SESSION['UsuarioNivel'] < $nivel_necessario){
		echo "<script>alert('Seu nível de usuário não permite acessar essa página');</script>";
		header("Location: ?page=userprofile");
	}

	
	/*
	
	*/
?>

<form method="post" action="?page=open.php" id="tempCadastro" name="tempCadastro">
	
	<label for="TUsername">Username:</label>
	<input type="text" id="TCadUsername" name="TCadUsername" value='<?php echo $_SESSION['UsuarioUsername']; ?>' required><br>
	
	<label for="TPassword">Senha:</label>
	<input type="password" id="TCadPassword" name="TCadPassword" value='<?php echo $_SESSION['UsuarioSenha']; ?>' required><br>
	<label for="TCpassword">Confirmar Senha:</label>
	<input type="password" id="TCadcpassword" name="TCadcpassword" required><br>
	
	<label for="TEmail">E-mail:</label>
	<input type="email" id="TCadEmail" name="TCadEmail" value='<?php echo $_SESSION['UsuarioEmail']; ?>' required><br>
	<label for="TCemail">Confirmar E-mail:</label>
	<input type="email" id="TCadcemail" name="TCadcemail" required><br>
							
	<label for="TNome"> Nome: </label>
	<input type="text" size="30" id="TCadNome" name="TCadNome" value='<?php echo $_SESSION['UsuarioNome']; ?>' required><br>
	
	<label for="TSobrenome"> Sobrenome: </label>
	<input type="text" size="30" id="TCadSobrenome" name="TCadSobrenome" value='<?php echo $_SESSION['UsuarioSobrenome']; ?>' required><br>
	
	<label for="TAniversario">Data de Nascimento:</label>
	<input type="date" id="TCadAniversario" name="TCadAniversario" value='<?php echo $_SESSION['UsuariodataNascimento']; ?>' required>				
							
	<!-- Input Case -->
	<input type="text" name="action" value="CadTemp" hidden>
							
	<div>
		<p id="btnperfil"><button class="btn btn-primary">Registrar</button></p>
	</div>
</form>