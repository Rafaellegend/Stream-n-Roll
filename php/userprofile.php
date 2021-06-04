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

	//ADM Online
	$nivel = $_SESSION['UsuarioNivel'];
	$ADM = 0;
	if ($nivel == $ADM){
	echo '<button id="adminbtn" onclick="adm()">Usuário Admnistrador Logado</button>	
			<style>
				#adminbtn{
					position:fixed;
					left:0;
					bottom:0;
					z-index:9998;
				}
			</style>';
	}else if ($nivel != $ADM){
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
<script>
window.onload = function() {
	fontresize(".Pbmtitle")
}
function fontresize(w){
	if ( $(w).get(0).scrollHeight > $(w).height() ) {
		var x = $(w).get(0).scrollHeight;
		var y = $(w).height();
		var xy= (x - y)/4;
		$(w).css('font-size', '-='+xy);
	}
}

function changedesc(n){
	var pic = document.getElementById('m'+n+'picture').value;
	var title = document.getElementById('m'+n+'title').value;
	var creator = document.getElementById('m'+n+'creator').value;
	var desc = document.getElementById('m'+n+'desc').value;
	var users = document.getElementById('m'+n+'users').value;
							
	document.getElementById('imgmesa').style.backgroundImage = "url('"+pic+"'),url('img/degrade.png')";
	document.getElementById('mtitle').textContent = title;
	document.getElementById('mcreator').textContent = creator;
	document.getElementById('mdesc').textContent = desc;
	document.getElementById('musers').textContent = users;
	fontresize('#mtitle');
}
var descopen = false;
function opendesc(){
	if(descopen == false){
		document.getElementById('mesas').style.margin = "0px 300px 0px 0px";
		document.getElementById('infomesa').style.width = "300px";
		document.getElementById('infomesa').style.padding = "0 10px 0 10px";
		//document.getElementById('infomesa').style.borderLeft = "1px solid gray";
		document.getElementById('imgmesa').style.margin = "0 -10px";		
		document.getElementById('clickbg').style.visibility = "visible";
		descopen = true;
	}else if(descopen == true){
		document.getElementById('mesas').style.margin = "0";
		document.getElementById('infomesa').style.width = "0";
		document.getElementById('infomesa').style.padding = "0";
		//document.getElementById('infomesa').style.borderLeft = "0";
		document.getElementById('imgmesa').style.margin = "0";
		document.getElementById('clickbg').style.visibility = "hidden";
		descopen = false;							
	};
}
</script>

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
				
				<a href='?page=close'>
				<button id="btnlogout" type="button" class="btn btn-danger">
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


		<!-- mesas -->
		 <div id="mesas">
		 <div class="container">
			<div class="row"></div>
			<div class="row">
			
				<!-- Criar mesa -->
				<div class="col-md-12">
				<h3>Crie sua mesa</h3>
				<a href="?page=csession"><button>Criar</button></a>
				</div>
				
				<div class="col-md-12">
					<h3>Suas Mesas</h3>
					<div class="Pbmesas" id="mx">
						<input type="text" id="m1picture" value="https://s3.amazonaws.com/files.d20.io/images/205057049/3z-SsNxVAaC0hWcApkjvKQ/max.png?1614639154364" hidden>
						<input type="text" id="m1title" value="Ordem Suprema" hidden>
						<input type="text" id="m1creator" value="Lucinho" hidden>
						<input type="text" id="m1desc" value="Testando um texto"hidden>
						<input type="text" id="m1users" value="6" hidden>
						<div class="Pbminfo" onclick="changedesc('1');opendesc()">
							<p class="Pbmtitle">Ordem Suprema</p>
							<p class="Pbmcreator">Criado por: Lucinho</p>
						</div>
						<div class="Pbmbutton">
							<p>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
								<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
							6
							</p>
							<button class="Pbmenter">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
									<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
								</svg>
							</button>
						</div>
					</div>
					<!-- div 2 para test -->
					<div class="Pbmesas" id="mx">
						<input type="text" id="m2picture" value="https://s3.amazonaws.com/files.d20.io/images/217565789/Eics9egb326rnXnW7VhMKQ/max.png?1619142697235" hidden>
						<input type="text" id="m2title" value="Cidade Mistério" hidden>
						<input type="text" id="m2creator" value="Rafael" hidden>
						<input type="text" id="m2desc" value="Testando um texto"hidden>
						<input type="text" id="m2users" value="6" hidden>
						<div class="Pbminfo" onclick="changedesc('2');opendesc()">
							<p class="Pbmtitle">Cidade Mistério</p>
							<p class="Pbmcreator">Criado por: Rafael</p>
						</div>
						<div class="Pbmbutton">
							<p>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
								<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
							6
							</P>
							<button class="Pbmenter">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
									<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
								</svg>
							</button>
						</div>
					</div>
					<!-- div 3 para test -->
					<div class="Pbmesas">
						<div class="Pbminfo">
							<p class="Pbmtitle">Fronteiras da Magia</p>
							<p class="Pbmcreator">Criado por: Matheus </p>
						</div>
						<div class="Pbmbutton">
							<p>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
								<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
							6
							</P>
							<button class="Pbmenter">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
									<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
								</svg>
							</button>
						</div>
					</div>
					<!-- div 4 para test -->
					<div class="Pbmesas">
						<div class="Pbminfo">
							<p class="Pbmtitle">Chamado da Tormenta</p>
							<p class="Pbmcreator">Criado por: Rafael </p>
						</div>
						<div class="Pbmbutton">
							<p>
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
								<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							</svg>
							6
							</P>
							<button class="Pbmenter">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
									<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		 </div>
		 </div>
		</div>
	
		<!-- Tab do perfil do usuário e informações pessoais -->
		<div class="tab-pane fade" id="perfil">
			<div class="container"	id="containergeral">
			<h2 id="titulogeral"> Painel do Usuário </h2>
				<div class="row">
					<div class="col-sm-8" id="formcentralizar">
					<!-- Form mudança de Dados -->
						<form method="post" action="?page=open" id="formDados" name="formDados">
							<!-- Envio de imagem -->
							<div id="avatarimg">
								<script src="js/functions.js" type="text/javascript"></script>
									<label class="charperfil">
									<img id="userPhoto" class="rounded-circle" href="#pic" src="http://placehold.it/400x400">
									<input id="pic" class='pic' onchange='readURL(this,"userPhoto");' type="file" >
								</label>
							</div><br>
							<label id="txtboxgeral" for="Username"> Username: </label>
							<input type="text" size="30" id="Username" name="Username" value='<?php echo $_SESSION['UsuarioUsername']; ?>' disabled>
							<label id="txtboxgeral" for="Email"> Email: </label>
							<input type="email" size="30" id="Email" name="Email" value='<?php echo $_SESSION['UsuarioEmail']; ?>' disabled><br>
							
							<!-- Remover depois-->
							<label id="txtboxgeral" for="Senha"> Senha Criptografada: </label>
							<input type="text" size="30" id="Senha" name="Senha" value='<?php echo $_SESSION['UsuarioSenha']; ?>' disabled><br>
							
							<label id="txtboxgeral" for="Nome"> Nome: </label>
							<input type="text" size="30" id="nNome" name="nNome" value='<?php echo $_SESSION['UsuarioNome']; ?>'>
							<label id="txtboxgeral" for="Sobrenome"> Sobrenome: </label>
							<input type="text" size="30" id="nSobrenome" name="nSobrenome" value='<?php echo $_SESSION['UsuarioSobrenome']; ?>'><br>
							<label id="txtboxgeral" for="Aniversario">Data de Nascimento:</label>
							<input type="date" id="nAniversario" name="nAniversario" value='<?php echo $_SESSION['UsuariodataNascimento']; ?>'>				
							
							<!-- Input Case -->
							<input type="text" name="action" value="AtualizarDados" hidden>
							
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
						<!-- Form mudança de senha -->
						<form  method="post" action="?page=open" id="formSenha" name="formSenha">
							<label for="Npassword" id="txtboxgeral">Nova Senha:</label>
							<input type="password" id="Npassword" name="Npassword" required>
							<label for="CNpassword" id="txtboxgeral">Confirmar Nova Senha:</label>
							<input type="password" id="CNpassword" name="CNpassword" required>
							
							<h5 class="modal-title" id="exampleModalLabel">Confirme a Mudança de Senha</h5>
							<label for="password">Senha Atual:</label>
							<input type="password" id="password" name="password" required>
							
							<!-- Input Case -->
							<input type="text" name="action" value="AtualizarSenha" hidden>
							
							<div>
								<p id="btnsenha"><button class="btn btn-primary">Atualizar Senha</button></p>
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
					<!-- Form mudança de email -->
						<form method="post" action="?page=open" id="formNovoEmail" name="formNovoEmail">
							<label for="Nemail" id="txtboxgeral">Novo Email:</label>
							<input type="email" id="Nemail" name="Nemail" required>
							<label for="CNemail" id="txtboxgeral">Confirmar Novo Email:</label>
							<input type="email" id="CNemail" name="CNemail" required>
							
							<h5 class="modal-title" id="exampleModalLabel">Confirme a Mudança de Email</h5>
							<label for="password">Senha Atual:</label>
							<input type="password" id="password" name="password" required>
							
							<!-- Input Case -->
							<input type="text" name="action" value="AtualizarEmail" hidden>
							
							<div>
								<p id="btnemail"><button class="btn btn-primary">Atualizar Email</button></p>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
 </div>

 <!-- Descrição mesas-->
 <div onclick="opendesc()" class="clickbg" id="clickbg"></div>
 <div id="infomesa"style="transition:0.3s;">
	<div id="imgmesa"></div>
	<div id="descmesa">
		<p id="mtitle">Default</p>
		<div class="smbox">
			<span class="mdescl">Criador:</span> <p id="mcreator"> Default</p>
		</div>
		<div class="smbox">
			<span class="mdescl">Maximo de Jogadores:</span> <p id="musers">x</p>
		</div>
		<div class="smbox">
			<span class="mdescl">Data de Criação:</span> <p id="mcreated">xx/xx/xxxx</p>
		</div>
		<div id="mdesc" class="txtbreak"></div>
		<div class="mdescbtn">
		<button class="ment">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
				<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
			</svg>			
			Entrar na Sala
		</button>
		<button class="mdlt">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
				<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
				<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
			</svg>
			Deletar
			</button>
		</div>
		
	</div>
 </div>

 
 <style>
 #mesas{
	transition:0.3s;
	height:76vh;
 }
 .clickbg{
	position:fixed;
	top:0;
	left:0;
	display:block;
	background-color:pink;
	height:100%;
	width:100%;
	z-index:9996;
	opacity:0;
	visibility: hidden;
 }
 #infomesa{
	position:fixed;
	bottom:0;
	right:0;
	height:84.5vh;
	width:0;
	background-color:white;
	z-index:9997;
	padding:0;
	box-shadow: -3px 0 3px #ededec;
	//border-left: 1px solid gray;
 }
 #imgmesa{
	height:150px;
	width:300px;
	margin:0 -10px;
	background-image: 
	url('http://placehold.it/300x150'), url('img/degrade.png');
	background-repeat: no-repeat, repeat;
	background-size: cover,contain;
	background-blend-mode:screen;
	box-shadow:inset 20px 0 20px -6px white;
 }
 .smbox{
 }
 .smbox p{
	display:inline-block;
 }
 .mdescl{
	font-weight:bold;
 }
 #mtitle{
	width:280px;
	height:70px;
	font-size:35px;
	font-weight:bold;
	line-height:0.8;
	overflow-y:hidden;
	position:relative;
	bottom:40px;
	margin-bottom:-45px;
	text-align:center;
 }
 #mcreator{
	 
 }
 #mcreated{
	 
 }
 #muser{
	 
 }
 #mdesc{
	 overflow-y:auto;
	 padding: 5px 10px;
	 border-radius:10px;
	 height:30vh;
	 box-shadow: 0 0 3px 1px #c4c1c0;
 }
 .mdescbtn{
	padding:10px 0;
 }
 .ment{
	background-color:#3dac4c;
	color:white;
	font-size:16px;
	border:none;
	text-align:center;
	height:40px;
	width:135px;
	border-radius:5px;
	float:left;
 }
 .mdlt{
	background-color:#cf2d3a;
	color:white;
	font-size:16px;
	border:none;
	text-align:center;
	height:40px;
	width:135px;
	border-radius:5px;
	float:right;
 }
 .Pbmesas{
	display:inline-block;
	background-image: url('https://i.pinimg.com/originals/de/f9/70/def97040fcbdd13ee1809d01cc46dc3f.jpg'), url('img/degrade.png');
	background-repeat: no-repeat, repeat;
	background-size: cover,contain;
	background-blend-mode:screen;
	height:180px;
	width:250px;
	padding:10px;
	margin:10px;
	border-radius:10px;
	box-shadow: 5px 5px 3px #888888;
	transition:0.3s;
 }
 .Pbmesas:hover{
	height:185px;
	width:255px; 
 }
