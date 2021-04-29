function readURL(input,id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#'+id)
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
function Roll(d,Atr1,Atr2,Atr3,pos){
	var r = (Math.floor(Math.random() * d) + 1) + Atr1 + Atr2 + Atr3;
	var Res = document.getElementById(pos).innerHTML = r;
	return Res;
}
//Xml JS
function XMLRequest(url,tag,id,cid,to){
	var obj = new XMLHttpRequest();
	obj.onreadystatechange = function(){
		if(this.readyState ==4 && this.status == 200){
			XMLquery(this,tag,id,cid,to);
		};
	};
	obj.open("GET",url,true);
	obj.send();
} 
function XMLquery(xml,tag,id,cid,to){
	var xmlDoc = xml.responseXML;
	var x = xmlDoc.getElementsByTagName(tag)[id].childNodes[cid];
	var res = x.nodeValue;
	document.getElementById(to).innerHTML = res;
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
		console.log('Foi carregado');
	}else{
		console.log('Ja tinha');
	}
}