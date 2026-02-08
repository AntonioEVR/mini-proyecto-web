<?php
session_start();

require_once "../modelo/funciones.php"; //modelo con las funciones


//creamos sessions para guardar errores,datos y un mensaje de datos recibidos
if (!isset($_SESSION['error_socio'])) {
    $_SESSION['error_socio'] = [];
}

if (!isset($_SESSION['datos_socio'])) {
    $_SESSION['datos_socio'] = [];
}

if (!isset($_SESSION['guardado_socio'])) {
    $_SESSION['guardado_socio'] = [];
}

//comprobamos que los datos se hayan enviado mediante POST
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header ("location: ../vistas/acceso_invalido.php");
    exit;
}

//guardamos los datos ya saneados con su índice correspondiente
$_SESSION['datos_socio'] = [
    'DNI/NIE' => sanear($_POST['dni']),
    'Importe de la cuota' => sanear($_POST['cuota']),
    'Cuota libre' => sanear($_POST['cuota_libre']),
    'Periodicidad' => sanear($_POST['periodicidad']),
    'Cuenta Bancaria' => sanear($_POST['iban'])
];

//validamos los datos
validar_socio($_SESSION['datos_socio']);


//comprobamos si hay errores
if(!empty($_SESSION['error_socio'])) {
    header("location: ../vistas/socio_V.php");
    exit;
}


$_SESSION['guardado_socio'][] = "Datos recibidos correctamente"; 

header ("location: ../vistas/socio_V.php");
exit;


?>