//ExectCalc(sys = Sistema Utilizado, dtfrom = Origem do Dado, dtto = Local de Recebimento do Dado, dtex = Dado extra para o cauculo
function ExectCalc(sys,type,dtfrom,dtto,dtex1,dtex2){
	//Systema de aplicação
	switch(sys){
		case "dnd":
		//Tipo de Resolução necessaria (Modificador, Proficiencia, Outros)
			switch(type){
				//Recebendo "mod" como parametro, ira ser executado o cauculo e o retorno do Modificador
				case "mod":
					document.getElementById(dtto).value = DnDHabmod(document.getElementById(dtfrom).value);
				break;
				//Recebendo "prof" como parametro, ira ser executado o cauculo e o retorno da Proficiencia
				case "prof":
					document.getElementById(dtto).value = DnDProficiency(document.getElementById(dtfrom).value);
				break;
				//Recebendo "prof" como parametro, ira ser executado o cauculo e o retorno da Proficiencia
				case "doub":
					var x = parseInt(document.getElementById(dtto).value);
					var y = parseInt(document.getElementById(dtex2).value);				
					if(document.getElementById(dtfrom).checked == true){
						if(document.getElementById(dtex1).checked == true){
							document.getElementById(dtto).value = (x-y)+(y*2);
						}else{
							document.getElementById(dtto).value = x;
						}
					}else{
						if(document.getElementById(dtex1).checked == true){
							document.getElementById(dtto).value = x-y;
						}else{
							document.getElementById(dtto).value = x;
						}
					}
				break;
				//Recebendo "per" como parametro, ira ser executado o cauculo e o retorno do Pericias
				case "per":
				var x = parseInt(document.getElementById(dtfrom).value);
				var y = parseInt(document.getElementById(dtex2).value);
					if(document.getElementById(dtex1).checked == true){
						document.getElementById(dtto).value = x+y;
					}else{
						document.getElementById(dtto).value = x-y;
					}
				break;
				case "dis":
				var x = document.getElementsByClassName(dtto).length;
				Dnddistribution(dtto,x,dtfrom,dtex1);
				break;
			}
			break;
		default:
			break;
	}
	return;
}
//Calculos Dungeons & Dragons
//Faz o calculo de Modificador com base no valor @dtfrom
function DnDHabmod(hab){
	var vh;
	if(hab <=1){
		vh = "-5";
	}else if(hab == 2 || hab <= 3){
		vh = "-4";
	}else if(hab == 4 || hab <= 5){
		vh = "-3";
	}else if(hab == 6 || hab <= 7){
		vh = "-2";
	}else if(hab == 8 || hab <= 9){
		vh = "-1";
	}else if(hab == 10 || hab <= 11){
		vh = "0";
	}else if(hab == 12 || hab <= 13){
		vh = "1";
	}else if(hab == 14 || hab <= 15){
		vh = "2";
	}else if(hab == 16 || hab <= 17){
		vh = "3";
	}else if(hab == 18 || hab <= 19){
		vh = "4";
	}else if(hab == 20 || hab <= 21){
		vh = "5";
	}else if(hab == 22 || hab <= 23){
		vh = "6";
	}else if(hab == 24 || hab <= 25){
		vh = "7";
	}else if(hab == 26 || hab <= 27){
		vh = "8";
	}else if(hab == 28 || hab <= 29){
		vh = "9";
	}else if(hab >= 30){
		vh = "10";
	}
	return vh;
}
//Faz o calculo de Proficiencia com base na Variavel @level
function DnDProficiency(level){
	var pro;
	if (level == 1 || level <= 4){
		pro = 2;
	}else if(level == 5 || level <= 8){
		pro = 3;
	}else if(level == 9 || level <= 12){
		pro = 4;
	}else if(level == 13 || level <= 16){
		pro = 5;
	}else if(level >= 17){
		pro = 6;
	}
	return pro;
}
//
function Dnddistribution(hab,length,dtfrom,prof){
	var i;
	var res;
	for(i=0;i < length; i++){
	var check	= document.getElementsByClassName(hab)[i].id;
	
	var checkid = document.getElementById(check).id.replace("m", "");
	
	var checkiddouble = document.getElementById(check).id.replace("m", "d");
	try{
		var checkBox = document.getElementById(checkid).checked;	
		var checkBoxdouble = document.getElementById(checkiddouble).checked;
	}
	catch{
		
	}
	var x = parseInt(DnDHabmod(document.getElementById(dtfrom).value));
	var y = parseInt(document.getElementById(prof).value);
		if(checkBox == true){
			if(checkBoxdouble == true){
				res= document.getElementsByClassName(hab)[i].value = x+(y*2);
			}else{
				res= document.getElementsByClassName(hab)[i].value = x+y;
			}
			
		}else{
			if(checkBoxdouble == true){
				res= document.getElementsByClassName(hab)[i].value = x;
			}else{
			res= document.getElementsByClassName(hab)[i].value = x;	
			}
		}
	}
	
	return res;
}

function magicsbox(nivel){
	var me = apenasNumeros(nivel) ;
	mg[me];
	var newbox = document.getElementById(nivel);
	newbox.innerHTML += "<input type='text' id='nv"+me+"hab"+mg[me]+"name' class='mgname' placeholder='Nome da Magia'><a data-toggle='collapse' href='#nv"+me+"hab"+mg[me]+"' role='button' aria-expanded='false' aria-controls='multiCollapseExample1' class='mgconfig'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-gear-fill' viewBox='0 0 16 16'><path d='M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z'/></svg></a><div class='collapse multi-collapse mgcollapse' id='nv"+me+"hab"+mg[me]+"'><label for='nv"+me+"hab"+mg[me]+"dano' class='mglabel'>Dano:</label><input type='text' id='nv"+me+"hab"+mg[me]+"dano' class='mgtext'><label for='nv"+me+"hab"+mg[me]+"type' class='mglabel'>Tipo:</label><input type='text' id='nv"+me+"hab"+mg[me]+"type' class='mgtext'><label for='nv"+me+"hab"+mg[me]+"exdano' class='mglabel'>Dano Adicional:</label><input type='text' id='nv"+me+"hab"+mg[me]+"exdano' class='mgtext'><label for='nv"+me+"hab"+mg[me]+"exType' class='mglabel'>Tipo Adicional:</label><input type='text' id='nv"+me+"hab"+mg[me]+"exType' class='mgtext'><label for='nv"+me+"hab"+mg[me]+"desc' class='mglabel'>Descrição:</label><textarea type='text' id='nv"+me+"hab"+mg[me]+"desc' class='mgtext'></textarea></div>";
	mg[me]++;
}
function apenasNumeros(string) {
	var numsStr = string.replace(/[^0-9]/g,'');					
	return parseInt(numsStr);
}