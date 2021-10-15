<?php
require_once('conexion.php');


class pedidosModel{

	private $tabla 		= "pedidos";

	
	public function __construct(){
		
	}
	public function getPed($id){
		$sql = "Select * from {$this->tabla} where ped_codigo= '{$id}'";
		$data = conexion::consulta($sql);
		$clienteweb = array();
		foreach($data as $key => $valor){
			$clienteweb[]=$valor;
		}
		return $clienteweb;
	}	
	public function updPed($id,$di,$te){
		$sql = "update {$this->tabla} set ped_clidir='$di',ped_clicel='$te' where ped_codigo= '{$id}'";
		$data = conexion::ejecutar($sql);
		return $data;
	}			
	public function delPed($id){
		$sql = "delete from {$this->tabla} where ped_codigo= '{$id}'";
		$data = conexion::ejecutar($sql);
		return $data;
	}		
	public function setPedido($no,$ca1,$ca2,$ca3,$ca4,$pr1,$pr2,$pr3,$pr4,$va1,$va2,$va3,$va4,$st1,$st2,$st3,$st4,$nom,$dir,$tel,$ced){
		if($ca1>0){
			$sql = "INSERT INTO pedidos (ped_idprod, ped_clinom, ped_clidir, ped_clicel, ped_cliced, ped_estado, ped_canprod, ped_codigo,ped_valoru,ped_subt) VALUES ('$pr1', '$nom', '$dir', '$tel', '$ced', 'EN ALISTAMIENTO','$ca1','$no','$va1','$st1')";
			$data = conexion::ejecutar($sql);
		}
		
		if($ca2>0){
			$sql = "INSERT INTO pedidos (ped_idprod, ped_clinom, ped_clidir, ped_clicel, ped_cliced, ped_estado, ped_canprod, ped_codigo,ped_valoru,ped_subt) VALUES ('$pr2', '$nom', '$dir', '$tel', '$ced', 'EN ALISTAMIENTO','$ca2', '$no','$va2','$st2')";
			$data = conexion::ejecutar($sql);
		}
		if($ca3>0){
			$sql = "INSERT INTO pedidos (ped_idprod, ped_clinom, ped_clidir, ped_clicel, ped_cliced, ped_estado, ped_canprod, ped_codigo,ped_valoru,ped_subt) VALUES ('$pr3', '$nom', '$dir', '$tel', '$ced', 'EN ALISTAMIENTO','$ca3', '$no','$va3','$st3')";
			$data = conexion::ejecutar($sql);
		}
		if($ca4>0){
			$sql = "INSERT INTO pedidos (ped_idprod, ped_clinom, ped_clidir, ped_clicel, ped_cliced, ped_estado, ped_canprod, ped_codigo,ped_valoru,ped_subt) VALUES ('$pr4', '$nom', '$dir', '$tel', '$ced', 'EN ALISTAMIENTO','$ca4', '$no','$va4','$st4')";
			$data = conexion::ejecutar($sql);
		}
	}
}

?>