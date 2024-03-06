<?php
	
    function iniciar($user, $password){
        $conexion=mysqli_connect("localhost","usuario","1234","proyecto");
        if(!$conexion){
            return false;
        } else { 
            $sql = "SELECT user_name,password FROM usuarios WHERE user_name=?;";
            $consulta = mysqli_prepare($conexion, $sql);
            mysqli_stmt_bind_param($consulta, "s", $user);
            mysqli_stmt_execute($consulta);
            mysqli_stmt_bind_result($consulta,$usu,$contra);
            mysqli_stmt_fetch($consulta);
            mysqli_stmt_close($consulta);           
            mysqli_close($conexion);
            if (($user==$usu && $password==$contra) && $_POST["pass"]!=null){
                //echo "<center><p>Has iniciado sesion</p></center>";
                header ("location:index.php");
                return true;
             } else {
                echo "<center><p>Usuario o contraseña incorrecto</p></center>";
                return false;
            }
        }

    }

    function crearBD(){
        $conexion=mysqli_connect("localhost","usuario","password");
        if(!$conexion){
            return false;
        } else {
            $sql = "CREATE DATABASE proyecto";
            $resultadoejec=mysqli_query($conexion, $sql);
            mysqli_close($conexion);
            return $resultadoejec;
        }

    }

    function crearTablaUsus(){
         $conexion=mysqli_connect("localhost","usuario","password","proyecto");
        if(!$conexion){
            return false;
        } else {
            $sql = "CREATE TABLE usuarios(id_user INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(20) NOT NULL, user_name VARCHAR(20) NOT NULL, password VARCHAR(20) NOT NULL);";
            $resultadoejec=mysqli_query($conexion, $sql);
            mysqli_close($conexion);
            return $resultadoejec;
        }

    }

?>