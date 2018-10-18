<?php 	

require_once './app/Database/DB.php';
require_once './src/models/Questionario.php';

Class QuestionarioDAO extends Questionario{

	/**
	 * REQUEST METHOD POST(testes estão em GET)
	 * Função para verificação do usuario
	 * @param  $email [é o email do objeto Usuario]
	 * @param  $senha [é a senha do objeto Usuario]
	 * @return $user [retorna um objeto Usuario com as informações do banco de dados]
	 */
	function searchQuestionario(){
		$id = $this->getid();
		$perguntas = 0;
		
		try{
			
			$sqlu = DB::getConn()->prepare("SELECT COUNT(DISTINCT descricao) FROM `pergunta` WHERE Questionario_id=:questionario");
			$sqlu->bindParam(':questionario',$id);
			
			$sqlu->execute();
			
			if($sqlu->rowCount()==1){

				while ($data = $sqlu->fetch(PDO::FETCH_ASSOC)) {
					
					$perguntas=$data;
					
					// var_dump($user);
					
				}

			}	

		}catch(PDOException $e){
			logErros($e);

		}

		 return $perguntas;
	}

}