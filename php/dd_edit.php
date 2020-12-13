
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
		
<!-- Informações do Personagem -->
<div class="sheetInfo" id="sheetInfo">
	<p>Caracteristicas do Personagem</p>
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
		
<!-- Habilidades -->
<div class="sheetHab" id="sheetHab">
	<p>Habilidades</p>
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
</div>
<div class="sheetRes" id="sheetRes">
<p>Teste de Resistencia</p>
<!-- Teste de Resistencia -->
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
</div>
<!-- Pericias -->
<div class='sheetPer' id='sheetPer'>
<p>Pericias</p>
	<!-- Acrobacia -->
		<label for="Cacrbt">Acrobacia (Des)</label><br>
		<input type="checkbox" id="Cacrbt" name="Cacrbt" onchange='ExectCalc("dnd","per","Cmacrbt","Cmacrbt","Cacrbt","Cpro")'>
		<input type="text" class='dex' id="Cmacrbt" name="Cmacrbt" value='0' readonly>
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
	</form>
