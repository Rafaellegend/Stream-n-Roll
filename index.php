<?php
//Abrindo o HTML
include_once("php/header.php");

//verificação da url em busca da variavel page
if(!isset($_GET['page'])){$page= 'main';} else{$page = $_GET['page'];};

//verificação da varaiavel page para redirecionamento de pagina
	//Menu principal
if($page=='main'){include_once'php/main.php';};
	//Tela de Registro
if($page=='register'){include_once'php/register.php';};
	//Criar Sessão
if($page=='csession'){include_once'php/csession.php';};
	//d&d - Editar Ficha 
if($page=='ddedit'){include_once'php/dd_edit.php';};

//Fechando o HTML
include_once("php/footer.php");
?>