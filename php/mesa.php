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
	
	
	
	//Temporario Create
	$nivel = $_SESSION['UsuarioNivel'];
	$TEMP = 2;
	if ($nivel == $TEMP){
	echo '<a href="?page=register"><button id="adminbtn">Sair da Mesa</button></a>	
			<style>
				#adminbtn{
					position:fixed;
					left:0;
					bottom:0;
					z-index:9998;
				}
			</style>';
	}else if ($nivel != $TEMP){
			'<script>
				admshow = false;
				function adm(){
					if(admshow == false){			
						document.getElementById("adminnav").style.visibility = "visible";
						admshow = true;
					}					
			</script>';
	}
	
	//Users
	$nivel = $_SESSION['UsuarioNivel'];
	$USERS = 1;
	if ($nivel <= $USERS){
	echo '<a href="?page=userprofile"><button id="adminbtn">Sair da Mesa</button></a>	
			<style>
				#adminbtn{
					position:fixed;
					left:0;
					bottom:0;
					z-index:9998;
				}
			</style>';
	}else if ($nivel == $TEMP){
			'<script>
				admshow = false;
				function adm(){
					if(admshow == false){			
						document.getElementById("adminnav").style.visibility = "visible";
						admshow = true;
					}					
			</script>';
	}
	
	/*
	
	*/
	
?>

<!-- Teste de redirecionamento-->
<form>
	<label id="txtboxgeral" for="MCriada"> Nome da Mesa: </label>
	<input type="text" size="30" id="MCriada" name="MCriada" value='<?php echo $_SESSION['MesaNome']; ?>' disabled><br>
	<label id="txtboxgeral" for="MCodigo"> Código da Mesa: </label>
	<input type="text" size="30" id="MCodigo" name="MCodigo" value='<?php echo $_SESSION['MesaCodigo']; ?>' disabled><br>
	<label id="txtboxgeral" for="MSistema"> Sistema de RPG: </label>
	<input type="text" size="30" id="MSistema" name="MSistema" value='<?php echo $_SESSION['MesaSistema']; ?>' disabled><br>
	<label id="txtboxgeral" for="MSistema"> Descrição da Mesa: </label>
	<input type="text" size="30" id="MSistema" name="MSistema" value='<?php echo $_SESSION['MesaDescricao']; ?>' disabled><br>
	<label id="txtboxgeral" for="MData"> Data da Criação: </label>
	<input type="date" size="30" id="MData" name="MData" value='<?php echo $_SESSION['MesaData']; ?>' disabled><br>
	<label id="txtboxgeral" for="MJogadores"> Quantidade de Jogadores: </label>
	<input type="text" size="30" id="MJogadores" name="MJogadores" value='<?php echo $_SESSION['MesaJogadores']; ?>' disabled><br>
	
	<!--
	<label id="txtboxgeral" for="MDono">Dono da Mesa:</label>
	<input type="text" id="MDono" name="MDono" value='<?php echo $_SESSION['UsuarioID']; ?>' disabled><br>
	-->
	
</form>