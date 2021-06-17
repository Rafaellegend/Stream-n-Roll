<?php
  
  /*
  if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['password']))) {
	  
		//Redireciona o usuário
		//header("Location: ?page=main"); exit;
		echo "<script>window.location.href = '?page=userprofile';</script>";
  }
  */
 
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
					
						//Aviso de Cadastro
						echo "<script>alert('Login Inválido');</script>";
						//Redireciona o usuário
						//header("Location: ?page=main"); exit;
					  echo "<script>window.location.href = '?page=main';</script>";
					  
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
			
			case "AcessoMesa":
			
				$code = isset($_POST['codMesaOn']) ? $_POST['codMesaOn'] :null;
				
				if ($code != null){

				$TseMesa = "SELECT `id_Mesa`, `nomeMesa`, `codigoMesa` , `sistema`, `descricao`, DATE_FORMAT(`dataCriacao`, '%d %m %Y') AS `dataCriacao`, `max_Players`, `id_User` FROM mesa WHERE codigoMesa = '$code'";

				$TmesaSelect = sqlquery($TseMesa);
				
				$row_TMesaS = $TmesaSelect->rowCount();
					
					$rowTMS = $TmesaSelect->fetch(PDO::FETCH_ASSOC);
					//var_dump($rowTMS);
					// Salva os dados na sessão após a criação
						$_SESSION['MesaID'] = $rowTMS['id_Mesa'];
						$_SESSION['MesaNome'] = $rowTMS['nomeMesa'];
						$_SESSION['MesaCodigo'] = $rowTMS['codigoMesa'];
						$_SESSION['MesaSistema'] = $rowTMS['sistema'];
						$_SESSION['MesaDescricao'] = $rowTMS['descricao'];
						$_SESSION['MesaData'] = $rowTMS['dataCriacao'];
						$_SESSION['MesaJogadores'] = $rowTMS['max_Players'];
						$_SESSION['MesaDono'] = $rowTMS['id_User'];
						
				$cabalo = $_SESSION['UsuarioID'];
				$egua =$_SESSION['MesaID'];
				//SELECT em todas as fichas da mesa
					$verify = "SELECT `num_Mesa` FROM `ficha` WHERE `id_Mesa` = '$egua'";
					$return['res'] = sqlquery($verify);
					//SELECT na quantidade maxima de jogadores da mesa
					$maxp = "SELECT `max_Players` FROM `mesa` WHERE id_Mesa = '$egua'";
					$return['maxp'] = sqlquery($maxp);
					//Contando as linhas do primeiro SELECT
					$rows = $return['res']->rowCount();
					$num = $return['res']->fetch(PDO::FETCH_ASSOC);			
					$max = $return['maxp']->fetch(PDO::FETCH_ASSOC);
					//echo "ué";
					//var_dump($num['num_mesa']);
					if($rows <= $max['max_Players']){
						for($i = 1; $i <= $max['max_Players']; $i++){
							$verify = "SELECT * FROM `ficha` WHERE `num_Mesa` = '$i' AND `id_Mesa` = '$egua'";
							$return['res'] = sqlquery($verify);
							$rows = $return['res']->rowCount();
							echo $rows;
							if($rows == 0){
								$nmesa = $i;
								break;
							}
						}
					}
				
				$sql="INSERT INTO `ficha` (`id_Ficha`, `num_Mesa`, `nome`, `nivel`, `classe`, `raca`, `alinhamento`, `antecedentes`, `experiencia`, `forca`, `destreza`, `constituicao`, `inteligencia`, `sabedoria`, `carisma`, `bonus_Proficiencia`, `res_Forca`, `res_Destreza`, `res_Constituicao`, `res_Inteligencia`, `res_Sabedoria`, `res_Carisma`, `pro_Acrobacia`, `dobro_Acrobacia`, `pro_Adestrar_Animais`, `dobro_Adestrar_Animais`, `pro_Arcanismo`, `dobro_Arcanismo`, `pro_Atletismo`, `dobro_Atletismo`, `pro_Enganacao`, `dobro_Enganacao`, `pro_Historia`, `dobro_Historia`, `pro_Intuicao`, `dobro_Intuicao`, `pro_Intimidacao`, `dobro_Intimidacao`, `pro_Investigacao`, `dobro_Investigacao`, `pro_Medicina`, `dobro_Medicina`, `pro_Natureza`, `dobro_Natureza`, `pro_Percepcao`, `dobro_Percepcao`, `pro_Atuacao`, `dobro_Atuacao`, `pro_Persuasao`, `dobro_Persuasao`, `pro_Religiao`, `dobro_Religiao`, `pro_Prestidigitacao`, `dobro_Prestidigitacao`, `pro_Furtividade`, `dobro_Furtividade`, `pro_Sobrevivencia`, `dobro_Sobrevivencia`, `CA`, `iniciativa`, `deslocamento`, `vida_Atual`, `vida_Maxima`, `vida_Temporaria`, `dado_Vida`, `equipamento`, `pecas_Cobre`, `pecas_Prata`, `pecas_Esmeralda`, `pecas_Ouro`, `pecas_Platina`, `proficiencias`, `tracos`, `ideais`, `vinculos`, `defeitos`, `caracteristicas`, `idade`, `altura`, `peso`, `olhos`, `pele`, `cabelo`, `Aparencia`, `aliados_Organizacoes`, `tesouro`, `historia`, `diario`, `classe_conjuração`, `hab_chave`, `resistencia_Magica`, `bonus_habMagica`, `espacomagia1_atual`, `espacomagia1_max`, `espacomagia2_atual`, `espacomagia2_max`, `espacomagia3_atual`, `espacomagia3_max`, `espacomagia4_atual`, `espacomagia4_max`, `espacomagia5_atual`, `espacomagia5_max`, `espacomagia6_atual`, `espacomagia6_max`, `espacomagia7_atual`, `espacomagia7_max`, `espacomagia8_atual`, `espacomagia8_max`, `espacomagia9_atual`, `espacomagia9_max`, `id_User`, `id_Mesa`) VALUES (NULL, '$nmesa', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'http://placehold.it/115x115', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$cabalo', '$egua')";
				//$sql="INSERT INTO `ficha`(`id_User`,`id_Mesa`) VALUES ('$cabalo','$egua')";
				$result['send_status'] = sqlquery($sql);
				
				//Redireciona o usuário
				//header("Location: ?page=mesa"); exit;
				echo "<script>window.location.href = '?page=userprofile';</script>";
				}
			
			//Finalizando
			break;
			
			//Realização do Acesso Direto
			case "AcessoDireto":
				
				$tempuser = isset($_POST['Tempname']) ? $_POST['Tempname'] :null;
				$code = isset($_POST['Codesession']) ? $_POST['Codesession'] :null;
				
				if ($code != null){
					
					$TseMesa = "SELECT `id_Mesa`, `nomeMesa`, `codigoMesa` , `sistema`, `descricao`, DATE_FORMAT(`dataCriacao`, '%d %m %Y'), `max_Players`, `id_User` FROM mesa WHERE codigoMesa = '$code'";
					$TmesaSelect = sqlquery($TseMesa);
					
					$row_TMesaS = $TmesaSelect->rowCount();
					
					$rowTMS = $TmesaSelect->fetch(PDO::FETCH_ASSOC);
					
					// Salva os dados na sessão após a criação
						$_SESSION['MesaID'] = $rowTMS['id_Mesa'];
					
						//Redireciona o usuário
								//header("Location: ?page=mesa"); exit;
								echo "<script>window.location.href = '?page=ddsheet';</script>";
						
						if ($tempuser != null){
						//Email Aleatorio
							function randEmail($size){
								$Rnumeros = '0123456789';
								$random= "";
								for($count= 0; $size > $count; $count++){
									$random.= $Rnumeros[rand(0, strlen($Rnumeros) - 1)];
								}
								return $random;
							}
							$tempemail = ("$tempuser".randEmail(5).'@email.com');

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
							$tempsenha = ("$tempsenharaw".randsenha(5));
						
						//Usuario Aleatorio
							function randUser($size){
								$Rnumeros = '0123456789';
								$random= "";
								for($count= 0; $size > $count; $count++){
									$random.= $Rnumeros[rand(0, strlen($Rnumeros) - 1)];
								}
								return $random;
							}
							$tempusuario = ("$tempuser".randUser(5));
							
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
								
								
								
								}
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
					
						//Redireciona o usuário
						//header("Location: ?page=userprofile"); exit;
						echo "<script>window.location.href = '?page=userprofile';</script>";
				
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
						
						//Redireciona o usuário
						//header("Location: ?page=userprofile"); exit;
						echo "<script>window.location.href = '?page=userprofile';</script>";
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
							
							//Redireciona o usuário
							//header("Location: ?page=userprofile"); exit;
							echo "<script>window.location.href = '?page=userprofile';</script>";
						
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
				$verificaExisteUser = "SELECT `username` FROM users WHERE username = '$Tcadusername'";
				$SelectExistUser = sqlquery($verificaExisteUser);
				$verificaExisteEmail = "SELECT `email` FROM users WHERE email = '$Tcademail'";
				$SelectExistEmail = sqlquery($verificaExisteEmail);
				
				if ($Tcadusername == $SelectExistUser){
					
					echo "<script>alert('Esse Username já está sendo utilizado');</script>";
					
				}else{
					if ($Tcademail == $SelectExistEmail){
						
						echo "<script>alert('Esse Email já está sendo utilizado');</script>";
						
					}else{
						if($Tcadpasswordraw == $Tcadcpassword AND $Tcademail == $Tcadcemail){
						
						$upRegistro = "UPDATE users SET username='$Tcadusername', senha='$Tcadpassword', nome='$Tcadnome', sobrenome='$Tcadsobrenome', dataNascimento='$Tcadaniversario', email='$Tcademail', tipo='$nivel' WHERE id_User = '$iduser' ";
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
						
						session_unset();
						session_destroy(); 
						
					}
				
				//Finalizando
				break;
				
				//Criar mesa
				case "CCampanha":
				
				//Recebendo dados
				$iduser = $_SESSION['UsuarioID'];
				
				//Dados criação de mesa
				$Cmesa = isset($_POST['NomeCampanha']) ? $_POST['NomeCampanha'] :null;
				$Cdescricao = isset($_POST['DescCampanha']) ? $_POST['DescCampanha'] :null;
				$Csistema = isset($_POST['RPGsistema']) ? $_POST['RPGsistema'] :null;
				$Cjogadores = isset($_POST['QJogadores']) ? $_POST['QJogadores'] :null;
				
				
				if ($Cmesa != null AND $Csistema != null AND $Cjogadores != null){
					
					//Cria código da mesa
						function secure_random_string($length) {
						$rand_string = '';
						for($i = 0; $i < $length; $i++) {
							$number = random_int(0, 36);
							$character = base_convert($number, 10, 36);
							$rand_string .= $character;
						}
					 
						return $rand_string;
						}
						
					$Ccodigo = (secure_random_string(5));
					
					$criarMesa = "INSERT INTO mesa (nomeMesa, codigoMesa, sistema, descricao, max_Players, id_User) VALUES ('$Cmesa', '$Ccodigo', '$Csistema', '$Cdescricao', '$Cjogadores', '$iduser')";
					$mesaCreate = sqlquery($criarMesa);
					
					$seMesa = "SELECT `id_Mesa`, `nomeMesa`, `codigoMesa` , `sistema`, `descricao`, DATE_FORMAT(`dataCriacao`, '%d %m %Y') AS `dataCriacao`, `max_Players`, `id_User` FROM mesa WHERE codigoMesa = '$Ccodigo'";
					$mesaSelect = sqlquery($seMesa);
										
					$row_MesaS = $mesaSelect->rowCount();
					
					$rowMS = $mesaSelect->fetch(PDO::FETCH_ASSOC);
					
					// Salva os dados na sessão após a criação
						$_SESSION['MesaID'] = $rowMS['id_Mesa'];
						$_SESSION['MesaNome'] = $rowMS['nomeMesa'];
						$_SESSION['MesaCodigo'] = $rowMS['codigoMesa'];
						$_SESSION['MesaSistema'] = $rowMS['sistema'];
						$_SESSION['MesaDescricao'] = $rowMS['descricao'];
						$_SESSION['MesaData'] = $rowMS['dataCriacao'];
						$_SESSION['MesaJogadores'] = $rowMS['max_Players'];
						$_SESSION['MesaDono'] = $rowMS['id_User'];
					
					//Redireciona o usuário
					//header("Location: ?page=tabletop"); exit;
					echo "<script>window.location.href = '?page=userprofile';</script>";
						
					//Aviso de Registro
					echo "<script>alert('Mesa criada com sucesso');</script>";
					
				}
				
				//Finalizando
				break;
			}
?>