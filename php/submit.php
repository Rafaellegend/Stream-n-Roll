<?Php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
	$nmesa = isset($_POST['nmesa']) ? $_POST['nmesa'] :null;
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
  //Teste de Resistencia de Habilidades
	$ctstr = isset($_POST['ctstr']) ? $_POST['ctstr'] :null;
	$ctdex = isset($_POST['ctdex']) ? $_POST['ctdex'] :null;
	$ctcon = isset($_POST['ctcon']) ? $_POST['ctcon'] :null;
	$ctint = isset($_POST['ctint']) ? $_POST['ctint'] :null;
	$ctwis = isset($_POST['ctwis']) ? $_POST['cwis'] :null;
	$ctcar = isset($_POST['ctcar']) ? $_POST['ctcar'] :null;
  //Proficiência
	$cpro = isset($_POST['cpro']) ? $_POST['cpro'] :null;
  //Pericias - Proficiênte
	$cacrbt = isset($_POST['cacrbt']) ? $_POST['cacrbt'] :null;    // Acrobacia
	$canl = isset($_POST['canl']) ? $_POST['canl'] :null;          // Lidar com animais
	$carc = isset($_POST['carc']) ? $_POST['carc'] :null;          // Arcanismo
	$catl = isset($_POST['catl']) ? $_POST['catl'] :null;          // Atletismo
	$cperf = isset($_POST['cperf']) ? $_POST['cperf'] :null;       // Atuação
	$cdec = isset($_POST['cdec']) ? $_POST['cdec'] :null;          // Enganação
	$csth = isset($_POST['csth']) ? $_POST['csth'] :null;          // Furtividade
	$chis = isset($_POST['chis']) ? $_POST['chis'] :null;          // História
	$cintm = isset($_POST['cintm']) ? $_POST['cintm'] :null;       // Intimidação
	$cins = isset($_POST['cins']) ? $_POST['cins'] :null;          // Intuição
	$cinv = isset($_POST['cinv']) ? $_POST['cinv'] :null;          // Investigação
	$cmed = isset($_POST['cmed']) ? $_POST['cmed'] :null;          // Medicina
	$cnat = isset($_POST['cnat']) ? $_POST['cnat'] :null;          // Natureza
	$cper = isset($_POST['cper']) ? $_POST['cper'] :null;          // Percepção
	$cpers = isset($_POST['cpers']) ? $_POST['cpers'] :null;       // Persuasão
	$csli = isset($_POST['csli']) ? $_POST['csli'] :null;          // Prestidigitação
	$crel = isset($_POST['crel']) ? $_POST['crel'] :null;          // Religião
	$csur = isset($_POST['csur']) ? $_POST['csur'] :null;          // Sobrevivencia
  //Pericias - Experiente
	$cdacrbt = isset($_POST['cdacrbt']) ? $_POST['cdacrbt'] :null; // Acrobacia
	$cdanl = isset($_POST['cdanl']) ? $_POST['cdanl'] :null;       // Lidar com animais
	$cdarc = isset($_POST['cdarc']) ? $_POST['cdarc'] :null;       // Arcanismo
	$cdatl = isset($_POST['cdatl']) ? $_POST['cdatl'] :null;       // Atletismo
	$cdperf = isset($_POST['cdperf']) ? $_POST['cdperf'] :null;    // Atuação
	$cddec = isset($_POST['cddec']) ? $_POST['cddec'] :null;       // Enganação
	$cdsth = isset($_POST['cdsth']) ? $_POST['cdsth'] :null;       // Furtividade
	$cdhis = isset($_POST['cdhis']) ? $_POST['cdhis'] :null;       // História
	$cdintm = isset($_POST['cdintm']) ? $_POST['cdintm'] :null;    // Intimidação
	$cdins = isset($_POST['cdins']) ? $_POST['cdins'] :null;       // Intuição
	$cdinv = isset($_POST['cdinv']) ? $_POST['cdinv'] :null;       // Investigação
	$cdmed = isset($_POST['cdmed']) ? $_POST['cdmed'] :null;       // Medicina
	$cdnat = isset($_POST['cdnat']) ? $_POST['cdnat'] :null;       // Natureza
	$cdper = isset($_POST['cdper']) ? $_POST['cdper'] :null;       // Percepção
	$cdpers = isset($_POST['cdpers']) ? $_POST['cdpers'] :null;    // Persuasão
	$cdsli = isset($_POST['cdsli']) ? $_POST['cdsli'] :null;       // Prestidigitação
	$cdrel = isset($_POST['cdrel']) ? $_POST['cdrel'] :null;       // Religião
	$cdsur = isset($_POST['cdsur']) ? $_POST['cdsur'] :null;       // Sobrevivencia
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
	$langprof = isset($_POST['langprof']) ? $_POST['langprof'] :null;
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
		case 'sheet':
			if(!empty($from) && !empty($mesa)){
				$verify = "SELECT * FROM `ficha` WHERE `id_Mesa` = $mesa AND `id_User` = $from";
				$return['res'] = sqlquery($verify); 
				if(count($return['res']) == 0){
					$verify = "SELECT `max_Players` FROM `mesa` WHERE id_Mesa = $mesa";
					$return['res'] = sqlquery($verify);
					
					$charn = "SELECT `num_Mesa` FROM `ficha` WHERE `id_Mesa` = $mesa";
					
					$sql = "INSERT INTO `ficha` (`id_Ficha`, `num_Mesa`, `nome`, `nivel`, `classe`, `raca`, `alinhamento`, `antecedentes`, `experiencia`, `forca`, `destreza`, `constituicao`, `inteligencia`, `sabedoria`, `carisma`, `bonus_Proficiencia`, `res_Forca`, `res_Destreza`, `res_Constituicao`, `res_Inteligencia`, `res_Sabedoria`, `res_Carisma`, `pro_Acrobacia`, `dobro_Acrobacia`, `pro_Adestrar_Animais`, `dobro_Adestrar_Animais`, `pro_Arcanismo`, `dobro_Arcanismo`, `pro_Atletismo`, `dobro_Atletismo`, `pro_Enganacao`, `dobro_Enganacao`, `pro_Historia`, `dobro_Historia`, `pro_Intuicao`, `dobro_Intuicao`, `pro_Intimidacao`, `dobro_Intimidacao`, `pro_Investigacao`, `dobro_Investigacao`, `pro_Medicina`, `dobro_Medicina`, `pro_Natureza`, `dobro_Natureza`, `pro_Percepcao`, `dobro_Percepcao`, `pro_Atuacao`, `dobro_Atuacao`, `pro_Persuasao`, `dobro_Persuasao`, `pro_Religiao`, `dobro_Religiao`, `pro_Prestidigitacao`, `dobro_Prestidigitacao`, `pro_Furtividade`, `dobro_Furtividade`, `pro_Sobrevivencia`, `dobro_Sobrevivencia`, `CA`, `iniciativa`, `deslocamento`, `vida_Atual`, `vida_Maxima`, `vida_Temporaria`, `dado_Vida`, `equipamento`, `pecas_Cobre`, `pecas_Prata`, `pecas_Esmeralda`, `pecas_Ouro`, `pecas_Platina`, `proficiencias`, `tracos`, `ideais`, `vinculos`, `defeitos`, `caracteristicas`, `idade`, `altura`, `peso`, `olhos`, `pele`, `cabelo`, `Aparencia`, `aliados_Organizacoes`, `tesouro`, `historia`, `diario`, `classe_conjuração`,`hab_chave`, `resistencia_Magica`, `bonus_habMagica`, `espacomagia1_atual`, `espacomagia1_max`, `espacomagia2_atual`, `espacomagia2_max`, `espacomagia3_atual`, `espacomagia3_max`, `espacomagia4_atual`, `espacomagia4_max`, `espacomagia5_atual`, `espacomagia5_max`, `espacomagia6_atual`, `espacomagia6_max`, `espacomagia7_atual`, `espacomagia7_max`, `espacomagia8_atual`, `espacomagia8_max`, `espacomagia9_atual`, `espacomagia9_max`, `id_User`, `id_Mesa`) VALUES (NULL, '$nmesa', '$cname', '$clevel', '$cclass', '$cfolk', '$calign', '$cback', '$cxp', '$cstr', '$cdex', '$ccon', '$cint', '$cwis', '$ccar', '$cpro', '$ctstr', '$ctdex', '$ctcon', '$ctint', '$ctwis', '$ctcar', '$cacrbt', '$cdacrbt', '$canl', '$cdanl', '$carc', '$cdarc', '$catl', '$cdatl', '$cdec', '$cddec', '$chis', '$cdhis', '$cins', '$cdins', '$cintm', '$cdintm', '$cinv', '$cdinv', '$cmed', '$cdmed', '$cnat', '$cdnat', '$cper', '$cdper', '$cperf', '$cdperf', '$cpers', '$cdpers', '$crel', '$cdrel', '$csli', '$cdsli', '$csth', '$cdsth', '$csur', '$cdsur', '$cca', '$cinit', '$cmov', '$catualhp', '$cmaxhp', '$catemphp', '$clifedice', '$equip', '$pc', '$pp', '$pe', '$po', '$pl', '$langprof', '$cperso', '$cide', '$clink', '$cdef', '$carhab', '$cage', '$cheight', '$cweight', '$ceyes', '$cskin', '$chair', '$cphoto', '$calliance', '$treasures', '$cstorie', '$notes', '$cconjclass', '$keyhab', '$cdtr', '$mbonus', '$mag1atl', '$mag1max', '$mag2atl', '$mag2max', '$mag3atl', '$mag3max', '$mag4atl', '$mag4max', '$mag5atl', '$mag5max', '$mag6atl', '$mag6max', '$mag7atl', '$mag7max', '$mag8atl', '$mag8max', '$mag9atl', '$mag9max', '$from', '$mesa')" ;
					//$result['send_status'] = sqlquery($sql);
					
					$atks = "INSERT INTO `ataquesmagias` (`id_atkmag`, `nome`, `tipo`, `nivel`, `dano`, `dano_Tipo`, `dano_Extra`, `dano_Extra_Tipo`, `descricao`, `id_ficha`) VALUES (NULL, '$maginfo', '$atktype', '$maginfo', '$maginfo', '$maginfo', '$maginfo', '$maginfo', '$maginfo', '$ficha')";
				}else{
					$sql= "UPDATE `ficha` SET `id_Ficha`=[value-1],`num_Mesa`=[value-2],`nome`=[value-3],`nivel`=[value-4],`classe`=[value-5],`raca`=[value-6],`alinhamento`=[value-7],`antecedentes`=[value-8],`experiencia`=[value-9],`forca`=[value-10],`destreza`=[value-11],`constituicao`=[value-12],`inteligencia`=[value-13],`sabedoria`=[value-14],`carisma`=[value-15],`bonus_Proficiencia`=[value-16],`res_Forca`=[value-17],`res_Destreza`=[value-18],`res_Constituicao`=[value-19],`res_Inteligencia`=[value-20],`res_Sabedoria`=[value-21],`res_Carisma`=[value-22],`pro_Acrobacia`=[value-23],`dobro_Acrobacia`=[value-24],`pro_Adestrar_Animais`=[value-25],`dobro_Adestrar_Animais`=[value-26],`pro_Arcanismo`=[value-27],`dobro_Arcanismo`=[value-28],`pro_Atletismo`=[value-29],`dobro_Atletismo`=[value-30],`pro_Enganacao`=[value-31],`dobro_Enganacao`=[value-32],`pro_Historia`=[value-33],`dobro_Historia`=[value-34],`pro_Intuicao`=[value-35],`dobro_Intuicao`=[value-36],`pro_Intimidacao`=[value-37],`dobro_Intimidacao`=[value-38],`pro_Investigacao`=[value-39],`dobro_Investigacao`=[value-40],`pro_Medicina`=[value-41],`dobro_Medicina`=[value-42],`pro_Natureza`=[value-43],`dobro_Natureza`=[value-44],`pro_Percepcao`=[value-45],`dobro_Percepcao`=[value-46],`pro_Atuacao`=[value-47],`dobro_Atuacao`=[value-48],`pro_Persuasao`=[value-49],`dobro_Persuasao`=[value-50],`pro_Religiao`=[value-51],`dobro_Religiao`=[value-52],`pro_Prestidigitacao`=[value-53],`dobro_Prestidigitacao`=[value-54],`pro_Furtividade`=[value-55],`dobro_Furtividade`=[value-56],`pro_Sobrevivencia`=[value-57],`dobro_Sobrevivencia`=[value-58],`CA`=[value-59],`iniciativa`=[value-60],`deslocamento`=[value-61],`vida_Atual`=[value-62],`vida_Maxima`=[value-63],`vida_Temporaria`=[value-64],`dado_Vida`=[value-65],`equipamento`=[value-66],`pecas_Cobre`=[value-67],`pecas_Prata`=[value-68],`pecas_Esmeralda`=[value-69],`pecas_Ouro`=[value-70],`pecas_Platina`=[value-71],`proficiencias`=[value-72],`tracos`=[value-73],`ideais`=[value-74],`vinculos`=[value-75],`defeitos`=[value-76],`caracteristicas`=[value-77],`idade`=[value-78],`altura`=[value-79],`peso`=[value-80],`olhos`=[value-81],`pele`=[value-82],`cabelo`=[value-83],`Aparencia`=[value-84],`aliados_Organizacoes`=[value-85],`tesouro`=[value-86],`historia`=[value-87],`diario`=[value-88],`classe_conjuração`=[value-89],`hab_chave`=[value-90],`resistencia_Magica`=[value-91],`bonus_habMagica`=[value-92],`espacomagia1_atual`=[value-93],`espacomagia1_max`=[value-94],`espacomagia2_atual`=[value-95],`espacomagia2_max`=[value-96],`espacomagia3_atual`=[value-97],`espacomagia3_max`=[value-98],`espacomagia4_atual`=[value-99],`espacomagia4_max`=[value-100],`espacomagia5_atual`=[value-101],`espacomagia5_max`=[value-102],`espacomagia6_atual`=[value-103],`espacomagia6_max`=[value-104],`espacomagia7_atual`=[value-105],`espacomagia7_max`=[value-106],`espacomagia8_atual`=[value-107],`espacomagia8_max`=[value-108],`espacomagia9_atual`=[value-109],`espacomagia9_max`=[value-110],`id_User`=[value-111],`id_Mesa`=[value-112] WHERE 1";
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