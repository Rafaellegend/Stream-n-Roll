		var from = null, start = 0, url = 'http://localhost:8030/Stream-n-Roll/?page=submit';
		$(document).ready(function(){
			displayRoll();
			$('form').submit(function(e){
				$.post(url, {
					message: $('#message').val(),
					from: from
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