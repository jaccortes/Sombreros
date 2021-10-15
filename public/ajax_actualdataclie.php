<?php
require_once('pedidosModel.php');


if(isset($_POST['numped']) && strlen(trim($_POST['numped']))>0){
	
	$factObj=new pedidosModel();
	
	$datosfac=$factObj->updPed($_POST['numped'],$_POST['numdir'],$_POST['numtel']);

	$val=array();
		
	$val[0]['actual']="true";

	echo json_encode($val);
			
			

}
?>