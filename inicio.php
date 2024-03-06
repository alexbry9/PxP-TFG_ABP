<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TFG</title>
  <link rel="stylesheet" href="css/tfg.css">
</head>
<body>
<h1 align="center">PXP</h1>
<h2 align="center">Clientes</h2>

<?php

  include "instalacionyfunciones/funciones_proyecto.php";

  if (isset($_POST["iniciar"])) {
    $resultado = iniciar($_POST["user"],$_POST["pass"]);
     if ($resultado) { 
      $_SESSION['comprobar']=$resultado;
    } else {
      $_SESSION['comprobar']=false;
    }
}

  if (isset($_POST["ContSinID"])) {
    $_SESSION['comprobar']=true;
    //$_SESSION['user']=invitado;
     header ("location:index.php");
    }

  if (isset($_POST['user'])) {
  $_SESSION['user']=$_POST['user'];
 }


?>

<form action="inicio.php" method="POST">
  <center>
  <label>Usuario: </label><input type="text" name="user"><br>
  <br>
  <label>Contraseña: </label><input type="text" name="pass"><br>
  <br>
  <input type="submit" value="Iniciar sesion" name="iniciar">
  <input type="submit" value="Entrar como invitado" name="ContSinID">
  </center>
</form>
</body>
</html>