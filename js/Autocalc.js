function ExectCalc(sys,type,dtfrom,dtto){
	//Systema de aplicação
	switch(sys){
		case "dnd":
		//Tipo de Resolução necessaria (Modificador, Proficiencia, Outros)
			switch(type){
				case "mod":
					document.getElementById(dtto).value = DnDHabmod(document.getElementById(dtfrom).value);
				break;
				case "prof":
					document.getElementById(dtto).value = DnDProficiency(document.getElementById(dtfrom).value);
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