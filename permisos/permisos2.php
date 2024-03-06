<?php
session_start();
//ini_set('display_errors', '0');

if (isset($_POST['descargar'])) {

  //establecemos las variables
  $varPath=$_POST['path'];
  $grupo=$_POST['grupo'];


  //headers
  header('Content-type: application/txt');
  header('Content-Disposition: attachment; filename="Permisos.ps1"');
  
  //generamos el contenido del archivo
  echo '$Path = "'.$varPath.'"
$Acl = Get-Acl $Path

# Agregar permiso para un grupo
$Ar = New-Object System.Security.AccessControl.FileSystemAccessRule("'.$grupo.'", "FullControl", "Allow")
$Acl.SetAccessRule($Ar)
Set-Acl $Path $Acl';
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
<h1 align="center">PXP</h1>
<h2 align="center">Automatizacion</h2>
<?php
 if (isset($_POST['volver'])) {
   header("location:../index.php");
 }
if (isset($_SESSION['comprobar']) && $_SESSION['comprobar']) {
      echo "<center><p>Tienes la sesion iniciada</p></center>";
    } else {
      header ("location:../inicio.php");
    }

     if (isset($_POST['volverS'])) {
   header("location:../principal.php");
 }

?>
<form action="permisos.php" method="POST">
  <center>
<label for="ruta">Ruta del archivo:</label><input type="text" name="path" id="path"> <br><br>
<label for="usu">Nombre del grupo:</label><input type="text" name="usu" id="usu"> <br><br>
<input type="submit" value="Descargar" name="descargar"><br><br>
<input type="submit" value="Volver a página principal" name="volver">
<input type="submit" value="Volver a selección de scripts" name="volverS">
</center>
</body>
</html>
<?php
  }
?>