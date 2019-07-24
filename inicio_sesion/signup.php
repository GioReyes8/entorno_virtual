<?php
  require 'database.php';
  $message = '';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado correctamente';
      header("Location:menu_materias.php");
    } else {
      $message = 'Ha habido un problema al crear tu cuenta; intenta de nuevo';
    }
  }
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>EV :: Registro</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body  style="background-color:#F4B400">

  <?php require 'partials/header.php' ?>

  <?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>Registro</h1>
  <span>Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></span>

  <form action="signup.php" method="POST">
    <input class="email" name="email" type="text" placeholder="Correo">
    <input class="password" name="password" type="password" placeholder="Contraseña">
    <input type="submit" value="Aceptar">
  </form>


  <div id="browser_info">
    <span>Estas utilizando Google Chrome.<img src="http://sii.ittla.edu.mx/img/iconos/accept.png" 
    width="15" height="15"
        alt="Correcto..."></span>
    <br>
  </div>


  <footer class="footer">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      Sistema Integral de Información.
      <br>
      Copyright © 2019 Instituto Tecnológico de Tlalnepantla.
      <br>
      Todos los derechos reservados.
      <br>
      Coordinación de Desarrollo de Sistemas - Centro de Cómputo.
      <br>
    </div>
  </footer>

        
</body>
</html>
