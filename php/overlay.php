<head><link rel="stylesheet" href="css/overlay.css"></head>
<Script>
	var from = 1, mesa = '1', start = 0, action = 'stream', url = 'http://localhost:8030/Stream-n-Roll/?page=submit';
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover();
			load();
			$('form').submit(function(e){
				e.preventDefault();
				$.post(url, {
					action: action,
					message: $('#message').val(),
					from: from,
					mesa: mesa
				});
				$('#message').val('')
				return false;
			})
		})	
		function load(){
			$.get(url + '&start=' + start, function(result){		
			if(result.items){
				result.items.forEach(item =>{
					start = item.id;
					if(item.mesa == mesa){
						$('#messages').append(renderMessage(item));
					}
				})
			};
			load();
			});
		}	
function renderMessage(item){
		return `<div class="msg"><p>${item.user}</P>${item.msg}</div>`;
}
</script>
<?php
	$t='dnd';
	$players = 8;
	switch($t){
			case 'dnd': $theme = 'img\overlay\dnd';
			break;
			default: $theme = 'img\overlay\template';
			break;
		};
	switch($players){
		case 1: $x='1015px';
				$y='835px';
				$csstop= '';
				break;
		case 2: $x='520px';
				$y='835px';
				$ex='margin-left:0px;';
				break;
		case 3: $x='355px';
				$y='835px';
				$ex='margin-left:0px;margin-right:0px;';
				break;
		case 4: $x='495px';
				$y='392px';
				break;
		case 5: $x='312px';
				$y='392px';
				$ex='margin-left:0px;margin-right:10px;';
				$csstop= '356px';
				$cssbotton= '798px';
				$cssLeft= '100px';
				
				break;
		case 6: $x='312px';
				$y='392px';
				$ex='margin-left:0px;margin-right:10px;';
				$csstop= '356px';
				$cssbotton= '798px';
				$cssLeft= '100px';
				break;
		case 7: $x='265px';
				$y='392px';
				$ex='margin-left:0px;margin-right:0px;';
				$csstop= '356px';
				$cssbotton= '798px';
				$cssLeft= '100px';
				break;
		case 8: $x='265px';
				$y='392px';
				$ex='margin-left:0px;margin-right:0px;';
				$csstop= '356px';
				$cssbotton= '798px';
				$cssLeft= '15px';
				break;
	};
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-5" style="">
		<img id="hostcam" src='<?php echo $theme ?>\sqr_cam.png'>
		<img id="mview" src='<?php echo $theme ?>\m_cam.png'>
		<picture>
			<img class='img-fluid' id="mdice" src='img/dice2.svg' style='width:80px;height:80px;'>
		</picture>
		<p class='dados' id='p$i' style='position:absolute;top:$dtop;left:$px;' >20</p> 
		</div>
		<div class="col-sm-7" id="players">
			<?php
			$un = 1;
			$px = $cssLeft;
				for($i = 1; $i <= $players; $i++){
					$p = $players/2;
					if($i == $p+1){
						$px = $cssLeft;
						$un = 1;
					}
					if($i == $p-1){
						$un = -1;
					}
					if($i/2 == $p-1){
						$un = 0;
					}
					if($i <= $p){
						$dtop = $csstop;
					}else{ 
						$dtop = $cssbotton;
					};
					$bx= $x - 8 .'px';
					echo"
					
					<p id='bar$i' class='bar' style='background-color: red;height:30px;width:$bx;max-width:$bx;position:absolute;top:".($dtop+30)."px;left:".($px+4)."px;'></p>
					<p id='HPbar$i' class='HPBar' style='height:30px;width:$bx;position:absolute;top:".($dtop+30)."px;left:".($px+0)."px;'>10/10</p>
					<picture>
						<img id='pcam' class='img-fluid' src='$theme\p_cam.png' style='height:$y;width:$x;$ex'>
					</picture>
					<picture>
						<img class='img-fluid' src='$theme\dice.svg' style='position:absolute;top:$dtop;left:".($px-5)."px;width:80px;height:80px;'>
					</picture>
					<p class='dados' id='p$i' style='text-align:center;position:absolute;top:".($dtop+6)."px;left:".($px+6)."px;' >20</p> 
					";
					$px = ($px + $x +4+$un) .'px';
				};
			?>
		</div>
	</div>
</div>
<script src="js/functions.js" type="text/javascript"></script>
