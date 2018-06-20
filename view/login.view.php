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
    <div class="nav-wrapper green offset-s4">
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
            <input id="username" type="text">
            <label for="username" class="center-align">Usuario</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12">
            <input id="password" type="password">
            <label for="password">Contraseña</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12 center">
            <a href="index.html" class="btn waves-effect waves-light green col s12">Login</a>
          </div>
        </div>

      </form>
    </div>
  </div>

</div>

</body>
</html>