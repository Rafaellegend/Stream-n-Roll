<?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header('location:../index.php/?page=userprofile'); exit;
  }

//Criando conexão
$servername = "192.185.223.140"; 
$database = "raffoz89_StreamNRoll"; 
$username = "raffoz89_Project"; 
$password = "13!~GFnWT^@B"; 
//Estabelecendo conexão com o serviço e banco
 $conn = mysqli_connect($servername, $username, $password, $database);
//Verificação de Conexão
 if (!$conn) { die("Connection failed: " . mysqli_connect_error()); } 
 echo "Connected successfully"; 
 mysqli_select_db($conn, "raffoz89_StreamNRoll") or die("<br>Sem acesso ao DB, Entre em contato com o Administrador");

//Recebendo os valores digitados pelo usuario
$usuario = mysqli_real_escape_string($_POST['login']);
$senha = mysqli_real_escape_string($_POST['password']);

// Validação do usuário/senha digitados
$result = mysqli_query($conn, "SELECT 'id_User' 'username' 'tipo' FROM users WHERE username= '$usuario' AND senha= '$senha'");
  
  if (mysqli_num_rows($result) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontrados na variável $resultado
      $resultado = mysqli_fetch_assoc($result);

      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();

      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id_User'];
      $_SESSION['UsuarioNome'] = $resultado['username'];
      $_SESSION['UsuarioNivel'] = $resultado['tipo'];

      // Redireciona o visitante
      header('location:../index.php/?page=userprofile'); exit;
  }
?>