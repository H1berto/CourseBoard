<?php 
	require_once './DB.php';
 
	/**
	 * 
	 */
	class QuestionarioResponse {
		
		public static function quantidadePerguntas($id){


		try{
			$dao = new QuestionarioDAO();
			$dao->_setId($id);
			$response = $dao->quantidadePerguntas();

				if (!is_null($response)) {
					return $response;
				} else {
						
				}

			} 
		}catch(PDOException $e){
			logErros($e);
			APIUtil::sendJSONResponse(null, 500);
		}

	}
		
	





 ?>