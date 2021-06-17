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
	
	// Carregar Mesa
	function loadmesas(){
		$user = $_SESSION['UsuarioID'];
		//echo $user;
		$sql= "SELECT mesa.id_Mesa AS `id`, mesa.nomeMesa AS `nome` , mesa.codigoMesa AS `codigo`, mesa.sistema AS `sitema`, mesa.descricao AS `desc`, DATE_FORMAT(mesa.dataCriacao, '%d %m %Y') AS `data`, mesa.estilo AS `tema`, mesa.max_Players AS `max`, users.username AS `creator`, ficha.id_User AS `player` FROM `mesa` 
		LEFT JOIN `users` ON mesa.id_User = users.id_User 
		LEFT JOIN `ficha` ON mesa.id_Mesa = ficha.id_Mesa 
		WHERE ficha.id_User = $user OR mesa.id_User = $user
		ORDER BY mesa.dataCriacao";
		
		$items=sqlquery($sql);
		while($row = $items->fetch(PDO::FETCH_ASSOC)){
				$result['mesas'][] = $row;
				
		}
		//var_dump($result['mesas'][0]);
		//$i = 1;
		if(!isset($result)){}else{
			
		for($i = 1; $i <= count($result['mesas']); $i++){
			if($result['mesas'][$i-1]['creator'] == $_SESSION['UsuarioUsername']){$role = 'mestre'; }else{$role = 'jogador';}
			echo '<div class="Pbmesas" id="mx'.$i.'">
				<input type="text" id="m'.$i.'picture" value="https://s3.amazonaws.com/files.d20.io/images/205057049/3z-SsNxVAaC0hWcApkjvKQ/max.png?1614639154364" hidden>
				<input type="text" id="m'.$i.'id" value="'.$result['mesas'][$i-1]['id'].'" hidden>
				<input type="text" id="m'.$i.'title" value="'.$result['mesas'][$i-1]['nome'].'" hidden>
				<input type="text" id="m'.$i.'creator" value="'.$result['mesas'][$i-1]['creator'].'" hidden>
				<textarea id="m'.$i.'desc" hidden>'.$result['mesas'][$i-1]['desc'].'</textarea>
				<input type="text" id="m'.$i.'users" value="'.$result['mesas'][$i-1]['max'].'" hidden>
				<input type="text" id="m'.$i.'data" value="'.$result['mesas'][$i-1]['data'].'" hidden>
				<input type="text" id="m'.$i.'code" value="'.$result['mesas'][$i-1]['codigo'].'" hidden>
				<input type="text" id="m'.$i.'role" value="'.$role.'" hidden>
				<div class="Pbminfo" onclick="changedesc('.$i.');opendesc()">
					<p class="Pbmtitle">'.$result['mesas'][$i-1]['nome'].'</p>
					<p class="Pbmcreator">Criado por: '.$result['mesas'][$i-1]['creator'].'</p>
				</div>
				<div class="Pbmbutton">
					<p>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
					6
					</P>
					<a id="Pbhref" onclick="sendmesainfo('.$result['mesas'][$i-1]['id'].')">
					<button class="Pbmenter">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
							<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
						</svg>
					</button>
					</a>
				</div>
			</div>';
		}	
		/*	
		foreach($result['mesas'] as list($item)){
			if($item['creator'] == $_SESSION['UsuarioUsername']){$role = 'mestre'; }else{$role = 'jogador';}
			echo '<div class="Pbmesas" id="mx'.$i.'">
				<input type="text" id="m'.$i.'picture" value="https://s3.amazonaws.com/files.d20.io/images/205057049/3z-SsNxVAaC0hWcApkjvKQ/max.png?1614639154364" hidden>
				<input type="text" id="m'.$i.'id" value="'.$item['id'].'" hidden>
				<input type="text" id="m'.$i.'title" value="'.$item['nome'].'" hidden>
				<input type="text" id="m'.$i.'creator" value="'.$item['creator'].'" hidden>
				<textarea id="m'.$i.'desc" hidden>'.$item['desc'].'</textarea>
				<input type="text" id="m'.$i.'users" value="'.$item['max'].'" hidden>
				<input type="text" id="m'.$i.'data" value="'.$item['data'].'" hidden>
				<input type="text" id="m'.$i.'code" value="'.$item['codigo'].'" hidden>
				<input type="text" id="m'.$i.'role" value="'.$role.'" hidden>
				<div class="Pbminfo" onclick="changedesc('.$i.');opendesc()">
					<p class="Pbmtitle">'.$item['nome'].'</p>
					<p class="Pbmcreator">Criado por: '.$item['creator'].'</p>
				</div>
				<div class="Pbmbutton">
					<p>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
					6
					</P>
					<a id="Pbhref" onclick="sendmesainfo('.$item['id'].')">
					<button class="Pbmenter">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
							<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
						</svg>
					</button>
					</a>
				</div>
			</div>';
			$i++;
		} */
		}
		return;
	}
