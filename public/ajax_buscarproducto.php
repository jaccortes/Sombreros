<?php
require_once('productoModel.php');

if(isset($_POST['textnompro']) && strlen(trim($_POST['textnompro']))>0){
	$passObj=new productoModel();
	
	$data=$passObj->getPro($_POST['textnompro']);
    $val=array();
        
	if(isset($data[0]['pro_nombre'])  && strlen(trim($data[0]['pro_nombre']))>0){
		$data[0]['pro_nombre']="falsoproducto";
		echo json_encode($data);
	}else{
	    $data[0]['pro_nombre']="crear";
		echo json_encode($data);
	}
}


?>