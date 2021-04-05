<title>D&D - Editar Ficha </title>
<script src="js/Autocalc.js" type="text/javascript"></script>
<!-- Nome do Jogador e Id da ficha-->
	<!-- Jogador -->
		<label for="Pname">Jogador:</label><br>
		<input type="text" id="Pname" name="Pname" readonly>
		<br>
	<!-- Id -->
		<label for="Pname">Id:</label><br>
		<input type="text" id="Pid" name="Pid" readonly>
		<br>
<i class="bi bi-watch"></i>
<!-- Botão para inicial a Criação -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Csinfo">
  Criar Personagem
</button>

<!--Modal-->
<div class="modal" id="Csinfo">
  <div class="modal-dialog">
    <div class="modal-content">
	
<!-- Informações do Personagem -->
<div class="sheetInfo" id="sheetInfo">
	<!-- Modal header-->
	<div class="modal-header">
		<p>Caracteristicas do Personagem</p>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	</div>
	
	<!-- Modal body-->
	<div class="modal-body">
		<form>
		<!-- Nome de Personagem -->
			<label for="Cname">Nome de Personagem:</label><br>
			<input type="text" id="Cname" name="Cname">
			<br>
		<!-- Classe -->	
			<label for="Cclass">Classe:</label><br>
			<input type="text" id="Cclass" name="Cclass">
			<br>
		<!-- Nivel Total -->	
			<label for="Clevel" pattern="[0-100]{1}">Nivel:</label><br>
			<input type="number" id="Clevel" name="Clevel" value='1' onchange='ExectCalc("dnd","prof","Clevel","Cpro")'>
			<br>
		<!-- Raça -->	
			<label for="Cfolk">Raça:</label><br>
			<input type="text" id="Cfolk" name="Cfolk">
			<br>
		<!-- Antecedente -->	
			<label for="Cback">Antecedente:</label><br>
			<input type="text" id="Cback" name="Cback">
			<br>
		<!-- Tendência -->	
			<label for="Calignment">Tendência:</label><br>
			<input type="text" id="Caligment" name="Caligment">
			<br>
		<!-- Experiência -->	
			<label for="Cxp">Experiência:</label><br>
			<input type="text" id="Cxp" name="Cxp">
			<br>
		<!-- Proficiência -->	
			<label for="Cpro">Proficiência:</label><br>
			<input type="text" id="Cpro" name="Cpro" value='2' readonly>
			<br>
	</div>
	
	<!--Modal footer-->
	<div class="modal-footer">
	<!-- botão Proximo-->
		<button type="button" class="btn btn-primary" data-toggle="modal" 
		data-target="#Cshab" data-dismiss="modal" data-backdrop="static">
		Proximo
		</button>
	</div>
<!-- fechamento div #sheetInfo-->
</div>

<!-- Fechando modal-->	
</div>
</div>
</div>

<!--Modal Habilidades-->
<div class="modal" id="Cshab">
  <div class="modal-dialog">
    <div class="modal-content">

<!-- Modal header-->
	<div class="modal-header">
		<p>Habilidades</p>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<!-- Modal body-->
	<div class="modal-body">

<!-- Habilidades -->
<div class="sheetHab" id="sheetHab">
	
	<!-- Força -->
		<label for="Cstr">Força</label><br>
		<input type="number" id="Cstr" name="Cstr" value='10' 
		onchange='ExectCalc("dnd","mod","Cstr","Cmstr");ExectCalc("dnd","dis","Cstr","str")'>
		<br>
		<!-- Mod Força -->
		<input type="text" id="Cmstr" name="Cmstr" value='0' readonly>
		<br>
	<!-- Destreza -->
		<label for="Cdex">Destreza</label><br>
		<input type="number" id="Cdex" name="Cdex" value='10' 
		onchange='ExectCalc("dnd","mod","Cdex","Cmdex");ExectCalc("dnd","dis","Cdex","dex")'>
		<br>
		<!-- Mod Destreza -->
		<input type="number" id="Cmdex" name="Cmdex" value='0' readonly>
		<br>
	<!-- Constituição -->
		<label for="Ccon">Constituição</label><br>
		<input type="number" id="Ccon" name="Ccon" value='10' 
		onchange='ExectCalc("dnd","mod","Ccon","Cmcon");ExectCalc("dnd","dis","Ccon","con")'>
		<br>
		<!-- Mod Constituição -->
		<input type="number" id="Cmcon" name="Cmcon" value='0' readonly>
		<br>
	<!-- Inteligência -->
		<label for="Cint">Inteligência</label><br>
		<input type="number" id="Cint" name="Cint" value='10' 
		onchange='ExectCalc("dnd","mod","Cint","Cmint");ExectCalc("dnd","dis","Cint","int")'>
		<br>
		<!-- Mod Inteligência -->
		<input type="text" id="Cmint" name="Cmint" value='0' readonly>
		<br>
	<!-- Sabedoria -->
		<label for="Cwis">Sabedoria</label><br>
		<input type="number" id="Cwis" name="Cwis" value='10' 
		onchange='ExectCalc("dnd","mod","Cwis","Cmwis");ExectCalc("dnd","dis","Cwis","wis")'>
		<br>
		<!-- Mod Sabedoria -->
		<input type="text" id="Cmwis" name="Cmwis" value='0' readonly>
		<br>
	<!-- Carisma -->
		<label for="Ccar">Carisma</label><br>
		<input type="number" id="Ccar" name="Ccar" value='10' 
		onchange='ExectCalc("dnd","mod","Ccar","Cmcar");ExectCalc("dnd","dis","Ccar","car")'>
		<br>
		<!-- Mod Carisma -->
		<input type="text" id="Cmcar" name="Cmcar" value='0' readonly>
		<br>
	<!-- fechamento div #sheetHab-->
	</div>


