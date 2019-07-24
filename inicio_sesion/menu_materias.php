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
<html>

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


  <title>EV :: Materias</title>
</head>



<body>


  <header>
    <!-- Imagenes de encabezado -->
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
          <li><a href="logout.php">Cerrar sesion <?= $user['email']; ?></a></li>
        </ul>
      </li>

    </ul>
  </nav>


  <div class="container">
    <h1 class="texto">Entorno Virtual</h1>
    <h1 class="texto">Instituto Tecnológico </h1>
    <h1 class="texto">de Tlalnepantla</h1>
  </div>

  <!-- Formulario de registro -->
  <form align="center" action="/action_page.php">
    <fieldset>
      <legend>Seleccion de materias</legend>

      <div class="container"></div>


      <div class="dropdown">
        <h4 class="span">Calculo diferencial</h4>
          <br>
          <a href="Calculo_diferencial_U1.php">Unidad 1. Números reales.</a>
          <br>
          <a href="Calculo_diferencial_U2.php">Unidad 2. Funciones.</a>
          <br>
          <a href="Calculo_diferencial_U3.php">Unidad 3. Límites y continuidad.</a>
          <br>
          <a href="Calculo_diferencial_U4.php">Unidad 4. Derivadas.</a>
          <br>
          <a href="Calculo_diferencial_U5.php">Unidad 5. Aplicaciones de la derivada.</a>
      </div>

      <div class="dropdown">
        <h4 class="span">Fundamentos de programación</h4>
          <br>
          <a href="Calculo_diferencial_U1.php">Unidad 1. Fundamentos de programación orientada a objetos</a>
          <br>
          <a href="Calculo_diferencial_U2.php">Unidad 2. Metodología de solución de problemas</a>
          <br>
          <a href="Calculo_diferencial_U3.php">Unidad 3. Acercamiento a las clases y objetos</a>
          <br>
          <a href="Calculo_diferencial_U4.php">Unidad 4. Herramientas de programación orientada a objetos</a>
          <br>
          <a href="Calculo_diferencial_U5.php">Unidad 5. Estructuras de control.</a>
      </div>

      <div class="dropdown">
        <h4 class="span">Matemáticas Discretas I</h4>
          <br>
          <a href="Calculo_diferencial_U1.php">Unidad 1. Sistemas Numéricos</a>
          <br>
          <a href="Calculo_diferencial_U2.php">Unidad 2. Lógica Proposicional</a>
          <br>
          <a href="Calculo_diferencial_U3.php">Unidad 3. Álgebra Booleana</a>
          <br>
          <a href="Calculo_diferencial_U4.php">Unidad 4. Conjuntos y Relaciones</a>
      </div>

      <div class="dropdown">
        <h4 class="span">Introducción a las TIC’s</h4>
          <br>
          <a href="Calculo_diferencial_U1.php">Unidad 1. Conceptos básicos</a>
          <br>
          <a href="Calculo_diferencial_U2.php">Unidad 2. Clasificación del software</a>
          <br>
          <a href="Calculo_diferencial_U3.php">Unidad 3. Tecnologías Web </a>
          <br>
          <a href="Calculo_diferencial_U4.php">Unidad 4. Modelos de negocio en Internet </a>
      </div>

      <div class="dropdown">
        <h4 class="span">Taller de Ética</h4>
          <br>
          <a href="Calculo_diferencial_U1.php">Unidad 1. El sentido de aprender sobre ética.</a>
          <br>
          <a href="Calculo_diferencial_U2.php">Unidad 2. La ética en la ciencia y la tecnología</a>
          <br>
          <a href="Calculo_diferencial_U3.php">Unidad 3. Ética en el ejercicio de la profesión. </a>
          <br>
          <a href="Calculo_diferencial_U4.php">Unidad 4. La ética en las instituciones y organizaciones. </a>
      </div>

      <div class="dropdown">
        <h4 class="span">Fundamentos de Investigación</h4>
          <br>
          <a href="Calculo_diferencial_U1.php">Unidad 1. Conceptos básicos de fundamentos de investigación
            como proceso de construcción social.</a>
          <br>
          <a href="Calculo_diferencial_U2.php">Unidad 2. Herramientas de la comunicación oral y escrita 
            en la investigación documental</a>
          <br>
          <a href="Calculo_diferencial_U3.php">Unidad 3. Estudio del desarrollo de su profesión y su estado actual </a>
          <br>
          <a href="Calculo_diferencial_U4.php">Unidad 4. Proceso de elaboración de una investigación documental </a>
      </div>


      </div>
    </fieldset>
  </form>

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