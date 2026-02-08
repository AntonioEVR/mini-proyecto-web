<?php

//FUNCIONES DE LOS TIPOS DE VOLUNTARIOS
function sanear($dato) {
    return htmlspecialchars(trim($dato));
}


function validar_limpiaplayas($dato) {
    
    if(!isset($dato['Zona de residencia/interés']) || $dato['Zona de residencia/interés'] === "") {
        $_SESSION['error_limpiaplayas'][] = "Zona de residencia/interés incorrecta";
    }

    if(!isset($dato['Zona de actuación preferida']) || $dato['Zona de actuación preferida'] === "") {
        $_SESSION['error_limpiaplayas'][] = "Zona costera incorrecta";
    }

    if(!isset($dato['Disponibilidad']) || $dato['Disponibilidad'] === "") {
        $_SESSION['error_limpiaplayas'][] = "Disponibilidad incorrecta";
    }

    if(!isset($dato['Alergias/Condiciones médicas']) || $dato['Alergias/Condiciones médicas'] === "") {
        $_SESSION['error_limpiaplayas'][] = "Alergias/Condiciones médicas incorrectas";
    }
}

function validar_socio($dato) {
    
    if(!isset($dato['DNI/NIE']) || $dato['DNI/NIE'] === "") {
        $_SESSION['error_socio'][] = "DNI/NIE incorrecto";
    }

    if(!isset($dato['Importe de la cuota']) || $dato['Importe de la cuota'] === "") {
        $_SESSION['error_socio'][] = "Importe de la cuota incorrecto";
    }

    if(!isset($dato['Periodicidad']) || $dato['Periodicidad'] === "") {
        $_SESSION['error_socio'][] = "Periodicidad incorrecta";
    }

    if(!isset($dato['Cuenta Bancaria']) || $dato['Cuenta Bancaria'] === "") {
        $_SESSION['error_socio'][] = "Cuenta Bancaria incorrecta";
    }
}

function validar_embajador($dato) {
    
    if(!isset($dato['Zona costera']) || $dato['Zona costera'] === "") {
        $_SESSION['error_embajador'][] = "Zona costera incorrecta";
    }

    if(!isset($dato['Importe de la cuota']) || $dato['Importe de la cuota'] === "") {
        $_SESSION['error_embajador'][] = "Importe de la cuota incorrecto";
    }

    if(!isset($dato['Cuenta Bancaria']) || $dato['Cuenta Bancaria'] === "") {
        $_SESSION['error_embajador'][] = "Cuenta bancaria incorrecta";
    }

    if(!isset($dato['Usuario de redes']) || $dato['Usuario de redes'] === "") {
        $_SESSION['error_embajador'][] = "Usuario de redes incorrecto";
    }

    if(!isset($dato['Motivaciones']) || $dato['Motivaciones'] === "") {
        $_SESSION['error_embajador'][] = "Campo de motivaciones incorrecto";
    }
}

//FUNCIONES DE REGISTRO

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


//FUNCIONES INICIO DE SESION

function error(){
    $_SESSION['error']="<p style: 'color:red'>Email o contraseña mal introducido</p>";
}

function sanearPassword_I($password){
    if(!isset($password) or strlen($password) <= 5 ){
        error();
        return false;
    }

    $password=trim($password);

    if(empty($password)){
        error();
        return false;
    }else{
        return true;
    }
}


function sanearCorreo_I($email) {
    if (!isset($email)) {
        error();
        return false;
    }

    $email = trim($email);

    if (empty($email)) {
        error();
        return false;
    }else{
        return true;
    }

}


?>