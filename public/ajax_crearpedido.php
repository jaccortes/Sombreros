<?php
require_once('pedidosModel.php');

$passObj=new pedidosModel();

$data=$passObj->setPedido($_POST['numeropedido'],$_POST['ca1'],$_POST['ca2'],$_POST['ca3'],$_POST['ca4'],$_POST['pr1'],$_POST['pr2'],$_POST['pr3'],$_POST['pr4'],$_POST['va1'],$_POST['va2'],$_POST['va3'],$_POST['va4'],$_POST['vt1'],$_POST['vt2'],$_POST['vt3'],$_POST['vt4'],$_POST['nom'],$_POST['dir'],$_POST['tel'],$_POST['ced']);
		
$val=array();
	
$val[0]['creacion']="true";

echo json_encode($val);

?>