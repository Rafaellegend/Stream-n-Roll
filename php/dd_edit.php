
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
		onchange='ExectCalc("dnd","mod","Cstr","Cmstr");ExectCalc("dnd","mod","Cstr","Cmtstr")'>
		<br>
		<!-- Mod Força -->
		<input type="text" id="Cmstr" name="Cmstr" value='0' readonly>
		<br>
	<!-- Destreza -->
		<label for="Cdex">Destreza</label><br>
		<input type="number" id="Cdex" name="Cdex" value='10' 
		onchange='ExectCalc("dnd","mod","Cdex","Cmdex");ExectCalc("dnd","mod","Cdex","Cmtdex")'>
		<br>
		<!-- Mod Destreza -->
		<input type="number" id="Cmdex" name="Cmdex" value='0' readonly>
		<br>
	<!-- Constituição -->
		<label for="Ccon">Constituição</label><br>
		<input type="number" id="Ccon" name="Ccon" value='10' 
		onchange='ExectCalc("dnd","mod","Ccon","Cmcon");ExectCalc("dnd","mod","Ccon","Cmtcon")'>
		<br>
		<!-- Mod Constituição -->
		<input type="number" id="Cmcon" name="Cmcon" value='0' readonly>
		<br>
	<!-- Inteligência -->
		<label for="Cint">Inteligência</label><br>
		<input type="number" id="Cint" name="Cint" value='10' 
		onchange='ExectCalc("dnd","mod","Cint","Cmint");ExectCalc("dnd","mod","Cint","Cmtint")'>
		<br>
		<!-- Mod Inteligência -->
		<input type="text" id="Cmint" name="Cmint" value='0' readonly>
		<br>
	<!-- Sabedoria -->
		<label for="Cwis">Sabedoria</label><br>
		<input type="number" id="Cwis" name="Cwis" value='10' 
		onchange='ExectCalc("dnd","mod","Cwis","Cmwis");ExectCalc("dnd","mod","Cwis","Cmtwis")'>
		<br>
		<!-- Mod Sabedoria -->
		<input type="text" id="Cmwis" name="Cmwis" value='0' readonly>
		<br>
	<!-- Carisma -->
		<label for="Ccar">Carisma</label><br>
		<input type="number" id="Ccar" name="Ccar" value='10' 
		onchange='ExectCalc("dnd","mod","Ccar","Cmcar");ExectCalc("dnd","mod","Ccar","Cmtcar")'>
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
		<input type="text" id="Cmtstr" name="Cmtstr" value='0' readonly>
		<br>
	<!-- Teste de Destreza -->
		<label for="Ctdex">Teste de Destreza</label><br>
		<input type="checkbox" id="Ctdex" name="Ctdex" onchange='ExectCalc("dnd","per","Cmtdex","Cmtdex","Ctdex","Cpro")'>
		<input type="text" id="Cmtdex" name="Cmtdex" value='0' readonly>
		<br>
	<!-- Teste de Constituição -->
		<label for="Ctcon">Teste de Constituição</label><br>
		<input type="checkbox" id="Ctcon" name="Ctcon" onchange='ExectCalc("dnd","per","Cmtcon","Cmtcon","Ctcon","Cpro")'>
		<input type="text" id="Cmtcon" name="Cmtcon" value='0' readonly>
		<br>
	<!-- Teste de Inteligência -->
		<label for="Ctint">Teste de Inteligência</label><br>
		<input type="checkbox" id="Ctint" name="Ctint" onchange='ExectCalc("dnd","per","Cmtint","Cmtint","Ctint","Cpro")'>
		<input type="text" id="Cmtint" name="Cmtint" value='0' readonly>
		<br>
	<!-- Teste de Sabedoria -->
		<label for="Ctwis">Teste de Sabedoria</label><br>
		<input type="checkbox" id="Ctwis" name="Ctwis" onchange='ExectCalc("dnd","per","Cmtwis","Cmtwis","Ctwis","Cpro")'>
		<input type="text" id="Cmtwis" name="Cmtwis" value='0' readonly>
		<br>
	<!-- Teste de Carisma -->
		<label for="Ctcar">Teste de Carisma</label><br>
		<input type="checkbox" id="Ctcar" name="Ctcar" onchange='ExectCalc("dnd","per","Cmtcar","Cmtcar","Ctcar","Cpro")'>
		<input type="text" id="Cmtcar" name="Cmtcar" value='0' readonly>
		<br>
</div>
<!-- Pericias -->
<div class='sheetPer' id='sheetPer'>
	<a onclick=""><p>Pericias</p></a>
	<!-- Acrobacia -->
		<label for="Cacrobatic">Acrobacia (Des)</label><br>
		<input type="checkbox" id="Cacrobatic" name="Cacrobatic">
		<br>
	<!-- Adestrar Animais -->
		<label for="Canimal">Adestrar Animais (Sab)</label><br>
		<input type="checkbox" id="Canimal" name="Canimal">
		<br>
	<!-- Arcanismo -->
		<label for="Carcanism">Arcanismo (For)</label><br>
		<input type="checkbox" id="Carcanism" name="Carcanism">
		<br>
	<!-- Arcanismo -->
		<label for="Catletism">Atletismo (For)</label><br>
		<input type="checkbox" id="Catletism" name="Catletism">
		<br>
	<!-- Atuação -->
		<label for="Cperform">Atuação (Car)</label><br>
		<input type="checkbox" id="Cperform" name="Cperform">
		<br>
	<!-- Enganação -->
		<label for="Cdeception">Enganação (Car)</label><br>
		<input type="checkbox" id="Cdeception" name="Cdeception">
		<br>
	<!-- Furtividade -->
		<label for="Cstealth">Furtividade (Des)</label><br>
		<input type="checkbox" id="Cstealth" name="Cstealth">
		<br>
	<!-- História -->
		<label for="Chistory">Historia (Int)</label><br>
		<input type="checkbox" id="Chistory" name="Chistory">
		<br>
	<!-- Intimidação -->
		<label for="Cintimidation">Intimidação (Car)</label><br>
		<input type="checkbox" id="Cintimidation" name="Cintimidation">
		<br>
	<!-- Intuição -->
		<label for="Cinsight">Intuição (Sab)</label><br>
		<input type="checkbox" id="Cinsight" name="Cinsight">
		<br>
	<!-- Investigação -->
		<label for="Cinvestigation">Investigação (Int)</label><br>
		<input type="checkbox" id="Cinvestigation" name="Cinvestigation">
		<br>
	<!-- Medicina -->
		<label for="Cmedicine">Medicina (Sab)</label><br>
		<input type="checkbox" id="Cmedicine" name="Cmedicine">
		<br>
	<!-- Natureza -->
		<label for="Cnature">Natureza (Int)</label><br>
		<input type="checkbox" id="Cnature" name="Cnature">
		<br>
	<!-- Percepção -->
		<label for="Cperception">Percepção (Car)</label><br>
		<input type="checkbox" id="Cperception" name="Cperception">
		<br>
	<!-- Pretidigitação -->
		<label for="Cslighth">Pretidigitação (Des)</label><br>
		<input type="checkbox" id="Cslighth" name="Cslighth">
		<br>
	<!-- Religião -->
		<label for="Creligion">Religião (Int)</label><br>
		<input type="checkbox" id="Creligion" name="Creligion">
		<br>
	<!-- Sobrevivência -->
		<label for="Csurvival">Sobrevivência (Sab)</label><br>
		<input type="checkbox" id="Csurvival" name="Survival">
		<br>
</div>		
	</form>
