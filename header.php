<?php if (!isset($_SESSION)) {@session_start();}?>



<?php $rol = $_SESSION['rol']; ?>


<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Mi primera página con Bootstrap</title>
  <!-- Agregando tipografias -->
  <link href="https://fonts.googleapis.com/css?family=Vibur" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Mogra" rel="stylesheet">

  <meta name="author" content="Omar Hdez">    
  <meta name="description" content="Sitio de pruebas para curso de desarrollo web LKE BUAP"/>
  <meta name="keywords" content="Desarrollo web, pruebas, curso, sitio">

  <meta name="theme-color" content="#000000">


  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- Agregando archivo de iconos -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- container-fuid-->

  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" 
        data-toggle="collapse" data-target="#navbar" 
        aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand mogra titulo" href="index.php">Omar Hernández</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="acercade.php">Acerca de</a></li>
          <li><a href="quienes-somos.php">Quiénes somos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if ($rol == 1): ?>
            <li><p class="navbar-text">Hola: Admin</p></li>
          <?php endif ?>
          <?php if ($rol == 2) { ?>
            <li><a href="restringido.php">Página personal</a></li>
            <li><a href="salir.php">cerrar sesión</a></li>
          <?php  }else{?>
          <li><a href="registro.php">Registro</a></li>
          <li><a href="ingreso.php">Iniciar sesión</a></li>
          <?php }?>
        </ul>
      </div>
    </div>
  </nav>


