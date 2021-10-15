<?php
require_once('pedidosModel.php');


if(isset($_POST['numped']) && strlen(trim($_POST['numped']))>0){
	
	$factObj=new pedidosModel();
	
	$datosfac=$factObj->delPed($_POST['numped']);

	$val=array();
		
	$val[0]['eliminacion']="true";

	echo json_encode($val);
			

}
?>