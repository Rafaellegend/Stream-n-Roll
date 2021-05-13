<?php
//Inicio da Sessão
session_start();
//Guardando as variaveis de Login e Senha dos dados inseridos anteriormente
$login = $_POST['login'];
$senha = $_POST['password'];

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
 mysqli_select_db($conn, "server") or die("<br>Sem acesso ao DB, Entre em contato com o Administrador");

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = mysqli_query($conn, "SELECT 'id_User' 'username' 'tipo' FROM users WHERE username= '$login' AND senha= '$senha'");

/* Verificação da exitencia dos usuarios */
if(mysqli_num_rows ($result) > 0 )
{

$resultado = mysqli_fetch_assoc($result);	
	
$_SESSION['login'] = $login['id_User'];
$_SESSION['password'] = $senha['username'];
$_SESSION['tipo'] = $tipo['tipo'];
header('location:../index.php/?page=userprofile');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['password']);
  header('location:../index.php/?page=main');

  }
?>