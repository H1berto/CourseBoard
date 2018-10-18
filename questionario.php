<?php 
	require_once './DB.php';
 
	/**
	 * 
	 */
	class QuestionarioResponse {
		
		public static function searchQuestionario($id){


		try{
			$dao = new QuestionarioDAO();
			$dao->_setId($id);
			$response = $dao->searchQuestionario();

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