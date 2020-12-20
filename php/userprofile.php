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
                    <a class="nav-link text-dark" id="namesession" href="#email" data-toggle="tab"> Alterar E-mail </a>
                </li>
				<button id="btnlogout" type="button" class="btn btn-success">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
						<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
					</svg> Sair
				</button>
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
			<div class="container"	id="perfilcontainer">
			<h2 id="perfiltitulo"> Perfil do Usuário </h2>
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
							<label id="txtperfil" for="Username"> Username: </label>
							<input type="text" size="30" id="Username" name="Username">
							<label id="txtperfil" for="Email"> Email: </label>
							<input type="email" size="30" id="Email" name="Email"><br>
							<label id="txtperfil" for="Nome"> Nome: </label>
							<input type="text" size="30" id="Nome" name="Nome">
							<label id="txtperfil" for="Sobrenome"> Sobrenome: </label>
							<input type="text" size="30" id="Sobrenome" name="Sobrenome"><br>
							<label id="txtperfil" for="Genero"> Gênero: </label>
							<select name="Genero" id="Genero" name="Genero">
								<option> Não Definido </option>
								<option> Masculino </option>
								<option> Feminino </option>
							</select>
							<label id="txtperfil" for="Aniversário">Data de Nascimento:</label>
							<input name="Aniversário" type="date" name="Aniversario">				
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
			<h5>Painel de Edição da senha:</h5>
			<form>
				<label for="Npassword">Nova Senha:</label>
				<input type="password" id="Npassword" name="Npassword" required>
				<label for="CNpassword">Confirmar Nova Senha:</label>
				<input type="password" id="CNpassword" name="CNpassword" required>
				
				
				<!-- Modal alteração de senha -->
				<div>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ASenha" data-backdrop="static">
					Alterar Senha
					</button>
					
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
		
		<!-- Tab do email do usuário -->
		<div class="tab-pane fade" id="email">
			<h5>Painel de Edição do Email:</h5>
			<form>
				<label for="Nemail">Novo Email:</label>
				<input type="email" id="Nemail" name="Nemail" required>
				<label for="CNemail">Confirmar Novo Email:</label>
				<input type="email" id="CNemail" name="CNemail" required>
				
				<!-- Modal alteração de Email -->
				<div>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AEmail" data-backdrop="static">
					Alterar Email
					</button>
					
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