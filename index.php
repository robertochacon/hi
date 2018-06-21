<?php
include('librerias/motor.php');
session_start();
if (isset($_SESSION['user'])) {
	header('location:view/dentro.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
</head>
<body>
<header>
  <nav class="row">
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo center">rChacon</a>
      <ul id="nav-mobile" class="right">
        <li><a href="view/login.view.php">Login</a></li>
      </ul>
    </div>
  </nav>
</header>

<div class="container">
	<div class="row">

	</div>
</div>
</body>
</html>