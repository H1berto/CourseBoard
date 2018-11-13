<?php 	
//Requerimos os arquivos necessarios para uso na classe
require_once 'DB.php';
require_once './src/models/Usuario.php';
require_once './util/APIUtil.php';

Class UsuarioDAO extends Usuario{
	
	function login(){
		$user =null;
		$email = $this->getEmail();
		$senha = $this->getSenha();
		
		try{	
			$sql = DB::getConn()->prepare("SELECT * FROM `usuario` WHERE email=:email AND senha=:senha");
			$sql->bindParam(':email',$email);
			$sql->bindParam(':senha',$senha);
			$sql->execute();
			
			if($sql->rowCount()==1){

				while ($data = $sql->fetch(PDO::FETCH_ASSOC)) {
					
					$user=$data;
					
					 //var_dump($user);
					
				}
			}	

		}catch(PDOException $e){
			

		}

		return $user;

		
	}
	function cadastrar(){
		
		
		$perfil = "admin";
		$email = $this->getEmail();
		$senha =$this->getSenha();
		$nome = $this->getNome();
		$newuser= array();
		
		try{

			// $presql =DB::getConn()->prepare("SELECT `id` FROM `usuario` WHERE `email`=:email");
			// $presql->bindParam(':email',$email);
	  //       $presql->execute();

	  //       if($presql->rowCount()>=1){
	        	
	  //           //Já existe um usuario com esse email
	  //           $newuser= "ready";
			// }else{
             
			    $sqln = DB::getConn()->prepare("INSERT INTO `usuario` SET  `nome`=:nome, `email`=:email, `senha`=:senha, `data_cadastro`=NOW(),`perfil`= :perfil");
			    $sqln->bindParam(':nome',$nome);
			    $sqln->bindParam(':email',$email);
			    $sqln->bindParam(':senha',$senha);
			    $sqln->bindParam(':perfil',$perfil);

			    var_dump($sqln->execute());

			    if ($sqln->rowCount()>=1) {	
					//Usuario cadastrado com sucesso	
					$newuser= "true";

				}       	
			// }

		}catch(PDOException $e){
			
		}

		return $newuser;
	}

}