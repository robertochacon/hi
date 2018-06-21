<?php 
include('../librerias/motor.php');
//Roberto Chacon A.
//2016-4296
$mensaje = "";

function getError(){}
set_error_handler("getError");


if ($_POST) {
	//validando datos
	$verificando = true;
	foreach ($_POST as $key => $val) {
		if ($val =="") {
			$mensaje .= "<li>El campo {$key} esta vacio</li>";
			$verificando = false;
		}
	}
	//verificando los datos
if ($verificando) {
		
	extract($_POST);
	$conn = mysqli_connect($host, $user, $password);

	if ($conn) {

	$sql = "CREATE DATABASE IF NOT EXISTS `{$database}`";
	mysqli_query($conn, $sql);
	mysqli_select_db($conn, $database);

	//primera tabla
	$sql = "
	CREATE TABLE `users` (
		`id` INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`usuario` VARCHAR (50) NOT NULL,
		`clave` VARCHAR (50) NOT NULL,
		`role` VARCHAR (30) NOT NULL,
		`fecha` DATE
		);";

	mysqli_query($conn, $sql);


	$sql_1 = "
	CREATE TABLE `publicaciones` (
		`id` INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`usuario` VARCHAR (50) NOT NULL,
		`descripcion` VARCHAR (900) NOT NULL,
		`estado` VARCHAR (30) NOT NULL,
		`imagen` VARCHAR (50) NOT NULL,
		`fecha`  DATE
		);";

	mysqli_query($conn, $sql_1);

	$insert_user = "INSERT INTO users(usuario,clave,role,fecha) VALUES ('admin','3sf4c1l','admin',NOW())";
	mysqli_query($conn, $insert_user);	


$config = <<<CONF
	<?php
	define("DB_HOST", "{$host}");
	define("DB_USER", "{$user}");
	define("DB_PASSWORD", "{$password}");
	define("DB_NAME", "{$database}");
CONF;

	//agregando datos a las constantes en el archivo config
	file_put_contents("../librerias/config_db.php", $config);

	//redirecionando
	echo "<script>window.location = '../index.php'; </script>";
			//header('Location:install.php');
			exit();

	}else{
		$mensaje = "Existen datos incorrectos";
	}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Install</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
	
<div class="container bg-light">
<div class="jumbotron">
		<div class="alert alert-danger" role="alert" align="center">
			<h1>Configuracion (;</h1>
			<h4>Aqui puedes configurar tu base de datos</h4>
		</div>
	<div class="col-md-6">
		<form action="" method="post" class="text-primary">
		  <?php input("host","Host");?>
		  <?php input("user","User");?>
		  <?php input("password","Password");?>
		  <?php input("database","Database");?>
		  <input type="submit" class="btn btn-primary" value="Guardar">
		</form>
		<br>
		<div class="text-danger">
			<h4><?php echo $mensaje;?></h4>
		</div>
	</div>
</div>

</div>
</body>
</html>