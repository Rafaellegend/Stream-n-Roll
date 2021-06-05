<?php

	/*
	
	//Valores
	$Sstatus = isset($_SESSION['STATUS']) ? $_SESSION['STATUS'] :null;
	$Univel = isset($_SESSION['UsuarioNivel']) ? $_SESSION['UsuarioNivel'] :null;
	
	$status = 'ON';
	
	if ($Sstatus == $status){
		//Redireciona o Usuário
		//header("Location: ?page=userprofile");
		echo "<script>window.location.href = '?page=userprofile';</script>";
		
	}else{
		//Redireciona o Usuário
		//header("Location: ?page=main");
		echo "<script>window.location.href = '?page=main';</script>";
	}
	
	*/

?>


<h1 id="titulo1"> Stream & Roll -  Seu coração é livre, tenha coragem de segui-lo...  </h1>
<!-- Caixa do Login -->
<div class="container" id="clogin">
	<div class="center">
		<!-- Texto de Teste - Login -->
		<h2 id="titulo2"> Role sua Iniciativa </h2>
			<!-- Botão Modal de Login -->
			<button id="btnlogin" type="button" class="btn btn-primary" data-toggle="modal" data-target="#MdLogin" data-backdrop="static">
				Login
			</button>
			<!-- Parte apenas para indicar um "ou" -->
			<button id="btnor" class="btn btn-outline-warning" disabled>OU</button>
			<!-- Botão Modal de Registro -->
			<button  id="btnregister" type="button" class="btn btn-success" data-toggle="modal" data-target="#MdRegister" data-backdrop="static">
				Cadastre-se
			</button>
			<h5 id="titulo2"> Tem o código? Acesse a mesa: </h5>
			<div class="d-flex justify-content-center" id="codigosala">
			<!-- Botão Modal de Acesso Direto -->
			<button  id="btnDireto" type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdDireto" data-backdrop="static">
				Acesse Direto
			</button>
		</div>
	</div>
</div>


<!-- Modal de Login -->
<div class="modal fade" id="MdLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  <!-- Formulário Login -->
      <div class="modal-body">
        <form method="post" action="?page=open" id="formLogin" name="formLogin">
		<label for="login">Login:</label>
		<input type="text" name="login" id="login" required><br>
		<label for="password">Senha:</label>
		<input type="password" name="password" id="password" required><br>
		
		<input type="submit" value="Fazer Login">
		
		<!-- Input Case -->
		<input type="text" name="start" value="Login" hidden>
		</form>
      </div>
	  
	  <!-- Botão transição de Modal - Registro -->
      <div class="modal-footer">
		<p>Não tem uma conta?</p>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#MdRegister" data-dismiss="modal" data-backdrop="static">
			Cadastre-se
		</button>
		<p>Possui o código de uma mesa?</p>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdDireto" data-dismiss="modal" data-backdrop="static">
			Acesso Direto
		</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal de Registro -->
<div class="modal fade" id="MdRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  <!-- Formulário Registro -->
      <div class="modal-body">
        <form method="post" action="?page=open" id="formCadastro" name="formCadastro">
			<label for="Username">Username:</label>
			<input type="text" id="CadUsername" name="CadUsername" required><br>

			<label for="Password">Senha:</label>
			<input type="password" id="CadPassword" name="CadPassword" required><br>

			<label for="Cpassword">Confirmar Senha:</label>
			<input type="password" id="Cadcpassword" name="Cadcpassword" required><br>

			<label for="Email">E-mail:</label>
			<input type="email" id="CadEmail" name="CadEmail" required><br>

			<label for="Cemail">Confirmar E-mail:</label>
			<input type="email" id="Cadcemail" name="Cadcemail" required><br>


			<input type="checkbox" required>Eu Aceito os <a href="">Termos de Uso e as politicas de privacidade</a> do site.<br>

			<input type="submit" value="Cadastrar">
			
			<!-- Input Case -->
			<input type="text" name="start" value="Cadastro" hidden>
		</form>
      </div>
	  
	  <!-- Botão transição de Modal - Login -->
      <div class="modal-footer">
		<p>Já possui conta?</p>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MdLogin" data-dismiss="modal" data-backdrop="static">
			Login
		</button>
		<br>
		<p>Tem um código?</p>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdDireto" data-dismiss="modal" data-backdrop="static">
			Acesso Direto
		</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Acesso Direto -->
<div class="modal fade" id="MdDireto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Acesse uma Mesa Diretamente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  <!-- Formulário Acesso a Mesa -->
      <div class="modal-body">
        <form method="post" action="?page=open" id="formDireto" name="formDireto">
				<label for="Tempname">Nome de Jogador:</label>
				<input type="text" id="Tempname" name="Tempname"><br>
				<label for="Codesession">Codigo de Sala:</label>
				<input type="text" id="Codesession" name="Codesession"><br>
				<input type="submit" value="Entrar na Sessão">
				
				<!-- Input Case -->
				<input type="text" name="start" value="AcessoDireto" hidden>
			</form>
      </div>
	  
	  <!-- Botão transição de Modal - Login -->
      <div class="modal-footer">
		<p>Já possui conta?</p>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MdLogin" data-dismiss="modal" data-backdrop="static">
			Login
		</button>
		<p>Não tem uma conta?</p>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#MdRegister" data-dismiss="modal" data-backdrop="static">
			Cadastre-se
		</button>
      </div>
    </div>
  </div>
</div>