<div id="menu" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <!-- Informações do Perfil // Visivel apenas se logado -->
  <div class="navprofile" id="navprofile">
	<picture id="navprofbox">		
		<img id="" src="http://placehold.it/100x100" style="border-radius:100px;" class="img-fluid" alt="Responsive image">		
	</picture>
	
	<p id="navusername">Dummy</p>
	<div class="navbutton">
		<button class="btn btn-primary">Logout</button>
	</div>
</div>
  <a href="#">Perfil</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contato</a>
</div>

<!-- navbar superior -->
<nav class="customnav">
	<!-- botão para abrir o sidenavbar -->
	<span id="navbutton" onclick="openNav()" class="contentleft">&#9776;</span>
	<!-- Logo do Site -->
	<img href="#" id="imgsession" src="img\dark_f_logo.svg" alt="Responsive image" onclick="window.location.href = '?page=main';">
	<!-- botão de chat // Apenas na pagina de ficha -->
	<?php if($page=='ddsheet'){
		echo
		'<div id="chatButton" onclick="openchat()">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
			  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
			  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
			</svg>
			<div id="notify">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
				  <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
				</svg>
			</div>
		</div>';
	};
	?>
	<!-- botão de Login // Apenas se deslogado -->
	<button class="btn btn-primary" id="navlogin" style="display:none">Faça Login</button>
	<!-- Foto de Perfil do Usuario // Apenas se Logado -->
	<img id="" src="http://placehold.it/45x45" style="border-radius:45px;"class="img-fluid" alt="Responsive image">
</nav>
<div id="callchat">
<?php include_once('php/chat.php'); ?>
</div>

<script>
show = false;
chatshow = false;
function openNav() {
	document.getElementById("menu").style.width = "250px";
	document.getElementById("menu").style.borderRight = "1px solid #474747";	
}
function openchat(){
	if(chatshow == false){
		document.getElementById("callchat").style.width = "60vh";		
		document.getElementById("callchat").style.borderLeft = "1px solid #474747";		
		document.getElementById("callchat").style.borderRight = "1px solid #474747";		
		document.getElementById("notify").style.visibility = "hidden";
		chatshow = true;
	}else if(chatshow == true){
		document.getElementById("callchat").style.width = "0";
		document.getElementById("callchat").style.border = "0";
		chatshow = false;
	}
}
$('#messages').on('DOMNodeInserted', function(e) { 
      if(chatshow == false){
		if(document.getElementById("notify")){
		document.getElementById("notify").style.visibility = "visible";}
      }
 });
function closeNav() {
	document.getElementById("menu").style.width = "0";
	document.getElementById("menu").style.borderRight = "0";
}
</script>
<?php
	$admin = true;
	if($admin == true){
		echo '<button id="adminbtn" onclick="adm()">Ações de Admin</button>
<div id="adminnav">
	<button onclick="adm()" class="btn btn-danger">fechar</button>	
	<h4>Dice Result Screen</h4>
	<button onclick="showres()" class="btn btn-dark">dice</button>
	<h4>Chat Call</h4>
	<button onclick="openchat()" class="btn btn-dark">chat</button>
	<h4>Mesa Info</h4>
	<button onclick="opendesc()" class="btn btn-dark">chat</button>
</div>
<style>
	#adminnav{
		width:auto;
		position:fixed;
		left:0;
		bottom:0;
		z-index:9999;
		padding:10px;
		background-color:white;
		border:2px solid black;
		border-radius:10px;
		text-align:center;
		visibility:hidden;
	}
	#adminbtn{
		position:fixed;
		left:0;
		bottom:0;
		z-index:9998;
	}
</style>
<script>
	admshow = false;
	function adm(){
		if(admshow == false){			
			document.getElementById("adminnav").style.visibility = "visible";
			admshow = true;
		}else if(admshow == true){
			document.getElementById("adminnav").style.visibility = "hidden";
			admshow = false;
		}
	}
</script>';
	}
?>
