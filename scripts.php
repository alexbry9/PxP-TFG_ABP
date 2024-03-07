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

if (isset($_SESSION['comprobar']) && $_SESSION['comprobar']) {
      echo "<center><p></p></center>";
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
<a href="usuarios/noauto/descarga.php">Clic aqui para descargar</a><br>
<br>
<h2>Script para crear una OU solicitando datos</h2>
<a href="usuarios/noauto/descarga_OUnoauto.php">Clic aqui para descargar</a><br>
<form action="scripts.php" method="POST">
<input type="submit" value="Volver" name="volver">
</center>
</body>
</html>