<?php 
// include('../librerias/motor.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/materialize.min.js"></script>
</head>
<body>
<header>
  <nav class="row">
    <div class="nav-wrapper pink offset-s4">
      <a href="#" class="brand-logo center"><?php echo $_SESSION['user']; ?></a>
      <ul id="nav-mobile" class="right">
        <li><a href="../index.php">Perfil</a></li>
        <li><a href="../index.php">Post</a></li>
        <li><a href="../index.php">Configuracion</a></li>
        <li><a href="../model/salir.php">Salir</a></li>
      </ul>
    </div>
  </nav>
</header>