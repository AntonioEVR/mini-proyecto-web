<?php
session_start();

require_once "../modelo/funciones.php"; //modelo con las funciones


//creamos sessions para guardar errores,datos y un mensaje de datos recibidos
if (!isset($_SESSION['error_limpiaplayas'])) {
    $_SESSION['error_limpiaplayas'] = [];
}

if (!isset($_SESSION['datos_limpiaplayas'])) {
    $_SESSION['datos_limpiaplayas'] = [];
}

if (!isset($_SESSION['guardado_limpiaplayas'])) {
    $_SESSION['guardado_limpiaplayas'] = [];
}

//comprobamos que los datos se hayan enviado mediante POST
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header ("location: ../vistas/acceso_invalido.php");
    exit;
}

//guardamos los datos ya saneados con su índice correspondiente
$_SESSION['datos_limpiaplayas'] = [
    'Zona de residencia/interés' => sanear($_POST['zona']),
    'Zona de actuación preferida' => sanear($_POST['zona_costera']),
    'Disponibilidad' => sanear($_POST['disponibilidad']),
    'Alergias/Condiciones médicas' => sanear($_POST['alergias'])
];

//validamos los datos
validar_limpiaplayas($_SESSION['datos_limpiaplayas']);


//comprobamos si hay errores
if(!empty($_SESSION['error_limpiaplayas'])) {
    header("location: ../vistas/limpiaplayas_V.php");
    exit;
}


$_SESSION['guardado_limpiaplayas'][] = "Datos recibidos correctamente"; 

header ("location: ../vistas/limpiaplayas_V.php");
exit;


?>