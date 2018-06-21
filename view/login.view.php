<?php

session_start();
if (isset($_SESSION['user'])) {
	header('Location:dentro.php');
}else{ include('../librerias/motor.php'); ?>

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
    <div class="nav-wrapper blue offset-s4">
      <a href="#" class="brand-logo center">rChacon</a>
      <ul id="nav-mobile" class="right">
        <li><a href="../index.php">Inicio</a></li>
      </ul>
    </div>
  </nav>
</header>

<div class="container">
	<div class="row">
    <div class="col s12 m6 center z-depth-2 card-panel">
      <form class="login-form col s12" action="" method="post">
        <div class="row">
            <img src="../img/login.png" width="100" alt="" class="circle responsive-img valign profile-image-login">
            <p class="login-form-text green-text"><h5>Administracion</h5></p>
        </div>
        <div class="row">
          <div class="input-field col s12 m12">
            <input id="username" name="user" type="text">
            <label for="username" class="center-align">Usuario</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12">
            <input id="password" name="pass" type="password">
            <label for="password">Contraseña</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12 center">
            <input type="submit" name="submit" class="btn blue" value="Login">
          </div>
        </div>
      </form>

    <?php

		if($_POST){

			echo @$user = $_POST['user'];
			echo @$pass = $_POST['pass'];

			Conexion::login($user, $pass);
		}
	?>
    </div>
  </div>

</div>

</body>
</html>

<?php }?>