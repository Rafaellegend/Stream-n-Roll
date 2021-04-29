		var from = null, start = 0, url = 'http://localhost:8030/Stream-n-Roll/?page=submit';
		$(document).ready(function(){
			$('form').submit(function(e){
				$.post(url, {
					action: 'chat'
					message: $('#message').val(),
					from: '0'
					mesa: '0'
				});
				$('#message').val('')
				return false;
			})
		})
		function displayRoll(){
			$.get(url + '&roll=' + start, function(result){
			if(result.items){
				result.items.forEach(item =>{
					start = item.id;
					if(item.action == 'roll'){
						Roll(item.result,0,0,0,item.pos);
					}
					//$('#messages').append(renderMessage(item));
				})
			};
			displayRoll();
			});
		}
		
		function renderMessage(item){
			return `<div class="msg"><p>${item.writer}</P>${item.message}</div>`;
		}