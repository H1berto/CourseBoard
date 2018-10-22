<?php 	

require_once './app/Database/DB.php';
require_once './src/models/Resposta.php';
require_once './util/APIUtil.php';

Class RespostaDAO extends Resposta{

	/**
	 * REQUEST METHOD POST(testes estão em GET)
	 * Função para verificação do usuario
	 * @param  $email [é o email do objeto Usuario]
	 * @param  $senha [é a senha do objeto Usuario]
	 * @return $user [retorna um objeto Usuario com as informações do banco de dados]
	 */
	function graphResposta1(){
		

		try{
				$rows = array();
                $APIUtil = new APIUtil();
               
                 $i=0;
                 $sql = DB::getConn()->prepare("SELECT DISTINCT resposta.descricao AS genero,COUNT(resposta.descricao) AS quantidade FROM `resposta` INNER jOIN `pergunta`ON resposta.Pergunta_id = pergunta.id WHERE Pergunta_id =1 AND pergunta.Questionario_id=1 GROUP BY resposta.descricao");
                 $sql->execute();
               
                 $response = $sql->fetch(PDO::FETCH_ASSOC);
                  
                foreach($response as $row){
					$temp = array();

					//Values
					$temp[] = array('v' => (string) $row['genero']);
					$temp[] = array('v' => (float) $row['quantidade']);
					$rows[] = array('c' => $temp);	
				}	
                  $json =$APIUtil::buildChartJSON('genero','quantidade',$rows);
 

		}catch(PDOException $e){
			logErros($e);

		}

		
	}

}