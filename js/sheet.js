var magsarr = [], url = 'http://localhost:8030/Stream-n-Roll/?page=submit';
$(document).ready(function(){
			load();
			console.log(
				'portrait:'+$('#portrait').attr('src') 
			);
			$('#formsheet').submit(function(e){
				var action = 'sheet';
				e.preventDefault();
				for(n = 0; n < 10; n++){
					magsarr[n] = (document.getElementById("list"+n).childElementCount /3)
				}
				
				console.log('Array:'+magsarr[0]);
				$.post(url, {
					//Ação do submit
					action: action,
					//src da foto
					cphoto: $('#portrait').attr('src'),
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
				//Proficiência
					cpro: $('#cpro').val(),
				//Pericias
					//pro
					cacrbt: $('#cacrbt').val(),
					canl: $('#canl').val(),
					carc: $('#carc').val(),
					catl: $('#catl').val(),
					cperf: $('#cperf').val(),
					cdec: $('#cdec').val(),
					csth: $('#csth').val(),
					chis: $('#chis').val(),
					cintm: $('#cintm').val(),
					cins: $('#cins').val(),
					cinv: $('#cinv').val(),
					cmed: $('#cmed').val(),
					cnat: $('#cnat').val(),
					cper: $('#cper').val(),
					csli: $('#csli').val(),
					//double
					cdacrbt: $('#cdacrbt').val(),
					cdanl: $('#cdanl').val(),
					cdarc: $('#cdarc').val(),
					cdatl: $('#cdatl').val(),
					cdperf: $('#cdperf').val(),
					cddec: $('#cddec').val(),
					cdsth: $('#cdsth').val(),
					cdhis: $('#cdhis').val(),
					cdintm: $('#cdintm').val(),
					cdins: $('#cdins').val(),
					cdinv: $('#cdinv').val(),
					cdmed: $('#cdmed').val(),
					cdnat: $('#cdnat').val(),
					cdper: $('#cdper').val(),
					cdsli: $('#cdsli').val(),
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
				//História
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
					atks: (document.getElementById("atksbox").childElementCount /3),	
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
				return false;
			})
		})	
