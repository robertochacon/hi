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

	public function consultar($sql){
		$cx = self::getConexion();
		$ResultSet = mysqli_query($cx, $sql);
		$resultado = array();
		while ($filas = mysqli_fetch_array($ResultSet)) {
			$resultado[] = $filas;
		}
		return $resultado;
	}

	public function login($usuario, $clave){
		$con = self::getConexion();
		$sql = "SELECT * FROM users WHERE usuario = '{$usuario}' AND clave = '{$clave}'";
		$query = mysqli_query($con, $sql);
		$verify = mysqli_num_rows($query);

		if ($verify >= 1) {
			session_start();
			$datos = mysqli_fetch_array($query);
			$_SESSION['id'] = $datos['id'];
			$_SESSION['user'] = $datos['usuario'];
			$_SESSION['role'] = $datos['role'];

			header("Location: ../view/dentro.php");
			
		}else{
			echo "sorry baby";
		}
	}

	public function __destruct(){
		mysqli_close($this->conn);
	}

}

?>