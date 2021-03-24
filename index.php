<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//Abrindo o HTML
include_once("php/head.php");

//verificação da url em busca da variavel page
if(!isset($_GET['page'])){$page= 'main';} else{$page = $_GET['page'];};

//header
if($page=='stream'){}
else{
include_once("php/header.php");
};

//Criando conexão com o Banco de Dados e Verificando a conexão
include_once("php/conection.php");
//dbconnect();

//verificação da varaiavel page para redirecionamento de pagina
	//Menu principal
if($page=='main'){include_once'php/main.php';};
	//Registro e Login
if($page=='reglogm'){include_once'php/reglogm.php';};
	//Criar Sessão
if($page=='csession'){include_once'php/csession.php';};
	//d&d - Editar Ficha 
if($page=='ddsheet'){include_once'php/ddsheet.php';};
	//d&d - Editar Ficha 
if($page=='ddedit'){include_once'php/dd_edit.php';};
	//RegLogM - Registro e Login
if($page=='reglogm'){include_once'php/reglogm.php';};
	//Perfil do Usuário
if($page=='userprofile'){include_once'php/userprofile.php';};
	//Submit 
if($page=='submit'){include_once'php/submit.php';};

	//Tela de Registro
// if($page=='register'){include_once'php/register.php';};
	
	//Overlay
if($page=='stream'){include_once'php/overlay.php';};

//Fechando o HTML
if($page=='stream'){}
else{
include_once("php/footer.php");
};
?>