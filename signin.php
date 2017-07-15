<?php
  include('header.php');
?>

<?php

require_once('conexion.php');

if (isset($_POST['enviado'])) {

  //Primer error, estas variables deben ir dentro de mi if enviado
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $rol = 1;

  //Creo mi sentencia SQL
  $query = "INSERT INTO usuario
  (usuario, password, rol, nombre, apellidos, email, fechaRegistro)
  VALUES('$usuario', '$password', $rol, '$nombre', '$apellidos' , '$email', NOW())";

  //Ejecuto mi sentencia SQL
  $result = mysqli_query($dbc, $query) or die ('<br>Error al insertar:' .mysqli_error($dbc));

  if ($result) {
    echo '<script language="javascript">
      alert("Te has registrado correctamente, ahora puedes iniciar sesión");
      window.location.href ="ingreso.php";
      </script>';

  }else{

    echo '<script language="javascript">
      alert("Error al registrarte, intenta otra vez");
      window.location.href ="ingreso.php";
      </script>';
  }

}


?>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h2>Registrate</h2>

      <form data-toggle="validator" role="form" method="post" action="registro.php">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" class="form-control" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="nombre">Apellidos</label>
          <input type="text" name="apellidos" class="form-control" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="nombre">Email</label>
          <input type="email" name="email" class="form-control" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="nombre">Usuario</label>
          <input type="text" name="usuario" class="form-control" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="nombre">Password</label>
          <input type="password" name="usuario" class="form-control" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="nombre">Repetir Password</label>
          <input type="password" name="usuario" class="form-control" required>
          <div class="help-block with-errors"></div>
        </div>
        <input type="hidden" name="enviado" value="TRUE">
        <input type="submit" class="btn btn-primary" value="Registrarse">
      </form>


    </div>
  </div>
</div>




<?php
  include('footer.php');
?>
