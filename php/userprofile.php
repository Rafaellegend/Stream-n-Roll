<?php
	$username = "AAAA";
	$email = "email@email";
  $nivel_necessario = 1;

  // Verifica se não há a variável da sessão que identifica o usuário
  /*
  if (!isset($_SESSION['UsuarioNivel']) OR $_SESSION['UsuarioNivel']!= $nivel_necessario) {
      echo "Leroy Jeankins! <br>";
	  // Destrói a sessão por segurança
       if (isset($_SESSION)) session_destroy();
      // Redireciona o visitante de volta pro login
      header('location:../index.php/?page=main'); exit;
  }else{echo "banana Bread <br>";}
  */
?>


<!-- Div que transita entre as Tabs do perfil do usuário -->
<div class="well">
	<!-- Tabs determinadas -->
	<div class="bottom bg-light sticky-top shadow-sm">
        <div class="container-nav">
            <ul class="nav nav-bottom nav-fill">
                <li class="nav-item">
                    <a class="nav-link text-dark" id="namesession" href="#sessoes" data-toggle="tab"> Sessões </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="namesession" href="#perfil" data-toggle="tab"> Perfil </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="namesession" href="#senha" data-toggle="tab"> Alterar Senha </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" id="namesession" href="#email" data-toggle="tab"> Alterar Email </a>
                </li>
				<a href="close.php">
				<button id="btnlogout" type="button" class="btn btn-success">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
						<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
					</svg> Sair
				</button>
				</a>
        </div>
    </div>
	<!-- Div que armazena as Tabs -->
    <div id="myTabContent" class="tab-content">
	
		<!-- Tab das Sessões que usuário está participando (SERÁ ALTERADO)-->
		<div class="tab-pane active in" id="sessoes">
			<div>
				<h5>Sessões que o usuário criou:</h5>
				<p>Para criar uma nova sessão:
				<button>Criar Campanha</button></p>
				<p>Sessão do Mestre "Usuário" - "Nome campanha"
				<button>Participar</button><button>Deletar</button></p>
				<h5>Sessões que o usuário participa:</h5>
				<p>Sessão do Mestre Lucinho - Ordem Suprema
				<button>Participar</button><button>Deletar</button></p>
				<p>Sessão do Mestre Raffozo - Ordem Nazistas
				<button>Participar</button><button>Deletar</button></p>
				<p>Sessão do Mestre Matheus - Fronteiras da Magia
				<button>Participar</button><button>Deletar</button></p>
			</div>
		</div>
	
		<!-- Tab do perfil do usuário e informações pessoais -->
		<div class="tab-pane fade" id="perfil">
			<div class="container"	id="containergeral">
			<h2 id="titulogeral"> Painel do Usuário </h2>
				<div class="row">
					<div class="col-sm-8" id="formcentralizar">
						<form>
							<!-- Envio de imagem -->
							<div id="avatarimg">
								<script src="js/functions.js" type="text/javascript"></script>
									<label class="charperfil">
									<img id="userPhoto" class="rounded-circle" href="#pic" src="http://placehold.it/400x400">
									<input id="pic" class='pic' onchange='readURL(this,"userPhoto");' type="file" >
								</label>
							</div><br>
							<label id="txtboxgeral" for="Username"> Username: </label>
							<input type="text" size="30" id="Username" name="Username" value='<?php echo$_SESSION['UsuarioUsername']; ?>' disabled>
							<label id="txtboxgeral" for="Email"> Email: </label>
							<input type="email" size="30" id="Email" name="Email" value='<?php echo $_SESSION['UsuarioEmail']; ?>' disabled><br>
							<label id="txtboxgeral" for="Nome"> Nome: </label>
							<input type="text" size="30" id="Nome" name="Nome" value='<?php echo $_SESSION['UsuarioNome']; ?>'>
							<label id="txtboxgeral" for="Sobrenome"> Sobrenome: </label>
							<input type="text" size="30" id="Sobrenome" name="Sobrenome" value='<?php echo $_SESSION['UsuarioSobrenome']; ?>'><br>
							<label id="txtboxgeral" for="Aniversário">Data de Nascimento:</label>
							<input name="Aniversário" type="date" name="Aniversario" value='<?php echo $_SESSION['UsuariodataNascimento']; ?>'>				
							<div>
								<p id="btnperfil"><button class="btn btn-primary">Atualizar Dados</button></p>
							</div>
						</form>
					</div>
				</div>
			</div>
	    </div>
		<!-- Tab da senha do usuário -->
		<div class="tab-pane fade" id="senha">
			<div class="container"	id="containergeral">
			<h2 id="titulogeral"> Painel de Alteração de Senha </h2>
				<div class="row">
					<div class="col-sm-8" id="formcentralizar">
						<form>
							<label for="Npassword" id="txtboxgeral">Nova Senha:</label>
							<input type="password" id="Npassword" name="Npassword" required>
							<label for="CNpassword" id="txtboxgeral">Confirmar Nova Senha:</label>
							<input type="password" id="CNpassword" name="CNpassword" required>
							
							
							<!-- Modal alteração de senha -->
							<div>
								<p id="btnsenha"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ASenha" data-backdrop="static">
								Alterar Senha
								</button></p>
								<!-- Modal de Senha -->
								<div class="modal fade" id="ASenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Confirme a Mudança de Senha</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<!-- Confirmação da Alteração de Senha -->
								<div class="modal-body">
									<form>
										<label for="Password">Senha Atual:</label>
										<input type="password" id="Password" name="Password" required>
										<button>Atualizar Senha</button>
									</form>
									  </div>
									  <!-- Botão de Confirmação -->
									  <div class="modal-footer">
										<p>Não fazer nada e cancelar a alteração</p>
										<button type="refresh" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-backdrop="static">
											Cancelar
										</button>
									  </div>
									</div>
								  </div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Tab do email do usuário -->
		<div class="tab-pane fade" id="email">
			<div class="container"	id="containergeral">
			<h2 id="titulogeral"> Painel de Alteração de Email </h2>
				<div class="row">
					<div class="col-sm-8" id="formcentralizar">
						<form>
							<label for="Nemail" id="txtboxgeral">Novo Email:</label>
							<input type="email" id="Nemail" name="Nemail" required>
							<label for="CNemail" id="txtboxgeral">Confirmar Novo Email:</label>
							<input type="email" id="CNemail" name="CNemail" required>
							
							<!-- Modal alteração de Email -->
							<div>
								<p id="btnemail"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AEmail" data-backdrop="static">
								Alterar Email
								</button></p>
								<!-- Modal de Email -->
								<div class="modal fade" id="AEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Confirme a Mudança de Email</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<!-- Confirmação da Alteração de Email -->
								<div class="modal-body">
									<form>
										<label for="Password">Senha Atual:</label>
										<input type="password" id="Password" name="Password" required>
										<button>Atualizar Email</button>
									</form>
									  </div>
									  <!-- Botão de Confirmação -->
									  <div class="modal-footer">
										<p>Não fazer nada e cancelar a alteração</p>
										<button type="refresh" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-backdrop="static">
											Cancelar
										</button>
									  </div>
									</div>
								  </div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>
 
 
 
 <div class="container-fluid">
	<div class="row"></div>
	<div class="row">
		<div class="col-md-12">
			<div class="Pmesas">
				<div class="pminfo">
					<h1>Ordem Suprema</h1>
					<p>Criado por: Lucinho</p>
				</div>
				<div class="pmbutton">
					<button>Entrar</button>
					<button>Deletar</button>
				</div>
			</div>
		</div>
	</div>
 </div>
 
 <style>
 .Pmesas{
	 background-color:white;
	 background-image:url('https://i.pinimg.com/originals/de/f9/70/def97040fcbdd13ee1809d01cc46dc3f.jpg');
	 background-repeat: no-repeat;
	 background-size: cover;
	 height:80px;
	 width:100%;
	 border-radius:10px;
 }
 .Pmesas .pminfo{
	 float:left;
	 width:80%;
 }
 .Pmesas .pmbutton{
	 float:right;
	 width:70px;
	 background-color:pink;
 }
 </style>