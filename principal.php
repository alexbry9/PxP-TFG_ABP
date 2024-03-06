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
<h1 align="center">PXP</h1>
<h2 align="center">Automatizacion</h2>
<center>
<h2>CREACION DE USUARIOS</h2>
<li><a href="usuarios/usus2.php">Creacion de usuarios simple</a></li>
<li><a href="usuarios/usus4.php">Creacion de múltiples usuarios</a></li>
<li><a href="usuarios/usus.php">Creacion de usuarios con 2 departamentos</a></li>
<li><a href="usuarios/usus3.php">Creacion de usuarios con 3 departamentos</a></li>
<h2>CREACION DE GRUPOS</h2>
<li><a href="grupos/grupos.php">Creacion de grupos</a></li>
<h2>CREACION DE UNIDADES ORGANIZATIVAS</h2>
<li><a href="OUs/OUs.php">Creacion de unidades organizativas</a></li>
<li><a href="OUs/OUs2.php">Creacion de unidades organizativas dentro de otras unidades organizativas</a></li>
<h2>OBTENCION DE PERMISOS</h2>
<li><a href="permisos/permisos.php">Permisos sobre usuarios</a></li>
<li><a href="permisos/permisos.php">Permisos sobre grupos</a></li>
<!-- <form action="principal.php" method="get">
  <label for="permisos">Selecciona una opción:</label>
  <select name="permisos" id="permisos">
    <option value="Sobre usuarios" id="permisosUsus">Sobre usuarios</option>
    <option value="Sobre grupos" id="permisosGrup">Sobre grupos</option>
  </select>
  <input type="submit" value="Enviar" id="enviar">
</form> -->
</center>
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
