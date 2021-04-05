<script>
var info = true;
function showinfo(){
	if(info == true){
		info = false;
		document.getElementById('test').innerHTML = info;
	}else{
		info = true;
		document.getElementById('test').innerHTML = info;
	}
}
if(info == true){
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})}
</script>
<div class="container-fluid" id="sheet">
	<div class="row" >
	<!--Linha de info de Personagem-->
		<div class="col-md-1">
			<img src="http://placehold.it/100x119" id="cimage" class="">
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
			<input type="text" id="cclass" value='0' class="imputihidden" style="width:100px;">
		
			<input type="text" id="clevel" value='0' class="imputihidden" style="width:20px;">
			
			<label for="cback">Antecedente:</label>
			<input type="text" id="cback" value='0' class="imputihidden" style="width:83px;">
			
			<label for="cfolk">Povo:</label>
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
	
	<div class="row">
		<!--Habilidades-->
		<div class="col-md-3" id="mainhab" style="column-count: 3;padding-top:20px;padding-bottom:10px;height:275px;">
			<div id="habbox">
				<label for="cstr">Força</label>
				<input type="text" id="cstr" class="fullv" style="width:45px;" value="0">
				<input type="text" id="cmstr" class="modv" style="width:30px;" value="0">
			</div>
			<div id="habbox">
				<label for="cdex">Destreza</label>
				<input type="text" id="cdex" class="fullv" style="width:45px;" value="0">
				<input type="text" id="cmdex" class="modv" style="width:30px;" value="0">
			</div>
			<div id="habbox">
				<label for="ccon">Constituição</label>
				<input type="text" id="ccon" class="fullv" style="width:45px;" value="0">
				<input type="text" id="cmcon" class="modv" style="width:30px;" value="0">
			</div>
			<div id="habbox">
				<label for="cint">Inteligência</label>
				<input type="text" id="cint" class="fullv" style="width:45px;" value="0">
				<input type="text" id="cmint" class="modv" style="width:30px;" value="0">
			</div>
			<div id="habbox">
				<label for="cwis">Sabedoria</label>
				<input type="text" id="cwis" class="fullv" style="width:45px;" value="0">
				<input type="text" id="cmwis" class="modv" style="width:30px;" value="0">
			</div>
			<div id="habbox">
				<label for="ccar">Carisma</label>
				<input type="text" id="ccar" class="fullv" style="width:45px;" value="0">
				<input type="text" id="cmcar" class="modv" style="width:30px;" value="0">
			</div>
		</div>
		<!--Caixa de Proficiencia-->
				<input type="text" class="proflabel" value="   Proficiência" disabled>
				<input type="text" id="cpro" class="sheetprof" value="0">
		<!--Caixa de Pericias-->
		<div class="col-md-6 sheetbox" style="overflow-y:auto;height:275px;">
			
			<!--Caixa de Resistências-->
			<h5>Teste de Resistências</h5>
			<div id="perices">
				<!--Teste de Força-->
				<div>
					<input type="checkbox" class="">
					<label for="ctstr">Força</label>
					<input type="text" id="ctstr" class="imputihidden" style="width:20px;" value="0">
				</div>
				<!--Teste de Destreza-->
				<div>
					<input type="checkbox" class="">
					<label for="ctdex">Destreza</label>
					<input type="text" id="ctdex" class="imputihidden" style="width:20px;" value="0">
				</div>
				<!--Teste de Constituição-->
				<div>
					<input type="checkbox" class="">
					<label for="ctcon">Constituição</label>
					<input type="text" id="ctcon" class="imputihidden" style="width:20px;" value="0">
				</div>
				<!--Teste de Inteligência-->
				<div>
					<input type="checkbox" class="">
					<label for="ctint">Inteligência</label>
					<input type="text" id="ctint" class="imputihidden" style="width:20px;" value="0">
				</div>
				<!--Teste de Sabedoria-->
				<div>
					<input type="checkbox" class="">
					<label for="ctwis">Sabedoria</label>
					<input type="text" id="ctwis" class="imputihidden" style="width:20px;" value="0">
				</div>
				<!--Teste de Carisma-->
				<div>
					<input type="checkbox" class="">
					<label for="ctcar">Carisma</label>
					<input type="text" id="ctcar" class="imputihidden" style="width:20px;" value="0">
				</div>
			</div>
			<!--Caixa de Pericias-->
			<h5>Pericias</h5>
			<div id="perices">
				<!--Acrobacia-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmacrbt">Acrobacia(Des)</label>
					<input type="text" id="cmacrbt" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Acrobacia-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmanl">Adestrar Animais(Sab)</label>
					<input type="text" id="cmanl" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Arcanismo-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmarc">Arcanismo(Int)</label>
					<input type="text" id="cmarc" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Atletismo-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmatl">Atletismo(For)</label>
					<input type="text" id="cmatl" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Atuação-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmact">Atuação(Car)</label>
					<input type="text" id="cmact" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Enganação-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmdec">Enganação(Car)</label>
					<input type="text" id="cmdec" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Furtividade-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmsth">Furtividade(Des)</label>
					<input type="text" id="cmsth" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Historia-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmhis">Historia(Int)</label>
					<input type="text" id="cmhis" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Intimidação-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmintm">Intimidação(Car)</label>
					<input type="text" id="cmintm" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Intuição-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmins">Intuição(Sab)</label>
					<input type="text" id="cmins" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Investigação-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cminv">Investigação(Int)</label>
					<input type="text" id="cminv" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Medicina-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmmed">Medicina(Sab)</label>
					<input type="text" id="cmmed" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Natureza-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmnat">Natureza(Int)</label>
					<input type="text" id="cmnat" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Percepção-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmper">Percepção(Sab)</label>
					<input type="text" id="cmper" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Pretidigitação-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmsli">Pretidigitação(Des)</label>
					<input type="text" id="cmsli" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Religião-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmrel">Religião(Int)</label>
					<input type="text" id="cmrel" class="imputihidden" style="width:20px;" value="0">
				</div>
				
				<!--Sobrevivência-->
				<div>
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Dobro: Ative para dobrar o valor da pericia. ">
					<input type="checkbox" class="" data-toggle="tooltip" data-placement="top" title="Proficiente: Ative para aplicar sua profiiencia na pericia">
					<label for="cmsur">Sobrevivência(Sab)</label>
					<input type="text" id="cmsur" class="imputihidden" style="width:20px;" value="0">
				</div>
			</div>			
		</div>
		<!--Info importantes-->
		<div class="col-md-3" id="charinfo" style="column-count: 3;height:275px;">
			<div id="habbox">
				<label for="catualhp" data-toggle="tooltip" data-placement="top" title="Pontos de vida" style="width:30px;">PV</label>
				<input type="text" id="catualhp" class="fullvhp" style="width:66px;" value="0" >
				<input type="text" id="cmaxhp" class="modvhp" style="width:45px;" placeholder="max" value="0"data-toggle="tooltip" data-placement="top" title="Pontos de vida maximo">
				<input type="text" id="catemphp" class="modvtemp" style="width:45px;" placeholder="temp" value="0" data-toggle="tooltip" data-placement="top" title="Pontos de vida temporario">
				
			</div>
			<div id="habbox" >
				<label for="cinit" >Iniciativa</label>
				<input type="text" id="cinit" class="fullvhp" style="width:45px;" value="0">
			</div>
			<div id="habbox">
				<label for="cca" data-toggle="tooltip" data-placement="top" title="Classe de Armadura" style="width:30px;">CA</label>
				<input type="text" id="cca" class="fullvhp" style="width:45px;" value="0">
			</div>
			<div id="habbox">
				<label for="cmov">Deslocamento</label>
				<input type="text" id="cmov" class="fullvhp" style="width:45px;" value="0">
			</div>
			<div id="habbox">
				<label for="clifedice">Dado de Vida</label>
				<input type="text" id="clifedice" class="fullvhp" style="width:70px;font-size:30px;top:0px;" value="0">
			</div>
			<div id="habbox">
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
	<div class="row">
	<!--Idiomas-->
		<div class="col-md-3" style="border: 2px solid black;overflow-y:auto;height:275px;">
			<label for="langprof">Idiomas e outras Proficiencia</label>
			<textarea class="langprof" style="height:220px;width:295px;resize:none;"></textarea>
		</div>
		<!--Ataques-->
		<div class="col-md-6" style="overflow-y:auto;height:275px;" id="atksbox">
			
			<h5>Ataques e Magias</h5><button onclick="atksbox()">add</button>
			<label for="bscatkname">
			<input id="bscatkname" type="text" value="Ataque Desarmado">
			<input id="bscatkhit" type="text" value="1d4">
			<input id="bscatkfx" type="text" value="Concusão">
			<script>
				if (typeof atks !== 'undefined') {
				  
				}else{
					var atks = 1
				}

				var newbox = document.getElementById("atksbox");
				for(i = 1; i <= atks; i++){
					newbox.innerHTML += "<label for='atk"+i+"'><input id='atk"+i+"' type='text'><input id='atkhit"+i+"' type='text'><input id='atkfx"+i+"' type='text'>";
					}
				
				function atksbox(){
					atks++;
					newbox.innerHTML += "<label for='atk"+atks+"'><input id='atk"+atks+"' type='text'><input id='atkhit"+atks+"' type='text'><input id='atkfx"+atks+"' type='text'>";
				}
			</script>
		</div>
		<!--Equipamentos-->
		<div class="col-md-3">
			<label for="equip">Equipamentos</label>
			<textarea class="equip" style="height:220px;width:295px;resize:none;"></textarea>
		</div>
	</div>
	<div class="row" >
		<div class="col-md-3">
			<label for="cstorie">História</label>
			<textarea id="cstorie"></textarea>
		</div>
		<div class="col-md-3" style="border: 2px solid black;height:275px;">
			<label for="cperso">Traços de Personalidade</label>
			<textarea id="cperso" style="width:295px;resize:none;"></textarea>
			<label for="cide"style="width:295px;resize:none;">Ideais</label>
			<textarea id="cide" style="width:295px;resize:none;"></textarea>
			<label for="clink" >Ligações</label>
			<textarea id="clink" style="width:295px;resize:none;"></textarea>
			<label for="cdef">Defeitos</label>
			<textarea id="cdef" style="width:295px;resize:none;"></textarea>
		</div>
		<div class="col-md-3">
			<label for="carhab">Caracteristicas e Habilidades</label>
			<textarea id="carhab"></textarea>
		</div>
		<div class="col-md-3">
			<label for="calliance">Aliados e Organizações</label>
			<textarea id="calliance"></textarea>
		</div>
	</div>
</div>