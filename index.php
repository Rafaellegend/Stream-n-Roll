<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//Iniciar a Sessão
 if (!isset($_SESSION)) session_start();

//verificação da url em busca da variavel page
if(!isset($_GET['page'])){$page= 'main';} else{$page = $_GET['page'];};

//Abrindo o HTML
if($page == 'submit'){}
else{
include_once("php/head.php");
};

//header
if($page=='stream' or $page=='chat' or $page == 'submit'){}
else{
include_once("php/header.php");
};

//Criando conexão com o Banco de Dados e Verificando a conexão
include_once("php/conection.php");
//dbconnect();
include_once'php/open.php';
//verificação da varaiavel page para redirecionamento de pagina
	//Menu principal
if($page=='main'){include_once'php/main.php';};
	//Login
if($page=='open'){include_once'php/open.php';};
	//Criar Sessão
if($page=='csession'){include_once'php/csession.php';};
	//d&d - Editar Ficha 
if($page=='ddsheet'){include_once'php/ddsheet.php';};
	//Editar Mesa 
if($page=='tabletop'){include_once'php/tabletop.php';};
	//Perfil do Usuário
if($page=='userprofile'){include_once'php/userprofile.php';};
	//Submit 
if($page=='submit'){include_once'php/submit.php';};
	//chat
if($page=='chat'){include_once'php/chat.php';};
	//Overlay
if($page=='stream'){include_once'php/stream.php';};


//Fechando o HTML
if($page=='stream' or $page =='chat' or $page == 'submit'){}
else{
include_once("php/footer.php");
};

//Paginas desativadas
	//RegLogM - Registro e Login
	//if($page=='reglogm'){include_once'php/reglogm.php';};
	//Tela de Registro
	// if($page=='register'){include_once'php/register.php';};
?>