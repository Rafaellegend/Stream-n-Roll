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
function atksbox(action){
	var newbox = document.getElementById("atksbox");
	
	if(action == "load"){
		var childs = newbox.childElementCount;
		var childx = childs;
		console.log(atks+"atksbox \n")
		if(atks*4 > childs ){
			var x = (atks*4) - childs;
			if(x == childx ){
			}else{
				for(y = childs; y < (atks*4); y+=4){
					addatkBox("atksbox",'text','atkid'+(y/4),'','','','hidden');
					addatkBox("atksbox",'text','atk'+(y/4),'atkline','atktitle','Nome Arma');
					addatkBox("atksbox",'text','atkhit'+(y/4),'atkline','','Dano');
					addatkBox("atksbox",'text','atkfx'+(y/4),'atkline','','Tipo de Dano');
					var childs = newbox.childElementCount;									
				}
			}
			
		}else{
			
		}
	}else if(action == "add"){
		atks++;
		console.log(atks);
			addatkBox("atksbox",'text','atkid'+atks,'','','','hidden');
			addatkBox("atksbox",'text','atk'+atks,'atkline','atktitle','Nome Arma');
			addatkBox("atksbox",'text','atkhit'+atks,'atkline','','Dano');
			addatkBox("atksbox",'text','atkfx'+atks,'atkline','','Tipo de Dano');
		var childs = newbox.childElementCount;
		
	}
}
//Função para adicionar caixa de ataques
function addatkBox(to,type,id,cla1,cla2,placeholder,hidden) {
	var textEl = document.getElementById(to);
	var input = document.createElement("input");
	input.type = type;
	input.id = id;
	if (cla1 != '') {
	input.classList.add(cla1);
	}else{}
	if (cla2 != '') {
		input.classList.add(cla2);
	}else{}
	if (hidden != null) {
		input.setAttribute("hidden",true);
	}else{}
	input.placeholder = placeholder;

	textEl.appendChild(input);
}
//Função para adicionar caixa de titulo da magia
function addmgtitle(to,type,id,cla1,cla2,cla3,placeholder){
	var textEl = document.getElementById(to);
	var input = document.createElement("input");
	input.type = type;
	input.id = id;
	input.classList.add(cla1);
	if (cla2 == 'undefined') {
		input.classList.add(cla2);
	}else{}
	
	input.placeholder = placeholder;

	textEl.appendChild(input);
}
//Função para adicionar caixa de informações dos ataques
function addmgbox(to,type,id,cla1,cla2,cla3,placeholder){
	var textEl = document.getElementById(to);
	if(type == "div"){ //div
	
		var newelement = document.createElement("div");
		newelement.id = id;
		if (cla1 != '') {
			newelement.classList.add(cla1);
		}
		if (cla2 != '') {
			newelement.classList.add(cla2);
		}
		if (cla3 != '') {
			newelement.classList.add(cla3);
		}
		
	}else if(type == "textarea"){//textarea
	
		var newelement = document.createElement("textarea");
		newelement.id = id;
		if (cla1 != '') {
		newelement.classList.add(cla1);
		}
		if (cla2 != '') {
			newelement.classList.add(cla2);
		}
		if (cla3 != '') {
			newelement.classList.add(cla3);
		}
		
	}else if(type == "label"){//label
		
		var newelement = document.createElement("label");
		newelement.type = type;
		newelement.setAttribute("for",id);
		if (cla1 != '') {
		newelement.classList.add(cla1);
		}
		newelement.textContent=cla2;

		if (cla3 != '') {
			newelement.classList.add(cla3);
		}
		
	}	
	else if(type == "hidden"){//input
		
		var newelement = document.createElement("input");
		newelement.type = 'text';
		newelement.id = id;
		newelement.setAttribute("hidden",true);
		if (cla1 != '') {
		newelement.classList.add(cla1);
		}
		if (cla2 != '') {
			newelement.classList.add(cla2);
		}

		if (cla3 != '') {
			newelement.classList.add(cla3);
		}
		
	}else{//input
		
		var newelement = document.createElement("input");
		newelement.type = type;
		newelement.id = id;
		if (cla1 != '') {
		newelement.classList.add(cla1);
		}
		if (cla2 != '') {
			newelement.classList.add(cla2);
		}
		if (cla3 != '') {
			newelement.classList.add(cla3);
		}
		
	}
	
	
	newelement.placeholder = placeholder;

	textEl.appendChild(newelement);
}
//Função para criar um arquivo svg com link
function addsvgbotton(to,code,id,cla1,cla2,cla3,width,height,viewbox,fill,action){
	//pegando o elemento pela id recebida pela variavel 'to'
	var textEl = document.getElementById(to);
	//Criando a tag 'svg'
	var svg = document.createElementNS("http://www.w3.org/2000/svg","svg");
	svg.classList.add(cla1);
	if (cla2 == 'undefined') {
		svg.classList.add(cla2);
	}
	if (cla3 == 'undefined') {
		svg.classList.add(cla3);
	}
	svg.setAttribute("width",width);
	svg.setAttribute("height",height);
	svg.setAttribute("fill",fill);
	svg.setAttribute("viewbox",viewbox);
	
	//Criando a tag 'path' do 'svg'
	var path = document.createElementNS("http://www.w3.org/2000/svg", "path");
	path.setAttribute("d",code); //Set path's data

	//Criando a tag 'a'
	var a = document.createElement('a');
	
		a.setAttribute("data-toggle","collapse");
		a.setAttribute("href","#nv"+id+"hab"+mg[id]);
		a.setAttribute("role","button");
		a.setAttribute("aria-expanded","false");
		a.setAttribute("aria-controls","multiCollapse");
		a.classList.add("mgconfig");
	
	//Criando o Elemento child
	textEl.appendChild(a).appendChild(svg).appendChild(path);
}