<!-- Teste de Resistencia -->
<div class="sheetRes" id="sheetRes">
<p>Teste de Resistencia</p>
	<!-- Teste de Força -->
		<label for="Ctstr">Teste de Força</label><br>
		<input type="checkbox" id="Ctstr" name="Ctstr" onchange='ExectCalc("dnd","per","Cmtstr","Cmtstr","Ctstr","Cpro")'>
		<input type="text" class='str' id="Cmtstr" name="Cmtstr" value='0' readonly>
		<br>
	<!-- Teste de Destreza -->
		<label for="Ctdex">Teste de Destreza</label><br>
		<input type="checkbox" id="Ctdex" name="Ctdex" onchange='ExectCalc("dnd","per","Cmtdex","Cmtdex","Ctdex","Cpro")'>
		<input type="text" class='dex' id="Cmtdex" name="Cmtdex" value='0' readonly>
		<br>
	<!-- Teste de Constituição -->
		<label for="Ctcon">Teste de Constituição</label><br>
		<input type="checkbox" id="Ctcon" name="Ctcon" onchange='ExectCalc("dnd","per","Cmtcon","Cmtcon","Ctcon","Cpro")'>
		<input type="text" class='con' id="Cmtcon" name="Cmtcon" value='0' readonly>
		<br>
	<!-- Teste de Inteligência -->
		<label for="Ctint">Teste de Inteligência</label><br>
		<input type="checkbox" id="Ctint" name="Ctint" onchange='ExectCalc("dnd","per","Cmtint","Cmtint","Ctint","Cpro")'>
		<input type="text" class='int' id="Cmtint" name="Cmtint" value='0' readonly>
		<br>
	<!-- Teste de Sabedoria -->
		<label for="Ctwis">Teste de Sabedoria</label><br>
		<input type="checkbox" id="Ctwis" name="Ctwis" onchange='ExectCalc("dnd","per","Cmtwis","Cmtwis","Ctwis","Cpro")'>
		<input type="text" class='wis' id="Cmtwis" name="Cmtwis" value='0' readonly>
		<br>
	<!-- Teste de Carisma -->
		<label for="Ctcar">Teste de Carisma</label><br>
		<input type="checkbox" id="Ctcar" name="Ctcar" onchange='ExectCalc("dnd","per","Cmtcar","Cmtcar","Ctcar","Cpro")'>
		<input type="text" class='car' id="Cmtcar" name="Cmtcar" value='0' readonly>
		<br>
	<!-- fechamento modal body-->
	</div>
	
	<!--Modal footer-->
	<div class="modal-footer">
		<!-- botão Proximo-->	
		<button type="button" class="btn btn-primary" data-toggle="modal" 
		data-target="#Csinfo" data-dismiss="modal" data-backdrop="static">
		Voltar
		</button>	
		<!-- botão Voltar-->
		<button type="button" class="btn btn-primary" data-toggle="modal" 
		data-target="#Csper" data-dismiss="modal" data-backdrop="static">
		Proximo
		</button>
	</div>
</div>

<!-- Fechando modal-->	
</div>
</div>
</div>

<!--Modal Pericias-->
<div class="modal" id="Csper">
  <div class="modal-dialog">
    <div class="modal-content">
	
<!-- Pericias -->
<div class='sheetPer' id='sheetPer'>
<!-- Modal header-->
	<div class="modal-header">
		<p>Pericias</p>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	</div>
