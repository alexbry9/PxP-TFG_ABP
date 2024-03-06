<?php
session_start();
//ini_set('display_errors', '0');

if (isset($_POST['descargar'])) {

  //establecemos las variables
  $varNombre=$_POST['nombre'];
  $varNum=$_POST['numero'];
  $varOU=$_POST['NOU'];
  $varDom1=$_POST['dom1'];
  $varDom2=$_POST['dom2'];


  //headers
  header('Content-type: application/txt');
  header('Content-Disposition: attachment; filename="CreacionDeUsuarios.ps1"');
  
  //generamos el contenido del archivo
  echo 'foreach ($RAIZ IN "'. $varNombre .'") {
     if (-not (Get-ADGroup -Filter {Name -eq $RAIZ})) {
    New-ADGroup -Name $RAIZ -GroupCategory Security -GroupScope Global -path "OU=$RAIZ,OU='.$varOU.',DC='.$varDom1.',DC='.$varDom2.'"
}
  for ($I=1;$I -le '. $varNum .'; $I++){
    $USUARIO = "$RAIZ$I"
    $contrasenaCifrada=ConvertTo-SecureString -AsPlainText $USUARIO -Force
    New-ADUser -name "$USUARIO" -path "OU=$RAIZ,OU='.$varOU.',DC='.$varDom1.',DC='.$varDom2.'" -accountPassword $contrasenaCifrada -Enabled $True
    Add-ADGroupMember -Identity "$RAIZ" -Members "$USUARIO"
    $GrupoID=Get-ADGroup -Identity "$RAIZ" -Properties @("primaryGroupToken")
    Set-ADUser -Identity "$USUARIO" -Replace @{primarygroupID=$GrupoID.primaryGroupToken}
    Remove-ADGroupMember -Identity "Domain Users" -Members "$USUARIO" -Confirm:$false
  }
}';
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
<form action="usus.php" method="POST">
  <center>
<label for="nombre">Nombre del primer departamento:</label><input type="text" name="nombre" id="nombre"> <br><br>
<?php
echo "Los nombres de los departamentos serán las raices de los nombres de los usuarios y el nombre de la OU creada"
?>
<br><br>
<label for="numero">Numero de usuarios:</label><input type="text" name="numero" id="numero"> <br><br>
<label for="NOU">Nombre de la OU:</label><input type="text" name="NOU" id="NOU"> <br><br>
<label for="NOU">Primera parte del del dominio:</label><input type="text" name="dom1" id="dom1"> <br><br>
<label for="NOU">Segunda parte del del dominio:</label><input type="text" name="dom2" id="dom2"> <br><br>
<input type="submit" value="Descargar" name="descargar"><br><br>
<input type="submit" value="Volver a página principal" name="volver">
<input type="submit" value="Volver a selección de scripts" name="volverS">
<br><br><br><br>
<?php
echo "Nota: si no existe un grupo creado con el mismo nombre que el de los usuarios, este se creará automáticamente. Si se desea cambiar esto, se recomienda descargar el script y editarlo a su gusto. Se recomienda revisar la sección de enseñanza de scripts si no se tiene suficiente experiencia en su manejo haciendo" ?> <a href="../principal.php">clic aquí</a></li>
</center>
</body>
</html>
<?php
  }
?>