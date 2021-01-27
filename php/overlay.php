<head><link rel="stylesheet" href="css/overlay.css"></head>
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
				break;
		case 6: $x='312px';
				$y='392px';
				break;
		case 7: $x='265px';
				$y='392px';
				$ex='margin-left:0px;margin-right:0px;';
				break;
		case 8: $x='265px';
				$y='392px';
				$ex='margin-left:0px;margin-right:0px;';
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
				for($i = 1; $i <= $players; $i++){
					echo"<picture><img id='pcam' class='img-fluid' src='$theme\pcam.png' style='height:$y;width:$x;$ex'></picture>";
				};
			?>
		</div>
	</div>
</div>
