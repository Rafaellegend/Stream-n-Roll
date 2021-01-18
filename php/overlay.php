<head><link rel="stylesheet" href="css/overlay.css"></head>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-5" style="">
		<img id="hostcam" src='img\overlay\squarecam.png'>
		<img id="mview" src='img\overlay\more.png'>
		</div>
		<div class="col-sm-7" id="players">
			<?php
				$players = 8;
				for($i = 1; $i <= $players; $i++){
				echo"<img id='pcam' src='img\overlay\pcam.png'>";
			};
			?>
		</div>
	</div>
</div>
