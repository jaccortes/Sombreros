<?php
require_once('conexion.php');


class productoModel{

	private $tabla 		= "productos";

	
	public function __construct(){
		
	}
	public function getProid($id){
		$sql = "Select * from {$this->tabla} where proid= '{$id}'";
		$data = conexion::consulta($sql);
		$clienteweb = array();
		foreach($data as $key => $valor){
			$clienteweb[]=$valor;
		}
		return $clienteweb;
	}	
	public function getPro($id){
		$sql = "Select * from {$this->tabla} where pro_nombre= '{$id}'";
		$data = conexion::consulta($sql);
		$clienteweb = array();
		foreach($data as $key => $valor){
			$clienteweb[]=$valor;	
		}
		return $clienteweb;
	}
	public function setPro($no,$va){
		$sql = "INSERT INTO {$this->tabla} (pronom,proval,proprov,estado) VALUES('$no',$va,1,'ACTIVO')";
		$data = conexion::ejecutar($sql);
	}
	public function getProductos(){
		$sql = "Select * from {$this->tabla}";
		$data = conexion::consulta($sql);
		$clienteweb = array();
		foreach($data as $key => $valor){
			$clienteweb[]=$valor;
		}
		return $clienteweb;
	}	
	public function delPro($id){
		$sql = "UPDATE {$this->tabla} set estado='INACTIVO' WHERE proid= '{$id}'";
		$data = conexion::ejecutar($sql);
	}		
	public function updPro($id,$no,$va){
		$sql = "UPDATE {$this->tabla} set pronom='$no',proval='$va' WHERE proid= '{$id}'";
		$data = conexion::ejecutar($sql);
	}	
}

?>