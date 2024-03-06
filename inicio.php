<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PxP Scripts</title>
  <link rel="stylesheet" href="CSS/tfg.css">
</head>
<body>
<center>
  <nav class="logo">
            <ul>
                <li><a href="index.php" class="enlacesSin"><img src="css/logoF.png" width="50%" height="50%"></a></li>
            </ul>
        </nav>
  <nav>
    <ul class="menu">
      <li><a href="principal.php">Personalización de scripts</a></li>
      <li><a href="scripts.php">Descargar scripts</a></li>
      <li><a href="explicaScripts.php">Explicacion de scripts</a></li>
      <!--<li><a href=".php">Sobre mi</a></li>
      <br><br><br><br><br>
      <li><a href="inicio.php">Cambiar de usuario</a></li> -->
    </ul>
  </nav>
  </center>

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
    <br>
    <br>
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