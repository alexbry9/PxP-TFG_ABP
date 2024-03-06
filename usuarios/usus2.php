<?php
session_start();
//ini_set('display_errors', '0');

if (isset($_POST['descargar'])) {

  //establecemos las variables
  $varNombre=$_POST['nombre'];
  $varContra=$_POST['contra'];
  $varNomR=$_POST['nombreCompleto'];
  //$varCorreo=$_POST['email'];
  $varOU=$_POST['OU'];
  $varDom1=$_POST['dom1'];
  $varDom2=$_POST['dom2'];


  //headers
  header('Content-type: application/txt');
  header('Content-Disposition: attachment; filename="CreacionDeUsuarios.ps1"');
  
  //generamos el contenido del archivo
  echo 'New-ADUser `
    -Name '.$varNombre.' `
    -AccountPassword '.$varNombre.' `
    -Enabled $true `
    -DisplayName '.$varNomR.' `
    -Path "OU='.$varOU.',DC='.$varDom1.',DC='.$varDom2.'"
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
  <link rel="stylesheet" href="../CSS/tfg.css">
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
      echo "<center><p></p></center>";
    } else {
      header ("location:../inicio.php");
    }

?>
<form action="usus2.php" method="POST">
  <center>
<label for="nombre">Nombre de usuario:</label><input type="text" name="nombre" id="nombre"> <br><br>
<label for="numero">Contraseña:</label><input type="text" name="contra" id="contra"> <br><br>
<label for="nombreCompleto">Nombre completo del usuario:</label><input type="text" name="nombreCompleto" id="nombreCompleto"> <br><br>
<label for="NOU">Nombre de la OU:</label><input type="text" name="OU" id="OU"> <br><br>
<label for="dom1">Primera parte del nombre del dominio:</label><input type="text" name="dom1" id="dom1"> <br><br>
<label for="dom2">Segunda parte del nombre del dominio:</label><input type="text" name="dom2" id="dom2"> <br><br>
<input type="submit" value="Descargar" name="descargar"><br><br>

</center>
</body>
</html>
<?php
  }
?>