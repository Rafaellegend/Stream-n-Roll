<link rel="stylesheet" href="css/overlay.css">
<script src="js/functions.js" type="text/javascript"></script>
<script>
var mesa=<?php echo '"'.$_GET['idmesa'].'"'; ?>,bg = <?php echo '"'.$_GET['bg'].'"'; ?>, border = <?php echo '"'.$_GET['border'].'"'; ?>, players = <?php echo $_GET['players']; ?>, show = <?php echo '"'.$_GET['view'].'"'; ?>, portraits= <?php echo '"'.$_GET['portraits'].'"'; ?>,banana= <?php echo '"'.$_GET['banana'].'"'; ?>;
console.log('bg='+bg+' players='+players+' view='+show+' portraits='+portraits);
$(document).ready(function(){
	creatplayer(players,show);
	if(portraits == 'on'){
		$(".pportrait").css('background-repeat','no-repeat');
		$(".pportrait").css('background-size','contain');
		$(".pportrait").css('background-position','bottom right');
	}else{
		$(".pportrait").css('background-image','none');
	}
	receivedata();		
})	
function receivedata(){
	$.get('./?page=submit' + '&load=stream'+ '&mesa='+mesa+ '&banana='+banana, function(result){
		console.log('ta recebendo');
		if(result.charinfo){
			console.log(result.charinfo);
			
			result.charinfo.forEach(item =>{
				var streamnmesa = `${item.num_Mesa}`;
				console.log(streamnmesa);
				if(streamnmesa<=players && streamnmesa != 'undefined'){
					if(portraits == 'on'){
						$("#p"+streamnmesa).children(".pportrait").css('background-image',`url(${item.Aparencia})`);
						$("#p"+streamnmesa).children(".pportrait").css('background-repeat','no-repeat');
						$("#p"+streamnmesa).children(".pportrait").css('background-size','contain');
						$("#p"+streamnmesa).children(".pportrait").css('background-position','bottom right');
					}else{
						$("#p"+streamnmesa).children(".pportrait").css('background-image','none');
					}
					$("#p"+streamnmesa).children(".pname").text(`${item.nome}`);
					var hpattp = Math.floor(item.vida_Atual) + Math.floor(item.vida_Temporaria);
					$("#p"+streamnmesa).children(".php").children("p").text(hpattp+'/'+ item.vida_Maxima);
					
				}
			})
		};
		if(result.rolls){
			//console.log(result.rolls);
			result.rolls.forEach(item =>{
				//console.log(item.valor);
				if(getCookie('p'+item.nFicha+'oldroll') != item.valor){
					console.log("valor guardado="+getCookie('p'+item.nFicha+'oldroll')+" valor do item="+item.valor)
					$("#p"+item.nFicha+"dice").text(item.valor);
					roda(Math.floor(item.nFicha));
					setCookie('p'+item.nFicha+'oldroll',item.valor,360);
					
				}else{}
				
			})
		};
		receivedata();		
	});
}
 console.log(players+' '+show)
 dadosshow = false;
 function roda(n){
	 var elecls = document.getElementsByClassName('pdados');
	 var eleid = document.getElementById('p'+n+'dice');
	 if(dadosshow == true){
	 eleid.style.opacity = '0';
	 setTimeout(function(){
	 elecls[n-1].style.transform = "rotate(0deg)";
	 elecls[n-1].style.opacity = "0";
	 }, 15);
	 
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
	//background-color:#ff00ff;
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
	border:12px solid black;
	transition:0.3s;
	
	border-image:url('./img/temas/bordas/stone.png')30 round;
	border-image-outset: 6px;
}
.infos{
	position:absolute;
	top:400px;
	left:50px;
	width:500px;
	height:630px;
	border:12px solid black;
	transition:0.3s;
	border-image:url('./img/temas/bordas/stone.png')30 round;
	 border-image-outset: 6px;
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
	border:12px solid black;
	margin-right:30px;
	z-index:9998;
	//background-color:#00ff00;
	border-image:url('./img/temas/bordas/stone.png')30 round;
	border-image-outset: 6px;
	
}
.mdados{
	background-image:url('./img/diceb.svg');
	background-repeat: no-repeat;
	background-size: contain;
	background-position: center;
	position:relative;
	visibility:hidden;
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
	//background-color:#00ff00;
}
.pwebcam{
	width:280px;
	height:330px;
	border:12px solid black;
	border-image:url('./img/temas/bordas/stone.png')30 round;
	border-image-outset: 6px;
	box-shadow: 0 0 14px 1px #c4c1c0;
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
	font-weight:bold;
	font-family: 'Metamorphous',monospace;
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
	border-top:6px solid black;
	border-image:url('./img/temas/bordas/stone.png')30 round;;
}
.php p{
	line-height:1;
	font-size:30px;
	font-weight:bold;
	font-family: monospace;
	text-align:center;
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

</script>
<button onclick="roda(2)">rodar</button>
<button onclick="playercss(6,'full')">full</button>
<button onclick="playercss(6,'map')">map</button>
<button onclick="playercss(6,'player')">player</button>
<button onclick="fazerRequisicao();">player</button>