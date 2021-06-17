<?Php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	include_once('php/functions.php');
	$result = array();
//Geral
	if(isset($_GET['mesa'])){$mesa = $_GET['mesa'];}else{
		
		$mesa = isset($_COOKIE["idMesa"]) ? $_COOKIE["idMesa"] :null;
		//var_dump('mesa ='.$mesa);
	};
	////var_dump($_SESSION['idMesa']);
	$action = isset($_POST['action']) ? $_POST['action'] :null;
	if(isset($_GET['banana'])){
		$from = $_GET['banana'];
	}else if(isset($_SESSION['UsuarioID'])){
		$from = $_SESSION['UsuarioID'];
	}else{
	$from = isset($_POST['from']) ? $_POST['from'] :null;
	}
//Chat
	$message = isset($_POST['message']) ? $_POST['message'] :null;
//Mesa
	$nomeMesa = isset($_POST['nomeMesa']) ? $_POST['nomeMesa'] :null;
	$maxMesa = isset($_POST['maxMesa']) ? $_POST['maxMesa'] :null;
	$descMesa = isset($_POST['descMesa']) ? $_POST['descMesa'] :null;
	$systemaMesa = isset($_POST['systemaMesa']) ? $_POST['systemaMesa'] :null;
if($action == 'sheet'){
//Ficha	
  //src da foto
	$cphoto = isset($_POST['cphoto']) ? $_POST['cphoto'] :null;
  //Informações do personagem
	$idficha = isset($_POST['idsheet']) ? $_POST['idsheet'] :null;
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
	if($ctstr == 'true'){$ctstr=1;};
	
	$ctdex = isset($_POST['ctdex']) ? $_POST['ctdex'] :null;
	if($ctdex == 'true'){$ctdex=1;};
	
	$ctcon = isset($_POST['ctcon']) ? $_POST['ctcon'] :null;
	if($ctcon == 'true'){$ctcon=1;};
	
	$ctint = isset($_POST['ctint']) ? $_POST['ctint'] :null;
	if($ctint == 'true'){$ctint=1;};
	
	$ctwis = isset($_POST['ctwis']) ? $_POST['ctwis'] :null;
	if($ctwis == 'true'){$ctwis=1;};
	
	$ctcar = isset($_POST['ctcar']) ? $_POST['ctcar'] :null;
	if($ctcar == 'true'){$ctcar=1;};
  //Proficiência
	$cpro = isset($_POST['cpro']) ? $_POST['cpro'] :null;
  //Pericias - Proficiênte
	$cacrbt = isset($_POST['cacrbt']) ? $_POST['cacrbt'] :null;    // Acrobacia
	if($cacrbt == 'true'){$cacrbt=1;};
	
	$canl = isset($_POST['canl']) ? $_POST['canl'] :null;          // Lidar com animais
	if($canl == 'true'){$canl=1;};
	
	$carc = isset($_POST['carc']) ? $_POST['carc'] :null;          // Arcanismo
	if($carc == 'true'){$carc=1;};
	
	$catl = isset($_POST['catl']) ? $_POST['catl'] :null;          // Atletismo
	if($catl == 'true'){$catk=1;};
	
	$cperf = isset($_POST['cperf']) ? $_POST['cperf'] :null;       // Atuação
	if($cperf == 'true'){$cperf=1;};
	
	$cdec = isset($_POST['cdec']) ? $_POST['cdec'] :null;          // Enganação
	if($cdec == 'true'){$cdec=1;};
	
	$csth = isset($_POST['csth']) ? $_POST['csth'] :null;          // Furtividade
	if($csth == 'true'){$csth=1;};
	
	$chis = isset($_POST['chis']) ? $_POST['chis'] :null;          // História
	if($chis == 'true'){$chis=1;};
	
	$cintm = isset($_POST['cintm']) ? $_POST['cintm'] :null;       // Intimidação
	if($cintm == 'true'){$cintm=1;};
	
	$cins = isset($_POST['cins']) ? $_POST['cins'] :null;          // Intuição
	if($cins == 'true'){$cins=1;};
	
	$cinv = isset($_POST['cinv']) ? $_POST['cinv'] :null;          // Investigação
	if($cinv == 'true'){$cinv=1;};
	
	$cmed = isset($_POST['cmed']) ? $_POST['cmed'] :null;          // Medicina
	if($cmed == 'true'){$cmed=1;};
	
	$cnat = isset($_POST['cnat']) ? $_POST['cnat'] :null;          // Natureza
	if($cnat == 'true'){$cnat=1;};
	
	$cper = isset($_POST['cper']) ? $_POST['cper'] :null;          // Percepção
	if($cper == 'true'){$cper=1;};
	
	$cpers = isset($_POST['cpers']) ? $_POST['cpers'] :null;       // Persuasão
	if($cpers == 'true'){$cpers=1;};
	
	$csli = isset($_POST['csli']) ? $_POST['csli'] :null;          // Prestidigitação
	if($csli == 'true'){$csli=1;};
	
	$crel = isset($_POST['crel']) ? $_POST['crel'] :null;          // Religião
	if($crel == 'true'){$crel=1;};
	
	$csur = isset($_POST['csur']) ? $_POST['csur'] :null;          // Sobrevivencia
	if($csur == 'true'){$csur=1;};
	
  //Pericias - Experiente
	$cdacrbt = isset($_POST['cdacrbt']) ? $_POST['cdacrbt'] :null; // Acrobacia
	if($cdacrbt == 'true'){$cdacrbt=1;};
	
	$cdanl = isset($_POST['cdanl']) ? $_POST['cdanl'] :null;       // Lidar com animais
	if($cdanl == 'true'){$cdanl=1;};
	
	$cdarc = isset($_POST['cdarc']) ? $_POST['cdarc'] :null;       // Arcanismo
	if($cdarc == 'true'){$cdarc=1;};
	
	$cdatl = isset($_POST['cdatl']) ? $_POST['cdatl'] :null;       // Atletismo
	if($cdatl == 'true'){$cdatl=1;};
	
	$cdperf = isset($_POST['cdperf']) ? $_POST['cdperf'] :null;    // Atuação
	if($cdperf == 'true'){$cdperf=1;};
	
	$cddec = isset($_POST['cddec']) ? $_POST['cddec'] :null;       // Enganação
	if($cddec == 'true'){$cddec=1;};
	
	$cdsth = isset($_POST['cdsth']) ? $_POST['cdsth'] :null;       // Furtividade
	if($cdsth == 'true'){$cdsth=1;};
	
	$cdhis = isset($_POST['cdhis']) ? $_POST['cdhis'] :null;       // História
	if($cdhis == 'true'){$cdhis=1;};
	
	$cdintm = isset($_POST['cdintm']) ? $_POST['cdintm'] :null;    // Intimidação
	if($cdintm == 'true'){$cdintm=1;};
	
	$cdins = isset($_POST['cdins']) ? $_POST['cdins'] :null;       // Intuição
	if($cdins == 'true'){$cdins=1;};
	
	$cdinv = isset($_POST['cdinv']) ? $_POST['cdinv'] :null;       // Investigação
	if($cdinv == 'true'){$cdinv=1;};
	
	$cdmed = isset($_POST['cdmed']) ? $_POST['cdmed'] :null;       // Medicina
	if($cdmed == 'true'){$cdmed=1;};
	
	$cdnat = isset($_POST['cdnat']) ? $_POST['cdnat'] :null;       // Natureza
	if($cdnat == 'true'){$cdnat=1;};
	
	$cdper = isset($_POST['cdper']) ? $_POST['cdper'] :null;       // Percepção
	if($cdper == 'true'){$cdper=1;};
	
	$cdpers = isset($_POST['cdpers']) ? $_POST['cdpers'] :null;    // Persuasão
	if($cdpers == 'true'){$cdpers=1;};
	
	$cdsli = isset($_POST['cdsli']) ? $_POST['cdsli'] :null;       // Prestidigitação
	if($cdsli == 'true'){$cdsli=1;};
	
	$cdrel = isset($_POST['cdrel']) ? $_POST['cdrel'] :null;       // Religião
	if($cdrel == 'true'){$cdrel=1;};
	
	$cdsur = isset($_POST['cdsur']) ? $_POST['cdsur'] :null;       // Sobrevivencia
	if($cdsur == 'true'){$cdsur=1;};
	
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
	$atklist = isset($_POST['atks']) ? $_POST['atks'] :null;
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
}
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
					
					$verify= "SELECT `num_Mesa` FROM `ficha` WHERE `id_User` = $from AND `id_mesa` = $mesa";
					$return['res'] = sqlquery($verify)->fetch(PDO::FETCH_ASSOC);
					$nficha= $return['res']['num_Mesa'];
					
					$sql= "INSERT INTO `rolls` (`id_Roll`, `valor`, `base`, `nFicha`, `id_Mesa`) VALUES (NULL, '$total', '$resume', '$nficha', '$mesa')";
					$result['send_status'] = sqlquery($sql);
				}else{
					$sql = "INSERT INTO chat (message,id_user,id_mesa) VALUES ('$message','$from','$mesa')";
					$result['send_status'] = sqlquery($sql);
				}
			}
		break;
		case 'sheet':
			if(!empty($from) && !empty($mesa)){
				$verify = "SELECT * FROM `ficha` WHERE `id_Mesa` = '$mesa' AND `id_User` = '$from'";
				$return['res'] = sqlquery($verify); 
				if($return['res']->rowCount() == 0){
					//SELECT em todas as fichas da mesa
					$verify = "SELECT `num_Mesa` FROM `ficha` WHERE `id_Mesa` = '$mesa'";
					$return['res'] = sqlquery($verify);
					//SELECT na quantidade maxima de jogadores da mesa
					$maxp = "SELECT `max_Players` FROM `mesa` WHERE id_Mesa = '$mesa'";
					$return['maxp'] = sqlquery($maxp);
					//Contando as linhas do primeiro SELECT
					$rows = $return['res']->rowCount();
					$num = $return['res']->fetch(PDO::FETCH_ASSOC);			
					$max = $return['maxp']->fetch(PDO::FETCH_ASSOC);
					echo "ué";
					////var_dump($num['num_mesa']);
					
					if($rows < $max['max_Players']){
						for($i = 1; $i < $max['max_Players']; $i++){
							$verify = "SELECT `num_Mesa` FROM `ficha` WHERE `num_Mesa` = '$nmesa' AND `id_Mesa` = '$mesa'";
							$return['res'] = sqlquery($verify);
							$rows = $return['res']->rowCount();
							if($rows == 0){
								$nmesa == $i;
							}
						}
						$sql = "INSERT INTO `ficha` (`id_Ficha`, `num_Mesa`, `nome`, `nivel`, `classe`, `raca`, `alinhamento`, `antecedentes`, `experiencia`, `forca`, `destreza`, `constituicao`, `inteligencia`, `sabedoria`, `carisma`, `bonus_Proficiencia`, `res_Forca`, `res_Destreza`, `res_Constituicao`, `res_Inteligencia`, `res_Sabedoria`, `res_Carisma`, `pro_Acrobacia`, `dobro_Acrobacia`, `pro_Adestrar_Animais`, `dobro_Adestrar_Animais`, `pro_Arcanismo`, `dobro_Arcanismo`, `pro_Atletismo`, `dobro_Atletismo`, `pro_Enganacao`, `dobro_Enganacao`, `pro_Historia`, `dobro_Historia`, `pro_Intuicao`, `dobro_Intuicao`, `pro_Intimidacao`, `dobro_Intimidacao`, `pro_Investigacao`, `dobro_Investigacao`, `pro_Medicina`, `dobro_Medicina`, `pro_Natureza`, `dobro_Natureza`, `pro_Percepcao`, `dobro_Percepcao`, `pro_Atuacao`, `dobro_Atuacao`, `pro_Persuasao`, `dobro_Persuasao`, `pro_Religiao`, `dobro_Religiao`, `pro_Prestidigitacao`, `dobro_Prestidigitacao`, `pro_Furtividade`, `dobro_Furtividade`, `pro_Sobrevivencia`, `dobro_Sobrevivencia`, `CA`, `iniciativa`, `deslocamento`, `vida_Atual`, `vida_Maxima`, `vida_Temporaria`, `dado_Vida`, `equipamento`, `pecas_Cobre`, `pecas_Prata`, `pecas_Esmeralda`, `pecas_Ouro`, `pecas_Platina`, `proficiencias`, `tracos`, `ideais`, `vinculos`, `defeitos`, `caracteristicas`, `idade`, `altura`, `peso`, `olhos`, `pele`, `cabelo`, `Aparencia`, `aliados_Organizacoes`, `tesouro`, `historia`, `diario`, `classe_conjuração`,`hab_chave`, `resistencia_Magica`, `bonus_habMagica`, `espacomagia1_atual`, `espacomagia1_max`, `espacomagia2_atual`, `espacomagia2_max`, `espacomagia3_atual`, `espacomagia3_max`, `espacomagia4_atual`, `espacomagia4_max`, `espacomagia5_atual`, `espacomagia5_max`, `espacomagia6_atual`, `espacomagia6_max`, `espacomagia7_atual`, `espacomagia7_max`, `espacomagia8_atual`, `espacomagia8_max`, `espacomagia9_atual`, `espacomagia9_max`, `id_User`, `id_Mesa`) VALUES (NULL, '$nmesa', '$cname', '$clevel', '$cclass', '$cfolk', '$calign', '$cback', '$cxp', '$cstr', '$cdex', '$ccon', '$cint', '$cwis', '$ccar', '$cpro', '$ctstr', '$ctdex', '$ctcon', '$ctint', '$ctwis', '$ctcar', '$cacrbt', '$cdacrbt', '$canl', '$cdanl', '$carc', '$cdarc', '$catl', '$cdatl', '$cdec', '$cddec', '$chis', '$cdhis', '$cins', '$cdins', '$cintm', '$cdintm', '$cinv', '$cdinv', '$cmed', '$cdmed', '$cnat', '$cdnat', '$cper', '$cdper', '$cperf', '$cdperf', '$cpers', '$cdpers', '$crel', '$cdrel', '$csli', '$cdsli', '$csth', '$cdsth', '$csur', '$cdsur', '$cca', '$cinit', '$cmov', '$catualhp', '$cmaxhp', '$catemphp', '$clifedice', '$equip', '$pc', '$pp', '$pe', '$po', '$pl', '$langprof', '$cperso', '$cide', '$clink', '$cdef', '$carhab', '$cage', '$cheight', '$cweight', '$ceyes', '$cskin', '$chair', '$cphoto', '$calliance', '$treasures', '$cstorie', '$notes', '$cconjclass', '$keyhab', '$cdtr', '$mbonus', '$mag1atl', '$mag1max', '$mag2atl', '$mag2max', '$mag3atl', '$mag3max', '$mag4atl', '$mag4max', '$mag5atl', '$mag5max', '$mag6atl', '$mag6max', '$mag7atl', '$mag7max', '$mag8atl', '$mag8max', '$mag9atl', '$mag9max', '$from', '$mesa')" ;
						$result['send_status'] = sqlquery($sql);
						
						//var_dump($atksinfo);
						for($x = 0; $x < count($atksinfo); $x++){
							
						}
						
						for($x = 0; $x < count($maginfo); $x++){
						
						
						for($y =0; $y < 7;$y++){
							$hab[$y]=$maginfo[$x][1][$y][1];
							//echo $hab[$y]."\n";
						}
						if($hab[1] != ''){
							$atks = "INSERT INTO `ataquesmagias` (`id_atkmag`, `nome`, `tipo`, `nivel`, `dano`, `dano_Tipo`, `dano_Extra`, `dano_Extra_Tipo`, `descricao`, `id_ficha`) VALUES ('$hab[0]', '$hab[1]', '1', '$x', '$hab[2]', '$hab[3]', '$hab[4]', '$hab[5]', '$hab[6]', '$val') ON DUPLICATE KEY UPDATE `nome` = '$hab[1]' , `tipo` = '1', `nivel` = '$x', `dano` = '$hab[2]', `dano_Tipo` = '$hab[3]', `dano_Extra` = '$hab[4]', `dano_Extra_Tipo` = '$hab[5]', `descricao` = '$hab[6]'";
							
							$result['send_status'] = sqlquery($atks);
						}
					}
						
						//$atks = "INSERT INTO `ataquesmagias` (`id_atkmag`, `nome`, `tipo`, `nivel`, `dano`, `dano_Tipo`, `dano_Extra`, `dano_Extra_Tipo`, `descricao`, `id_ficha`) VALUES (NULL, '$maginfo', '$atktype', '$maginfo', '$maginfo', '$maginfo', '$maginfo', '$maginfo', '$maginfo', '$ficha')";
					};
				}else{
					$sql= "UPDATE `ficha` SET `nome`='$cname', `nivel`= '$clevel', `classe`= '$cclass', `raca`= '$cfolk', `alinhamento`= '$calign', `antecedentes`= '$cback', `experiencia`= '$cxp', `forca`= '$cstr', `destreza`= '$cdex', `constituicao`= '$ccon', `inteligencia`= '$cint', `sabedoria`= '$cwis', `carisma`= '$ccar', `bonus_Proficiencia`= '$cpro', `res_Forca`= '$ctstr', `res_Destreza`= '$ctdex', `res_Constituicao`= '$ctcon', `res_Inteligencia`= '$ctint', `res_Sabedoria`= '$ctwis', `res_Carisma`= '$ctcar', `pro_Acrobacia`= '$cacrbt', `dobro_Acrobacia`= '$cdacrbt', `pro_Adestrar_Animais`= '$canl', `dobro_Adestrar_Animais`= '$cdanl', `pro_Arcanismo`= '$carc', `dobro_Arcanismo`= '$cdarc', `pro_Atletismo`= '$catl', `dobro_Atletismo`= '$cdatl', `pro_Enganacao`= '$cdec', `dobro_Enganacao`= '$cddec', `pro_Historia`= '$chis', `dobro_Historia`= '$cdhis', `pro_Intuicao`= '$cins', `dobro_Intuicao`= '$cdins', `pro_Intimidacao`= '$cintm', `dobro_Intimidacao`= '$cdintm', `pro_Investigacao`= '$cinv', `dobro_Investigacao`= '$cdinv', `pro_Medicina`= '$cmed', `dobro_Medicina`= '$cdmed', `pro_Natureza`= '$cnat', `dobro_Natureza`= '$cdnat', `pro_Percepcao`= '$cper', `dobro_Percepcao`= '$cdper', `pro_Atuacao`= '$cperf', `dobro_Atuacao`= '$cdperf', `pro_Persuasao`= '$cpers', `dobro_Persuasao`= '$cdpers', `pro_Religiao`= '$crel', `dobro_Religiao`= '$cdrel', `pro_Prestidigitacao`= '$csli', `dobro_Prestidigitacao`= '$cdsli', `pro_Furtividade`= '$csth', `dobro_Furtividade`= '$cdsth', `pro_Sobrevivencia`= '$csur', `dobro_Sobrevivencia`= '$cdsur', `CA`= '$cca', `iniciativa`= '$cinit', `deslocamento`= '$cmov', `vida_Atual`= '$catualhp', `vida_Maxima`= '$cmaxhp', `vida_Temporaria`= '$catemphp', `dado_Vida`= '$clifedice', `equipamento`= '$equip', `pecas_Cobre`= '$pc', `pecas_Prata`= '$pp', `pecas_Esmeralda`= '$pe', `pecas_Ouro`= '$po', `pecas_Platina`= '$pl', `proficiencias`= '$langprof', `tracos`= '$cperso', `ideais`='$cide', `vinculos`='$clink', `defeitos`='$cdef', `caracteristicas`='$carhab', `idade`='$cage', `altura`='$cheight', `peso`='$cweight', `olhos`='$ceyes', `pele`='$cskin', `cabelo`='$chair', `Aparencia`='$cphoto', `aliados_Organizacoes`='$calliance', `tesouro`='$treasures', `historia`='$cstorie', `diario`='$notes', `classe_conjuração`='$cconjclass', `hab_chave`='$keyhab', `resistencia_Magica`='$cdtr', `bonus_habMagica`='$mbonus', `espacomagia1_atual`='$mag1atl', `espacomagia1_max`='$mag1max', `espacomagia2_atual`='$mag2atl', `espacomagia2_max`='$mag2max', `espacomagia3_atual`='$mag3atl', `espacomagia3_max`='$mag3max', `espacomagia4_atual`='$mag4atl', `espacomagia4_max`='$mag4max', `espacomagia5_atual`='$mag5atl', `espacomagia5_max`='$mag5max', `espacomagia6_atual`='$mag6atl', `espacomagia6_max`='$mag6max', `espacomagia7_atual`='$mag7atl', `espacomagia7_max`='$mag7max', `espacomagia8_atual`='$mag8atl', `espacomagia8_max`='$mag8max', `espacomagia9_atual`='$mag9atl', `espacomagia9_max`='$mag9max' WHERE `ficha`.`id_User` = $from AND `ficha`.`id_mesa` = $mesa";
					$result['send_status'] = sqlquery($sql);
					
					////var_dump(count($maginfo));
					$verify = "SELECT `id_Ficha` FROM `ficha` WHERE `ficha`.`id_User` = $from AND `ficha`.`id_mesa` = $mesa";
					$numeroficha = sqlquery($verify);
					$ficha = $numeroficha->fetch(PDO::FETCH_ASSOC);
					$val = $ficha['id_Ficha'];
					
					////var_dump($atksinfo);
					for($x = 0; $x < count($atksinfo); $x++){
						for($y =0; $y < 4;$y++){
							if($atksinfo[$x][$y][1] == 'undefined'){
								$hab[$y]=null;
							}else{
								$hab[$y]=$atksinfo[$x][$y][1];
							}
							echo $hab[$y]."\n";
						}	
						if($hab[1] != ''){
							$atks = "INSERT INTO `ataquesmagias` (`id_atkmag`, `nome`, `tipo`, `nivel`, `dano`, `dano_Tipo`, `dano_Extra`, `dano_Extra_Tipo`, `descricao`, `id_ficha`) VALUES ('$hab[0]', '$hab[1]', '0', '0', '$hab[2]', '$hab[3]', '', '', '', '$val') ON DUPLICATE KEY UPDATE `nome` = '$hab[1]' , `tipo` = '0', `nivel` = '0', `dano` = '$hab[2]', `dano_Tipo` = '$hab[3]', `dano_Extra` = '', `dano_Extra_Tipo` = '', `descricao` = ''";
							$result['send_status'] = sqlquery($atks);
							//echo $atks."\n";
						}
					}

					for($x = 0; $x < count($maginfo); $x++){
						
						
						for($y =0; $y < 7;$y++){
							if($maginfo[$x][1][$y][1] == 'undefined'){
								$hab[$y]=null;
							}else{
								$hab[$y]=$maginfo[$x][1][$y][1];
							}
							//echo $hab[$y]."\n";
						}
						if($hab[1] != ''){
							$atks = "INSERT INTO `ataquesmagias` (`id_atkmag`, `nome`, `tipo`, `nivel`, `dano`, `dano_Tipo`, `dano_Extra`, `dano_Extra_Tipo`, `descricao`, `id_ficha`) VALUES ('$hab[0]', '$hab[1]', '1', '$x', '$hab[2]', '$hab[3]', '$hab[4]', '$hab[5]', '$hab[6]', '$val') ON DUPLICATE KEY UPDATE `nome` = '$hab[1]' , `tipo` = '1', `nivel` = '$x', `dano` = '$hab[2]', `dano_Tipo` = '$hab[3]', `dano_Extra` = '$hab[4]', `dano_Extra_Tipo` = '$hab[5]', `descricao` = '$hab[6]'";
							$result['send_status'] = sqlquery($atks);
							
						}
					}
				}
			}
			break;
			case 'mesa':
				$sql="UPDATE `mesa` SET `nomeMesa`= '$nomeMesa', `sistema`='$systemaMesa', `descricao`='$descMesa', `max_Players`= '$maxMesa' WHERE `id_Mesa` = '$mesa'";
				$result['send_status'] = sqlquery($sql);
			break;
	}
	if(isset($_GET['load'])){
		$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
		//chat
		if($_GET['load'] == 'chat'){
			$stsql ="SELECT chat.id_Chat AS `id`,chat.message AS `msg`,users.username AS `user`,chat.id_mesa AS `mesa` FROM `chat` INNER JOIN `users` ON chat.id_User = users.id_User WHERE `id_Chat` > ".$start;
			$items = sqlquery($stsql);
			while($row = $items->fetch(PDO::FETCH_ASSOC)){
				$result['chats'][] = $row;
			}
		}
		
		//ficha
		if($_GET['load'] == 'sheet'){
			$stsql ="SELECT * FROM `ficha` WHERE `id_User` = $from AND `id_mesa` = $mesa";
			$items = sqlquery($stsql);
			while($row = $items->fetch(PDO::FETCH_ASSOC)){
				$result['sheet'][] = $row;
			}
			//var_dump($result['sheet']);
			$ficha = $result['sheet'][0]['id_Ficha'];
			
			$stsql ="SELECT * FROM `ataquesmagias` WHERE `id_ficha` = $ficha ORDER BY `tipo`";
			$items = sqlquery($stsql);
			while($row = $items->fetch(PDO::FETCH_ASSOC)){
				$result['mgatks'][] = $row;
			}
			////var_dump($result['atks'][0]);
		}
		//Overlay
		if($_GET['load'] == 'stream'){
			$stsql ="SELECT `num_Mesa`, `nome`,`vida_Atual`,`vida_Maxima`,`vida_Temporaria`,`Aparencia` FROM `ficha` WHERE `id_mesa` = $mesa ORDER BY `num_Mesa`";
			$items = sqlquery($stsql);
			while($row = $items->fetch(PDO::FETCH_ASSOC)){
				$result['charinfo'][] = $row;
			}
			$stsql = "SELECT * FROM `rolls` WHERE `id_mesa` = $mesa AND `id_Roll` = (SELECT MAX(`id_Roll`) FROM `rolls` WHERE `id_mesa` = $mesa)";
			$items = sqlquery($stsql);
			while($row = $items->fetch(PDO::FETCH_ASSOC)){
				$result['rolls'][] = $row;
			}
		}
	}	
		header("Acess-Control-Allow-Origin: *");
		header("Content-Type: application/json");
		
		echo json_encode($result);