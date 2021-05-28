<?php
  //Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      echo "<script>window.location.href = '?page=userprofile';</script>";
  }

	//Recebendo os dados do submit
	$iniciando = isset($_POST['start']) ? $_POST['start'] :null;
	$usuario = isset($_POST['login']) ? $_POST['login'] :null;
	$senharaw = isset($_POST['senha']) ? $_POST['senha'] :null;
	$senha = cript($senharaw);

	//Ações de Login, Cadastro ou Acesso Direto
		switch ($iniciando){
			
			//Realização do Login
			case "Login":
				if($usuario != null AND $senha != null){
				// Validação do usuário/senha digitados
				$sql = "SELECT `id_User`, `username`, `senha` , `email`, `nome`, `sobrenome`, `dataNascimento`, `tipo` FROM users WHERE username = '$usuario'";
				$result = sqlquery($sql);

				$row_cnt = $result->rowCount();

					if ($row_cnt != 1) {
						// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
						echo "Login inválido!"; exit;
					} else {
						// Salva os dados encontrados na variável $resultado
						$row = $result->fetch(PDO::FETCH_ASSOC);

						// Salva os dados encontrados na sessão
						$_SESSION['STATUS'] = 'ON';
						$_SESSION['UsuarioID'] = $row['id_User'];
						$_SESSION['UsuarioUsername'] = $row['username'];
						$_SESSION['UsuarioSenha'] = $row['senha'];
						$_SESSION['UsuarioEmail'] = $row['email'];
						$_SESSION['UsuarioNome'] = $row['nome'];
						$_SESSION['UsuarioSobrenome'] = $row['sobrenome'];
						$_SESSION['UsuariodataNascimento'] = $row['dataNascimento'];
						$_SESSION['UsuarioNivel'] = $row['tipo'];
					
					  // Redireciona o visitante
					  //header('location:../index.php/?page=userprofile'); exit;
				  }
				}
				else{
					session_destroy();
				}
			
			//Finalizando
			break;
			
			//Realização do Cadastro
			case "Cadastro":
			
				//Recebendo os dados de usuários
				$Cadusuario = isset($_POST['CadUsername']) ? $_POST['CadUsername'] :null;
				$Cadsenharaw = isset($_POST['CadPassword']) ? $_POST['CadPassword'] :null;
				$Cadsenha = cript($senharaw);
				$Cadcpasswordraw = isset($_POST['Cadcpassword']) ? $_POST['Cadcpassword'] :null;
				$Cademail = isset($_POST['CadEmail']) ? $_POST['CadEmail'] :null;
				$CadCemail = isset($_POST['Cadcemail']) ? $_POST['Cadcemail'] :null;
				
				//Verificação da Existencia do Username/Email
				$verificaExisteUser = "SELECT `username` FROM users WHERE username = '$Cadusuario'";
				$SelectExistUser = sqlquery($verificaExisteUser);
				$verificaExisteEmail = "SELECT `email` FROM users WHERE email = '$Cademail'";
				$SelectExistEmail = sqlquery($verificaExisteEmail);
				
				
				if ($Cadusuario == $SelectExistUser) {
					
					echo "<script language='javascript' type='text/javascript'>
					alert('Esse Username já está sendo utilizado');</script>";
					
				}else{
					if ($Cademail == $SelectExistEmail) {
							
						echo "<script language='javascript' type='text/javascript'>
						alert('Esse Email já está sendo utilizado');</script>";
						
					}else{
					if($Cadsenharaw == $Cadcpasswordraw AND $Cademail == $CadCemail) {
					
						$criarUsuario = "INSERT INTO users (username, senha, email, tipo) VALUES ('$Cadusuario', '$Cadsenha', '$Cademail', '1')";
						$UsuarioCriado = sqlquery($criarUsuario);
							
						$seCriacao = "SELECT `id_User`, `username`, `senha` , `email`, `nome`, `sobrenome`, `dataNascimento`, `tipo` FROM users WHERE username = '$Cadusuario'";
						$SelectCriacao = sqlquery($seCriacao);
							
						$row_CSelect = $SelectCriacao->rowCount();
							
						$rowCS = $SelectCriacao->fetch(PDO::FETCH_ASSOC);
							
						// Salva os dados na sessão após a criação
						$_SESSION['STATUS'] = 'ON';
						$_SESSION['UsuarioID'] = $rowCS['id_User'];
						$_SESSION['UsuarioUsername'] = $rowCS['username'];
						$_SESSION['UsuarioSenha'] = $rowCS['senha'];
						$_SESSION['UsuarioEmail'] = $rowCS['email'];
						$_SESSION['UsuarioNome'] = $rowCS['nome'];
						$_SESSION['UsuarioSobrenome'] = $rowCS['sobrenome'];
						$_SESSION['UsuariodataNascimento'] = $rowCS['dataNascimento'];
						$_SESSION['UsuarioNivel'] = $rowCS['tipo'];
						}
					}
				}
			
			//Finalizando
			break;
			
			//Realização do Acesso Direto
			case "AcessoDireto":
			
			//Finalizando
			break;
		}

	//Recebendo os dados do submit
	$acao = isset($_POST['action']) ? $_POST['action'] :null;
	
			switch ($acao){
			
				//Atualização dos dados do Usuário
				case "AtualizarDados":
				
				//Variaveis Novos Dados
					$iduser = $_SESSION['UsuarioID'];
					$nNome = isset($_POST['nNome']) ? $_POST['nNome'] :null;
					$nSobrenome = isset($_POST['nSobrenome']) ? $_POST['nSobrenome'] :null;
					$nAniversario = isset($_POST['nAniversario']) ? $_POST['nAniversario'] :null;
					
					//Atualiza Nome
					if( $nNome != null ){
						$Upname = "UPDATE users SET nome='$nNome' WHERE id_User = '$iduser' ";
						$UpdateName = sqlquery($Upname);
						
						$SeNome = "SELECT `nome` FROM users WHERE id_User = '$iduser'";
						$SelectNome = sqlquery($SeNome);
						
						$row_NSelect = $SelectNome->rowCount();
						
						$rowNS = $SelectNome->fetch(PDO::FETCH_ASSOC);

						// Salva a atualização do Nome
						$_SESSION['UsuarioNome'] = $rowNS['nome'];
					}
					//Atualiza Sobrenome
					if( $nSobrenome != null ){
						$Upsobrenome = "UPDATE users SET sobrenome='$nSobrenome' WHERE id_User = '$iduser' ";
						$UpdateSobrenome = sqlquery($Upsobrenome);
						
						$SeSobrenome = "SELECT `sobrenome` FROM users WHERE id_User = '$iduser'";
						$SelectSobrenome = sqlquery($SeSobrenome);
						
						$row_SSelect = $SelectSobrenome->rowCount();
						
						$rowSS = $SelectSobrenome->fetch(PDO::FETCH_ASSOC);

						// Salva a atualização do Sobrenome 
						$_SESSION['UsuarioSobrenome'] = $rowSS['sobrenome'];
					}
					//Atualiza Data
					if( $nAniversario != null ){
						//$newAniversario = str_replace("/", "-", $nAniversario);
						$Upaniversario = "UPDATE users SET dataNascimento='$nAniversario' WHERE id_User = '$iduser' ";
						$UpdateAniversario = sqlquery($Upaniversario);
						
						$SeAniversario = "SELECT `dataNascimento` FROM users WHERE id_User = '$iduser'";
						$SelectAniversario = sqlquery($SeAniversario);
						
						$row_ASelect = $SelectAniversario->rowCount();
						
						$rowAS = $SelectAniversario->fetch(PDO::FETCH_ASSOC);

						// Salva a atualização da Data de Nascimento
						$_SESSION['UsuariodataNascimento'] = $rowAS['dataNascimento'];
					}
			
				
				
				//Finalizando
				break;
				
				//Atualização da Senha
				case "AtualizarSenha":
				
				//Verificação de dados
				$iduser = $_SESSION['UsuarioID'];
				//Senha atual para realização ações
					$Oldsenharaw = isset($_POST['password']) ? $_POST['password'] :null;
					$Oldsenha = cript($Oldsenharaw);
					
					//Variaveis Nova Senha
					$npasswordraw = isset($_POST['Npassword']) ? $_POST['Npassword'] :null;
					$nsenha = cript($npasswordraw);
					$cnpasswordraw = isset($_POST['CNpassword']) ? $_POST['CNpassword'] :null;
					
					
					if( $npasswordraw != null AND $cnpasswordraw != null AND $npasswordraw == $cnpasswordraw){
						$Uppassword = "UPDATE users SET senha='$nsenha' WHERE senha = '$Oldsenha' ";
						$UpdatePassword = sqlquery($Uppassword);
						
						$SePassword = "SELECT `senha` FROM users WHERE id_User = '$iduser'";
						$SelectPassword = sqlquery($SePassword);
						
						$row_PSelect = $SelectPassword->rowCount();
						
						$rowPS = $SelectPassword->fetch(PDO::FETCH_ASSOC);

						// Salva a atualização da Data de Nascimento
						$_SESSION['UsuarioSenha'] = $rowPS['senha'];
					}
					
				//Finalizando
				break;
				
				//Atualização do Email
				case "AtualizarEmail":
				//Verificação de dados
				$iduser = $_SESSION['UsuarioID'];
				$senhaBanco = $_SESSION['UsuarioSenha'];
					//Senha atual para realização ações
					$SenhaAtualRaw = isset($_POST['password']) ? $_POST['password'] :null;
					$SenhaAtual = cript($SenhaAtualRaw);
					
					//Variaveis Novo Email
					$nemail = isset($_POST['Nemail']) ? $_POST['Nemail'] :null;
					$cnemail = isset($_POST['CNemail']) ? $_POST['CNemail'] :null;
					
					if($nemail != null AND $cnemail != null AND $nemail == $cnemail AND $senhaBanco == $SenhaAtual){
						$Upemail = "UPDATE users SET email='$nemail' WHERE senha = '$SenhaAtual' ";
						$UpdatEmail = sqlquery($Upemail);
						
						$Seemail = "SELECT `email` FROM users WHERE id_User = '$iduser'";
						$SelectEmail = sqlquery($Seemail);
						
						$row_ESelect = $SelectEmail->rowCount();
						
						$rowES = $SelectEmail->fetch(PDO::FETCH_ASSOC);

						// Salva a atualização da Data de Nascimento
						$_SESSION['UsuarioEmail'] = $rowES['email'];
					}
					
				//Finalizando
				break;
			}
?>