<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TFG</title>
  <link rel="stylesheet" href="css/tfg.css">
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
      <li><a href="principal.php">Automatización de scripts</a></li>
      <li><a href="scripts.php">Descargar scripts</a></li>
      <li><a href="explicaScripts.php">Explicacion de scripts</a></li>
      <!--<li><a href=".php">Sobre mi</a></li>
      <br><br><br><br><br>
      <li><a href="inicio.php">Cambiar de usuario</a></li> -->
    </ul>
  </nav>
  </center>
<center>
<h2>CREACION DE USUARIOS</h2>
<h2>CREACION DE GRUPOS</h2>
<h2>CREACION DE UNIDADES ORGANIZATIVAS</h2>
<h2>OBTENCION DE PERMISOS</h2>
<br><br><br><br>
<h1>PROXIMAMENTE<h1>
<?php
 if (isset($_POST['volver'])) {
   header("location:index.php");
 }
if (isset($_SESSION['comprobar']) && $_SESSION['comprobar']) {
      //echo "<center><p>Tienes la sesion iniciada</p></center>";
    } else {
      header ("location:inicio.php");
    }

  /*  if (isset($_GET['permisos'])) {
      echo 'hola';
     if(isset($_GET['permisosUsus'])){
        header("permisos/permisos.php");
        echo 'franeces';
      }
  }


  if(isset($_POST['enviar'])) { // Verificar si se envió el formulario
    $opcion_seleccionada = $_POST['permisos'];
    echo 'La opción seleccionada es: ' . $opcion_seleccionada;
  } */




?>
<center>
<form action="principal.php" method="POST">
<br><br><input type="submit" value="Volver" name="volver">
</center>
</body>
</html>
