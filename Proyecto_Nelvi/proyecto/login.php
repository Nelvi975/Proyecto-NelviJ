<?php
/*
  session_start();

  if(isset($_SESSION['user_id']))
  {
    header('Location: index.php');
  }

  require 'database.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $sql = $conn->prepare('SELECT id, usuario, password, cargo FROM usuarioss WHERE usuario = :usuario');
    $sql->bindParam(':usuario', $_POST['usuario']);

    $sql->execute();
    $results = $sql->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if ($results > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /proyecto");
    } else {
      $message = 'esta cuenta no existe';
    }


  }
*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio de sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
  body {
	font-size: 16px;
	font-family: 'Raleway', sans-serif;
	
	color:#fff;
	background: #F7BFBE !important;
}

.formulario {
    background: transparent;
    padding: 30px;
    margin-bottom: 30px;
}

.buttonSS {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    background-color: #008CBA;
    margin-left: 35%;
}
  
  </style>
  <body>


    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
<div class="contenedor">
        <h1 class="titulo">Iniciar sesion</h1>
        <hr class="border">

    <form action="login.php" method="POST" class="formulario">
      <div class=form-group>
      <input type="text" name="usuario" class="usuario" placeholder="ingrese usuario">
      </div>
      <div class=form-group>
      <input type="password" name="password" class="password" placeholder="ingrese contraseña">
      </div>

      <input type="submit" class="buttonSS" value="Ingresar" style="padding:15px;">
    </form>
    <h3 class="titulo">no tienes una cuenta?<br> <a href="signup.php">Registrate</a></h3>
  </body>
</html>
