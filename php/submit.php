<?Php 
	$result = array();
	$message = isset($_POST['message']) ? $_POST['message'] :null;
	$from = isset($_POST['from']) ? $_POST['from'] :null;
	$mesa = isset($_POST['mesa']) ? $_POST['mesa'] :null;
	$action = isset($_POST['action']) ? $_POST['action'] :null;
	
	switch($action){
		case 'chat': 
			if(!empty($message) && !empty($from) && !empty($mesa)){
				if
				
				
				$sql = "INSERT INTO chat (message,id_user,id_mesa) VALUES ('$message','$from','$mesa')";
				$result['send_status'] = sqlquery($sql);
			}
		break
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