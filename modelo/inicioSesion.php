<?php

function error(){
    $_SESSION['error']="<p style='color:red'>Email o contraseña mal introducido</p>";
}

function sanearPassword($password){
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


function sanearCorreo($email) {
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