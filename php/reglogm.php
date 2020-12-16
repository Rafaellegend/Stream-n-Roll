<h1 id="titulo1"> Stream & Roll - Lidere, siga… ou saia do caminho...  </h1>
<!-- Caixa do Login -->
<div class="container" id="clogin">
	<div class="center">
		<!-- Texto de Teste - Login -->
		<h2 id="titulo2"> Roll your Initiative </h2>
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
        <form>
		<label for="Username">Login:</label>
		<input type="text" id="Username" name="Username" required><br>
		<label for="Password">Senha:</label>
		<input type="password" id="Password" name="Password" required><br>
		
		<input type="submit" value="Fazer Login">
	</form>
      </div>
	  <!-- Botão transição de Modal - Registro -->
      <div class="modal-footer">
		<p>Não tem uma conta?</p>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#MdRegister" data-dismiss="modal" data-backdrop="static">
			Cadastre-se
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
        <form>
			<label for="Username">Username:</label>
			<input type="text" id="Username" name="Username" required><br>

			<label for="Password">Senha:</label>
			<input type="password" id="Password" name="Password" required><br>

			<label for="Cpassword">Confirmar Senha:</label>
			<input type="password" id="Cpassword" name="Cpassword" required><br>

			<label for="Email">E-mail:</label>
			<input type="email" id="Email" name="Email" required><br>

			<label for="Cemail">Confirmar E-mail:</label>
			<input type="email" id="Cemail" name="Cemail" required><br>


			<input type="checkbox" required>Eu Aceito os <a href="">Termos de Uso e as politicas de privacidade</a> do site.

			<input type="submit" value="Cadastrar">
		</form>
      </div>
	  <!-- Botão transição de Modal - Login -->
      <div class="modal-footer">
		<p>Já possui conta?</p>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MdLogin" data-dismiss="modal" data-backdrop="static">
			Login
		</button>
      </div>
    </div>
  </div>
</div>