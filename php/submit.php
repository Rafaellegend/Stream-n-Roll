<?Php 
	include_once('php/functions.php');
	$result = array();
//Geral
	$mesa = isset($_POST['mesa']) ? $_POST['mesa'] :null;
	$action = isset($_POST['action']) ? $_POST['action'] :null;
	$from = isset($_POST['from']) ? $_POST['from'] :null;
//Chat
	$message = isset($_POST['message']) ? $_POST['message'] :null;
//Ficha	
//src da foto
	$cphoto = isset($_POST['cphoto']) ? $_POST['cphoto'] :null;
//Informações do personagem
	$cname = isset($_POST['cname']) ? $_POST['cname'] :null;
	$cclass = isset($_POST['cclass']) ? $_POST['cclass'] :null;
	$clevel = isset($_POST['clevel']) ? $_POST['clevel'] :null;
	$cback = isset($_POST['cback']) ? $_POST['cback'] :null;
	$cfolk = isset($_POST['cfolk']) ? $_POST['cfolk'] :null;
	$calign = isset($_POST['calign']) ? $_POST['calign'] :null;
	$cxp = isset($_POST['cxp']) ? $_POST['cxp'] :null;
//Detalhes do Personagem
	$cage = isset($_POST['cage']) ? $_POST['cage'] :null;
	$cheight = isset($_POST['cheight']) ? $_POST['cheight'] :null;
	$cweight = isset($_POST['cweight']) ? $_POST['cweight'] :null;
	$ceyes = isset($_POST['ceyes']) ? $_POST['ceyes'] :null;
	$cskin = isset($_POST['cskin']) ? $_POST['cskin'] :null;
	$chair = isset($_POST['chair']) ? $_POST['chair'] :null;
//Habilidades
	$cstr = isset($_POST['cstr']) ? $_POST['cstr'] :null;
	$cdex = isset($_POST['cdex']) ? $_POST['cdex'] :null;
	$ccon = isset($_POST['ccon']) ? $_POST['ccon'] :null;
	$cint = isset($_POST['cint']) ? $_POST['cint'] :null;
	$cwis = isset($_POST['cwis']) ? $_POST['cwis'] :null;
	$ccar = isset($_POST['ccar']) ? $_POST['ccar'] :null;
//Proficiência
	$cpro = isset($_POST['cpro']) ? $_POST['cpro'] :null;
//Pericias - Proficiênte
	$cacrbt = isset($_POST['cacrbt']) ? $_POST['cacrbt'] :null;
	$canl = isset($_POST['canl']) ? $_POST['canl'] :null;
	$carc = isset($_POST['carc']) ? $_POST['carc'] :null;
	$catl = isset($_POST['catl']) ? $_POST['catl'] :null;
	$cperf = isset($_POST['cperf']) ? $_POST['cperf'] :null;
	$cdec = isset($_POST['cdec']) ? $_POST['cdec'] :null;
	$csth = isset($_POST['csth']) ? $_POST['csth'] :null;
	$chis = isset($_POST['chis']) ? $_POST['chis'] :null;
	$cintm = isset($_POST['cintm']) ? $_POST['cintm'] :null;
	$cins = isset($_POST['cins']) ? $_POST['cins'] :null;
	$cinv = isset($_POST['cinv']) ? $_POST['cinv'] :null;
	$cmed = isset($_POST['cmed']) ? $_POST['cmed'] :null;
	$cnat = isset($_POST['cnat']) ? $_POST['cnat'] :null;
	$cper = isset($_POST['cper']) ? $_POST['cper'] :null;
	$csli = isset($_POST['csli']) ? $_POST['csli'] :null;
//Pericias - Experiente
	$cdacrbt = isset($_POST['cdacrbt']) ? $_POST['cdacrbt'] :null;
	$cdanl = isset($_POST['cdanl']) ? $_POST['cdanl'] :null;
	$cdarc = isset($_POST['cdarc']) ? $_POST['cdarc'] :null;
	$cdatl = isset($_POST['cdatl']) ? $_POST['cdatl'] :null;
	$cdperf = isset($_POST['cdperf']) ? $_POST['cdperf'] :null;
	$cddec = isset($_POST['cddec']) ? $_POST['cddec'] :null;
	$cdsth = isset($_POST['cdsth']) ? $_POST['cdsth'] :null;
	$cdhis = isset($_POST['cdhis']) ? $_POST['cdhis'] :null;
	$cdintm = isset($_POST['cdintm']) ? $_POST['cdintm'] :null;
	$cdins = isset($_POST['cdins']) ? $_POST['cdins'] :null;
	$cdinv = isset($_POST['cdinv']) ? $_POST['cdinv'] :null;
	$cdmed = isset($_POST['cdmed']) ? $_POST['cdmed'] :null;
	$cdnat = isset($_POST['cdnat']) ? $_POST['cdnat'] :null;
	$cdper = isset($_POST['cdper']) ? $_POST['cdper'] :null;
	$cdsli = isset($_POST['cdsli']) ? $_POST['cdsli'] :null;
