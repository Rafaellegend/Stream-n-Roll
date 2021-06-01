<script src="js/functions.js" type="text/javascript"></script>
<div class="overlay">
	<div class="master">
		<div class="mwebcam"></div>
		<div class="mdados"><p id="mdice">20</p></div>
	</div>
	<div class="infos">
	
	</div>
	<div class="maps">
	
	</div>
	<div class="lplayers" id="lplayers">
		
	</div>
</div>
<style>
.overlay{
	width:1920px;
	height:1080px;
	//padding:50px; 
	background-color:#ff00ff;
}
.bigscreen{
	float:left;
}
.maps{
	position:absolute;
	top:50px;
	left:600px;
	width:1270px;
	height:600px;
	border:6px solid black;
	transition:0.3s;
}
.infos{
	position:absolute;
	top:400px;
	left:50px;
	width:500px;
	height:630px;
	border:6px solid black;
	transition:0.3s;
}
.master{
	position:absolute;
	top:50px;
	left:50px;
	transition:0.3s;
}
.mwebcam{
	width:500px;
	height:300px;
	border:6px solid black;
	margin-right:30px;
	z-index:9998;
	background-color:#00ff00;
}
.mdados{
	background-image:url('./img/diceb.svg');
	background-repeat: no-repeat;
	background-size: content;
	background-position: center;
	position:relative;
}
.mdados p{
	position:relative;
	text-align:center;
	transition:0.3s;	
}
.player{
	position:absolute;
	top:700px;
	transition:0.3s;
	background-color:#00ff00;
}
.pwebcam{
	width:280px;
	height:330px;
	border:6px solid black;
}
.pportrait{
	background-image:url('./img/portrait/art1.png');
	background-repeat: no-repeat;
	background-size: content;
	background-position: bottom right;
	height:100px;
	width:100px;
	margin-top:-100px;
	position:relative;
	left:130px;
}
.pname{
	font-size:30px;
	margin-top:-30px;
	padding:0 6px;
	position:relative;
	overflow-y: hidden;
	bottom:50px;
	line-height:1;
}
.php{
	position:relative;
	bottom:30px;
	height:30px;
	margin-top:-30px;
}
.pdados{
	background-image:url('./img/diceb.svg');
	background-repeat: no-repeat;
	background-size: content;
	background-position: center;
	position:relative;
	bottom:0px;
	left:170px;
	height:60px;
	width:60px;
	margin-top:-67px;
	transition:0.3s;
	opacity:0;
}
.pdados p{
	position:relative;
	text-align:center;
	transition:0.3s;
}
</style>
<script>
 creatplayer(8,'player');
 dadosshow = false;
 function roda(n){
	 var elecls = document.getElementsByClassName('pdados');
	 var eleid = document.getElementById('p'+n+'dice');
	 if(dadosshow == true){
	 eleid.style.opacity = '0';
	 setTimeout(function(){
	 elecls[n-1].style.transform = "rotate(0deg)";
	 elecls[n-1].style.opacity = "0";
	 }, 3);
	 
	 dadosshow= false;
	 }else{
	  elecls[n-1].style.transform = "rotate(360deg)";
	  elecls[n-1].style.opacity = "1";
	  dadosshow= true;	  
	  setTimeout(function(){ eleid.style.opacity = '1';},0500);
	  setTimeout(function(){roda(n)}, 3000);
	 }
 };
</script>
<button onclick="roda(2)">rodar</button>
<button onclick="playercss(6,'full')">full</button>
<button onclick="playercss(6,'map')">map</button>
<button onclick="playercss(6,'player')">player</button>