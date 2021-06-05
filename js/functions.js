function readURL(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+id).attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function Roll(d,Atr1,Atr2,Atr3,pos){
	var r = (Math.floor(Math.random() * d) + 1) + Atr1 + Atr2 + Atr3;
	var Res = document.getElementById(pos).innerHTML = r;
	return Res;
}

function rolldice(strd) {
	var d = apenasNumeros(strd);
	var r = Math.floor(Math.random() * (d - 1) + 1);
	return r;
}
//Cookie JS
function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
		c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}
function deleteCookie(cname){
	var name = cname + "=";
	document.cookie = name+"; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}
// Criar ID
function makeid(length) {
    var result           = [];
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result.push(characters.charAt(Math.floor(Math.random() * 
 charactersLength)));
   }
   return result.join('');
}
//Animações de barra : AniBar(Id da tag, Posição Atual, Posição Final)
function AniBar(eid,apos,fpos) {
	var elem = document.getElementById(eid);   
	var pos = apos;
	clearInterval(id);	
	var id = setInterval(frame, 5);
	function frame() {
		if (pos == fpos) {
			clearInterval(id);
		}else if(pos+1 < fpos) {
			pos++; 
			elem.style.width = pos + "px";
		}else if(pos-1 > fpos){
			pos--;
			elem.style.width = pos + "px";
		}
	}
}
function r3(max,want){
	var r =  parseInt(max)*want/100;
	return r;
}

