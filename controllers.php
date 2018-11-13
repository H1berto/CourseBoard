<?php 


require_once 'util/APIUtil.php';

$APIUtil = new APIUtil();

$authAPI = file_get_contents('php://input');
$obj = json_decode($authAPI,TRUE);
$controller = $_POST['controller'];
// $keyRequest = $_POST['keyAPI'];
// $keyAPI = $APIUtil->getKeyAPI();


switch ($controller) {
	case 'questionario':
		include 'questionario.php';
		break;

	case 'resposta':
		include 'resposta.php';
		break;

	case 'pergunta':
		include 'pergunta.php';
		break;

	case 'usuario':
		include 'usuario.php';
		break;

	case 'codigo':
		include 'codigo.php';
		break;
	default:
		
		break;
}

 ?>
 ?>