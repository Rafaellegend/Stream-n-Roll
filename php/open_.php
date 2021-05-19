<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header('location:../index.php/?page=userprofile'); exit;
  }

//Recebendo os valores digitados pelo usuario
$usuario = isset($_POST['login']) ? $_POST['login'] :null;
$senharaw = isset($_POST['senha']) ? $_POST['senha'] :null;
$senha = cript($senharaw);

if($usuario != null AND $senharaw != null){
// Validação do usuário/senha digitados
$sql = "SELECT `id_User`, `username`, `tipo` FROM users WHERE username = '$usuario'";
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
		$_SESSION['UsuarioNome'] = $row['username'];
		$_SESSION['UsuarioNivel'] = $row['tipo'];
	
      // Redireciona o visitante
      //header('location:../index.php/?page=userprofile'); exit;
  }
}
else{
	session_destroy();
}
?>