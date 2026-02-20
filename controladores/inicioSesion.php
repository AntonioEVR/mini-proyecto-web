<?php

session_start();
require_once "../modelo/inicioSesion.php";

$email=$_POST['email'];
$password=$_POST['password'];


if(!isset($_SESSION['intentos'])){
    $_SESSION['intentos']=4;

}


if(sanearPassword($password) == true &&
sanearCorreo($email) == true){

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

header("Location:../vista/vista.php");
?>