.Pbminfo{
	 width:250px;
	 height:70%;
 }
.Pbmtitle{
	width:230px;
	height:75px;
	font-size:35px;
	font-weight:bold;
	line-height:0.8;
	color:#f1f1f1;
	overflow: hidden;
	transition:0.3s;
	text-align:center;
	text-shadow: 2px 2px 4px #000000;
}
.Pbmesas:hover .Pbmtitle{
	width:235px;
}
.Pbmcreator{
	color:#222;
	font-weight:bold;
	font-family:monospace;
	position:relative;
	top:10px;	
	transition:0.3s;
}
.Pbmesas:hover .Pbmcreator{
	top:15px;
}
.Pbmbutton{
	 width:230px;
	 height:30%;
	 padding-top:20px;
 }
.Pbmbutton p{
	 display:inline;
	 
 }
 .Pbmesas:hover .Pbmbutton{
	 width:235px;
 }
.Pbmenter{
	background-color:#3dac4c;
	border:none;
	text-align:center;
	height:30px;
	width:30px;
	border-radius:5px;
	color:white;
	position:relative;
	left:165px;
	transition:0.3s;
}
.Pbmesas:hover .Pbmenter{
	left:170px;
}
.Pbmenter svg{
	position:relative;
	left:-3px;
	top:-2px;
}
 </style>