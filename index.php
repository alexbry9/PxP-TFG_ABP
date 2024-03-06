<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PxP Scripts</title>
<link rel="stylesheet" href="css/tfg.css">
</head>
<body>
<!--<h1 align="center">PXP</h1>
<h2 align="center">Automatizacion de scripts</h2>-->
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
  
      <div class="container">
        <h1>Bienvenido a la Personalización de Scripts</h1>
        <p>
            ¡Hola! Estás a punto de explorar un mundo de posibilidades con la personalización de scripts.
            Aquí, te proporcionamos herramientas y recursos para aprender sobre la creación y adaptación de scripts
            según tus necesidades. Ya seas un principiante o un experto, encontrarás información valiosa para potenciar
            tus habilidades en el mundo de la automatización y la programación de scripts.
        </p>

        <h2>¿Qué puedes hacer aquí?</h2>
        <p>
            En nuestra plataforma, podrás aprender a crear, modificar y utilizar scripts para simplificar tareas
            diarias, mejorar la eficiencia y personalizar tu experiencia en la programación. Explora tutoriales,
            comparte tus propios scripts y descubre cómo la automatización puede hacer tu vida más fácil.
        </p>

        <h2>¡Comienza tu viaje ahora!</h2>
        <p>
            Sumérgete en el mundo de la personalización de scripts. Explora nuestras secciones, sigue tutoriales
            paso a paso y únete a una comunidad apasionada por la programación. ¡Estamos emocionados de tenerte a bordo!
        </p>
    </div>
    <?php 

    include "instalacionyfunciones/funciones_proyecto.php";

if (isset($_SESSION['comprobar']) && $_SESSION['comprobar']) {
      echo "<center><p>Bienvenido ".$_SESSION['user']."</p></center>";
      ?>
      <form action="index.php" method="POST">
      <center><input type="submit" value="Cerrar sesion" name="cerrar"></center>
      </form>
          <?php
    } else {
      header ("location:inicio.php");
    }
 
 if (isset($_POST['cerrar'])) {
      $_SESSION['comprobar']=false;
      //echo "<center><p>Cerraste sesion</p></center>";
      header ("location:inicio.php");
    }


  ?>
</center>
</body>
</html>