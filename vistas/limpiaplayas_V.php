<?php
session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Limpiaplayas | BlueWave</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌊</text></svg>">

</head>
<body class="bg-light">

<!--HEADER-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 shadow-sm">
    <a class="navbar-brand d-flex align-items-center gap-2" href="../vistas/inicio_V.php">
        🌊 <strong>BlueWave</strong>
    </a>
</nav>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="text-center mb-4">
                <h1 class="display-5 fw-bold text-primary">Brigada Limpiaplayas</h1>
                <p class="text-muted">Rellena tus datos para empezar a actuar sobre el terreno.</p>
            </div>

            <div class="card border-0 shadow-sm p-4 p-md-5">
                <!--FORMULARIO-->
                <form action="../controladores/limpiaplayas.php" method="post">
                    
                    <!--RESIDENCIA DE INTERÉS-->
                    <div class="mb-4">
                        <label for="zona" class="form-label fw-bold">Zona de residencia/interés</label>
                        <input type="text" class="form-control" id="zona" name="zona" placeholder="Tu ciudad o barrio">
                    </div>

                    <!--ZONA DE ACTUACIÓN-->
                    <div class="mb-4">
                        <label for="zona_costera" class="form-label fw-bold">Zona de actuación preferida</label>
                        <select id="zona_costera" name="zona_costera" class="form-select">
                            <option value="" disabled selected>Elige una costa...</option>
                            <optgroup label="Andalucía">
                                <option value="costa_luz_huelva">Costa de la Luz (Huelva)</option>
                                <option value="costa_luz_cadiz">Costa de la Luz (Cádiz)</option>
                                <option value="costa_sol">Costa del Sol (Málaga)</option>
                                <option value="costa_tropical">Costa Tropical (Granada)</option>
                                <option value="costa_almeria">Costa de Almería</option>
                            </optgroup>
                            <optgroup label="Levante y Murcia">
                                <option value="costa_calida">Costa Cálida (Murcia)</option>
                                <option value="costa_blanca">Costa Blanca (Alicante)</option>
                                <option value="costa_valencia">Costa de Valencia</option>
                                <option value="costa_azahar">Costa del Azahar (Castellón)</option>
                            </optgroup>
                            <optgroup label="Cataluña">
                                <option value="costa_dorada">Costa Dorada (Tarragona)</option>
                                <option value="costa_barcelona">Costa de Barcelona</option>
                                <option value="costa_brava">Costa Brava (Girona)</option>
                            </optgroup>
                            <optgroup label="Norte y Galicia">
                                <option value="rias_baixas">Rías Baixas (Pontevedra/A Coruña)</option>
                                <option value="rias_altas">Rías Altas (A Coruña/Lugo)</option>
                                <option value="costa_verde">Costa Verde (Asturias)</option>
                                <option value="costa_cantabria">Costa de Cantabria</option>
                                <option value="costa_vasca">Costa Vasca</option>
                            </optgroup>
                            <optgroup label="Islas">
                                <option value="islas_baleares">Islas Baleares</option>
                                <option value="islas_canarias">Islas Canarias</option>
                            </optgroup>
                        </select>
                    </div>

                    <!--DISPONIBILIDAD-->
                    <div class="mb-4">
                        <label for="disponibilidad" class="form-label fw-bold">¿Cuándo podrías ayudar?</label>
                        <select id="disponibilidad" name="disponibilidad" class="form-select">
                            <option value="" disabled selected>Selecciona tu horario...</option>
                            <option value="mananas_semana">Lunes a Viernes (Mañanas)</option>
                            <option value="tardes_semana">Lunes a Viernes (Tardes)</option>
                            <option value="fines_semana">Fines de semana</option>
                            <option value="eventos">Solo eventos puntuales</option>
                        </select>
                    </div>

                    <!--ALERGIAS/CONDICIONES MÉDICAS-->
                    <div class="mb-4">
                        <label for="alergias" class="form-label fw-bold">Alergias o condiciones médicas</label>
                        <input type="text" id="alergias" name="alergias" class="form-control" placeholder="Ej: Polen, yodo, asma o ninguna">
                        <div class="form-text text-muted small">Esta información nos ayuda a garantizar tu seguridad.</div>
                    </div>

                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold">
                            HACERME VOLUNTARIO
                        </button>
                    </div>

                </form>
            </div>

            <!--BOTÓN PARA HACERTE VOLUNTARIO-->
            <div class="text-center mt-4">
                <a href="../vistas/voluntarios_V.php" class="text-decoration-none text-muted">
                    <i class="bi bi-arrow-left"></i> Volver a opciones
                </a>
            </div>

        </div>
    </div>
</main>

<?php


if (!empty($_SESSION['error_limpiaplayas'])) {
    echo "<h1 style = 'color:red'>ERRORES</h1><ul>";
        foreach($_SESSION['error_limpiaplayas'] as $error) {
            echo "<li>$error</li>";
    }
    echo "</ul>";
    unset($_SESSION['error_limpiaplayas']);
    unset($_SESSION['guardado_limpiaplayas']);
}

if (!empty($_SESSION['guardado_limpiaplayas'])) {
    echo "<h1 style = 'color:green'>ENHORABUENA</h1><ul>";
        foreach($_SESSION['guardado_limpiaplayas'] as $mensaje) {
            echo "<li>$mensaje</li>";
    }
    echo "</ul>";
    unset($_SESSION['guardado_limpiaplayas']);
}

?>

<!--FOOTER-->
<footer class="bg-dark text-white text-center py-4 mt-5">
    <p class="mb-0 small">© 2026 BlueWave · Todos los derechos reservados</p>
</footer>
</body>
</html>