<?php
	function dbconnect(){
		//Criando conexão com o Banco de Dados e Verificando a conexão
		$hostname="Coloque seu Host aqui";
		$username="Username do Banco de dados";
		$password="Senha do Banco de dados";
		$dbname="Nome do Banco";
		
		try {
		  $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
		return $conn;
	}
	function dbclose(){
		$conn->close();
	}
	function dbquery($act,$tab,$where,$what){
		Switch($act){
			case 'SELECT': $sql = "SELECT $where FROM ` $tab`";
			
			case 'INSERT': $sql = "INSERT INTO ` $tab`  ($where) VALUES ($what)";
			
			case 'DELETE': $sql = "DELETE  FROM ` $tab`  ($where)";
		}
		
	}
	
	function sqlquery($sql){
		$conn = dbconnect();
		$result = $conn->query($sql);
		return $result;
	}
	
	function sqlrowcount($sql){
		$query = sqlfatch($sql);
		$result = count($query);
		return $result;
	}
	
	function sqlfatch($sql){
		$query = sqlquery($sql);
		$result = $query->fetch(PDO::FETCH_ASSOC);
		return $result;
	}
	function cript($pass){
		$fphase = base64_encode($pass);
		$sphase = md5($fphase);
		$tphase = sha1($sphase);
		$lphase = base64_encode($tphase);
		return $lphase;
	}
?>