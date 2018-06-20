<?php

class Conexion{

public static $objeto = null;
public $conn;
 
	public function getConexion(){
		if (self::$objeto == null) {
			self::$objeto = new Conexion();
		}

		return self::$objeto->conn;
	}

	public function __construct(){
		$this->conn =  mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("<script>window.location='view/install.php'</script>");
	}

	public function ejecutar($sql){
		$cx = self::getConexion();
		mysqli_query($sql);
		return true;
	}

	public function consultar(){
		$cx = self::getConexion();
		$ResultSet = mysql_query($sql);
		$resultado = array();
		while ($filas = mysqli_fetch_array($ResultSet)) {
			$resultado[] = $filas;
		}
	}

	public function __destruct(){
		mysqli_close($this->conn);
	}

}

?>