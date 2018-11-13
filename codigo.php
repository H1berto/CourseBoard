<?php  
// require_once 'src/controllers/UsuarioDAO.php';
require_once 'src/controllers/CodigoAcessoDAO.php';


require_once 'util/APIUtil.php';

switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		

	case 'POST':
		if(isset($_POST['action'])){
		$action = $_POST['action'];
		}else{
			header('Location: cadastro.php?p=form_cadastro');
		}
		switch ($action) {
			 case 'buscar':
			 	CodigoResponse::buscar();
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
	class CodigoResponse {
		
		public static function buscar(){
			$codigo=$_POST['codigo'];
			

		try{
			
			
			$dao = new CodigoAcessoDAO();
			$dao->setCodigo($codigo);
			$response = $dao->buscar();

				if (!is_null($response)) {
					header('Location: cadastro.php?p=form_cadastro');
				} else {
				   
				}

			
		}catch(PDOException $e){
			logErros($e);
			APIUtil::sendJSONResponse(null, 500);
		}

	}
		
	}
