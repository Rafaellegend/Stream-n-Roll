<?php
  
  if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['password']))) {
	  
		//Redireciona o usuário
		//header("Location: ?page=main"); exit;
		echo "<script>window.location.href = '?page=userprofile';</script>";
  }
 
	//Recebendo os dados do submit
	$iniciando = isset($_POST['start']) ? $_POST['start'] :null;
	$usuario = isset($_POST['login']) ? $_POST['login'] :null;
	$senharaw = isset($_POST['password']) ? $_POST['password'] :null;
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
					
					  //Redireciona o usuário
					  //header("Location: ?page=userprofile"); exit;
					  echo "<script>window.location.href = '?page=userprofile';</script>";
					  
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
					
					echo "<script>alert('Esse Username já está sendo utilizado');</script>";
					
				}else{
					if ($Cademail == $SelectExistEmail) {
							
						echo "<script>alert('Esse Email já está sendo utilizado');</script>";
						
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
						
						
						//Redireciona o usuário
						//header("Location: ?page=userprofile"); exit;
						echo "<script>window.location.href = '?page=userprofile';</script>";
						
						//Aviso de Cadastro
						echo "<script>alert('Conta registrada com sucesso');</script>";
						
						}
					}
				}
			
			//Finalizando
			break;
			
			//Realização do Acesso Direto
			case "AcessoDireto":
				
				$tempuser = isset($_POST['Tempname']) ? $_POST['Tempname'] :null;
				$code = isset($_POST['Codesession']) ? $_POST['Codesession'] :null;
				
				if ($code != null){
					
					$seMesa = "SELECT `id_Mesa`, `nomeMesa`, `sistema`, `estilo` FROM mesa WHERE codigoMesa = '$code'";
					$SelectMesa = sqlquery($seMesa);
					
					//Email Aleatorio
						function randEmail($size){
							$Rnumeros = '0123456789';
							$random= "";
							for($count= 0; $size > $count; $count++){
								$random.= $Rnumeros[rand(0, strlen($Rnumeros) - 1)];
							}
							return $random;
						}
						$tempemail = ("$tempuser".randEmail(10).'@email.com');

					//Senha Aleatoria
					$tempsenharaw = "senhatemporaria";
						function randsenha($size){
							$Rnumeros = '0123456789';
							$random= "";
							for($count= 0; $size > $count; $count++){
								$random.= $Rnumeros[rand(0, strlen($Rnumeros) - 1)];
							}
							return $random;
						}
						$tempsenha = ("$tempsenharaw".randsenha(10));
					
					//Usuario Aleatorio
						function randUser($size){
							$Rnumeros = '0123456789';
							$random= "";
							for($count= 0; $size > $count; $count++){
								$random.= $Rnumeros[rand(0, strlen($Rnumeros) - 1)];
							}
							return $random;
						}
						$tempusuario = ("$tempuser".randUser(10));
						
						if ($tempusuario != null){
							
							$criarTempuser = "INSERT INTO users (username, senha, email, tipo) VALUES ('$tempusuario', '$tempsenha' ,'$tempemail', '2')";
							$TempuserCriado = sqlquery($criarTempuser);
							
							$seTempuser = "SELECT `id_User`, `username`, `senha` ,`email` , `tipo` FROM users WHERE username = '$tempusuario'"; 	
							$SelectTempUser = sqlquery($seTempuser);
							
							$row_TempSelect = $SelectTempUser->rowCount();
								
							$rowTemp = $SelectTempUser->fetch(PDO::FETCH_ASSOC);
								
							// Salva os dados na sessão após a criação
							$_SESSION['STATUS'] = 'ON';
							$_SESSION['UsuarioID'] = $rowTemp['id_User'];
							$_SESSION['UsuarioUsername'] = $rowTemp['username'];
							$_SESSION['UsuarioSenha'] = $rowCS['senha'];
							$_SESSION['UsuarioEmail'] = $rowCS['email'];
							$_SESSION['UsuarioNivel'] = $rowTemp['tipo'];
							
							//Redireciona o usuário
							//header("Location: ?page=mesa"); exit;
							echo "<script>window.location.href = '?page=mesa';</script>";
							
							}
					}
					
				
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
						
						//Aviso de Alteração
						echo "<script>alert('Nome atualizado com sucesso');</script>";
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
						
						//Aviso de Alteração
						echo "<script>alert('Sobrenome atualizado com sucesso');</script>";
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
						
						//Aviso de Alteração
						echo "<script>alert('Data de Aniversário atualizado com sucesso');</script>";
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
						
						//Aviso de Alteração
						echo "<script>alert('Senha atualizada com sucesso');</script>";
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
					
					//Verificação da Existencia do Email
					$verificaExisteEmail = "SELECT `email` FROM users WHERE email = '$Cademail'";
					$SelectExistEmail = sqlquery($verificaExisteEmail);
					
					if($nemail != null AND $cnemail != null AND $nemail == $cnemail AND $senhaBanco == $SenhaAtual){
						if ($nemail != $SelectExistEmail){
							$Upemail = "UPDATE users SET email='$nemail' WHERE senha = '$SenhaAtual' ";
							$UpdatEmail = sqlquery($Upemail);
							
							$Seemail = "SELECT `email` FROM users WHERE id_User = '$iduser'";
							$SelectEmail = sqlquery($Seemail);
							
							$row_ESelect = $SelectEmail->rowCount();
							
							$rowES = $SelectEmail->fetch(PDO::FETCH_ASSOC);

							// Salva a atualização da Data de Nascimento
							$_SESSION['UsuarioEmail'] = $rowES['email'];
							
							//Aviso de Alteração
							echo "<script>alert('Email atualizado com sucesso');</script>";
						}else{
							//Aviso de Falha
							echo "<script>alert('Esse Email já está sendo utilizado');</script>";
						}
					}
					
					
				//Finalizando
				break;
				
				//Cadastrar Usuário Temporário
				case "CadTemp":
				
				//Verificação dos Dados Existentes
				$iduser = $_SESSION['UsuarioID'];
				$nivel = '1';
				$TTempusername = $_SESSION['UsuarioUsername'];
				$TTempemail = $_SESSION['UsuarioEmail'];
				$TTempsenha = $_SESSION['UsuarioSenha'];
				$TTempnivel = $_SESSION['UsuarioNivel'];
				
				//Recebimento dos dados e criptografia da senha
				$Tcadusername = isset($_POST['TCadUsername']) ? $_POST['TCadUsername'] :null;
				$Tcadpasswordraw = isset($_POST['TCadPassword']) ? $_POST['TCadPassword'] :null;
				$Tcadpassword = cript($Tcadpasswordraw);
				$Tcadcpassword = isset($_POST['TCadcpassword']) ? $_POST['TCadcpassword'] :null;
				$Tcademail = isset($_POST['TCadEmail']) ? $_POST['TCadEmail'] :null;
				$Tcadcemail = isset($_POST['TCadcemail']) ? $_POST['TCadcemail'] :null;
				$Tcadnome = isset($_POST['TCadNome']) ? $_POST['TCadNome'] :null;
				$Tcadsobrenome = isset($_POST['TCadSobrenome']) ? $_POST['TCadSobrenome'] :null;
				$Tcadaniversario = isset($_POST['TCadAniversario']) ? $_POST['TCadAniversario'] :null;
				
				//Verificação da Existencia do Username/Email
				$verificaExisteUser = "SELECT `username` FROM users WHERE username = '$Cadusuario'";
				$SelectExistUser = sqlquery($verificaExisteUser);
				$verificaExisteEmail = "SELECT `email` FROM users WHERE email = '$Cademail'";
				$SelectExistEmail = sqlquery($verificaExisteEmail);
				
				if ($Tcadusername == $SelectExistUser){
					
					echo "<script>alert('Esse Username já está sendo utilizado');</script>";
					
				}else{
					if ($Tcademail == $SelectExistEmail){
						
						echo "<script>alert('Esse Email já está sendo utilizado');</script>";
						
					}else{
						if($Tcadpasswordraw == $Tcadcpassword AND $Tcademail == $Tcadcemail){
						
						$criarRegistro = "INSERT INTO users (nome, sobrenome, aniversario) VALUES ('$Tcadnome', '$Tcadsobrenome', '$Tcadaniversario')";
						$RegistroCriado = sqlquery ($criarRegistro);
						
						$upRegistro = "UPDATE users SET username='$Tcadusername', senha='$Tcadpassword', email='$Tcademail', tipo='$nivel' WHERE id_User = '$iduser' ";
						$UpdateRegistro = sqlquery($upRegistro);
						
						$seRegistro = "SELECT `id_User`, `username`, `senha` , `email`, `nome`, `sobrenome`, `dataNascimento`, `tipo` FROM users WHERE username = '$Tcadusername'";
						$SelectRegistro = sqlquery($seRegistro);
						
						$row_TTSelect = $SelectRegistro->rowCount();
							
						$rowTTS = $SelectRegistro->fetch(PDO::FETCH_ASSOC);
							
						// Salva os dados na sessão após a criação
						$_SESSION['STATUS'] = 'ON';
						$_SESSION['UsuarioID'] = $rowTTS['id_User'];
						$_SESSION['UsuarioUsername'] = $rowTTS['username'];
						$_SESSION['UsuarioSenha'] = $rowTTS['senha'];
						$_SESSION['UsuarioEmail'] = $rowTTS['email'];
						$_SESSION['UsuarioNome'] = $rowTTS['nome'];
						$_SESSION['UsuarioSobrenome'] = $rowTTS['sobrenome'];
						$_SESSION['UsuariodataNascimento'] = $rowTTS['dataNascimento'];
						$_SESSION['UsuarioNivel'] = $rowTTS['tipo'];
						
						//Redireciona o usuário
						//header("Location: ?page=userprofile"); exit;
						echo "<script>window.location.href = '?page=userprofile';</script>";
						
						//Aviso de Registro
						echo "<script>alert('Conta registrada com sucesso');</script>";
							
						}
						
					}
				}
				
				//Finalizando
				break;
				
				//Deletar Usuário Temporário
				case "TempDel":
					
					//Receber os dados pra realizar as ações
					$iduser = $_SESSION['UsuarioID'];
					$DelUser = $_SESSION['UsuarioUsername'];
					
					$deletarUsuario = isset($_POST['UserDelete']) ? $_POST['UserDelete'] :null;
					
					if ($DelUser == $deletarUsuario) {
						
						$deUser = " DELETE FROM users WHERE id_User = '$iduser'";
						$UsuarioDeletado = sqlquery($deUser);
						
						//Redireciona o usuário
						//header("Location: ?page=main"); exit;
						echo "<script>window.location.href = '?page=main';</script>";
						
						//Aviso de Usuário Deletado
						echo "<script>alert('Usuário deletado com Sucesso');</script>";
						
					}
				
				//Finalizando
				break;
			}
?>