<?php

	//Verificação se o usuário está logado e também se pode acessar a área devido ao nível dele
		$status = 'ON';
		$nivel_necessario = 1;
		
		if ($_SESSION['STATUS'] != $status){
			
			//Aviso
			echo "<script>alert('Você precisa estar logado pra acessar essa página');</script>";
			//Redireciona o Usuário
			//header("Location: ?page=main");
			echo "<script>window.location.href = '?page=main';</script>";
			
		}
		else if ($_SESSION['UsuarioNivel'] > $nivel_necessario){
			
			//Aviso
			echo "<script>alert('Seu nível de usuário não permite acessar essa página');</script>";
			//Redireciona o Usuário
			//header("Location: ?page=register");
			echo "<script>window.location.href = '?page=register';</script>";
			
		}

	/*
	
	*/
	
?>
<h5>Perfil de usuário: <a href="?page=userprofile"><button>Voltar</button></a></h5>

<form>
<h1>Crie sua própria Campanha</h1>

<!-- Digite Nome da Campanha-->
<label for="Campaing">Nome da Campanha:</label>
<input type="text" id="Campaing" name="Campaing" required>

<!-- Escolha o Sistema--->
<label for="Rpgsys">Escolha o Sistema:</label>
<select id="Rpgsys" name="Rpgsys" required>
	<option value="" disabled selected>Selecione...</option>
	<optgroup label="Dungeons & Dragons">
		<option value="dd5e">Dungeons & Dragons: 5 edição</option>
	</optgroup>
	<optgroup label="Tormenta RPG">
		<option value="" disabled >Em Breve</option>
	</optgroup>
	<optgroup label="Call of Cthulhu">
		<option value="" disabled >Em Breve</option>
	</optgroup>
</select>
<!--Defina a quantidade de Jogadores-->
<label for="Qplayer">Quantidades de Jogadores(Mestre não Incluso)</label>
<select id="Qplayer" name="Qplayer" required>
	<option value="" disabled selected>Selecione...</option>
	<option value="2">2 Jogadores</option>
	<option value="3">3 Jogadores</option>
	<option value="4">4 Jogadores</option>
	<option value="5">5 Jogadores</option>
	<option value="6">6 Jogadores</option>
	<option value="7">7 Jogadores</option>
	<option value="8">8 Jogadores</option>	
</select>

<input type="submit" value="Criar Campanha">
</form>