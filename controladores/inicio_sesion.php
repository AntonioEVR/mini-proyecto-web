<?php

session_start();
require_once "../modelo/funciones.php";

$email=$_POST['email'];
$password=$_POST['password'];


if(!isset($_SESSION['intentos'])){
    $_SESSION['intentos']=4;

}


if(sanearPassword_I($password) == true &&
sanearCorreo_I($email) == true &&
isset($_SESSION['correo_registrado']) &&
isset($_SESSION['password_registrado']) &&
$email === $_SESSIO['correo_registrado'] &&
$password === $_SESSION['password_registrado'] ){

     $_SESSION['mensaje']= "Inicio de sesión realizado";

    $_SESSION['intentos'] = 4;
}else{
        $_SESSION['intentos']--;

            if ($_SESSION['intentos'] > 0){
                error();
                $mensaje = "tienes ". $_SESSION['intentos'] . " intentos";

            } else {
                $mensaje = "Ya no tienes mas intentos";
            }

        $_SESSION['mensaje']= $mensaje;
    }

header("Location:../vistas/inicio_sesion_V.php");
?>