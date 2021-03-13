<head><link rel="stylesheet" href="css/overlay.css"></head>
<Script>
	
</script>
<?php
	$t='dtfl';
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
		<img id="hostcam" src='<?php echo $theme ?>\squarecam.png'>
		<img id="mview" src='<?php echo $theme ?>\more.png'>
		</div>
		<div class="col-sm-7" id="players">
			<?php
			$px = $cssLeft;
				for($i = 1; $i <= $players; $i++){
					$p = $players/2;
					if($i == $p+1){
						$px = $cssLeft;
					}
					if($i <= $p){
						$dtop = $csstop;
					}else{ 
						$dtop = $cssbotton;
					};
					$bx= $x - 65 .'px';
					echo"<picture>
					<img id='pcam' class='img-fluid' src='$theme\pcam.png' style='height:$y;width:$x;$ex'>
					</picture>
					<p class='dados' id='p$i' style='position:absolute;top:$dtop;left:$px;'>20</p> 
					<p id='bar$i' class='bar' style='background-color: red;height:30px;width:$bx;max-width:$bx;position:absolute;top:".($dtop+30)."px;left:".($px+60)."px;'>10/10</p>";
					$px = ($px + $x)+5 .'px';
				
				};
			?>
		</div>
	</div>
</div>
<script src="js/functions.js" type="text/javascript"></script>

<button onclick="AniBar(bar1,0,50)">teste</button>