<!-- Modal body-->
	<div class="modal-body">
	<!-- Acrobacia -->
		<label for="Cacrbt">Acrobacia (Des)</label><br>
		<input type="checkbox" id="Cacrbt" name="Cacrbt" onchange='ExectCalc("dnd","per","Cmacrbt","Cmacrbt","Cacrbt","Cpro")'>
		<input type="text" class='dex' id="Cmacrbt" name="Cmacrbt" value='0' readonly >
		<br>
	<!-- Adestrar Animais -->
		<label for="Canimal">Adestrar Animais (Sab)</label><br>
		<input type="checkbox" id="Canl" name="Canl" onchange='ExectCalc("dnd","per","Cmanl","Cmanl","Canl","Cpro")'>
		<input type="text" class='wis' id="Cmanl" name="Cmanl" value='0' readonly>
		<br>
	<!-- Arcanismo -->
		<label for="Carc">Arcanismo (Int)</label><br>
		<input type="checkbox" id="Carc" name="Carc" onchange='ExectCalc("dnd","per","Cmarc","Cmarc","Carc","Cpro")'>		
		<input type="text" class='int' id="Cmarc" name="Cmarc" value='0' readonly>
		<br>
	<!-- Arcanismo -->
		<label for="Catl">Atletismo (For)</label><br>
		<input type="checkbox" id="Catl" name="Catl" onchange='ExectCalc("dnd","per","Cmatl","Cmatl","Catl","Cpro")'>		
		<input type="text" class='str' id="Cmatl" name="Cmatl" value='0' readonly>
		<br>
	<!-- Atuação -->
		<label for="Cperf">Atuação (Car)</label><br>
		<input type="checkbox" id="Cperf" name="Cperf" onchange='ExectCalc("dnd","per","Cmperf","Cmperf","Cperf","Cpro")'>
		<input type="text" class='car' id="Cmperf" name="Cmperf" value='0' readonly>
		<br>
	<!-- Enganação -->
		<label for="Cdec">Enganação (Car)</label><br>
		<input type="checkbox" id="Cdec" name="Cdec" onchange='ExectCalc("dnd","per","Cmdec","Cmdec","Cdec","Cpro")'>
		<input type="text" class='car' id="Cmdec" name="Cmdec" value='0' readonly>
		<br>
	<!-- Furtividade -->
		<label for="Cstlth">Furtividade (Des)</label><br>
		<input type="checkbox" id="Cstlth" name="Cstlth" onchange='ExectCalc("dnd","per","Cmstlth","Cmstlth","Cstlth","Cpro")'>
		<input type="text" class='dex' id="Cmstlth" name="Cmstlth" value='0' readonly>
		<br>
	<!-- História -->
		<label for="Chis">Historia (Int)</label><br>
		<input type="checkbox" id="Chis" name="Chis" onchange='ExectCalc("dnd","per","Cmhis","Cmhis","Chis","Cpro")'>
		<input type="text" class='int' id="Cmhis" name="Cmhis" value='0' readonly>
		<br>
	<!-- Intimidação -->
		<label for="Cintimidation">Intimidação (Car)</label><br>
		<input type="checkbox" id="Cintimidation" name="Cintimidation" onchange='ExectCalc("dnd","per","Cmintimidation","Cmintimidation","Cintimidation","Cpro")'>
		<input type="text" class='car' id="Cmintimidation" name="Cmintimidation" value='0' readonly>
		<br>
	<!-- Intuição -->
		<label for="Cins">Intuição (Sab)</label><br>
		<input type="checkbox" id="Cins" name="Cins" onchange='ExectCalc("dnd","per","Cmins","Cmins","Cins","Cpro")'>
		<input type="text" class='wis' id="Cmins" name="Cmins" value='0' readonly>
		<br>
	<!-- Investigação -->
		<label for="Cinv">Investigação (Int)</label><br>
		<input type="checkbox" id="Cinv" name="Cinv" onchange='ExectCalc("dnd","per","Cminv","Cminv","Cinv","Cpro")'>
		<input type="text" class='int' id="Cminv" name="Cminv" value='0' readonly>	
		<br>
	<!-- Medicina -->
		<label for="Cmed">Medicina (Sab)</label><br>
		<input type="checkbox" id="Cmed" name="Cmedicine" onchange='ExectCalc("dnd","per","Cmmed","Cmmed","Cmed","Cpro")'>
		<input type="text" class='wis' id="Cmmed" name="Cmmed" value='0' readonly>
		<br>
	<!-- Natureza -->
		<label for="Cnat">Natureza (Int)</label><br>
		<input type="checkbox" id="Cnat" name="Cnat" onchange='ExectCalc("dnd","per","Cmnat","Cmnat","Cnat","Cpro")'>		
		<input type="text" class='int' id="Cmnat" name="Cmnat" value='0' readonly>
		<br>
	<!-- Percepção -->
		<label for="Cper">Percepção (Sab)</label><br>
		<input type="checkbox" id="Cper" name="Cper" onchange='ExectCalc("dnd","per","Cmper","Cmper","Cper","Cpro")'>
		<input type="text" class='wis' id="Cmper" name="Cmper" value='0' readonly>
		<br>
	<!-- Pretidigitação -->
		<label for="Csli">Pretidigitação (Des)</label><br>
		<input type="checkbox" id="Csli" name="Cslighth" onchange='ExectCalc("dnd","per","Cmsli","Cmsli","Csli","Cpro")'>
		<input type="text" class='dex' id="Cmsli" name="Cmsli" value='0' readonly>
		<br>
	<!-- Religião -->
		<label for="Crel">Religião (Int)</label><br>
		<input type="checkbox" id="Crel" name="Crel" onchange='ExectCalc("dnd","per","Cmrel","Cmrel","Crel","Cpro")'>
		<input type="text" class='int' id="Cmrel" name="Cmrel" value='0' readonly>
		<br>
	<!-- Sobrevivência -->
		<label for="Csurv">Sobrevivência (Sab)</label><br>
		<input type="checkbox" id="Csurv" name="Surv" onchange='ExectCalc("dnd","per","Cmsurv","Cmsurv","Csurv","Cpro")'>
		<input type="text" class='wis' id="Cmsurv" name="Cmsurv" value='0' readonly>
		<br>	
	</div>
	<!--Modal footer-->
	<div class="modal-footer">
	<!-- botão Proximo-->	
	<button type="button" class="btn btn-primary" data-toggle="modal" 
	data-target="#Cshab" data-dismiss="modal" data-backdrop="static">
	Voltar
	</button>	
	<!-- botão Voltar-->
	<button type="button" class="btn btn-primary" data-toggle="modal" 
	data-target="#Csapa" data-dismiss="modal" data-backdrop="static">
	Proximo
	</button>
	</div>
