<?php
  include('header.php');
?>
<?php

if(isset($_POST['enviado'])){
  require_once("conexion.php");

    $u = $_POST['usuario'];
    $p = $_POST['password'];

    $query = "SELECT idUsuario, usuario, tipo FROM usuario WHERE usuario='$u' AND password='$p'";
    $result = mysqli_query($dbc, $query);
    
    $row = mysqli_fetch_array($result, MYSQLI_NUM);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['id'] = $row[0];
        $_SESSION['usuario'] = $row[1];
        $_SESSION['rol'] = $row[2];

        
        echo '<script language="javascript">window.location.href ="index.php";</script>';
    }else{
      echo '<script language="javascript">alert("Datos incorrectos");</script>';
    }
  mysqli_close($dbc);
}

?>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h2>Ingresar</h2>

      <form data-toggle="validator" role="form" method="post" action="ingreso.php">
        <div class="form-group">
          <label for="nombre">Usuario</label>
          <input type="text" name="usuario" class="form-control" required>
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="nombre">Password</label>
          <input type="password" name="password" class="form-control" required>

        </div>
        <input type="hidden" name="enviado" value="TRUE">
        <input type="submit" class="btn btn-primary" value="Ingresar">
      </form>
    </div>
  </div>
</div>

<?php
  include('footer.php');
?>
