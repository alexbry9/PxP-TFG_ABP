<?php
session_start();
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
  <h1>Modo guia</h1>
  <h2>Descarga tus scripts en modo guia para aprender cual es su funcionamiento</h2>
  <div class="container">
  <p>¡Bienvenido a nuestra plataforma de descarga de scripts! Aquí encontrarás una amplia variedad de scripts listos para potenciar tus proyectos y simplificar tu flujo de trabajo. Nos esforzamos por ofrecerte herramientas poderosas y eficientes que te ayudarán a llevar tus desarrollos al siguiente nivel.</p>

<p>Cada script que encontrarás en nuestra plataforma viene acompañado de una explicación detallada para que puedas comprender su funcionamiento y aplicarlo de manera efectiva en tus proyectos. Creemos en la importancia de no solo proporcionar herramientas, sino también en capacitar a los usuarios para que comprendan cómo estas pueden optimizar sus tareas diarias.</p>

<p>Navegar por nuestra plataforma es fácil. Explora nuestra extensa biblioteca de scripts, encuentra la solución perfecta para tus necesidades y descubre las explicaciones paso a paso que te guiarán en la implementación de cada script. Ya seas un desarrollador experimentado o estés dando tus primeros pasos en el mundo del código, aquí encontrarás recursos valiosos que impulsarán tu creatividad y productividad.</p>


<p>¡Descarga, aprende y transforma tu experiencia de desarrollo con nuestros scripts y sus detalladas explicaciones! Estamos emocionados de ser parte de tu viaje de crecimiento y éxito en el mundo de la programación.</p></div>
<center>
<h2>CREACION DE USUARIOS</h2>
<li><a href="usuarios/noauto/descarga_US_MG.php">Creación de un usuario</a><br></li>
<li><a href="usuarios/noauto/descarga_USS_MG.php">Creación de múltiples usuarios</a></li>
<li><a href="usuarios/usus.php">Creación de usuarios con 2 departamentos</a></li>
<li><a href="usuarios/usus3.php">Creación de usuarios con 3 departamentos</a></li>
<h2>CREACION DE GRUPOS</h2>
<li><a href="usuarios/noauto/descarga_G_MG.php">Creación de grupos</a></li>
<h2>CREACION DE UNIDADES ORGANIZATIVAS</h2>
<li><a href="usuarios/noauto/descarga_OUs_MG.php">Creación de unidades organizativas</a></li>
<li><a href="usuarios/noauto/descarga_OUs2_MG.php">Creación de unidades organizativas dentro de otras unidades organizativas</a></li>
<h2>OBTENCION DE PERMISOS</h2>
<li><a href="usuarios/noauto/descarga_P_MG.php">Permisos sobre usuarios</a></li>
</center>
<br><br><br><br>
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
