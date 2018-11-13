<?php  
// require_once 'src/controllers/UsuarioDAO.php';
require_once 'src/controllers/UsuarioDAO.php';
require_once 'src/models/Usuario.php';

require_once 'util/APIUtil.php';
switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		

	case 'POST':
		$action = $_POST['action'];
		switch ($action) {
			 case 'login':
			 	UsuarioResponse::login();
			 	die();
			 case 'cadastro':
			 	UsuarioResponse::cadastro();
			 	die();	
			
		}
		
		break;
	

	case 'PUT':
		break;

	case 'DELETE':
		break;
}
	/**
	 * 
	 */
	class UsuarioResponse {
		
		public static function login(){
			$email=$_POST['email'];
			$senha=$_POST['senha'];

		try{
			
			
			$dao = new UsuarioDAO();
			$dao->setEmail($email);
			$dao->setSenha($senha);
			$response = $dao->login();

				if (!is_null($response)) {
					header('Location: views/index.php');
				} else {
				    var_dump($response);
				}

			
		}catch(PDOException $e){
			logErros($e);
			APIUtil::sendJSONResponse(null, 500);
		}

	}

	public static function cadastro(){
			$nome =$_POST['nome'];
			$email=$_POST['email'];
			$senha=$_POST['senha'];
			

		try{
			
			$dao = new UsuarioDAO();
			$dao->setNome($nome);
			$dao->setEmail($email);
			$dao->setSenha($senha);
			$response = $dao->cadastrar();

				if ($response=="true") {
					header('Location: views/index.php');
				} else {
				    
				}

			
		}catch(PDOException $e){
			logErros($e);
			APIUtil::sendJSONResponse(null, 500);
		}

	}
		
	}


