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
<h2 align="center">Aqui puedes descargar ejemplos de scripts realizados</h2>
<?php

if (isset($_SESSION['comprobar']) && $_SESSION['comprobar']) {
      echo "<center><p>Tienes la sesion iniciada</p></center>";
      /* ?>
      <center><h3>Sube tu script</h3></center>
      <form action="scripts.php" method="POST">
      <center><p> Enviar mi archivo: <input name="uploadedFile" type="file" /></p>
      <p> <input type="submit" value="Enviar Archivo" name="uploadBtn" /></p></center>
      </form>
      <?php */
    } else {
      echo "<center><p>No tienes la sesion iniciada</p></center>";
      header ("location:inicio.php");
    }

    if (isset($_POST['volver'])) {
      $_SESSION['comprobar']=true;
   header("location:index.php");
 }

?>
<center>
<h2>Script para crear usuario solicitando datos</h2>
<a href="usuarios/noauto/descarga.php">Descargar para 1 usuario</a><br>
<br>
<form action="scripts.php" method="POST">
<input type="submit" value="Volver" name="volver">
</center>
</body>
</html>