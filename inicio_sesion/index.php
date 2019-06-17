<?php
  session_start();
  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>

<head>
  <title>Entorno Viartual :: ITTLA</title>
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Libreria Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--el Explorer 8 interpretará las media queries.-->
  <script scr="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
</head>

<body style="background-color:#c4c4c4">

  <?php require 'partials/header.php' ?>

  <?php if(!empty($user)): ?>
  <br> Bienvenido
  <br>Estás logeado como "<?= $user['email']; ?>"
  <a href="logout.php">Cierra sesion</a>
  <?php else: ?>

  <form>
    <h2>Bienvenid@</h2>
    <h3><a href="login.php">Inicia Sesion</a></h3>
    <h3>ó</h3>
    <h3><a href="signup.php">Registrate</a></h3>
    <?php endif; ?>
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