function chatload(to){
	if(typeof chatopen == 'undefined'){
		var room = 'Publico';
		var doc = document.getElementById(to);
		console.log(to);
		doc.innerHTML = room;
	}else{
	}
}
//
	function addelement(to,n){
		var textEl = document.getElementById(to);
		// div player
		var divout = document.createElement("div");
		divout.id = "p"+n;
		divout.classList.add("player");
		// div internas
		var div1 = document.createElement("div");
		div1.classList.add("pwebcam");
			
		var div2 = document.createElement("div");
		div2.classList.add("pportrait");
			
		var div3 = document.createElement('div');
		div3.classList.add('pname');
			
		var div4 = document.createElement('div');
		div4.classList.add('php');
			
		var div5 = document.createElement('div');
		div5.classList.add('pdados');
			
		
		textEl.appendChild(divout).appendChild(div1);
		textEl.appendChild(divout).appendChild(div2);
		textEl.appendChild(divout).appendChild(div3);
		textEl.appendChild(divout).appendChild(div4);
		textEl.appendChild(divout).appendChild(div5);
	}
	function creatplayer(pnum,type){
		console.log('pnum'+pnum+' type'+type)
		for(i = 1; i <= pnum; i++){
			addelement('lplayers',i);
			playatrb(i,'pname',"Desconhecido");
			playatrb(i,'php',"<p>0/0</p>");
			playatrb(i,'pdados',"<p id='p"+i+"dice'>20</p>");
		}
		playercss(pnum,type);
	}
	function playatrb(n,cls,value){
		var textEl = document.getElementById('p'+n);
		var pname = textEl.getElementsByClassName(cls);
		pname[0].innerHTML= value;
		
	}
	function playercss(pnum,type){
		switch(type){
			case 'full':
				switch(pnum){
					case  6:
					var vau = 630;
						var gap = 320;
						var tp1 = 50;
						var tp2 = 50;
						var last = vau;
						//player webcam
						for(i = 1; i <= pnum; i++){
							var ele = document.getElementById('p'+i);
							var webcam = document.getElementsByClassName('pwebcam');
							webcam[i-1].style.height = '300px';
							console.log('height p'+i+':'+webcam[i-1].style.height);
							if(i <= Math.round(pnum/2)+1){
								ele.style.left = last+'px';
								ele.style.top = '730px';
								last = last+gap;
							}else if(i >= Math.round(pnum/2) & i <= pnum-2){
								ele.style.top = tp1+'px';
								ele.style.left = last-(gap*2)+'px';
								tp1 = tp1 + 340;
							}else{
								ele.style.top = tp2+'px';
								ele.style.left = last-gap+'px';
								tp2 = tp2 + 340;
							}
							//infos player webcam
							var elecls = document.getElementsByClassName('pname');
							elecls[i-1].style.width = '268px';
							elecls[i-1].style.height = '30px';
							elecls[i-1].style.marginTop = '-30px';
							elecls[i-1].style.bottom = '42px';			
							elecls[i-1].style.left = '6px';
							//elecls[i-1].style.backgroundColor = 'green';						
							
							var elecls = document.getElementsByClassName('php');
							elecls[i-1].style.width = '268px';
							elecls[i-1].style.height = '30px';
							elecls[i-1].style.marginTop = '-30px';
							elecls[i-1].style.bottom = '6px';						
							elecls[i-1].style.left = '6px';						
							elecls[i-1].style.backgroundColor = 'red';		
							
							//dado
							var elecls = document.getElementsByClassName('pdados');
							elecls[i-1].style.width = '80px';
							elecls[i-1].style.height = '80px';
							elecls[i-1].style.bottom = '42px';						
							elecls[i-1].style.marginTop = '-80px';						
							elecls[i-1].style.left = '194px';
							//Valor Dado
							var eleid = document.getElementById('p'+i+'dice');
							eleid.style.bottom = '-10px';
							eleid.style.left = '0px';
							eleid.style.zIndex = '9999';
							eleid.style.fontSize = '40px';
							eleid.style.color = '#fff';
							eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';
							
							//portrait
							var elecls = document.getElementsByClassName('pportrait');
							elecls[i-1].style.width = '120px';
							elecls[i-1].style.height = '120px';
							elecls[i-1].style.marginTop = '-120px';
							elecls[i-1].style.bottom = '36px';						
							elecls[i-1].style.left = '154px';					
						}
										
						
						//master webcam
						var elecls = document.getElementsByClassName('master');
						elecls[0].style.top = '730px';
						var elecls = document.getElementsByClassName('mwebcam');
						elecls[0].style.height = '300px';
						elecls[0].style.width = '540px';
						//master dice
						var elecls = document.getElementsByClassName('mdados');
						elecls[0].style.height = '100px';
						elecls[0].style.width = '100px';
						elecls[0].style.marginTop = '-100px';						
						elecls[0].style.bottom = '12px';						
						elecls[0].style.left = '435px';
						var eleid = document.getElementById('mdice');
						eleid.style.bottom = '0px';
						eleid.style.left = '0px';
						eleid.style.zIndex = '9999';
						eleid.style.fontSize = '60px';
						eleid.style.color = '#fff';
						eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';	
						
						//mapa
						var elecls = document.getElementsByClassName('maps');
						elecls[0].style.left = '370px';
						elecls[0].style.width = '1180px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'visible';
						
						//info
						var elecls = document.getElementsByClassName('infos');
						elecls[0].style.top = '50px';
						elecls[0].style.width = '280px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'visible';
					break;
					case 8:
						var vau = 630;
						var gap = 320;
						var tp1 = 50;
						var tp2 = 50;
						var last = vau;
						//player webcam
						for(i = 1; i <= pnum; i++){
							var ele = document.getElementById('p'+i);
							var webcam = document.getElementsByClassName('pwebcam');
							webcam[i-1].style.height = '300px';
							console.log('height p'+i+':'+webcam[i-1].style.height);
							if(i <= Math.round(pnum/2)){
								ele.style.left = last+'px';
								ele.style.top = '730px';
								last = last+gap;
							}else if(i >= Math.round(pnum/2) & i <= pnum-2){
								ele.style.top = tp1+'px';
								ele.style.left = last-(gap*2)+'px';
								tp1 = tp1 + 340;
							}else{
								ele.style.top = tp2+'px';
								ele.style.left = last-gap+'px';
								tp2 = tp2 + 340;
							}
							//infos player webcam
							var elecls = document.getElementsByClassName('pname');
							elecls[i-1].style.width = '268px';
							elecls[i-1].style.height = '30px';
							elecls[i-1].style.marginTop = '-30px';
							elecls[i-1].style.bottom = '36px';			
							elecls[i-1].style.left = '6px';
							//elecls[i-1].style.backgroundColor = 'green';	
							
							//barra de vida
							var elecls = document.getElementsByClassName('php');
							elecls[i-1].style.width = '268px';
							elecls[i-1].style.height = '30px';
							elecls[i-1].style.marginTop = '-30px';
							elecls[i-1].style.bottom = '6px';						
							elecls[i-1].style.left = '6px';						
							elecls[i-1].style.backgroundColor = 'red';	
							
							//dados
							var elecls = document.getElementsByClassName('pdados');
							elecls[i-1].style.width = '80px';
							elecls[i-1].style.height = '80px';
							elecls[i-1].style.bottom = '42px';						
							elecls[i-1].style.marginTop = '-80px';						
							elecls[i-1].style.left = '194px';
							//Valor Dado
							var eleid = document.getElementById('p'+i+'dice');
							eleid.style.bottom = '-10px';
							eleid.style.left = '0px';
							eleid.style.zIndex = '9999';
							eleid.style.fontSize = '40px';
							eleid.style.color = '#fff';
							eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';
							
							//portrait/foto
							var elecls = document.getElementsByClassName('pportrait');
							elecls[i-1].style.width = '120px';
							elecls[i-1].style.height = '120px';
							elecls[i-1].style.marginTop = '-120px';
							elecls[i-1].style.bottom = '36px';						
							elecls[i-1].style.left = '154px';
							
						}
						//master webcam
						var elecls = document.getElementsByClassName('master');
						elecls[0].style.top = '730px';
						var elecls = document.getElementsByClassName('mwebcam');
						elecls[0].style.height = '300px';
						elecls[0].style.width = '540px';
						//master dice
						var elecls = document.getElementsByClassName('mdados');
						elecls[0].style.height = '100px';
						elecls[0].style.width = '100px';
						elecls[0].style.marginTop = '-100px';						
						elecls[0].style.bottom = '12px';						
						elecls[0].style.left = '435px';
						var eleid = document.getElementById('mdice');
						eleid.style.bottom = '-10px';
						eleid.style.left = '0px';
						eleid.style.zIndex = '9999';
						eleid.style.fontSize = '60px';
						eleid.style.color = '#fff';
						eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';	
						
						//mapa
						var elecls = document.getElementsByClassName('maps');
						elecls[0].style.left = '370px';
						elecls[0].style.width = '860px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'visible';
						
						//info
						var elecls = document.getElementsByClassName('infos');
						elecls[0].style.top = '50px';
						elecls[0].style.width = '280px';
						elecls[0].style.height = '640px';						
						elecls[0].style.visibility = 'visible';

					break;
				}
			break;
			case 'map':
				switch(pnum){
					case 6:
						var vau = 630;
						var gap = 320;
						var tp1 = 50;
						var tp2 = 50;
						var last = vau;
						//player webcam
						for(i = 1; i <= pnum; i++){
							var ele = document.getElementById('p'+i);
							var webcam = document.getElementsByClassName('pwebcam');
							webcam[i-1].style.height = '300px';
							webcam[i-1].style.width = '280px';
							
							console.log('height p'+i+':'+webcam[i-1].style.height);
							if(i <= Math.round(pnum/2)+1){
								ele.style.left = last+'px';
								ele.style.top = '730px';
								last = last+gap;
							}else if(i >= Math.round(pnum/2) & i <= pnum-2){
								ele.style.top = tp1+'px';
								ele.style.left = last-(gap*2)+'px';
								tp1 = tp1 + 340;
							}else{
								ele.style.top = tp2+'px';
								ele.style.left = last-gap+'px';
								tp2 = tp2 + 340;
							}
							//infos player webcam
							var elecls = document.getElementsByClassName('pname');
							elecls[i-1].style.width = '268px';
							elecls[i-1].style.height = '30px';
							elecls[i-1].style.marginTop = '-30px';
							elecls[i-1].style.bottom = '42px';			
							elecls[i-1].style.left = '6px';
							//elecls[i-1].style.backgroundColor = 'green';						
							
							//vida
							var elecls = document.getElementsByClassName('php');
							elecls[i-1].style.width = '268px';
							elecls[i-1].style.height = '30px';
							elecls[i-1].style.marginTop = '-30px';
							elecls[i-1].style.bottom = '6px';						
							elecls[i-1].style.left = '6px';						
							elecls[i-1].style.backgroundColor = 'red';						
							
							//dados
							var elecls = document.getElementsByClassName('pdados');
							elecls[i-1].style.width = '80px';
							elecls[i-1].style.height = '80px';
							elecls[i-1].style.bottom = '42px';						
							elecls[i-1].style.marginTop = '-80px';						
							elecls[i-1].style.left = '194px';
							//Valor Dado
							var eleid = document.getElementById('p'+i+'dice');
							eleid.style.bottom = '-10px';
							eleid.style.left = '0px';
							eleid.style.zIndex = '9999';
							eleid.style.fontSize = '40px';
							eleid.style.color = '#fff';
							eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';
							
							//portrait
							var elecls = document.getElementsByClassName('pportrait');
							elecls[i-1].style.width = '120px';
							elecls[i-1].style.height = '120px';
							elecls[i-1].style.marginTop = '-120px';
							elecls[i-1].style.bottom = '36px';						
							elecls[i-1].style.left = '154px';
							
						}
						//master webcam
						var elecls = document.getElementsByClassName('master');
						elecls[0].style.top = '730px';	
						var elecls = document.getElementsByClassName('mwebcam');
						elecls[0].style.height = '300px';
						elecls[0].style.width = '540px';
						
						//master dice
						var elecls = document.getElementsByClassName('mdados');
						elecls[0].style.height = '100px';
						elecls[0].style.width = '100px';
						elecls[0].style.marginTop = '-100px';						
						elecls[0].style.bottom = '12px';						
						elecls[0].style.left = '435px';
						var eleid = document.getElementById('mdice');
						eleid.style.bottom = '0px';
						eleid.style.left = '0px';
						eleid.style.zIndex = '9999';
						eleid.style.fontSize = '60px';
						eleid.style.color = '#fff';
						eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';	
						
						//mapa
						var elecls = document.getElementsByClassName('maps');
						elecls[0].style.left = '50px';
						elecls[0].style.width = '1500px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'visible';
						
						//info
						var elecls = document.getElementsByClassName('infos');
						elecls[0].style.top = '50px';
						elecls[0].style.width = '280px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'hidden';
						
						//fundo
						var elecls = document.getElementsByClassName('overlay');
						elecls[0].style.backgroundImage = 'url(./img/temas/fundos/map6cidadeflutuante.png)';
					break;
					case 8:
						var vau = 630;
						var gap = 320;
						var tp1 = 50;
						var tp2 = 50;
						var last = vau;
						//player webcam
						for(i = 1; i <= pnum; i++){
							var ele = document.getElementById('p'+i);
							var webcam = document.getElementsByClassName('pwebcam');
							webcam[i-1].style.height = '300px';
							webcam[i-1].style.width = '280px';
							console.log('height p'+i+':'+webcam[i-1].style.height);
							if(i <= Math.round(pnum/2)){
								ele.style.left = last+'px';
								ele.style.top = '730px';
								last = last+gap;
							}else if(i >= Math.round(pnum/2) & i <= pnum-2){
								ele.style.top = tp1+'px';
								ele.style.left = last-(gap*2)+'px';
								tp1 = tp1 + 340;
							}else{
								ele.style.top = tp2+'px';
								ele.style.left = last-gap+'px';
								tp2 = tp2 + 340;
							}
							//infos player webcam
							var elecls = document.getElementsByClassName('pname');
							elecls[i-1].style.width = '268px';
							elecls[i-1].style.height = '30px';
							elecls[i-1].style.marginTop = '-30px';
							elecls[i-1].style.bottom = '42px';			
							elecls[i-1].style.left = '6px';
							//elecls[i-1].style.backgroundColor = 'green';						
							
							//Vida
							var elecls = document.getElementsByClassName('php');
							elecls[i-1].style.width = '268px';
							elecls[i-1].style.height = '30px';
							elecls[i-1].style.marginTop = '-30px';
							elecls[i-1].style.bottom = '6px';						
							elecls[i-1].style.left = '6px';						
							elecls[i-1].style.backgroundColor = 'red';					
							
							//dados
							var elecls = document.getElementsByClassName('pdados');
							elecls[i-1].style.width = '80px';
							elecls[i-1].style.height = '80px';
							elecls[i-1].style.bottom = '42px';						
							elecls[i-1].style.marginTop = '-80px';						
							elecls[i-1].style.left = '194px';
							//Valor Dado
							var eleid = document.getElementById('p'+i+'dice');
							eleid.style.bottom = '-10px';
							eleid.style.left = '0px';
							eleid.style.zIndex = '9999';
							eleid.style.fontSize = '40px';
							eleid.style.color = '#fff';
							eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';
							
							//portrait
							var elecls = document.getElementsByClassName('pportrait');
							elecls[i-1].style.width = '120px';
							elecls[i-1].style.height = '120px';
							elecls[i-1].style.marginTop = '-120px';
							elecls[i-1].style.bottom = '36px';						
							elecls[i-1].style.left = '154px';
							
						}
						//master webcam
						var elecls = document.getElementsByClassName('master');
						elecls[0].style.top = '730px';	
						var elecls = document.getElementsByClassName('mwebcam');
						elecls[0].style.height = '300px';
						elecls[0].style.width = '540px';
						
						//master dice
						var elecls = document.getElementsByClassName('mdados');
						elecls[0].style.height = '100px';
						elecls[0].style.width = '100px';
						elecls[0].style.marginTop = '-100px';						
						elecls[0].style.bottom = '12px';						
						elecls[0].style.left = '435px';
						var eleid = document.getElementById('mdice');
						eleid.style.bottom = '0px';
						eleid.style.left = '0px';
						eleid.style.zIndex = '9999';
						eleid.style.fontSize = '60px';
						eleid.style.color = '#fff';
						eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';	
						
						//mapa
						var elecls = document.getElementsByClassName('maps');
						elecls[0].style.left = '50px';
						elecls[0].style.width = '1180px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'visible';
						
						//info
						var elecls = document.getElementsByClassName('infos');
						elecls[0].style.top = '50px';
						elecls[0].style.width = '280px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'hidden';
						
						//fundo
						var elecls = document.getElementsByClassName('overlay');
						elecls[0].style.backgroundImage = 'url(./img/temas/fundos/map8cidadeflutuante.png)';
						
					break;
				}
			break;
			case 'player':
				switch(pnum){
					case 6:
						var vau = 600;
						var gap = 440;
						var tp1 = 50;
						var tp2 = 50;
						var last = vau;
						//player webcam
						for(i = 1; i <= pnum; i++){
							var ele = document.getElementById('p'+i);
							var webcam = document.getElementsByClassName('pwebcam');
							webcam[i-1].style.height = '460px';
							webcam[i-1].style.width = '390px';
							console.log('height p'+i+':'+webcam[i-1].style.height);
							if(i <= Math.round(pnum/2)){
								ele.style.left = last+'px';
								ele.style.top = '570px';
								last = last+gap;
								console.log(last);
								if(last == 1920 ){last=vau};
							}else if(i > Math.round(pnum/2)){		
								ele.style.top = tp1+'px';
								ele.style.left = last+'px';
								last = last+gap;
							}
							//infos player webcam
							var elecls = document.getElementsByClassName('pname');
							elecls[i-1].style.width = '378px';
							elecls[i-1].style.height = '40px';
							elecls[i-1].style.marginTop = '-40px';
							elecls[i-1].style.bottom = '52px';			
							elecls[i-1].style.left = '6px';
							//elecls[i-1].style.backgroundColor = 'green';						
							
							//vida
							var elecls = document.getElementsByClassName('php');
							elecls[i-1].style.width = '378px';
							elecls[i-1].style.height = '40px';
							elecls[i-1].style.marginTop = '-40px';
							elecls[i-1].style.bottom = '6px';						
							elecls[i-1].style.left = '6px';						
							elecls[i-1].style.backgroundColor = 'red';	
							
							//dado
							var elecls = document.getElementsByClassName('pdados');
							elecls[i-1].style.width = '120px';
							elecls[i-1].style.height = '120px';
							elecls[i-1].style.bottom = '58px';						
							elecls[i-1].style.marginTop = '-120px';						
							elecls[i-1].style.left = '260px';							
							var eleid = document.getElementById('p'+i+'dice');
							eleid.style.bottom = '-10px';
							eleid.style.left = '0px';
							eleid.style.zIndex = '9999';
							eleid.style.fontSize = '60px';
							eleid.style.color = '#fff';
							eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';
							
							//portrait
							var elecls = document.getElementsByClassName('pportrait');
							elecls[i-1].style.width = '150px';
							elecls[i-1].style.height = '150px';
							elecls[i-1].style.marginTop = '-150px';
							elecls[i-1].style.bottom = '46px';						
							elecls[i-1].style.left = '234px';
							
						}
						//master webcam
						var elecls = document.getElementsByClassName('master');
						elecls[0].style.top = '290px';
						var elecls = document.getElementsByClassName('mwebcam');
						elecls[0].style.height = '740px';
						elecls[0].style.width = '500px';
						//master dice
						var elecls = document.getElementsByClassName('mdados');
						elecls[0].style.height = '120px';
						elecls[0].style.width = '120px';
						elecls[0].style.marginTop = '-120px';						
						elecls[0].style.bottom = '15px';						
						elecls[0].style.left = '370px';
						var eleid = document.getElementById('mdice');
						eleid.style.bottom = '-10px';
						eleid.style.left = '0px';
						eleid.style.zIndex = '9999';
						eleid.style.fontSize = '60px';
						eleid.style.color = '#fff';
						eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';	
						
						//mapa
						var elecls = document.getElementsByClassName('maps');
						elecls[0].style.left = '370px';
						elecls[0].style.width = '860px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'hidden';
						
						//info
						var elecls = document.getElementsByClassName('infos');
						elecls[0].style.top = '50px';
						elecls[0].style.width = '280px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'hidden';
						
						//fundo
						var elecls = document.getElementsByClassName('overlay');
						elecls[0].style.backgroundImage = 'url(./img/temas/fundos/player6cidadeflutuante.png)';
					break;
					case 8:
						var vau = 510;
						var gap = 350;
						var tp1 = 50;
						var tp2 = 50;
						var last = vau;
						//player webcam
						for(i = 1; i <= pnum; i++){
							var ele = document.getElementById('p'+i);
							var webcam = document.getElementsByClassName('pwebcam');
							webcam[i-1].style.height = '470px';
							webcam[i-1].style.width = '310px';
							console.log('height p'+i+':'+webcam[i-1].style.height);
							if(i <= Math.round(pnum/2)){
								ele.style.left = last+'px';
								ele.style.top = '560px';
								last = last+gap;
								console.log(last);
								if(last == 1910 ){last=vau};
							}else if(i > Math.round(pnum/2)){		
								ele.style.top = tp1+'px';
								ele.style.left = last+'px';
								last = last+gap;
							}
							//infos player webcam
							var elecls = document.getElementsByClassName('pname');
							elecls[i-1].style.width = '298px';
							elecls[i-1].style.height = '40px';
							elecls[i-1].style.marginTop = '-40px';
							elecls[i-1].style.bottom = '42px';			
							elecls[i-1].style.left = '6px';
							//elecls[i-1].style.backgroundColor = 'green';						
							//Vida
							var elecls = document.getElementsByClassName('php');
							elecls[i-1].style.width = '298px';
							elecls[i-1].style.height = '40px';
							elecls[i-1].style.marginTop = '-40px';
							elecls[i-1].style.bottom = '6px';						
							elecls[i-1].style.left = '6px';						
							elecls[i-1].style.backgroundColor = 'red';					
							
							//Dado
							var elecls = document.getElementsByClassName('pdados');
							elecls[i-1].style.width = '100px';
							elecls[i-1].style.height = '100px';
							elecls[i-1].style.marginTop = '-100px';	
							elecls[i-1].style.bottom = '55px';											
							elecls[i-1].style.left = '200px';
							//Valor Dado
							var eleid = document.getElementById('p'+i+'dice');
							eleid.style.bottom = '-10px';
							eleid.style.left = '0px';
							eleid.style.zIndex = '9999';
							eleid.style.fontSize = '50px';
							eleid.style.color = '#fff';
							eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';
							
							var elecls = document.getElementsByClassName('pportrait');
							elecls[i-1].style.width = '150px';
							elecls[i-1].style.height = '150px';
							elecls[i-1].style.marginTop = '-150px';
							elecls[i-1].style.bottom = '46px';						
							elecls[i-1].style.left = '154px';
							
							
						}
						//master webcam
						var elecls = document.getElementsByClassName('master');
						elecls[0].style.top = '330px';
						var elecls = document.getElementsByClassName('mwebcam');
						elecls[0].style.height = '700px';
						elecls[0].style.width = '420px';
						//master dice
						var elecls = document.getElementsByClassName('mdados');
						elecls[0].style.height = '120px';
						elecls[0].style.width = '120px';
						elecls[0].style.marginTop = '-120px';						
						elecls[0].style.bottom = '15px';						
						elecls[0].style.left = '290px';
						var eleid = document.getElementById('mdice');
						eleid.style.bottom = '-10px';
						eleid.style.left = '0px';
						eleid.style.zIndex = '9999';
						eleid.style.fontSize = '60px';
						eleid.style.color = '#fff';
						eleid.style.textShadow = '2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000';	
						
						//mapa
						var elecls = document.getElementsByClassName('maps');
						elecls[0].style.left = '370px';
						elecls[0].style.width = '860px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'hidden';
						
						//info
						var elecls = document.getElementsByClassName('infos');
						elecls[0].style.top = '50px';
						elecls[0].style.width = '280px';
						elecls[0].style.height = '640px';
						elecls[0].style.visibility = 'hidden';
						
						//fundo
						var elecls = document.getElementsByClassName('overlay');
						elecls[0].style.backgroundImage = 'url(./img/temas/fundos/player8cidadeflutuante.png)';
					break;
				}
			break;
		}
	}