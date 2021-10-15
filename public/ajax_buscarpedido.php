<?php
require_once('pedidosModel.php');


if(isset($_POST['numped']) && strlen(trim($_POST['numped']))>0){
	
	$factObj=new pedidosModel();
	
	$datosfac=$factObj->getPed($_POST['numped']);

	if(isset($datosfac[0]['ped_codigo'])){
		echo json_encode($datosfac);
	}else{
		$datosfac[0]['ped_codigo']="falsofactura";
		echo json_encode($datosfac);
	}
			

}
?>