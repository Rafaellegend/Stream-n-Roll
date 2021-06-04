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

<form method="post" action="?page=open" name="createMesa" id="createMesa">
<h1>Crie sua própria Campanha</h1>

<!-- Nome da Campanha -->
<label for="NomeCampanha">Nome da Campanha:</label>
<input type="text" size="30" id="NomeCampanha" name="NomeCampanha" required><br>
<!-- Descrição da Campanha -->
<label for="DescCampanha">Descrição da Campanha:</label>
<input type="text" size="30" id="DescCampanha" name="DescCampanha" required><br>

<!-- Escolha o Sistema--->
<label for="RPGsistema">Escolha o Sistema:</label>
<select id="RPGsistema" name="RPGsistema" required>
	<option value="" disabled selected>Selecione...</option>
	<optgroup label="Dungeons & Dragons">
		<option value="D&D 5e">Dungeons & Dragons: 5 edição</option>
	</optgroup>
	<optgroup label="Tormenta RPG">
		<option value="" disabled >Em Breve</option>
	</optgroup>
	<optgroup label="Call of Cthulhu">
		<option value="" disabled >Em Breve</option>
	</optgroup>
</select><br>

<!--Defina a quantidade de Jogadores-->
<label for="QJogadores">Quantidades de Jogadores(Mestre não Incluso)</label>
<select id="QJogadores" name="QJogadores" required>
	<option value="" disabled selected>Selecione...</option>
	<option value="2">2 Jogadores</option>
	<option value="3">3 Jogadores</option>
	<option value="4">4 Jogadores</option>
	<option value="5">5 Jogadores</option>
	<option value="6">6 Jogadores</option>
	<option value="7">7 Jogadores</option>
	<option value="8">8 Jogadores</option>	
</select><br>

<!-- Input Case -->
<input type="text" name="action" value="CCampanha" hidden>

<input type="submit" value="Criar Campanha">

</form>