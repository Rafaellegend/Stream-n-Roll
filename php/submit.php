<?Php 
	$result = array();
	$game = isset($_POST['game']) ? $_POST['game'] :null;
	$user = isset($_POST['player']) ? $_POST['player'] :null;
	$pos = isset($_POST['dpos']) ? $_POST['dpos'] :null;
	$action = isset($_POST['action']) ? $_POST['action'] :null;
	$result = isset($_POST['res']) ? $_POST['res'] :null;
	
	if(!empty($game) && !empty($user) &&  !empty($action) && !empty($result)){
		dbconnect();
		$sql = "INSERT INTO 'actionLOG' ('game','user','pos','action','result') VALUES('$game','$user','$pos','$action','$result')";
		$result['send_status'] = $conn->query($sql);
	}
		
		$roll = isset($_GET['roll']) ? intval($_GET['roll']) : 0;
		$rsql = "SELECT * FROM `actionLOG` WHERE `id` = ".$roll."AND `game` = ".$game;
		$items = $db->query($rsql);
		while($row = $items->fetch(PDO::FETCH_ASSOC)){
			$result['items'][] = $row;
		}
		
		
		
		
		//$start = isset($_GET['start']) ? intval($_GET['start']) :0;
		//$stsql ="SELECT * FROM `actionLOG` WHERE `id` > ".$start;
		//$items = $db->query($stsql);
		//while($row = $items->fetch(PDO::FETCH_ASSOC)){
		//	$result['items'][] = $row;
		//}
		header("Acess-Control-Allow-Origin: *");
		header("Content-Type: application/json");
		
		echo json_encode($result);