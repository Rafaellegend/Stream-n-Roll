<?php
//Temporario Create
	$nivel = $_SESSION['UsuarioNivel'];
	$TEMP = 2;
	if ($nivel == $TEMP){
	echo '<a href="?page=register"><button id="adminbtn">Sair da Mesa</button></a>	
			<style>
				#adminbtn{
					position:fixed;
					left:0;
					bottom:0;
					z-index:9998;
				}
			</style>';
	}else if ($nivel != $TEMP){
			'<script>
				admshow = false;
				function adm(){
					if(admshow == false){			
						document.getElementById("adminnav").style.visibility = "visible";
						admshow = true;
					}					
			</script>';
	}
	
	//Users
	$nivel = $_SESSION['UsuarioNivel'];
	$USERS = 1;
	if ($nivel <= $USERS){
	echo '<a href="?page=userprofile"><button id="adminbtn">Sair da Mesa</button></a>	
			<style>
				#adminbtn{
					position:fixed;
					left:0;
					bottom:0;
					z-index:9998;
				}
			</style>';
	}else if ($nivel == $TEMP){
			'<script>
				admshow = false;
				function adm(){
					if(admshow == false){			
						document.getElementById("adminnav").style.visibility = "visible";
						admshow = true;
					}					
			</script>';
	}
?>

<script src="js/Autocalc.js" type="text/javascript"></script>
<script src="js/sheet.js" type="text/javascript"></script>
<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
function sheetload(){
	ExectCalc("dnd","prof","clevel","cpro");
	ExectCalc("dnd","mod","cstr","cmstr");
	ExectCalc("dnd","dis","cstr","str","cpro");
	ExectCalc("dnd","mod","cdex","cmdex");
	ExectCalc("dnd","dis","cdex","dex","cpro");
	ExectCalc("dnd","mod","ccon","cmcon");
	ExectCalc("dnd","dis","ccon","con","cpro");
	ExectCalc("dnd","mod","cint","cmint");
	ExectCalc("dnd","dis","cint","int","cpro");
	ExectCalc("dnd","mod","cwis","cmwis");
	ExectCalc("dnd","dis","cwis","wis","cpro");
	ExectCalc("dnd","mod","ccar","cmcar");
	ExectCalc("dnd","dis","ccar","car","cpro");
	atksbox('load');
	magicsbox("nivel0","load")
	magicsbox("nivel1","load")
	magicsbox("nivel2","load")
	magicsbox("nivel3","load")
	magicsbox("nivel4","load")
	magicsbox("nivel5","load")
	magicsbox("nivel6","load")
	magicsbox("nivel7","load")
	magicsbox("nivel8","load")
	magicsbox("nivel9","load")
}
window.onload = function() {
	sheetload()
}
</script>
<form onchange="sheetload()" id="formsheet" style="overflow:auto;">
<input type="text" id="idficha" hidden>
<input type="text" id="nmesa" hidden>
<input type="text" id="idmesa" hidden>
<div class="container-fluid" id="sheet" >
	<!--Informações do Personagem-->
	<div class="row" >
	<!--Linha de info de Personagem-->
		<div class="col-md-1">
		<script src="js/functions.js" type="text/javascript"></script>
			<label class="charperfil">
				<img id="portrait" href="#pic" src="http://placehold.it/115x115" 
				style="margin-top:10px;margin-botton:10px; margin-left:-5px;">
				<input id="pic" class='pic' onchange='readURL(this,"portrait");' type="file" accept=".png,.jpg" >
			</label>
		</div>
		<div class="col-md-5" id="characterinfo">
			<!--<script src="js/functions.js" type="text/javascript"></script>
			<script src="js/JQfunctions.js" type="text/javascript"></script>
			<button onclick='Roll(20,0,0,0,"dado")'>rolar</button>
			<button onclick='XMLRequest("testfile.xml","tag1",0,0,"dado")'>sla</button>
			<div id="dado"></div>-->


			<label for="cname">Nome:</label>
			<input type="text" id="cname" value='0' class="imputihidden" style="width:150px;">
			
			<label for="cclass">Classe:</label>
			<input type="text" id="cclass" Placeholder="Mago 5, Druida 1" class="imputihidden" style="width:100px;">
		
			<input type="text" id="clevel" value='0' class="imputihidden" style="width:20px;" onchange='ExectCalc("dnd","prof","clevel","cpro")'>
			
			<label for="cback">Antecedente:</label>
			<input type="text" id="cback" value='0' class="imputihidden" style="width:83px;">
			
			<label for="cfolk">Raça:</label>
			<input type="text" id="cfolk" value='0' class="imputihidden" style="width:150px;">
			
			<label for="calign">Tendência:</label>
			<input type="text" id="calign" value='0' class="imputihidden" style="width:100px;">
			
			<label for="cxp">Expêriencia:</label>
			<input type="text" id="cxp" value='0' class="imputihidden" style="width:100px;">
		</div>
		<div class="col-md-5" id="characterdetail">	
			<label for="cage">Idade:</label>
			<input type="text" id="cage" value='0' class="imputihidden" style="width:130px;">
			
			<label for="cheight">Altura:</label>
			<input type="text" id="cheight" value='0' class="imputihidden" style="width:130px;">
			
			<label for="cweight">Peso:</label>
			<input type="text" id="cweight" value='0' class="imputihidden" style="width:130px;">
			
			<label for="ceyes">Olhos:</label>
			<input type="text" id="ceyes" value='0' class="imputihidden" style="width:130px;">
			
			<label for="cskin">Pele:</label>
			<input type="text" id="cskin" value='0' class="imputihidden" style="width:130px;">
			
			<label for="chair">Cabelo:</label>
			<input type="text" id="chair" value='0' class="imputihidden" style="width:130px;">
		</div>
	
	</div>
	<!--Habilidades e Pericias-->
	<div class="row">
	
		<!--Habilidades-->
		<div class="col-md-3" id="mainhab" style="column-count: 3;padding-top:20px;padding-bottom:10px;height:275px;">
			<div class="habbox">
				<label for="cstr">Força</label>
				<input type="text" id="cstr" class="fullv" style="width:45px;" value="0" onchange='ExectCalc("dnd","mod","cstr","cmstr");ExectCalc("dnd","dis","cstr","str","cpro")'>
				<input type="text" id="cmstr" class="modv" style="width:30px;" value="0" disabled>
			</div>
			<div class="habbox">
				<label for="cdex">Destreza</label>
				<input type="text" id="cdex" class="fullv" style="width:45px;" value="0" onchange='ExectCalc("dnd","mod","cdex","cmdex");ExectCalc("dnd","dis","cdex","dex","cpro")'>
				<input type="text" id="cmdex" class="modv" style="width:30px;" value="0" disabled>
			</div>
			<div class="habbox">
				<label for="ccon">Constituição</label>
				<input type="text" id="ccon" class="fullv" style="width:45px;" value="0" onchange='ExectCalc("dnd","mod","ccon","cmcon");ExectCalc("dnd","dis","ccon","con","cpro")'>
				<input type="text" id="cmcon" class="modv" style="width:30px;" value="0" disabled>
			</div>
			<div class="habbox">
				<label for="cint">Inteligência</label>
				<input type="text" id="cint" class="fullv" style="width:45px;" value="0" onchange='ExectCalc("dnd","mod","cint","cmint");ExectCalc("dnd","dis","cint","int","cpro")'>
				<input type="text" id="cmint" class="modv" style="width:30px;" value="0" disabled>
			</div>
			<div class="habbox">
				<label for="cwis">Sabedoria</label>
				<input type="text" id="cwis" class="fullv" style="width:45px;" value="0" onchange='ExectCalc("dnd","mod","cwis","cmwis");ExectCalc("dnd","dis","cwis","wis","cpro")'>
				<input type="text" id="cmwis" class="modv" style="width:30px;" value="0" disabled>
			</div>
			<div class="habbox">
				<label for="ccar">Carisma</label>
				<input type="text" id="ccar" class="fullv" style="width:45px;" value="0" onchange='ExectCalc("dnd","mod","ccar","cmcar");ExectCalc("dnd","dis","ccar","car","cpro")'>
				<input type="text" id="cmcar" class="modv" style="width:30px;" value="0" disabled>
			</div>
		</div>
		<!--Caixa de Proficiencia-->
				<input type="text" class="proflabel" value="   Proficiência" disabled>
				<input type="text" id="cpro" class="sheetprof" value="2">
		<!--Caixa de Pericias-->
		<div class="col-md-6 sheetbox" style="height:275px;padding:10px;">
			<div style="overflow-y:auto;height:250px;">
			<!--Caixa de Resistências-->
			<h5 class="fantasyfont" style="color:black;border-bottom:1px solid black">Teste de Resistências</h5>
			<div id="perices">
				<!--Teste de Força-->
				<div>
					<input type="checkbox" id="ctstr" onchange='ExectCalc("dnd","per","cmtstr","cmtstr","ctstr","cpro")'>
					<label for="cmtstr">Força</label>
					<input type="text" id="cmtstr" class="imputihidden str" style="width:20px;" value="0" readonly>
				</div>
				<!--Teste de Destreza-->
				<div>
					<input type="checkbox" id="ctdex" onchange='ExectCalc("dnd","per","cmtdex","cmtdex","ctdex","cpro")'>
					<label for="cmtdex">Destreza</label>
					<input type="text" id="cmtdex" class="imputihidden dex" style="width:20px;" value="0" readonly>
				</div>
				<!--Teste de Constituição-->
				<div>
					<input type="checkbox" id="ctcon" onchange='ExectCalc("dnd","per","cmtcon","cmtcon","ctcon","cpro")'>
					<label for="cmtcon">Constituição</label>
					<input type="text" id="cmtcon" class="imputihidden con" style="width:20px;" value="0" readonly>
				</div>
				<!--Teste de Inteligência-->
				<div>
					<input type="checkbox" id="ctint" onchange='ExectCalc("dnd","per","cmtint","cmtint","ctint","cpro")'>
					<label for="cmtint">Inteligência</label>
					<input type="text" id="cmtint" class="imputihidden int" style="width:20px;" value="0" readonly>
				</div>
				<!--Teste de Sabedoria-->
				<div>
					<input type="checkbox" id="ctwis" onchange='ExectCalc("dnd","per","cmtwis","cmtwis","ctwis","cpro")'>
					<label for="cmtwis">Sabedoria</label>
					<input type="text" id="cmtwis" class="imputihidden wis" style="width:20px;" value="0" readonly>
				</div>
				<!--Teste de Carisma-->
				<div>
					<input type="checkbox" id="ctcar" onchange='ExectCalc("dnd","per","cmtcar","cmtcar","ctcar","cpro")'>
					<label for="cmtcar">Carisma</label>
					<input type="text" id="cmtcar" class="imputihidden car" style="width:20px;" value="0" readonly>
				</div>
			</div>
			<!--Caixa de Pericias-->
			<h5 class="fantasyfont" style="color:black;border-bottom:1px solid black">Pericias</h5>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill checkinfo" viewBox="0 0 16 16" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da perícia. ( Modificador de Habilidade + (Proficiência * 2)) ">
			  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
			</svg>
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill checkinfo" viewBox="0 0 16 16" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua proficiência na perícia. (Modificador de Habilidade + Proficiência)">
			  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
			</svg>

			<div id="perices">
				<!--Acrobacia-->
				<div>
					<input type="checkbox" id="cdacrbt" onchange='ExectCalc("dnd","doub","cdacrbt","cmacrbt","cacrbt","cpro")'>
					<input type="checkbox" id="cacrbt" onchange='ExectCalc("dnd","per","cmacrbt","cmacrbt","cacrbt","cpro")'>
					<label for="cmacrbt">Acrobacia(Des)</label>
					<input type="text" id="cmacrbt" class="imputihidden dex" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Adestrar Animais-->
				<div>
					<input type="checkbox" id="cdanl" onchange='ExectCalc("dnd","doub","cdanl","cmanl","canl","cpro")'>
					<input type="checkbox" id="canl" onchange='ExectCalc("dnd","per","cmanl","cmanl","canl","cpro")'>
					<label for="cmanl">Adestrar Animais(Sab)</label>
					<input type="text" id="cmanl" class="imputihidden wis" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Arcanismo-->
				<div>
					<input type="checkbox" id="cdarc" onchange='ExectCalc("dnd","doub","cdarc","cmarc","carc","cpro")'>
					<input type="checkbox" id="carc" onchange='ExectCalc("dnd","per","cmarc","cmarc","carc","cpro")' >
					<label for="cmarc">Arcanismo(Int)</label>
					<input type="text" id="cmarc" class="imputihidden int" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Atletismo-->
				<div>
					<input type="checkbox" id="cdatl" onchange='ExectCalc("dnd","doub","cdatl","cmatl","catl","cpro")'>
					<input type="checkbox" id="catl" onchange='ExectCalc("dnd","per","cmatl","cmatl","catl","cpro")'>
					<label for="cmatl">Atletismo(For)</label>
					<input type="text" id="cmatl" class="imputihidden str" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Atuação-->
				<div>
					<input type="checkbox" id="cdperf" onchange='ExectCalc("dnd","doub","cdperf","cmperf","cperf","cpro")'>
					<input type="checkbox" id="cperf" onchange='ExectCalc("dnd","per","cmperf","cmperf","cperf","cpro")'>
					<label for="cmperf">Atuação(Car)</label>
					<input type="text" id="cmperf" class="imputihidden car" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Enganação-->
				<div>
					<input type="checkbox" id="cddec" onchange='ExectCalc("dnd","doub","cddec","cmdec","cdec","cpro")'>
					<input type="checkbox" id="cdec" onchange='ExectCalc("dnd","per","cmdec","cmdec","cdec","cpro")'>
					<label for="cmdec">Enganação(Car)</label>
					<input type="text" id="cmdec" class="imputihidden car" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Furtividade-->
				<div>
					<input type="checkbox" id="cdsth" onchange='ExectCalc("dnd","doub","cdsth","cmsth","csth","cpro")'>
					<input type="checkbox" id="csth" onchange='ExectCalc("dnd","per","cmsth","cmsth","csth","cpro")'>
					<label for="cmsth">Furtividade(Des)</label>
					<input type="text" id="cmsth" class="imputihidden dex" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Historia-->
				<div>
					<input type="checkbox" id="cdhis" onchange='ExectCalc("dnd","doub","cdhis","cmhis","chis","cpro")'>
					<input type="checkbox" id="chis" onchange='ExectCalc("dnd","per","cmhis","cmhis","chis","cpro")'>
					<label for="cmhis">Historia(Int)</label>
					<input type="text" id="cmhis" class="imputihidden int" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Intimidação-->
				<div>
					<input type="checkbox" id="cdintm" onchange='ExectCalc("dnd","doub","cdintm","cmintm","cintm","cpro")'>
					<input type="checkbox" id="cintm" onchange='ExectCalc("dnd","per","cmintm","cmintm","cintm","cpro")'>
					<label for="cmintm">Intimidação(Car)</label>
					<input type="text" id="cmintm" class="imputihidden car" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Intuição-->
				<div>
					<input type="checkbox" id="cdins" onchange='ExectCalc("dnd","doub","cdins","cmins","cins","cpro")'>
					<input type="checkbox" id="cins" onchange='ExectCalc("dnd","per","cmins","cmins","cins","cpro")'>
					<label for="cmins">Intuição(Sab)</label>
					<input type="text" id="cmins" class="imputihidden wis" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Investigação-->
				<div>
					<input type="checkbox" id="cdinv" onchange='ExectCalc("dnd","doub","cdinv","cminv","cinv","cpro")'>
					<input type="checkbox" id="cinv" onchange='ExectCalc("dnd","per","cminv","cminv","cinv","cpro")'>
					<label for="cminv">Investigação(Int)</label>
					<input type="text" id="cminv" class="imputihidden int" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Medicina-->
				<div>
					<input type="checkbox" id="cdmed" onchange='ExectCalc("dnd","doub","cdmed","cmmed","cmed","cpro")'>
					<input type="checkbox" id="cmed" onchange='ExectCalc("dnd","per","cmmed","cmmed","cmed","cpro")'>
					<label for="cmmed">Medicina(Sab)</label>
					<input type="text" id="cmmed" class="imputihidden wis" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Natureza-->
				<div>
					<input type="checkbox" id="cdnat" onchange='ExectCalc("dnd","doub","cdnat","cmnat","cnat","cpro")'>
					<input type="checkbox" id="cnat" onchange='ExectCalc("dnd","per","cmnat","cmnat","cnat","cpro")'>
					<label for="cmnat">Natureza(Int)</label>
					<input type="text" id="cmnat" class="imputihidden int" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Percepção-->
				<div>
					<input type="checkbox" id="cdper" onchange='ExectCalc("dnd","doub","cdper","cmper","cper","cpro")'>
					<input type="checkbox" id="cper" onchange='ExectCalc("dnd","per","cmper","cmper","cper","cpro")'>
					<label for="cmper">Percepção(Sab)</label>
					<input type="text" id="cmper" class="imputihidden wis" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Persuasão-->
				<div>
					<input type="checkbox" id="cdpers" onchange='ExectCalc("dnd","doub","cdpers","cmpers","cpers","cpro")'>
					<input type="checkbox" id="cpers" onchange='ExectCalc("dnd","pers","cmper","cmpers","cpers","cpro")'>
					<label for="cmpers">Persuasão(Car)</label>
					<input type="text" id="cmpers" class="imputihidden car" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Pretidigitação-->
				<div>
					<input type="checkbox" id="cdsli" onchange='ExectCalc("dnd","doub","cdsli","cmsli","csli","cpro")'>
					<input type="checkbox" id="csli" onchange='ExectCalc("dnd","per","cmsli","cmsli","csli","cpro")'>
					<label for="cmsli">Pretidigitação(Des)</label>
					<input type="text" id="cmsli" class="imputihidden dex" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Religião-->
				<div>
					<input type="checkbox" id="cdrel" onchange='ExectCalc("dnd","doub","cdrel","cmrel","crel","cpro")' >
					<input type="checkbox" id="crel" onchange='ExectCalc("dnd","per","cmrel","cmrel","crel","cpro")'>
					<label for="cmrel">Religião(Int)</label>
					<input type="text" id="cmrel" class="imputihidden int" style="width:20px;" value="0" readonly>
				</div>
				
				<!--Sobrevivência-->
				<div>
					<input type="checkbox" id="cdsur" onchange='ExectCalc("dnd","doub","cdsur","cmsur","csur","cpro")'>
					<input type="checkbox" id="csur" onchange='ExectCalc("dnd","per","cmsur","cmsur","csur","cpro")'>
					<label for="cmsur">Sobrevivência(Sab)</label>
					<input type="text" id="cmsur" class="imputihidden wis" style="width:20px;" value="0" readonly>
				</div>
			</div>
			</div>
		</div>
		<!--Info importantes-->
		<div class="col-md-3" id="charinfo" style="column-count: 3;height:275px;">
			<div class="habbox">
				<label for="catualhp" data-toggle="tooltip" data-placement="top" title="Pontos de vida" style="width:30px;">PV</label>
				<input type="text" id="catualhp" class="fullvhp" style="width:66px;" value="0" >
				<input type="text" id="cmaxhp" class="modvhp" style="width:45px;" placeholder="max" value="0" data-toggle="tooltip" data-placement="top" title="Pontos de vida maximo">
				<input type="text" id="catemphp" class="modvtemp" style="width:45px;" placeholder="temp" value="0" data-toggle="tooltip" data-placement="top" title="Pontos de vida temporario">
				
			</div>
			<div class="habbox" >
				<label for="cinit" >Iniciativa</label>
				<input type="text" id="cinit" class="fullvhp" style="width:45px;" value="0">
			</div>
			<div class="habbox">
				<label for="cca" data-toggle="tooltip" data-placement="top" title="Classe de Armadura" style="width:30px;">CA</label>
				<input type="text" id="cca" class="fullvhp" style="width:45px;" value="0">
			</div>
			<div class="habbox">
				<label for="cmov">Deslocamento</label>
				<input type="text" id="cmov" class="fullvhp" style="width:45px;" value="0">
			</div>
			<div class="habbox">
				<label for="clifedice">Dado de Vida</label>
				<input type="text" id="clifedice" class="fullvhp" style="width:70px;font-size:30px;top:0px;" value="0">
			</div>
			<div class="habbox">
				<label for="ds">Teste Contra Morte</label>
				<div id="ds" >
					<label for="suc">Sucesso</label>
					<div id="suc" class="customsheet">
						<input type="checkbox" >
						<input type="checkbox" >
						<input type="checkbox" >
					</div>
					<label for="frac">Fracasso</label>
					<div id="frac" class="customsheet">
						<input type="checkbox" >
						<input type="checkbox" >
						<input type="checkbox" >
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!--Ataques e Equipamentos-->
	<div class="row" style="margin-top:10px">
	<!--Idiomas-->
		<div class="col-md-3" style="overflow-y:auto;height:275px;">
			<label for="langprof" class="fantasyfont" style="font-weight:bold;color:black;">Idiomas e outras Proficiencia</label>
			<textarea id="langprof" class="infotextbox" style="height:220px;width:295px;resize:none;">Idioma:
Equipamentos:
Ferramentas:</textarea>
		</div>
		<!--Ataques-->
		<div class="col-md-6" style="height:275px;">	
			<div id="atkbanner">
				<h4 id="atkh3">Ataques</h4>
				<a onclick="atksbox('add')">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16" id="addatk" data-toggle="tooltip" data-placement="top" title="Adicionar um novo ataque">
						<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
					</svg>
				</a>
			</div>
			<!-- Caixa aonde os ataques irão aparecer -->
			<div id="atksbox" style="overflow-y:auto;height:222px;">		
				
			</div>
		</div>
			<script>
				if (typeof atks != 'undefined') {
				  atksload();
				  var atks = 0;
				}else{
					var atks = 0;
				}
			</script>
		
		<!--Equipamentos-->
		<div class="col-md-3">
			<label for="equip" class="fantasyfont" style="font-weight:bold;color:black;">Equipamentos</label>			
			<textarea id="equip" class="infotextbox" style="height:220px;width:252px;resize:none;"></textarea>
			<div id="monetary">
				<label for="pc" class="moneylabel">pc</label>
				<input id="pc" class="moneyinput" type="text">
				
				<label for="pp" class="moneylabel">pp</label>
				<input id="pp" class="moneyinput" type="text">
				
				<label for="pe" class="moneylabel">pe</label>
				<input id="pe" class="moneyinput" type="text">
				
				<label for="po" class="moneylabel">po</label>
				<input id="po" class="moneyinput" type="text">
				
				<label for="pl" class="moneylabel">pl</label>
				<input id="pl" class="moneyinput" type="text">
			</div>
		</div>
	</div>
	<!--História-->
	<div class="row">
		<div class="col-md-3" style="height:400px;">
			<label for="cstorie" class="fantasyfont" style="font-weight:bold;color:black;">História</label>
			<textarea id="cstorie" class="infotextbox" style="width:295px;resize:none;height:341px;"></textarea>
		</div>
		<div class="col-md-3" style="height:400px;">
			<label for="cperso" class="fantasyfont" style="font-weight:bold;color:black;">Traços de Personalidade</label>
			<textarea id="cperso" class="infotextbox" style="width:295px;resize:none;"></textarea>
			<label for="cide" class="fantasyfont" style="font-weight:bold;color:black;">Ideais</label>
			<textarea id="cide" class="infotextbox" style="width:295px;resize:none;"></textarea>
			<label for="clink" class="fantasyfont" style="font-weight:bold;color:black;">Ligações</label>
			<textarea id="clink" class="infotextbox" style="width:295px;resize:none;"></textarea>
			<label for="cdef" class="fantasyfont" style="font-weight:bold;color:black;">Defeitos</label>
			<textarea id="cdef" class="infotextbox" style="width:295px;resize:none;"></textarea>
		</div>
		<div class="col-md-3" style="height:400px;">
			<label for="calliance" class="fantasyfont" style="font-weight:bold;color:black;">Aliados e Organizações</label>
			<textarea id="calliance" class="infotextbox" style="width:295px;resize:none;height:341px;"></textarea>
		</div>
		<div class="col-md-3" style="height:400px;">
			<label for="carhab" class="fantasyfont" style="font-weight:bold;color:black;">Caracteristicas e Habilidades</label>
			<textarea id="carhab" class="infotextbox" style="width:295px;resize:none;height:341px;"></textarea>
		</div>
		
	</div>
	<!--Anotações-->
	<div class="row">
		<div class="col-md-6">
			<label for="notes" class="fantasyfont" style="font-weight:bold;color:black;">Anotações</label>
			<textarea id="notes" class="infotextbox" style="height:275px;width:630px;resize:none;"></textarea>
		</div>
		<div class="col-md-6">
			<label for="treasures" class="fantasyfont" style="font-weight:bold;color:black;">Tesouro</label>
			<textarea id="treasures" class="infotextbox" style="height:275px;width:630px;resize:none;"></textarea>
		</div>
	</div>
	<!--Magias e Truques-->
	<div class="row">
		<div class="col-md-3" id="magicinfo">
			<div id="cconj">
				<label for="cconjclass" id="cconjlabel" class="fantasyfont">Classe de Conjuração</label>
				<input type="text" id="cconjclass">
			</div>
			<div style="column-count:3;">
				<div class="conjbox">
					<label for="keyhab" class="cmgilabel" >Habilidade Chave</label>
					<input type="text" id="keyhab" class="mgishow">
				</div>
				<div class="conjbox">
					<label for="cdtr" class="cmgilabel">CD de Resistência</label>
					<input type="text" id="cdtr" class="mgishow">
				</div>
				<div class="conjbox">
					<label for="mbonus" class="cmgilabel">Bonus de Ataque</label>
					<input type="text" id="mbonus" class="mgishow">
				</div>
			</div>
		</div>
	<!-- Lista de Magias -->
		<div class="col-md-9" style="height:279px;padding:10px;">	
			<h3 style="border-bottom:2px solid black;color:black;font-family: 'Metamorphous', cursive;">Lista de Magia</h3>
			<div style="overflow-y:auto;height:222px;">
				<div id="magiclist">
					<div id="nivel0">
						<div>
							<input type="text" class="mgtitle" value="Truques" disabled>
							<input type="text" class="mgmax" id="mag0max">
							<input type="text" class="mgatual" id="mag0atl">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel0","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list0">
						</div>
					</div>
					<div id="nivel1">
						<div>
							<input type="text" class="mgtitle" value="Nivel 1" disabled>
							<input type="text" class="mgmax" id="mag1max" value="0">
							<input type="text" class="mgatual" id="mag1atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel1","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list1">
						</div>
					</div>
					<div id="nivel2">
						<div>
							<input type="text" class="mgtitle" value="Nivel 2" disabled>
							<input type="text" class="mgmax" id="mag2max" value="0">
							<input type="text" class="mgatual" id="mag2atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel2","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list2">
						</div>
					</div>
					<div id="nivel3">
						<div>
							<input type="text" class="mgtitle" value="Nivel 3" disabled>
							<input type="text" class="mgmax" id="mag3max" value="0">
							<input type="text" class="mgatual" id="mag3atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel3","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list3">
						</div>
					</div>
					<div id="nivel4">
						<div>
							<input type="text" class="mgtitle" value="Nivel 4" disabled>
							<input type="text" class="mgmax" id="mag4max" value="0">
							<input type="text" class="mgatual" id="mag4atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel4","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list4">
						</div>
					</div>
					<div id="nivel5">
						<div>
							<input type="text" class="mgtitle" value="Nivel 5" disabled>
							<input type="text" class="mgmax" id="mag5max" value="0">
							<input type="text" class="mgatual" id="mag5atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel5","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list5">
						</div>
					</div>
					<div id="nivel6">
						<div>
							<input type="text" class="mgtitle" value="Nivel 6" disabled>
							<input type="text" class="mgmax" id="mag6max" value="0">
							<input type="text" class="mgatual" id="mag6atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel6","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list6">
						</div>
					</div>
					<div id="nivel7">
						<div>
							<input type="text" class="mgtitle" value="Nivel 7" disabled>
							<input type="text" class="mgmax" id="mag7max" value="0">
							<input type="text" class="mgatual" id="mag7atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel7","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list7">
						</div>
					</div>
					<div id="nivel8">
						<div>
							<input type="text" class="mgtitle" value="Nivel 8" disabled>
							<input type="text" class="mgmax" id="mag8max" value="0">
							<input type="text" class="mgatual" id="mag8atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel8","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list8">
						</div>
					</div>
					<div id="nivel9">
						<div>
							<input type="text" class="mgtitle" value="Nivel 9" disabled>
							<input type="text" class="mgmax" id="mag9max" value="0">
							<input type="text" class="mgatual" id="mag9atl" value="0">
							<input class="mgaddbox" disabled>
							<a onclick='magicsbox("nivel9","add")' class="mgadd">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
		  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
						</div>
						<div id="list9">
						</div>
					</div>
				</div>
			</div>
			<script>
			var mg = [];
				if (typeof mg[0] == 'undefined') {
					mg[0] = 1;
					magicsbox("nivel0");
				}
				if (typeof mg[1] == 'undefined') {
					mg[1] = 1;
					magicsbox("nivel1");
				}
				if (typeof mg[2] == 'undefined') {
					mg[2] = 1;
					magicsbox("nivel2");
				}
				if (typeof mg[3] == 'undefined') {
					mg[3] = 1;
					magicsbox("nivel3");
				}
				if (typeof mg[4] == 'undefined') {
					mg[4] = 1;
					magicsbox("nivel4");
				}
				if (typeof mg[5] == 'undefined') {
					mg[5] = 1;
					magicsbox("nivel5");
				}
				if (typeof mg[6] == 'undefined') {
					mg[6] = 1;
					magicsbox("nivel6");
				}
				if (typeof mg[7] == 'undefined') {
					mg[7] = 1;
					magicsbox("nivel7");
				}
				if (typeof mg[8] == 'undefined') {
					mg[8] = 1;
					magicsbox("nivel8");
				}
				if (typeof mg[9] == 'undefined') {
					mg[9] = 1;
					magicsbox("nivel9");
				}
				actshow = false;
				function actbar(){
					if(actshow == false){
						document.getElementById("dicesroll").style.width = "292px";		
						document.getElementById("dicesroll").style.padding = "8px 8px 8px 45px";		
						actshow = true;
					}else if(actshow == true){
						document.getElementById("dicesroll").style.width = "0";
						document.getElementById("dicesroll").style.padding = "0";
						actshow = false;
					}
				}
				function senddice(dice){
					res = rolldice(dice);
					str = 'Rolou um '+dice+' e tirou:<p class="res">'+res+'<span>('+res+')</span></p>'
					message = document.getElementById('message');
					message.value = str;
					document.getElementById("diceresh").textContent = 'Rolou um 1'+dice+' e Tirou:';
					document.getElementById("diceresfull").textContent = res;
					showres()
					$( "#chat" ).trigger( "submit" );
				}
				resshow = false;
				function showres(){
					if(resshow == false){
						document.getElementById("darkbg").style.opacity = "0.5";			
						document.getElementById("darkbg").style.visibility = "visible";			
						document.getElementById("diceres").style.visibility = "visible";			
						resshow = true;
					}else if(resshow == true){
						 document.getElementById("darkbg").style.opacity = "0";
						 document.getElementById("darkbg").style.visibility = "hidden";
						 document.getElementById("diceres").style.visibility = "hidden";
						resshow = false;
					}
				}
			</script>
		</div>
	</div>
</div>
</form>


<div class="sheetactionbar">
	<a onclick="actbar()">
	<picture >
		<img src="img\dice.svg" width="35" height="35" id="manualroll" data-toggle="tooltip" data-placement="top" title="Rolar Dado" style="margin-bottom:5px;">
	</picture>
	</a>
	<picture>
		<img src="img\floppy-disk.svg" width="35" height="35" id="manualsave" data-toggle="tooltip" data-placement="top" title="Salvar Manual" onclick="$( '#formsheet' ).trigger( 'submit' );">
	</picture>
</div>
<div id="dicesroll">
	<a class="actdices" onclick="senddice('d4')"><img src='img/dices/d4.svg' width='30' height='30'></a>
	<a class="actdices" onclick="senddice('d6')"><img src='img/dices/d6.svg' width='30' height='30'></a>
	<a class="actdices" onclick="senddice('d8')"><img src='img/dices/d8.svg' width='30' height='30'></a>
	<a class="actdices" onclick="senddice('d10')"><img src='img/dices/d10.svg' width='30' height='30'></a>
	<a class="actdices" onclick="senddice('d12')"><img src='img/dices/d12.svg' width='30' height='30'></a>
	<a class="actdices" onclick="senddice('d20')"><img src='img/dices/d20.svg' width='30' height='30'></a>
	<a class="actdices" onclick="senddice('d100')"><img src='img/dices/d100.svg' width='30' height='30'></a>
</div>
<div id="darkbg" onclick="showres()"></div>
<div id="diceres">
	<span id="diceresclose" onclick="showres()">x</span>
	<p id="diceresh">Rolou um XdX e Tirou:</p>
	<p id="diceresfull">XX</P>
</div>