function magicsbox(nivel,action){
	var me = apenasNumeros(nivel) ;
	mg[me];
	var newbox = document.getElementById(nivel);
	var path = 'M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z';
	var childs = document.getElementById('list'+me).childElementCount;
	
	if(action == 'add'){
		//adicionar mais um no valor
		mg[me]++;
		
		addmgtitle('list'+me,'text','nv'+me+'hab'+mg[me]+'name','mgname','','','Nome da Magia');
		//criando o botão
		addsvgbotton('list'+me,path,me,'bi','bi-gear-fill','','16','16','0 0 16 16','currentColor');
		//criando a div 
		addmgbox('list'+me,'div','nv'+me+'hab'+mg[me],'collapse','multi-collapse','mgcollapse','','');
		//input hidden para guardar o id
		addmgbox('nv'+me+'hab'+mg[me],'hidden','nv'+me+'hab'+mg[me]+'id','','','','');
		//criando a label para o dano
		addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'dano','mglabel','Dano:','','')
		//criando o input para o dano
		addmgbox('nv'+me+'hab'+mg[me],'text','nv'+me+'hab'+mg[me]+'dano','mgtext','','','')
		//criando a label para o tipo
		addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'type','mglabel','Tipo:','','')
		//criando o input para o tipo
		addmgbox('nv'+me+'hab'+mg[me],'text','nv'+me+'hab'+mg[me]+'type','mgtext','','','')
		//criando a label para o extra
		addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'exdano','mglabel','Dano Extra:','','')
		//criando o input para o extra
		addmgbox('nv'+me+'hab'+mg[me],'text','nv'+me+'hab'+mg[me]+'exdano','mgtext','','','')
		//criando a label para o tipo extra
		addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'extype','mglabel','Tipo Adicional:','','')
		//criando o input para o tipo extra
		addmgbox('nv'+me+'hab'+mg[me],'text','nv'+me+'hab'+mg[me]+'extype','mgtext','','','')
		//criando a label para descrição
		addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'desc','mglabel','Descrição:','','')
		//criando o input para descrição
		addmgbox('nv'+me+'hab'+mg[me],'textarea','nv'+me+'hab'+mg[me]+'desc','mgtext','','','')
	
		
		var childs = document.getElementById('list'+me).childElementCount;
	}else if(action == 'load'){
		var childx = childs + 1;
		var n = 0;
		var com;
		while (n <= mg[me]) {
		  if(mg[me] == 1){
			com = mg[me]*3;
		  }else{
			com = com+3;
		  }
		  n++;
		  
		};
		if(com > childs){
			var x = com - childs;
			if(x == childs){
			}else{
				for(y = childs; y < com; y+=3){
					addmgtitle('list'+me,'text','nv'+me+'hab'+mg[me]+'name','mgname','','','Nome da Magia');
					//criando o botão
					addsvgbotton('list'+me,path,me,'bi','bi-gear-fill','','16','16','0 0 16 16','currentColor');
					//criando a div 
					addmgbox('list'+me,'div','nv'+me+'hab'+mg[me],'collapse','multi-collapse','mgcollapse','','');
					//input hidden para guardar o id
					addmgbox('nv'+me+'hab'+mg[me],'hidden','nv'+me+'hab'+mg[me]+'id','','','','');
					
					//criando a label para o dano
					addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'dano','mglabel','Dano:','','')
					//criando o input para o dano
					addmgbox('nv'+me+'hab'+mg[me],'text','nv'+me+'hab'+mg[me]+'dano','mgtext','','','')
					//criando a label para o tipo
					addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'type','mglabel','Tipo:','','')
					//criando o input para o tipo
					addmgbox('nv'+me+'hab'+mg[me],'text','nv'+me+'hab'+mg[me]+'type','mgtext','','','')
					//criando a label para o extra
					addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'exdano','mglabel','Dano Extra:','','')
					//criando o input para o extra
					addmgbox('nv'+me+'hab'+mg[me],'text','nv'+me+'hab'+mg[me]+'exdano','mgtext','','','')
					//criando a label para o tipo extra
					addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'extype','mglabel','Tipo Adicional:','','')
					//criando o input para o tipo extra
					addmgbox('nv'+me+'hab'+mg[me],'text','nv'+me+'hab'+mg[me]+'extype','mgtext','','','')
					//criando a label para descrição
					addmgbox('nv'+me+'hab'+mg[me],'label','nv'+me+'hab'+mg[me]+'desc','mglabel','Descrição:','','')
					//criando o input para descrição
					addmgbox('nv'+me+'hab'+mg[me],'textarea','nv'+me+'hab'+mg[me]+'desc','mgtext','','','')
					//adicionar mais um no valor
					var childs = document.getElementById('list'+me).childElementCount;
					//mg[me]++;
				}
				
			}
		}
	}	
}
function apenasNumeros(string) {
	var numsStr = string.replace(/[^0-9]/g,'');					
	return parseInt(numsStr);
}

