<?php 
	
 
// require_once 'src/controllers/UsuarioDAO.php';
require_once 'RespostaDAO.php';
require_once 'util/APIUtil.php';
switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		

	case 'POST':
		$action = $_POST['action'];
		switch ($action) {
			 case 'grafico1':
			 	RespostaResponse::grafico1();
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
	class RespostaResponse {
		
		public static function grafico1(){


		try{
			$dao = new RespostaDAO();
			$response = $dao->graphResposta1();

				if (!is_null($response)) {
					return $response;
				} else {
						
				}

			
		}catch(PDOException $e){
			logErros($e);
			APIUtil::sendJSONResponse(null, 500);
		}

	}
		
	}





 ?>