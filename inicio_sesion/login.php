<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: login.php');
  }

  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results)> 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Locationn: index.php');
      $message = 'Acceso satisfactorio';
    } else {
      $message = 'Error, los campos no coinciden';
    }
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>EV :: Inicio de sesión</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>

<body style="background-color:#82ACFF">
  <?php require 'partials/header.php' ?>

  <?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
  <?php endif; ?>

  <h1>Inicio de sesión</h1>
  <span>Todavía sin una cuenta? <a href="signup.php">Registrate</a></span>


 <!-- <form action="html/menu_materias.html" method="POST">-->
 <form action="login.php" method="POST">
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