function countatk(ele){
	var arr = [];
	console.log(ele);
	for(n = 1; n <= ele; n++){
		arr[n] = [
		['atkid', document.getElementById("atkid"+n).value],
		['atk', document.getElementById("atk"+n).value],
		['atkhit', document.getElementById("atkhit"+n).value],
		['atkfx', document.getElementById("atkfx"+n).value]
		];
	}
	return arr;
}
function countmag(nv,ele){
	var arr = [];
	for(n = 1; n <= ele; n++){
	arr[n] = [
		['habid', document.getElementById('nv'+nv+'hab'+n+'id').value],
		['habname', document.getElementById('nv'+nv+'hab'+n+'name').value],
		['habdano', document.getElementById('nv'+nv+'hab'+n+'dano').value],
		['habtype', document.getElementById('nv'+nv+'hab'+n+'type').value],
		['habexdano', document.getElementById('nv'+nv+'hab'+n+'exdano').value],
		['habextype', document.getElementById('nv'+nv+'hab'+n+'extype').value],
		['habedesc', document.getElementById('nv'+nv+'hab'+n+'desc').value]
	];
		//arr[n]['habname'] = document.getElementById('nv'+nv+'hab'+n+'name').value;
		//arr[n]['habdano'] = document.getElementById('nv'+nv+'hab'+n+'dano').value;
		//arr[n]['habtype'] = document.getElementById('nv'+nv+'hab'+n+'type').value;
		//arr[n]['habexdano'] = document.getElementById('nv'+nv+'hab'+n+'exdano').value;
		//arr[n]['habextype'] = document.getElementById('nv'+nv+'hab'+n+'extype').value;
		//arr[n]['habedesc'] = document.getElementById('nv'+nv+'hab'+n+'desc').value;
	//console.log(arr[n][n]);
	}
	return arr;
}
function countall(ele){
	var arr = [];
	for(m = 0; m < ele.length; m++){
		arr[m] = countmag(m,ele[m]);
	}
	console.log('countall('+ele+'):'+arr[0][1][0][1]);
	return arr;
}