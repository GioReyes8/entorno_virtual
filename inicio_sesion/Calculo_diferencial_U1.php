<?php
  session_start();
  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;

  }
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Libreria Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!--el Explorer 8 interpretará las media queries.-->
  <script scr="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

  <title>EV :: Calculo Diferencial U1</title>
</head>




<body>


  <header>
    <div class="encabezado">
      <img class="imagen" src="imagenes/ITTLA.jpg" alt="No se puede mostrar la imagen" title="Logo ITTLA" align="left">

      <img class="imagen" src="imagenes/luna.jpg" alt="No se puede mostrar la imagen" title="Logo luna" align="center">

      <img class="imagen" src="imagenes/TecN.png" alt="No se puede mostrar la imagen" title="Logo TecN" align="right">
    </div>
  </header>



  <!-- Menu de navegacion-->
  <nav class="navegacion" id="nav">
    <ul class="menu">

      <li><a href="menu_materias.php">MATERIAS</a></li>

      <li><a href="">QUIENES SOMOS</a></li>

      <li><a href="">REDES SOCIALES</a>
        <ul class="submenu">
          <li><a href="">Facebook</a></li>
          <li><a href="">Twitter</a></li>
          <li><a href="">Whatsapp</a></li>
          <li><a href="http://www.tlalnepantla.tecnm.mx">Página de la escuela</a></li>
        </ul>
      </li>

      <li><a href="">PERFIL</a>
        <ul class="submenu">
          <li><a href="">Informacion</a></li>
          <li><a href="logout.php">Cerrar sesion</a></li>
        </ul>
      </li>

    </ul>
  </nav>


  <div class="container">
    <h1 class="texto">Entorno Virtual </h1>
    <h1 class="texto">Instituto Tecnológico </h1>
    <h1 class="texto">de Tlalnepantla</h1>

    <h2 class="texto">Calculo diferencial</h2>

    <h3 class="texto">Unidad 1. Números reales.</h3>
  </div>


  <!-- Link del video a usar -->
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <iframe class="frame" width="480" height="280"
          src="https://docs.google.com/forms/d/e/1FAIpQLSfcMLFdP7CfHx4BCtl5hi4jmLBku7TixwN7gNeeKHTAMUjgEQ/viewform?embedded=true"
          width="640" height="1073" frameborder="0" marginheight="0" marginwidth="0">Loading...>
        </iframe>
      </div>

      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <iframe class="frame" width="480" height="280" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=1">
        </iframe>
      </div>

    </div>
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
      <div id="browser_info">
        <span>Estas utilizando Google Chrome.
          <img src="imagenes/accept.png" width="15" height="15" alt="Correcto..."></span>
        <br> </div>
    </div>
  </footer>


</body>



</html>