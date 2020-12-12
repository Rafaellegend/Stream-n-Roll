
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
<div>
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
		<input type="number" id="Clevel" name="Clevel" onchange='ExectCalc("dnd","prof","Clevel","Cpro")'>
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
		<input type="text" id="Cpro" name="Cpro" readonly>
		<br>	
</div>
		
<!-- Habilidades -->
<div>
	<p>Habilidades</p>
	<!-- Força -->
		<label for="Cstr">Força</label><br>
		<input type="number" id="Cstr" name="Cstr" onchange='ExectCalc("dnd","mod","Cstr","Cmstr")'>
		<br>
		<!-- Mod Força -->
		<input type="text" id="Cmstr" name="Cmstr" readonly>
		<br>
	<!-- Destreza -->
		<label for="Cdex">Destreza</label><br>
		<input type="number" id="Cdex" name="Cdex" onchange='ExectCalc("dnd","mod","Cdex","Cmdex")'>
		<br>
		<!-- Mod Destreza -->
		<input type="number" id="Cmdex" name="Cmdex" readonly>
		<br>
	<!-- Constituição -->
		<label for="Ccon">Constituição</label><br>
		<input type="number" id="Ccon" name="Ccon" onchange='ExectCalc("dnd","mod","Ccon","Cmcon")'>
		<br>
		<!-- Mod Constituição -->
		<input type="number" id="Cmcon" name="Cmcon" readonly>
		<br>
	<!-- Inteligência -->
		<label for="Cint">Inteligência</label><br>
		<input type="number" id="Cint" name="Cint" onchange='ExectCalc("dnd","mod","Cint","Cmint")'>
		<br>
		<!-- Mod Inteligência -->
		<input type="text" id="Cmint" name="Cmint" readonly>
		<br>
	<!-- Sabedoria -->
		<label for="Cwis">Sabedoria</label><br>
		<input type="number" id="Cwis" name="Cwis" onchange='ExectCalc("dnd","mod","Cwis","Cmwis")'>
		<br>
		<!-- Mod Sabedoria -->
		<input type="text" id="Cmwis" name="Cmwis" readonly>
		<br>
	<!-- Carisma -->
		<label for="Ccar">Carisma</label><br>
		<input type="number" id="Ccar" name="Ccar" onchange='ExectCalc("dnd","mod","Ccar","Cmcar")'>
		<br>
		<!-- Mod Carisma -->
		<input type="text" id="Cmcar" name="Cmcar" readonly>
		<br>

<!-- Teste de Resistencia -->
	<!-- Teste de Força -->
		<label for="Ctstr">Teste de Força</label><br>
		<input type="checkbox" id="Ctstr" name="Ctstr">
		<br>
	<!-- Teste de Destreza -->
		<label for="Ctdex">Teste de Destreza</label><br>
		<input type="checkbox" id="Ctdex" name="Ctdex">
		<br>
	<!-- Teste de Constituição -->
		<label for="Ctcon">Teste de Constituição</label><br>
		<input type="checkbox" id="Ctcon" name="Ctcon">
		<br>
	<!-- Teste de Inteligência -->
		<label for="Ctint">Teste de Inteligência</label><br>
		<input type="checkbox" id="Ctint" name="Ctint">
		<br>
	<!-- Teste de Sabedoria -->
		<label for="Ctwis">Teste de Sabedoria</label><br>
		<input type="checkbox" id="Ctwis" name="Ctwis">
		<br>
	<!-- Teste de Carisma -->
		<label for="Ctcar">Teste de Carisma</label><br>
		<input type="checkbox" id="Ctcar" name="Ctcar">
		<br>
</div>
<!-- Pericias -->
<div>
	<p>Pericias</p>
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
