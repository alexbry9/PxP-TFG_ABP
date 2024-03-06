<?php
session_start();
//ini_set('display_errors', '0');

if (isset($_POST['descargar'])) {

  //establecemos las variables
  $varNombre=$_POST['nombre'];
  $varOU=$_POST['NOU'];
  $varDom1=$_POST['dom1'];
  $varDom2=$_POST['dom2'];


  //headers
  header('Content-type: application/txt');
  header('Content-Disposition: attachment; filename="CreacionDeGrupos.ps1"');
  
  //generamos el contenido del archivo
  echo 'New-ADGroup -name "'.$varNombre.'" -GroupCategory Security -GroupScope Global -path "OU='.$varOU.',DC='.$varDom1.',DC='.$varDom2.'"';
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
if (isset($_SESSION['comprobar']) && $_SESSION['comprobar']) {
      echo "<center><p></p></center>";
    } else {
      header ("location:../inicio.php");
    }

 if (isset($_POST['volverS'])) {
   header("location:../principal.php");
 }

?>
<form action="grupos.php" method="POST">
  <center>
<label for="nombre">Nombre del grupo:</label><input type="text" name="nombre" id="nombre"> <br><br>
<label for="NOU">Nombre de la OU:</label><input type="text" name="NOU" id="NOU"> <br><br>
<label for="Ndom1">Primera parte del dominio:</label><input type="text" name="dom1" id="dom1"> <br><br>
<label for="Ndom2">Segunda parte del dominio:</label><input type="text" name="dom2" id="dom2"> <br><br>
<input type="submit" value="Descargar" name="descargar"><br><br>
</center>
</body>
</html>
<?php
  }
?>