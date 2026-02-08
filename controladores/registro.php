<?php

session_start();
require_once "../modelo/funciones.php";

$nombre = $_POST['nombre']?? null;
$apellido = $_POST['apellido']?? null;
$password= $_POST['password'] ?? null;
$email = $_POST['email']?? null;
$telefono = $_POST['telefono']?? null;
$edad = $_POST['edad']?? null;


$_SESSION['email_registro']= $email;
$_SESSION['password_registro']=$password;

/* Vincula datos con inicio de sesion */
$_SESSION['email_registrado']= $email;
$_SESSION['password_registrado']=$password;

if (sanearNombre($nombre) && 
sanearApellido($apellido)  && 
sanearCorreo($email) && 
$telefonoValido && 
$edadValida){

    $_SESSION['email_registrado']= $email;
    $_SESSION['password_registrado']=$password;
    
    $_SESSION['mensajeCorrecto']="Te has registrado correctamente";
}

    header("Location: ../vistas/registro_V.php");
    exit;
    
?>