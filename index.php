<?php
//Abrindo o HTML
include_once("php/header.php");

//verificação da url em busca da variavel page
if(!isset($_GET['page'])){$page= 'reglogm';} else{$page = $_GET['page'];};

//verificação da varaiavel page para redirecionamento de pagina
	//Menu principal
if($page=='main'){include_once'php/main.php';};
	//Registro e Login
if($page=='reglogm'){include_once'php/reglogm.php';};
	//Criar Sessão
if($page=='csession'){include_once'php/csession.php';};
	//d&d - Editar Ficha 
if($page=='ddedit'){include_once'php/dd_edit.php';};
	//RegLogM - Registro e Login
if($page=='reglogm'){include_once'php/reglogm.php';};
	//Perfil do Usuário
if($page=='userprofile'){include_once'php/userprofile.php';};

	//Tela de Registro
// if($page=='register'){include_once'php/register.php';};

//Fechando o HTML
include_once("php/footer.php");
?>