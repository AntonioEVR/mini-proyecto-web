<?php

function errorCamposNecesarios(){
    $_SESSION['errorCamposNecesarios']= "<p style= 'color:red'>Los campos necesarios deben introducirse </p>";
}

function errorDatos(){
    $_SESSION['errorDatos']=" <p style= 'color:red'>Los datos han de introducirse correctamente </p>";
}

function sanearNombre($nombre) {

    if (!isset($nombre)) {
        errorCamposNecesarios();
        return false;
    }

    $nombre = trim($nombre);

    if (empty($nombre)) {
        errorCamposNecesarios();
        return false;
    }else{
        return true;
    }

    
}

function sanearApellido($apellido) {
    if (!isset($apellido)) {
        errorCamposNecesarios();
        return false;
    }

    $apellido = trim($apellido);

    if (empty($apellido)) {
        errorCamposNecesarios();
        return false;
    }else{
        return true;
    }

    
}

function sanearPassword($password){
    if(!isset($password) or strlen($password) <= 5 ){
        errorCamposNecesarios();
        return false;
    }

    $password=trim($password);

    if(empty($password)){
        errorCamposNecesarios();
        return false;
    }else{
        return true;
    }
}

function sanearCorreo($email) {
    if (!isset($email)) {
        errorCamposNecesarios();
        return false;
    }

    $email = trim($email);

    if (empty($email)) {
        errorCamposNecesarios();
        return false;
    }else{
        return true;
    }

}

function sanearTelefono($telefono) {

        $telefono = trim($telefono);
        // Elimina TODO lo que no sea número o +
        $telefono = preg_replace('/[^0-9+]/', '', $telefono);

        /* Valida de forma internacional */
        if(!preg_match('/^\+?[1-9]\d{7,14}$/', $telefono)){
            errorDatos();
            return false;
        }else{
        return true;
        }
   
}



$telefonoValido = true;
$edadValida = true;

if (!empty($telefono)) {
    $telefonoValido = sanearTelefono($telefono);
}

if (!empty($edad)) {
    switch ($edad) {
        case "16-25":
        case "26-35":
        case "36-45":
        case "46-55":
        case "55+":
            // edad válida
            break;
        default:
            $_SESSION['mensaje'] = "Introduce la edad correctamente";
            $edadValida = false;
    }
}

?>