<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PxP Scripts</title>
<link rel="stylesheet" href="css/tfg.css">
</head>
<body>
<h1 align="center">PXP</h1>
<h2 align="center">Automatizacion de scripts</h2>
<center>
  <li><a href="principal.php">Automatización de scripts</a></li>
  <li><a href="scripts.php">Descargar scripts</a></li>
  <li><a href="explicaScripts.php">Explicacion de scripts</a></li>
  <!--<li><a href=".php">Sobre mi</a></li>
  <br><br><br><br><br>
  <li><a href="inicio.php">Cambiar de usuario</a></li> -->
  </center>
  <?php 

    include "instalacionyfunciones/funciones_proyecto.php";

if (isset($_SESSION['comprobar']) && $_SESSION['comprobar']) {
      echo "<center><p>Bienvenido ".$_SESSION['user']."</p></center>";
      ?>
      <form action="index.php" method="POST">
      <center><input type="submit" value="Cerrar sesion" name="cerrar"></center>
      </form>
      <?php
    } else {
      header ("location:inicio.php");
    }
 
 if (isset($_POST['cerrar'])) {
      $_SESSION['comprobar']=false;
      //echo "<center><p>Cerraste sesion</p></center>";
      header ("location:inicio.php");
    }


  ?>
  
</center>
</body>
</html>