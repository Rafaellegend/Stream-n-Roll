var magsarr = [];
$(document).ready(function(){
	var start = 0;
	var mesa = getCookie('idMesa');
	var from = getCookie('idUser');
		loadSheet();
			console.log(
				'portrait:'+$('#portrait').attr('src') 
			);
			console.log(getCookie('idMesa'));
			$('#formsheet').submit(function(e){
				console.log('foi enviado');
				var action = 'sheet';
				e.preventDefault();
				for(n = 0; n < 10; n++){
					magsarr[n] = (document.getElementById("list"+n).childElementCount /3)
				}
				$.post('./?page=submit', {
					//Informações importantes
					from: from,
					mesa: mesa,
					//Ação do submit
					action: 'sheet',
					//src da foto
					cphoto: $('#portrait').attr('src'),
				//Informações da ficha
					idsheet: $('#idficha').val(),
					nmesa: $('#nmesa').val(),
					//mesa: $('#idmesa').val(),
				//Informações do personagem
					//nome
					cname: $('#cname').val(),
					//classe
					cclass: $('#cclass').val(),
					//nivel
					clevel: $('#clevel').val(),
					//Antecedentes:
					cback: $('#cback').val(),
					//Raça
					cfolk: $('#cfolk').val(),
					//Tendência
					calign: $('#calign').val(),
					//XP
					cxp: $('#cxp').val(),
				//Detalhes do Personagem
					//Idade
					cage: $('#cage').val(),
					//Altura
					cheight: $('#cheight').val(),
					//Peso
					cweight: $('#cweight').val(),
					//Olhos
					ceyes: $('#ceyes').val(),
					//Pele
					cskin: $('#cskin').val(),
					//Cabelo
					chair: $('#chair').val(),
				//Habilidades
					//Força
					cstr: $('#cstr').val(),
					//Destreza
					cdex: $('#cdex').val(),
					//Constituição
					ccon: $('#ccon').val(),
					//Inteligencia
					cint: $('#cint').val(),
					//Sabedoria
					cwis: $('#cwis').val(),
					//Casrisma
					ccar: $('#ccar').val(),
				//Teste de Resistência
					//Resistência Força
					ctstr: $('#ctstr').prop('checked'),
					//Resistência Destreza
					ctdex: $('#ctdex').prop('checked'),
					//Resistência Constituição
					ctcon: $('#ctcon').prop('checked'),
					//Resistência Inteligencia
					ctint: $('#ctint').prop('checked'),
					//Resistência Sabedoria
					ctwis: $('#ctwis').prop('checked'),
					//Resistência Casrisma
					ctcar: $('#ctcar').prop('checked'),
				//Proficiência
					cpro: $('#cpro').prop('checked'),
				//Pericias
					//pro
					cacrbt: $('#cacrbt').prop('checked'),// Acrobacia
					canl: $('#canl').prop('checked'),    // Lidar com animais
					carc: $('#carc').prop('checked'),    // Arcanismo
					catl: $('#catl').prop('checked'),    // Atletismo
					cperf: $('#cperf').prop('checked'), // Atuação
					cdec: $('#cdec').prop('checked'),    // Enganação
					csth: $('#csth').prop('checked'),    // Furtividade
					chis: $('#chis').prop('checked'),    // História
					cintm: $('#cintm').prop('checked'),  // Intimidação
					cins: $('#cins').prop('checked'),    // Intuição
					cinv: $('#cinv').prop('checked'),    // Investigação
					cmed: $('#cmed').prop('checked'),    // Medicina
					cnat: $('#cnat').prop('checked'),    // Natureza
					cper: $('#cper').prop('checked'),    // Percepção
					cpers: $('#cpers').prop('checked'),  // Persuasão
					csli: $('#csli').prop('checked'),    // Prestidigitação
					crel: $('#crel').prop('checked'),    // Religião
					csur: $('#csur').prop('checked'),    // Sobrevivencia
					//double
					cdacrbt: $('#cdacrbt').prop('checked'),
					cdanl: $('#cdanl').prop('checked'),
					cdarc: $('#cdarc').prop('checked'),
					cdatl: $('#cdatl').prop('checked'),
					cdperf: $('#cdperf').prop('checked'),
					cddec: $('#cddec').prop('checked'),
					cdsth: $('#cdsth').prop('checked'),
					cdhis: $('#cdhis').prop('checked'),
					cdintm: $('#cdintm').prop('checked'),
					cdins: $('#cdins').prop('checked'),
					cdinv: $('#cdinv').prop('checked'),
					cdmed: $('#cdmed').prop('checked'),
					cdnat: $('#cdnat').prop('checked'),
					cdper: $('#cdper').prop('checked'),
					cdpers: $('#cdpers').prop('checked'),
					cdsli: $('#cdsli').prop('checked'),
					cdrel: $('#cdrel').prop('checked'),
					cdsur: $('#cdsur').prop('checked'),
				//Informações Importantes
					//Vida
					catualhp: $('#catualhp').val(),
					cmaxhp: $('#cmaxhp').val(),
					catemphp: $('#catemphp').val(),
					//Iniciativa
					cinit: $('#cinit').val(),
					//Armadura
					cca: $('#cca').val(),
					//Deslocamento
					cmov: $('#cmov').val(),
					//Dado de Vida
					clifedice: $('#clifedice').val(),
				//Equipamentos
					//textarea
					equip: $('#equip').val(),
					//monetary
					pc:$('#pc').val(),
					pp:$('#pp').val(),
					pe:$('#pe').val(),
					po:$('#po').val(),
					pl:$('#pl').val(),
				//Detalhes
					//Idioma e outras Proeficiencias
					langprof: $('#langprof').val(),
					//História
					cstorie: $('#cstorie').val(),
					//Traços de Personalidade
					cperso: $('#cperso').val(),
					//Ideais
					cide: $('#cide').val(),
					//Ligações
					clink: $('#clink').val(),
					//Defeito
					cdef: $('#cdef').val(),
					//Aliados e Organizações
					calliance: $('#calliance').val(),
					//Caracteristicas e Habilidades
					carhab: $('#carhab').val(),
				//Anotações
					//Diario
					notes: $('#notes').val(),
					//Tesouro
					treasures: $('#treasures').val(),
				//Informações de Conjuração
					//Classe de Conjuração
					cconjclass: $('#cconjclass').val(),
					keyhab: $('#keyhab').val(),
					cdtr: $('#cdtr').val(),
					mbonus: $('#mbonus').val(),
				//Ataques
					atks: (document.getElementById("atksbox").childElementCount /4),	
					atksinfo : countatk(atks),
				//Espaços de Magias
					//nv0
					mag0max: $('#mag0max').val(),
					mag0atl: $('#mag0atl').val(),
					//nv1
					mag1max: $('#mag1max').val(),
					mag1atl: $('#mag1atl').val(),
					//nv2
					mag2max: $('#mag2max').val(),
					mag2atl: $('#mag2atl').val(),
					//nv3
					mag3max: $('#mag3max').val(),
					mag3atl: $('#mag3atl').val(),
					//nv4
					mag4max: $('#mag4max').val(),
					mag4atl: $('#mag4atl').val(),
					//nv5
					mag5max: $('#mag5max').val(),
					mag5atl: $('#mag5atl').val(),
					//nv6
					mag6max: $('#mag6max').val(),
					mag6atl: $('#mag6atl').val(),
					//nv7
					mag7max: $('#mag7max').val(),
					mag7atl: $('#mag7atl').val(),
					//nv8
					mag8max: $('#mag8max').val(),
					mag8atl: $('#mag8atl').val(),
					//nv9
					mag9max: $('#mag9max').val(),
					mag9atl: $('#mag9atl').val(),
				//Magias
					//lista 0
					mags0: (document.getElementById("list0").childElementCount /3),	
					//lista 1
					mags1: (document.getElementById("list1").childElementCount /3),	
					//lista 2
					mags2: (document.getElementById("list2").childElementCount /3),	
					//lista 3
					mags3: (document.getElementById("list3").childElementCount /3),	
					//lista 4
					mags4: (document.getElementById("list4").childElementCount /3),	
					//lista 5
					mags5: (document.getElementById("list5").childElementCount /3),	
					//lista 6
					mags6: (document.getElementById("list6").childElementCount /3),
					//lista 7
					mags7: (document.getElementById("list7").childElementCount /3),	
					//lista 8
					mags8: (document.getElementById("list8").childElementCount /3),	
					//lista 9
					mags9: (document.getElementById("list9").childElementCount /3),		
					//
					maginfo: countall(magsarr),
				});
				setTimeout(function(){
				loadSheet();},5)
				return false;
			})
		})
