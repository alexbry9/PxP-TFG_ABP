<?php
session_start();
//ini_set('display_errors', '0');

if (isset($_POST['descargar'])) {

  //establecemos las variables
  $varNombre=$_POST['nombre'];
  $varDom1=$_POST['dom1'];
  $varDom2=$_POST['dom2'];
  $varOU=$_POST['OU'];

  //headers
  header('Content-type: application/txt');
  header('Content-Disposition: attachment; filename="CreacionDeOUs.ps1"');
  
  //generamos el contenido del archivo
  echo '
  New-ADOrganizationalUnit -Name "'.$varNombre.'" -path "OU='.$varOU.', DC='.$varDom1.', DC='.$varDom2.'"
    '
//-Department $departamento `
    ;
 } else {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TFG</title>
  <link rel="stylesheet" href="../css/tfg.css">
</head>
<body>
<center>
  <nav class="logo">
            <ul>
                <li><a href="index.php" class="enlacesSin"><img src="../css/logoF.png" width="50%" height="50%"></a></li>
            </ul>
        </nav>
  <nav>
    <ul class="menu">
      <li><a href="../principal.php">Personalización de scripts</a></li>
      <li><a href="../scripts.php">Descargar scripts</a></li>
      <li><a href="../explicaScripts.php">Explicacion de scripts</a></li>
      <!--<li><a href=".php">Sobre mi</a></li>
      <br><br><br><br><br>
      <li><a href="inicio.php">Cambiar de usuario</a></li> -->
    </ul>
  </nav>
  </center>
<?php

 if (isset($_POST['volver'])) {
   header("location:../index.php");
 }

 if (isset($_POST['volverS'])) {
   header("location:../principal.php");
 }

if (isset($_SESSION['comprobar']) && $_SESSION['comprobar']) {
      echo "<center><p>Tienes la sesion iniciada</p></center>";
    } else {
      header ("location:../inicio.php");
    }

?>
<form action="OUs.php" method="POST">
  <center>
<label for="nombre">Nombre de la OU:</label><input type="text" name="nombre" id="nombre"> <br><br>
<label for="OU">Nombre de la OU en la que se creará la nueva OU:</label><input type="text" name="OU" id="OU"> <br><br>
<label for="dom1">Primera parte del nombre del dominio:</label><input type="text" name="dom1" id="dom1"> <br><br>
<label for="dom2">Segunda parte del nombre del dominio:</label><input type="text" name="dom2" id="dom2"> <br><br>
<input type="submit" value="Descargar" name="descargar"><br><br>
<input type="submit" value="Volver a página principal" name="volver">
<input type="submit" value="Volver a selección de scripts" name="volverS">
</center>
</body>
</html>
<?php
  }
?>