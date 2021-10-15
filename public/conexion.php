<?php
class conexion{

	static public function conectar(){
		$Server 		= "127.0.0.1:3306";
		$Username 		= "sombrero";      
		$Password		= "sombrero"; 
		$Bdoname 		= "sombreros";

		$handle 		= @mysqli_connect($Server, $Username, $Password, $Bdoname);

		@mysqli_set_charset($handle, "utf8");
		return $handle;
	}
	static public function desconectar($conn){
		mysqli_close($conn);
		return;
	}	
	static public function consulta($query){
		$idhand=conexion::conectar();
		@mysqli_set_charset($handle, "utf8");
		$result = mysqli_query($idhand,$query);
		$datos = array();
		while($row = @mysqli_fetch_array ($result)) {
			$datos[] = $row;	
		}
		conexion::desconectar($idhand);
		return $datos;
	}
	static public function ejecutar($query){
		$idhand=conexion::conectar();
		@mysqli_set_charset($handle, "utf8");
		$result = mysqli_query($idhand,$query);
		conexion::desconectar($idhand);
		return $result;
	}	
}
?>