?>
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/marked.min.js"></script>
<script>
window.onload = function() {
	//fontresize(".Pbmtitle");
}
	setCookie('idUser',<?php echo isset($_SESSION['UsuarioID']); ?>,25);
	setCookie('idMesa',<?php echo isset($_SESSION['MesaID']); ?>,25);
	setCookie('nomeMesa',<?php echo isset($_SESSION['MesaNome']); ?>,25);
	setCookie('codeMesa',<?php echo isset($_SESSION['MesaCodigo']); ?>,25);
	setCookie('descMesa','',25);
	setCookie('maxMesa',<?php echo isset($_SESSION['MesaJogadores']); ?>,25);
	setCookie('dataMesa','xx/xx/xxxx',25);




function fontresize(w){
	if ( $(w).get(0).scrollHeight > $(w).height() ) {
		var x = $(w).get(0).scrollHeight;
		var y = $(w).height();
		var xy= (x - y)/4;
		$(w).css('font-size', '-='+xy);
	}
}

function changedesc(n){
	if(document.getElementById('m'+n+'role').value == 'jogador'){
		var ele = document.getElementsByClassName("mdlt");
		ele[0].style.visibility = "hidden";
		
		document.getElementById('menthref').href = "?page=ddsheet";
		document.getElementById('Pbhref').href = "?page=ddsheet";
	}else{
		document.getElementById('Pbhref').href = "?page=tabletop";
		document.getElementById('menthref').href = "?page=tabletop";
	}
	var pic = document.getElementById('m'+n+'picture').value;
	var title = document.getElementById('m'+n+'title').value;
	var creator = document.getElementById('m'+n+'creator').value;
	var desc = document.getElementById('m'+n+'desc').value;
	var users = document.getElementById('m'+n+'users').value;
	var data = document.getElementById('m'+n+'data').value.replace(/ /gi,'/' );
							
	document.getElementById('imgmesa').style.backgroundImage = "url('"+pic+"'),url('img/degrade.png')";
	document.getElementById('mtitle').textContent = title;
	document.getElementById('mcreator').textContent = creator;
	document.getElementById('mdesc').textContent = desc;
	document.getElementById('musers').textContent = users;
	document.getElementById('mcreated').textContent = data;
	document.getElementById('menthref').setAttribute("onclick", "sendmesainfo("+n+")");
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

function sendmesainfo(n){
	setCookie('idUser',<?php echo $_SESSION['UsuarioID']; ?>,25);
	setCookie('idMesa',document.getElementById('m'+n+'id').value,25);
	setCookie('NomeMesa',document.getElementById('m'+n+'title').value,25);
	setCookie('criadorMesa',document.getElementById('m'+n+'creator').value,25);
	setCookie('descMesa',document.getElementById('m'+n+'desc').value,25);
	setCookie('maxMesa',document.getElementById('m'+n+'users').value,25);
	setCookie('dataMesa',document.getElementById('m'+n+'data').value,25);
	setCookie('codeMesa',document.getElementById('m'+n+'code').value,25);
	//console.log('enviado os cookie')
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
	<div class="row">
		<div class="col-md-12">
		<!-- Criar mesa -->
			<h3>Crie sua mesa</h3>
			<a href="?page=csession"><button>Criar</button></a>
		</div>

		
		<div class="col-md-12">
			<h3>Entre em uma mesa utilizando o código:</h3>
				<form method="post" action="?page=open" id="acessomesa" name="acessomesa">
				<input type="text" name="codMesaOn" id="codMesaOn"></input>
				<input type="submit" value="Entrar na Mesa">
				<!-- Input Case -->
				<input type="text" name="start" value="AcessoMesa" hidden>
				</form>
		</div>

	</div>
	
	<div class="row">

		
		<div class="col-md-12">
			<h3>Suas mesas</h3>
			<?php 
			loadmesas();
			?>
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
							
							<!-- Remover depois
							<label id="txtboxgeral" for="Senha"> Senha Criptografada: </label>
							<input type="text" size="30" id="Senha" name="Senha" value='<?php echo $_SESSION['UsuarioSenha']; ?>' disabled><br>
							-->
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
			<a href='#' id='menthref'>
				<button class="ment" id='mentbnt'>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
						<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
					</svg>			
					Entrar na Sala
				</button>
			</a>
			<a href='#' id='mdlthref'>
				<button class="mdlt">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
						<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
						<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
					</svg>
				Deletar
				</button>
			</a>
		</div>		
	</div>
 </div>
