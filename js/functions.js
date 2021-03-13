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
	var Res = document.getElementById("dado").innerHTML = r;
	return Res;
}
function Cam(){
  var myWindow = window.open("overlay.php", "myWindow", "width=1920,height=1080");
}

//Testes de reload
function reload(){
	window.opener.location.reload();
}
function start(){
	setInterval();
}
//Xml JS
function XMLRequest(url,tag,id,cid){
	obj.onreadystatechange = function(){
		if(this.readyState ==4 && this.status == 200){
			XMLquery(this,tag,id,cid);
		};
	};
	obj.open("GET",url,false);
	obj.send();
} 
function XMLquery(xml,tag,id,cid){
	var xmlDoc = xml.responseXML;
	var x = xmlDoc.getElementsByTagName(tag)[id].childNodes[cid];
	var res = x.nodeValue;
}
//Animações de barra : AniBar(Id da tag, Posição Atual, Posição Final)
function AniBar(eid,apos,fpos) {
	var id = null;
	var elem = document.getElementById(eid);   
	var pos = apos;
	clearInterval(id);
	id = setInterval(frame, 5);
	function frame() {
		if (pos == fpos) {
			clearInterval(id);
		} else {
			pos++; 
			elem.style.width = fpos + "px";
		}
	}
}
