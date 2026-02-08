<?php
session_start();

require_once "../modelo/funciones.php"; //modelo con las funciones


//creamos sessions para guardar errores,datos y un mensaje de datos recibidos
if (!isset($_SESSION['error_embajador'])) {
    $_SESSION['error_embajador'] = [];
}

if (!isset($_SESSION['datos_embajador'])) {
    $_SESSION['datos_embajador'] = [];
}

if (!isset($_SESSION['guardado_embajador'])) {
    $_SESSION['guardado_embajador'] = [];
}

//comprobamos que los datos se hayan enviado mediante POST
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header ("location: ../vistas/acceso_invalido.php");
    exit;
}

//guardamos los datos ya saneados con su índice correspondiente
$_SESSION['datos_embajador'] = [
    'Zona costera' => sanear($_POST['zona_costera']),
    'Importe de la cuota' => sanear($_POST['cuota']),
    'Cuenta Bancaria' => sanear($_POST['iban']),
    'Usuario de redes' => sanear($_POST['redes']),
    'Motivaciones' => sanear($_POST['motivacion'])
];

//validamos los datos
validar_embajador($_SESSION['datos_embajador']);


//comprobamos si hay errores
if(!empty($_SESSION['error_embajador'])) {
    header("location: ../vistas/embajador_V.php");
    exit;
}


$_SESSION['guardado_embajador'][] = "Datos recibidos correctamente"; 

header ("location: ../vistas/embajador_V.php");
exit;


?>