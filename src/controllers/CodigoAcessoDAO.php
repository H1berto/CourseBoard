<?php 	
//Requerimos os arquivos necessarios para uso na classe
require_once 'DB.php';
require_once './src/models/Codigo_Acesso.php';
require_once './util/APIUtil.php';

Class CodigoAcessoDAO extends CodigoAcesso{
	
	function buscar(){
		$acesso =null;
		$codigo = $this->getCodigo();
		
		
		try{	
			$sql = DB::getConn()->prepare("SELECT * FROM `codigo_acesso` WHERE codigo=:codigo AND ativo=1");
			$sql->bindParam(':codigo',$codigo);
			$sql->execute();
			
			if($sql->rowCount()==1){

				while ($data = $sql->fetch(PDO::FETCH_ASSOC)) {
					
					$acesso=$data;
					
					 //var_dump($user);
					
				}
			}	

		}catch(PDOException $e){
			

		}

		return $acesso;

		
	}

}