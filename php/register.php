<?php

	$status = 'ON';
	$nivel_necessario = 2;
	
	if ($_SESSION['STATUS'] != $status){
		
		//Aviso
		echo "<script>alert('Você precisa estar logado pra acessar essa página');</script>";
		session_unset();
		session_destroy();
		
		//Redireciona o usuário
		//header("Location: ?page=main");
		echo "<script>window.location.href = '?page=main';</script>";
		
	}
	else if ($_SESSION['UsuarioNivel'] < $nivel_necessario){
		
		//Aviso
		echo "<script>alert('Seu nível de usuário não permite acessar essa página');</script>";
		
		//Redireciona o usuário
		//header("Location: ?page=userprofile");
		echo "<script>window.location.href = '?page=userprofile';</script>";
		
	}

	
	/*
	
	*/
?>

<div class="container">
<h4> Aqui você pode REGISTRAR sua conta temporária: </h4>
<form method="post" action="?page=open" id="tempCadastro" name="tempCadastro">

	<label for="antigoUser">Username Antigo: (Use-o para Deletar sua conta)</label>
	<input type="text" id="antigoUser" name="antigoUser" value='<?php echo $_SESSION['UsuarioUsername']; ?>' disabled><br>
	
	<label for="TUsername">Seu novo Username:</label>
	<input type="text" id="TCadUsername" name="TCadUsername" required><br>
	
	<label for="TPassword">Senha:</label>
	<input type="password" id="TCadPassword" name="TCadPassword"  required><br>
	<label for="TCpassword">Confirmar Senha:</label>
	<input type="password" id="TCadcpassword" name="TCadcpassword" required><br>
	
	<label for="TEmail">E-mail:</label>
	<input type="email" id="TCadEmail" name="TCadEmail"  required><br>
	<label for="TCemail">Confirmar E-mail:</label>
	<input type="email" id="TCadcemail" name="TCadcemail" required><br>
							
	<label for="TNome"> Nome: </label>
	<input type="text" size="30" id="TCadNome" name="TCadNome"  required><br>
	
	<label for="TSobrenome"> Sobrenome: </label>
	<input type="text" size="30" id="TCadSobrenome" name="TCadSobrenome"  required><br>
	
	<label for="TAniversario">Data de Nascimento:</label>
	<input type="date" id="TCadAniversario" name="TCadAniversario"  required>				
							
	<!-- Input Case -->
	<input type="text" name="action" value="CadTemp" hidden>
							
	<div>
		<button class="btn btn-primary">Registrar</button>
	</div>
</form>
</div>


<div class="container">
<!-- Botão do Modal Deletar Usuário -->
<h4> Aqui você pode EXCLUIR sua conta temporária: </h4>
	<button  id="btnDireto" type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdDelete" data-backdrop="static">
		DELETAR
	</button>
</div>

<!-- Modal de Acesso Direto -->
<div class="modal fade" id="MdDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir todos os dados de sua conta? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  <!-- Formulário Acesso a Mesa -->
      <div class="modal-body">
			<form method="post" action="?page=open" id="tempDelete" name="tempDelete">
				
				<label for="deletarUser">Insira o seu Username Temporário:</label><br>
				<input type="text" id="UserDelete" name="UserDelete" value='<?php echo $_SESSION['UsuarioUsername']; ?>' required>
				
				<!-- Input Case -->
				<input type="text" name="action" value="TempDel" hidden>
				
				<div>
					<p id="btnperfil"><button class="btn btn-danger">DELETAR USUÁRIO</button></p>
				</div>
			</form>
      </div>
    </div>
  </div>
</div>