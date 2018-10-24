<?php 	
//Requerimos os arquivos necessarios para uso na classe
require_once 'DB.php';
require_once './util/APIUtil.php';

Class RespostaDAO{
	
	function graphResposta1(){
		try{	
				//Criando e instanciando as variaveis necessarias
				$rows = array();
                $APIUtil = new APIUtil();
               //Script SQL para solicitar as respostas da pergunta 1 do questionario
                $sql = DB::getConn()->prepare("SELECT DISTINCT resposta.descricao AS genero,COUNT(resposta.descricao) AS quantidade FROM `resposta` INNER jOIN `pergunta`ON resposta.Pergunta_id = pergunta.id WHERE Pergunta_id =1 AND pergunta.Questionario_id=1 GROUP BY resposta.descricao");
                 $sql->execute();
               //Retorna todos os dados em um array
                 $response = $sql->fetchAll();
   				
   				//Iterando os valores retornados no array e adicionando em rows para se gerar o JSON 
                foreach($response as $row){
					$temp = array();
					$temp[] = array('v' => $row["genero"]);
					$temp[] = array('v' => floatval($row["quantidade"]));
					$rows[] = array('c' => $temp);	
				}	
				//Faz a chamada do metodo BuildChartJSON na classe APIUtil, passando como parametro as colunas e as linhas que iram ser enviados via JSON
                  $json =$APIUtil::buildChartJSON('genero','quantidade',$rows);
 

		}catch(PDOException $e){
			logErros($e);

		}

		
	}

}