<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
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
				$sql = "SELECT `id_User`, `username`, `email`, `nome`, `sobrenome`, `dataNascimento`, `tipo` FROM users WHERE username = '$usuario'";
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
					if( $nAniversario != null ){
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
			}
?>