<!-- Div que transita entre as Tabs do perfil do usuário -->
<div class="well"> 
	<!-- Tabs determinadas -->
    <ul class="nav nav-tabs">	
		<li class="active"><a href="#sessoes" data-toggle="tab">Sessões</a></li>
		<li><a href="#perfil" data-toggle="tab">Perfil</a></li>
		<li><a href="#senha" data-toggle="tab">Senha</a></li>
		<li><a href="#email" data-toggle="tab">Email</a></li>
		<button>Deslogar</button>
    </ul>
	
	
	<!-- Div que armazena as Tabs -->
    <div id="myTabContent" class="tab-content">
	
		<!-- Tab das Sessões que usuário está participando -->
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
			<h5>Painel de Edição de dados do usuário:</h5>
			<form>
				<!-- Envio de imagem -->
				<div>
					<script src="js/functions.js" type="text/javascript"></script>
						<label class="charperfil">
						<img id="userPhoto" class="rounded-circle" href="#pic" src="http://placehold.it/400x400" 
						style="width:100px;height:100px;margin-top:20px;">
						<input id="pic" class='pic' onchange='readURL(this,"userPhoto");' type="file" >
					</label>
				</div></hr><br>
				<label for="Username">Username:</label>
				<input type="text" id="Username" name="Username"><br>
				<label for="Nome">Nome: </label>
				<input type="text" id="Nome" name="Nome"><br>
				<label for="Sobrenome">Sobrenome: </label>
				<input type="text" id="Sobrenome" name="Sobrenome"><br>
				<label for="Email">Email:</label>
				<input type="email" id="Email" name="Email"><br>
				<label for="Genero">Gênero:</label>
				<select name="Genero" id="Genero" name="Genero">
					<option>Não Definido</option>
					<option>Masculino</option>
					<option>Feminino</option>
				</select><br>
				<label for="Aniversário">Data de Aniversário:</label>
				<input name="Aniversário" type="date" name="Aniversario">				
				<div>
					<button class="btn btn-primary">Atualizar Dados</button>
				</div>
			</form>
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