</div>

<!-- Fechando modal-->	
</div>
</div>
</div>

<!--Modal Aparência-->
<div class="modal" id="Csapa">
  <div class="modal-dialog">
    <div class="modal-content">
	
<!-- Aparência -->
<!-- Modal header-->
	<div class="modal-header">
		<p>Aparência</p>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
	</div>
<div>
<!-- Modal body-->
	<div class="modal-body">
	<!--Imagem-->
	<script src="js/functions.js" type="text/javascript"></script>
	<label class="charperfil">
	    <img id="portrait" class="rounded-circle" href="#pic" src="http://placehold.it/400x400" 
		style="width:100px;height:100px;margin-top:20px;">
	    <input id="pic" class='pic' onchange='readURL(this,"portrait");' type="file" >
	</label>
	<br>
	<!--Idade-->
	<label for="Cage">Idade:</label>
	<input type="number" id="Cage">
	<br>
	<!--Altura-->
	<label for="Cheight">Altura:</label>
	<input type="number" id="Cheight">
	<br>
	<!--Peso-->
	<label for="Cweight">Peso:</label>
	<input type="number" id="Cweight">
	<br>
	<!--Tamanho-->
	<label for="Csize">Tamanho:</label>
	  <select id="Csize" name="Csize">
		<option value="volvo">Minusculo</option>
		<option value="saab">Pequeno</option>
		<option value="fiat" selected>Médio</option>
		<option value="audi">Grande</option>
		<option value="audi">Enorme</option>
		<option value="audi">Gigante</option>
	  </select>
	<br>
	<!--Genero-->
	<label for="Cgender">Genero:</label>
	<input type="text" id="Cgender">
	<br>
	<!--Olhos-->
	<label for="Ceyes">Olhos:</label>
	<input type="text" id="Ceyes">
	<br>
	<!--Pele-->
	<label for="Cskin">Pele:</label>
	<input type="text" id="Cskin">
	<br>
	<!--Cabelo-->
	<label for="Chair">Cabelo:</label>
	<input type="text" id="Chair">
	<br>
	</div>
</div>
	<!--Modal footer-->
	<div class="modal-footer">
		<input type="submit" value ="Enviar">
	</div>
	</form>
	
<!-- Fechando modal-->	
</div>
</div>
</div>