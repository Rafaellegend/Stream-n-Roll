<?Php 
	include_once('php/functions.php');
	$result = array();
	$message = isset($_POST['message']) ? $_POST['message'] :null;
	$from = isset($_POST['from']) ? $_POST['from'] :null;
	$mesa = isset($_POST['mesa']) ? $_POST['mesa'] :null;
	$action = isset($_POST['action']) ? $_POST['action'] :null;
	switch($action){
		case 'chat': 
			$rolls = array();
			$r =1;
			if(!empty($message) && !empty($from) && !empty($mesa)){
				$convsta = explode(" ",$message);
				for($i=0; $i < count($convsta); $i++){;
					$sta[$i] = $convsta[$i];
				}
				if(in_array("/r", $sta)){
					$rolls = array();
					for($i = 0; $i < count($sta); $i++){
						if(strchr($sta[$i],'d') == true){
							$arrval = str_ireplace("d"," ",$sta[$i]);
							$nums = explode(" ",$arrval);
							if(count($nums) == 2){
								for($y = 0; $y < $nums[0];$y++){
									$rolls[$r] = Roll($r);
									$newstr .= "$rolls[$r] ";
									$r++;
								}
								$total = array_sum($rolls);
								$resume = str_ireplace(" ","+",rtrim($newstr));
																
							}else{
								
							}
						}else{
							
						}
					}
					$newstring = 'Rolou os dados e tirou:<p class="res">'.$total.'<span>('.$resume.')</span></p>';
					$sql = "INSERT INTO chat (message,id_user,id_mesa) VALUES ('$newstring','$from','$mesa')";
					$result['send_status'] = sqlquery($sql);
				}else{
					$sql = "INSERT INTO chat (message,id_user,id_mesa) VALUES ('$message','$from','$mesa')";
					$result['send_status'] = sqlquery($sql);
				}
			}
		break;
	}
		$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
		$stsql ="SELECT chat.id_Chat AS `id`,chat.message AS `msg`,users.username AS `user`,chat.id_mesa AS `mesa` FROM `chat` INNER JOIN `users` ON chat.id_User = users.id_User WHERE `id_Chat` > ".$start;
		$items = sqlquery($stsql);
		while($row = $items->fetch(PDO::FETCH_ASSOC)){
			$result['items'][] = $row;
		}
		header("Acess-Control-Allow-Origin: *");
		header("Content-Type: application/json");
		
		echo json_encode($result);