<?php

class APIUtil {

	public static function sendJSONResponse($response = null, $code = 500) {
		header('HTTP/1.1 ' . $code . ' ' . APIUtil::getStatusCode($code));
		header('Content-type: application/json; charset=utf-8');
		header('Connection: close', false);

		if (is_null($response)) {
			$response = json_encode(APIUtil::getStatusCode($code), JSON_UNESCAPED_UNICODE);
		} else {
			$response = json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
		}

		echo $response;
	}

	public static function buildChartJSON($col1,$col2,$response){
		//Criando um array
		$table = array();
		
		//Inserindo no indice 'cols', um array que tem como valores, outros dois arrays com as colunas do grafico que será gerado
		$table['cols'] = array(
			array('id' => "", 'label' => $col1, 'type' => 'string'),
			array('id' => "", 'label' => $col2, 'type' => 'number'),
		);

		//Inserindo no indice 'rows', o parametro $response a qual a função recebe
		$table['rows'] = $response;

		//Gerando um arquivo JSON com o array table
		$jsonTable = json_encode($table, true);
		//Mostrando o JSON
		echo $jsonTable;
		

	}

	
	/**
	 * Verifica se os parâmetros em um verbo determinado estão devidamente setados
	 * @param $method deve ser passado o objeto do verbo HTTP correspondente
	 * ($_GET, $_POST, $_PUT ou $_DELETE)
	 * @param $params deve ser um array com os nomes dos parâmetros esperados
	 */

	public static function requisicaoValida($method, $params) {
		$isSetted = true;

		for ($index=0; $index < sizeof($params); $index++) {
			if (isset($method[$params[$index]])) {
				if (is_null($method[$params[$index]])) {
					$isSetted = false;
				}
			} else {
				$isSetted = false;
			}
		}

		return $isSetted;
	}

	public static function getKeyAPI(){
		$key = "48ff7dfa608119e38839a672bf330b98";
		return $key;

	}

	private static function getStatusCode($code) {
		$status = array(  
            200 => 'OK',
            201 => 'Sucesso',
            400 => 'Requisição inválida',
            403 => 'Proibido',
            404 => 'Não encontrado',
            405 => 'Método não permitido',
            500 => 'Erro interno no servidor'
        );

		return $status[$code];
	}
}

?>