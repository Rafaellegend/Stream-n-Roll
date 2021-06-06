<script src="js/functions.js" type="text/javascript"></script>
<script>
var start = 0;
var mesa = getCookie('idMesa');
var from = getCookie('idUser');
console.log('mesa='+mesa +' from='+ from);
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover();
			load();
			$('#chat').submit(function(e){
				e.preventDefault();
				$.post('./?page=submit', {
					action: 'chat',
					message: $('#message').val(),
					from: from,
					mesa: mesa
				});
				$('#message').val('')
				return false;
			})
		})	
		function load(){
			
			$.get('./?page=submit' + '&start=' + start + '&load=chat', function(result){
			console.log('chat porra');
			if(result.chats){
				result.chats.forEach(item =>{
					start = item.id;
					if(item.mesa == mesa){
						$('#messages').append(renderMessage(item));	
					}
				})
				var chatheight = document.getElementById('messages').scrollHeight;
				$('#messages').scrollTop(chatheight);
			};
			load();
			});
		}	
function renderMessage(item){
		return `<div class="msg"><p>${item.user}</P>${item.msg}</div>`;
}		
function splitString(stringToSplit, separator) {
  var arrayOfStrings = stringToSplit.split(separator);

  console.log('A string original é: "' + stringToSplit + '"');
  console.log('O separador é: "' + separator + '"');
  console.log('O array tem ' + arrayOfStrings.length + ' elementos: ' + arrayOfStrings.join(' / '));
  return arrayOfStrings;
}
var dados = [];
function roll(dice){
	message = document.getElementById('message');
	atvalue = message.value;
	splited = splitString(atvalue, ' ');
	rollaready = splited.includes("/r");
	console.log('possui /r:' + rollaready);
	lastdice = splited[splited.length - 1];
	dStr = dice.replace(/[0-9]/,'');	

	console.log('lastdice ' + lastdice);
	console.log('Dice ' + dStr);
	
	if(rollaready == true){
		if(typeof dados[dice] == "undefined"){
			dados[dice]= 1;
		}else{
			dados[dice]++;
		}		
		message.value +=" "+dados[dice]+dice;
	}else{
		dados[dice]= 1;
		message.value = "/r "+dados[dice]+dice;
	}
}
$(document).on('click', '#d4', function(){
	roll('d4');
});
$(document).on('click', '#d6', function(){
	roll('d6');
});
$(document).on('click', '#d8', function(){
	roll('d8');
});
$(document).on('click', '#d10', function(){
	roll('d10');
});
$(document).on('click', '#d12', function(){
	roll('d12');
});
$(document).on('click', '#d20', function(){
	roll('d20');
});
$(document).on('click', '#d100', function(){
	roll('d100');
});
<!-- load -->
window.onload = function() {
	chatload('chatsession')
}
<!-- chat -->
</script>
<!-- Chat Nav Bar -->
<div id="chatnav">
	<div id="closechat" onclick="openchat()"><span>&#10095;</span></div>
	<div id="chatname">
	<p id="chatlabel">Sala</p>
	<p id="chatsession"></p>	
	</div>
</div>
<!-- Chat -->
<div id="messages">
</div>
<!-- Caixa de Texto -->
<form id='chat'>
	<input type="text" id="message" class="msginput" autofocus autocomplete="off" placeholder="Digite sua mensagem..." >
	<a id="msgdice" class="msginput" data-toggle="popover" data-html="true" data-placement="top" 
	data-content="
	<div id='msgdiceroll'>
		<a class='msgdices' id='d4'><img src='img/dices/d4.svg' width='30' height='30'></a>
		<a class='msgdices' id='d6'><img src='img/dices/d6.svg' width='30' height='30'></a>
		<a class='msgdices' id='d8'><img src='img/dices/d8.svg' width='25' height='30'></a>
		<a class='msgdices' id='d10'><img src='img/dices/d10.svg' width='30' height='30'></a>
		<a class='msgdices' id='d12'><img src='img/dices/d12.svg' width='30' height='30'></a>
		<a class='msgdices' id='d20'><img src='img/dices/d20.svg' width='30' height='30'></a>
		<a class='msgdices' id='d100'><img src='img/dices/d100.svg' width='30' height='30'></a>
	</div>">
		<svg id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m476.927 124.764-215.965-123.446c-3.074-1.758-6.851-1.758-9.925 0l-215.964 123.446c-3.115 1.78-5.038 5.094-5.038 8.682v241.944c0 3.549 1.881 6.832 4.942 8.627l215.965 126.61c1.562.916 3.31 1.373 5.058 1.373s3.496-.458 5.058-1.373l215.965-126.61c3.062-1.795 4.942-5.078 4.942-8.627v-241.945c0-3.588-1.923-6.901-5.038-8.681zm-426.892 25.861 73.205 41.573-73.205 141.976zm250.965 47.619h57.15l-102.15 176.929-102.15-176.929h57.15c5.523 0 10-4.477 10-10s-4.477-10-10-10h-55.729l100.729-150.283 100.729 150.283h-55.729c-5.523 0-10 4.477-10 10s4.477 10 10 10zm-63.313 185.21-181.964-16.669 81.302-157.681zm137.287-174.351 81.303 157.682-181.964 16.669zm3.633-34.141-90.576-135.135 163.734 93.59zm-245.214.001-73.157-41.546 163.734-93.59zm112.607 229.336v80.247l-162.23-95.108zm20 0 162.23-14.861-162.23 95.108zm122.76-212.102 73.205-41.573v183.55z"/><circle cx="256" cy="188.244" r="10"/></g></g></svg>
	</a>
	<input type="submit" id="submit" class="msginput" value="Enviar" >
</form>