//Informações Importantes
	$catualhp = isset($_POST['catualhp']) ? $_POST['catualhp'] :null;
	$cmaxhp = isset($_POST['cmaxhp']) ? $_POST['cmaxhp'] :null;
	$catemphp = isset($_POST['catemphp']) ? $_POST['catemphp'] :null;
	$cinit = isset($_POST['cinit']) ? $_POST['cinit'] :null;
	$cca = isset($_POST['cca']) ? $_POST['cca'] :null;
	$cmov = isset($_POST['cmov']) ? $_POST['cmov'] :null;
	$clifedice = isset($_POST['clifedice']) ? $_POST['clifedice'] :null;
//Equipamentos
	$equip = isset($_POST['equip']) ? $_POST['equip'] :null;
	$pc = isset($_POST['pc']) ? $_POST['pc'] :null;
	$pp = isset($_POST['pp']) ? $_POST['pp'] :null;
	$pe = isset($_POST['pe']) ? $_POST['pe'] :null;
	$po = isset($_POST['po']) ? $_POST['po'] :null;
	$pl = isset($_POST['pl']) ? $_POST['pl'] :null;
//História
	$cstorie = isset($_POST['cstorie']) ? $_POST['cstorie'] :null;
	$cperso = isset($_POST['cperso']) ? $_POST['cperso'] :null;
	$cide = isset($_POST['cide']) ? $_POST['cide'] :null;
	$clink = isset($_POST['clink']) ? $_POST['clink'] :null;
	$cdef = isset($_POST['cdef']) ? $_POST['cdef'] :null;
	$calliance = isset($_POST['calliance']) ? $_POST['calliance'] :null;
	$carhab = isset($_POST['carhab']) ? $_POST['carhab'] :null;
//Anotações
	$notes = isset($_POST['notes']) ? $_POST['notes'] :null;
	$treasures = isset($_POST['treasures']) ? $_POST['treasures'] :null;
//Classe de Conjuração
	$cconjclass = isset($_POST['cconjclass']) ? $_POST['cconjclass'] :null;
	$keyhab = isset($_POST['keyhab']) ? $_POST['keyhab'] :null;
	$cdtr = isset($_POST['cdtr']) ? $_POST['cdtr'] :null;
	$mbonus = isset($_POST['mbonus']) ? $_POST['mbonus'] :null;
//Ataques	
	$atks = isset($_POST['atks']) ? $_POST['atks'] :null;
	$atksinfo = isset($_POST['atksinfo']) ? $_POST['atksinfo'] :null;
//Espaços de Magias	
	$mag0max = isset($_POST['mag0max']) ? $_POST['mag0max'] :null;
	$mag0atl = isset($_POST['mag0atl']) ? $_POST['mag0atl'] :null;
	
	$mag1max = isset($_POST['mag1max']) ? $_POST['mag1max'] :null;
	$mag1atl = isset($_POST['mag1atl']) ? $_POST['mag1atl'] :null;
	
	$mag2max = isset($_POST['mag2max']) ? $_POST['mag2max'] :null;
	$mag2atl = isset($_POST['mag2atl']) ? $_POST['mag2atl'] :null;
	
	$mag3max = isset($_POST['mag3max']) ? $_POST['mag3max'] :null;
	$mag3atl = isset($_POST['mag3atl']) ? $_POST['mag3atl'] :null;
	
	$mag4max = isset($_POST['mag4max']) ? $_POST['mag4max'] :null;
	$mag4atl = isset($_POST['mag4atl']) ? $_POST['mag4atl'] :null;
	
	$mag5max = isset($_POST['mag5max']) ? $_POST['mag5max'] :null;
	$mag5atl = isset($_POST['mag5atl']) ? $_POST['mag5atl'] :null;
	
	$mag6max = isset($_POST['mag6max']) ? $_POST['mag6max'] :null;
	$mag6atl = isset($_POST['mag6atl']) ? $_POST['mag6atl'] :null;
	
	$mag7max = isset($_POST['mag7max']) ? $_POST['mag7max'] :null;
	$mag7atl = isset($_POST['mag7atl']) ? $_POST['mag7atl'] :null;
	
	$mag8max = isset($_POST['mag8max']) ? $_POST['mag8max'] :null;
	$mag8atl = isset($_POST['mag8atl']) ? $_POST['mag8atl'] :null;
	
	$mag9max = isset($_POST['mag9max']) ? $_POST['mag9max'] :null;
	$mag9atl = isset($_POST['mag9atl']) ? $_POST['mag9atl'] :null;
//Magias	
	$maginfo = isset($_POST['maginfo']) ? $_POST['maginfo'] :null;
// ---
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
									$rolls[$r] = Roll($nums[1]);
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