function loadSheet(){
	console.log('from pqp='+from);
	$.get('./?page=submit' + '&start=' + start + '&load=sheet', function(result){		
		if(result.sheet){
			result.sheet.forEach(item =>{
			start = item.id;

				if(item.id_User == from){
//Info importantes
					$('#idficha').val(`${item.id_Ficha}`); // Id da ficha
					$('#nmesa').val(`${item.num_Mesa}`); // Numero na mesa
					$('#idmesa').val(`${item.id_Mesa}`); // Numero na mesa
//Foto de Personagem
					$('#portrait').attr('src', `${item.Aparencia}`);
//Informações do personagem
					$('#cname').val(`${item.nome}`); // Nome
					$('#cclass').val(`${item.classe}`); // Classe
					$('#clevel').val(`${item.nivel}`); // Nivel
					$('#cback').val(`${item.antecedentes}`); // Antecedentes
					$('#cfolk').val(`${item.raca}`); // Raça
					$('#calign').val(`${item.alinhamento}`); // Tendência
					$('#cxp').val(`${item.experiencia}`); // Expêriencia
//Detalhes do Personagem
					$('#cage').val(`${item.idade}`); // Idade
					$('#cheight').val(`${item.altura}`); // Altura
					$('#cweight').val(`${item.peso}`); // Peso
					$('#ceyes').val(`${item.olhos}`); // Olhos
					$('#cskin').val(`${item.pele}`); // Pele
					$('#chair').val(`${item.cabelo}`); // Cabelo
//Habilidades
					$('#cstr').val(`${item.forca}`); // Força
					$('#cdex').val(`${item.destreza}`); // Destreza
					$('#ccon').val(`${item.constituicao}`); // Constituição
					$('#cint').val(`${item.inteligencia}`); // Inteligência
					$('#cwis').val(`${item.sabedoria}`); // Sabedoria
					$('#ccar').val(`${item.carisma}`); // Carisma
//Salvaguardas
					// Força
				if(`${item.res_Forca}` == 1){
					document.getElementById("ctstr").checked = true; 
					}
					// Destresa
				if(`${item.res_Destreza}` == 1){
					document.getElementById("ctdex").checked = true; 
					}
					// Constituição
				if(`${item.res_Constituicao}` == 1){
					document.getElementById("ctcon").checked = true; 
					}
					// Inteligencia
				if(`${item.res_Inteligencia}` == 1){
					document.getElementById("ctint").checked = true; 
					}
					// Sabedoria
				if(`${item.res_Sabedoria}` == 1){
					document.getElementById("ctwis").checked = true; 
					}
					// Carisma
				if(`${item.res_Carisma}` == 1){
					document.getElementById("ctcar").checked = true; 
					}
//Proficiencias
					// Acrobacia
				if(`${item.pro_Acrobacia}` == 1){
					document.getElementById("cacrbt").checked = true; 
					}
					// Adestrar Animais
				if(`${item.pro_Adestrar_Animais}` == 1){
					document.getElementById("canl").checked = true; 
					}
					// Arcanismo
				if(`${item.pro_Arcanismo}` == 1){
					document.getElementById("carc").checked = true; 
					}
					// Atletismo
				if(`${item.pro_Atletismo}` == 1){
					document.getElementById("catl").checked = true; 
					}	
					// Atuação
				if(`${item.pro_Atuacao}` == 1){
					document.getElementById("cperf").checked = true; 
					}
					// Enganação
				if(`${item.pro_Enganacao}` == 1){
					document.getElementById("cdec").checked = true; 
					}
					// Furtividade
				if(`${item.pro_Furtividade}` == 1){
					document.getElementById("csth").checked = true; 
					}
					// Historia
				if(`${item.pro_Historia}` == 1){
					document.getElementById("chis").checked = true; 
					}
					// Intimidação
				if(`${item.pro_Intimidacao}` == 1){
					document.getElementById("cintm").checked = true; 
					}
					// Intuição
				if(`${item.pro_Intuicao}` == 1){
					document.getElementById("cins").checked = true; 
					}
					// Investigação
				if(`${item.pro_Investigacao}` == 1){
					document.getElementById("cinv").checked = true; 
					}
					// Medicina
				if(`${item.pro_Medicina}` == 1){
					document.getElementById("cmed").checked = true; 
					}
					// Natureza
				if(`${item.pro_Natureza}` == 1){
					document.getElementById("cnat").checked = true; 
					}
					// Percepção
				if(`${item.pro_Percepcao}` == 1){
					document.getElementById("cper").checked = true; 
					}
					// Persuasão
				if(`${item.pro_Persuasao}` == 1){
					document.getElementById("cpers").checked = true; 
					}
					// Prestidigitação~
				if(`${item.pro_Prestidigitacao}` == 1){
					document.getElementById("csli").checked = true; 
					}
					// Religião
				if(`${item.pro_Religiao}` == 1){
					document.getElementById("crel").checked = true; 
					}
					// Sobrevivencia
				if(`${item.pro_Sobrevivencia}` == 1){
					document.getElementById("csur").checked = true; 
					}
//Experiente - Dobro Proeficiencias
					// Acrobacia
				if(`${item.dobro_Acrobacia}` == 1){
					document.getElementById("cdacrbt").checked = true; 
					}
					// Adestrar Animais
				if(`${item.dobro_Adestrar_Animais}` == 1){
					document.getElementById("cdanl").checked = true; 
					}
					// Arcanismo
				if(`${item.dobro_Arcanismo}` == 1){
					document.getElementById("cdarc").checked = true; 
					}
					// Atletismo
				if(`${item.dobro_Atletismo}` == 1){
					document.getElementById("cdatl").checked = true; 
					}	
					// Atuação
				if(`${item.dobro_Atuacao}` == 1){
					document.getElementById("cdperf").checked = true; 
					}
					// Enganação
				if(`${item.dobro_Enganacao}` == 1){
					document.getElementById("cddec").checked = true; 
					}
					// Furtividade
				if(`${item.dobro_Furtividade}` == 1){
					document.getElementById("cdsth").checked = true; 
					}
					// Historia
				if(`${item.dobro_Historia}` == 1){
					document.getElementById("cdhis").checked = true; 
					}
					// Intimidação
				if(`${item.dobro_Intimidacao}` == 1){
					document.getElementById("cdintm").checked = true; 
					}
					// Intuição
				if(`${item.dobro_Intuicao}` == 1){
					document.getElementById("cdins").checked = true; 
					}
					// Investigação
				if(`${item.dobro_Investigacao}` == 1){
					document.getElementById("cdinv").checked = true; 
					}
					// Medicina
				if(`${item.dobro_Medicina}` == 1){
					document.getElementById("cdmed").checked = true; 
					}
					// Natureza
				if(`${item.dobro_Natureza}` == 1){
					document.getElementById("cdnat").checked = true; 
					}
					// Percepção
				if(`${item.dobro_Percepcao}` == 1){
					document.getElementById("cdper").checked = true; 
					}
					// Persuasão
				if(`${item.dobro_Persuasao}` == 1){
					document.getElementById("cdpers").checked = true; 
					}
					// Prestidigitação~
				if(`${item.dobro_Prestidigitacao}` == 1){
					document.getElementById("cdsli").checked = true; 
					}
					// Religião
				if(`${item.dobro_Religiao}` == 1){
					document.getElementById("cdrel").checked = true; 
					}
					// Sobrevivencia
				if(`${item.dobro_Sobrevivencia}` == 1){
					document.getElementById("cdsur").checked = true; 
					}
//Informações inportantes
				// Vida Atual
				$('#catualhp').val(`${item.vida_Atual}`); 
				// Vida Maxima
				$('#cmaxhp').val(`${item.vida_Maxima}`); 
				// Vida Temporaria
				$('#catemphp').val(`${item.vida_Temporaria}`);
				// Dado de Vida
				$('#clifedice').val(`${item.dado_Vida}`);
				// Classe de Armadura
				$('#cca').val(`${item.CA}`);
				// Iniciativa
				$('#cinit').val(`${item.iniciativa}`);
				// Deslocamento
				$('#cmov').val(`${item.deslocamento}`);
//Equipamentos e Outras Proeficiencias
				// Idiomas e Proeficiencias
				$('#langprof').text(`${item.proficiencias}`);
				// Equipamentos
				$('#equip').text(`${item.equipamento}`);
				// Peças de Cobre
				$('#pc').val(`${item.pecas_Cobre}`);
				// Peças de Prata
				$('#pp').val(`${item.pecas_Prata}`);
				// Peças de Esmeralda
				$('#pe').val(`${item.pecas_Esmeralda}`);
				// Peças de Ouro
				$('#po').val(`${item.pecas_Ouro}`);
				// Peças de Platina
				$('#pl').val(`${item.pecas_Platina}`);
//Detalhes
				//História
				$('#cstorie').val(`${item.historia}`);
				//Traços de Personalidade
				$('#cperso').val(`${item.tracos}`);
				//Ideais
				$('#cide').val(`${item.ideais}`);
				//Ligações
				$('#clink').val(`${item.vinculos}`);
				//Defeito
				$('#cdef').val(`${item.defeitos}`);
				//Aliados e Organizaçõoes
				$('#calliance').val(`${item.aliados_Organizacoes}`);
				//Caracteristicas
				$('#carhab').val(`${item.caracteristicas}`);
//Anotações
				//Diario
				$('#notes').val(`${item.diario}`);
				//Tesouro
				$('#treasures').val(`${item.tesouro}`);
//Conjuração
				//Classe de Conjuração
				$('#cconjclass').val(`${item.classe_conjuração}`);
				//Habilidades das chaves
				$('#keyhab').val(`${item.hab_chave}`);
				//CD de Resistência
				$('#cdtr').val(`${item.resistencia_Magica}`);
				//Bonus de Ataque
				$('#mbonus').val(`${item.bonus_habMagica}`);
//Espaços de Magias
				//Nivel 1
				$('#mag1max').val(`${item.espacomagia1_max}`);
				$('#mag1atl').val(`${item.espacomagia1_atual}`);
				//Nivel 2
				$('#mag2max').val(`${item.espacomagia2_max}`);
				$('#mag2atl').val(`${item.espacomagia2_atual}`);
				//Nivel 3
				$('#mag3max').val(`${item.espacomagia3_max}`);
				$('#mag3atl').val(`${item.espacomagia3_atual}`);
				//Nivel 4
				$('#mag4max').val(`${item.espacomagia4_max}`);
				$('#mag4atl').val(`${item.espacomagia4_atual}`);
				//Nivel 5
				$('#mag5max').val(`${item.espacomagia5_max}`);
				$('#mag5atl').val(`${item.espacomagia5_atual}`);
				//Nivel 6
				$('#mag6max').val(`${item.espacomagia6_max}`);
				$('#mag6atl').val(`${item.espacomagia6_atual}`);
				//Nivel 7
				$('#mag7max').val(`${item.espacomagia7_max}`);
				$('#mag7atl').val(`${item.espacomagia7_atual}`);
				//Nivel 8
				$('#mag8max').val(`${item.espacomagia8_max}`);
				$('#mag8atl').val(`${item.espacomagia8_atual}`);
				//Nivel 9
				$('#mag9max').val(`${item.espacomagia9_max}`);
				$('#mag9atl').val(`${item.espacomagia9_atual}`);
//Carregar a Ficha
				sheetload();
				}
			})
		};
		if(result.mgatks){
			var i = 1;
			var oldvalue =0;
			var a = document.getElementById("atksbox").childElementCount /4;
			var normalatk =0, magiasnv = [];
			
			result.mgatks.forEach(item =>{
				if(item.tipo == 0){
					normalatk++;
				}else if(item.tipo == 1){
					var inv =item.nivel;
					if(typeof magiasnv[inv] == 'undefined'){
						magiasnv[inv] = 1;
					}else{
						magiasnv[inv]++;	
					}
					//console.log('quantidade de magia'+inv+": "+magiasnv[inv]);
				}
				
			})
			//console.log(normalatk);
			
			result.mgatks.forEach(item =>{
				var tp = `${item.tipo}`;
				var nv = `${item.nivel}`;
				
				//console.log(`${item.nivel}`);
				if(tp == 0){ //ATAQUES
					var tatk = $("#atksbox").children().length;
					if(normalatk == Math.floor(tatk/4) ){distrib();}else{
						//console.log("tatk="+tatk);
						//console.log('atks='+atks+' i='+i);
						//console.log('ataques:'+`${item.nome}`+' atks'+atks+ 'valor antigo'+oldvalue)
						if(atks == 0){atksbox("add");distrib();}else if(atks == i){distrib();}else{
							atksbox("add");
							distrib();
						}
					}
					function distrib(){
						$("#atkid"+i).val(`${item.id_atkmag}`); //id
						$("#atk"+i).val(`${item.nome}`); //nome da habilidade
						
						if(item.dano == null){$('#atkhit'+i+'').val('');}
						else{$('#atkhit'+i+'').val(`${item.dano}`);} //dano
						
						if(item.dano_Tipo == null){$('#atkfx'+i+'').val('');}
						else{$('#atkfx'+i+'').val(`${item.dano_Tipo}`);} //tipo de dano
						
						oldvalue = 3;
						if(atks !=0){i++;}
					}
				}else{ //MAGIAS 
					var tmg = $("#list"+item.nivel).children().length;
					if(oldvalue != nv){
							i = 1;
						}
					if(magiasnv[item.nivel] == tmg/3){
						//console.log('igual');
						distribmg();
					}else{
						//console.log('diferente');
						//console.log('magia'+item.nivel+'='+(tmg/3));
						//console.log(magiasnv[item.nivel]);
						
						console.log("nivel"+nv);
						//console.log(oldvalue+" diferente de "+nv+":"+ (oldvalue != nv));
						//console.log("magiasnv["+item.nivel+"]="+magiasnv[item.nivel]+" + i="+i+":"+(magiasnv[item.nivel] == i));
						if(magiasnv[item.nivel]==i){distribmg();}else{
							var mgnv = "nivel"+nv;
							magicsbox(mgnv,'add');
							distribmg();
							
						}
					}
					function distribmg(){
						$('#nv'+nv+'hab'+i+'id').val(`${item.id_atkmag}`); //id
						$('#nv'+nv+'hab'+i+'name').val(`${item.nome}`); //nome da habilidade
						
						if(item.dano == null){$('#nv'+nv+'hab'+i+'dano').val('');}
						else{$('#nv'+nv+'hab'+i+'dano').val(`${item.dano}`);} //dano
						
						if(item.dano_Tipo == null){$('#nv'+nv+'hab'+i+'type').val('');}
						else{$('#nv'+nv+'hab'+i+'type').val(`${item.dano_Tipo}`);} //tipo de dano
						
						if(item.dano_Extra == null){$('#nv'+nv+'hab'+i+'exdano').val('');}
						else{$('#nv'+nv+'hab'+i+'exdano').val(`${item.dano_Extra}`);} //dano extra
						
						if(item.dano_Extra_Tipo == null){$('#nv'+nv+'hab'+i+'extyp').val('');}
						else{$('#nv'+nv+'hab'+i+'extype').val(`${item.dano_Extra_Tipo}`);} //tipo de dano extra
						
						if(item.descricao == null){$('#nv'+nv+'hab'+i+'desc').val('');}
						else{$('#nv'+nv+'hab'+i+'desc').val(`${item.descricao}`);} //descrição
						i++;
						oldvalue = nv;
					}
				}
			})}
		});
}		

