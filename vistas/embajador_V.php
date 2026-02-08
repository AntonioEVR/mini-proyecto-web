<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Embajador BlueWave | Únete al Cambio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌊</text></svg>">

</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 shadow-sm">
    <a class="navbar-brand d-flex align-items-center gap-2" href="../vistas/inicio_V.php">
        🌊 <strong>BlueWave</strong>
    </a>
</nav>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            
            <div class="text-center mb-4">
                <span class="badge bg-warning text-dark mb-2">Perfil Destacado ⭐</span>
                <h1 class="display-5 fw-bold text-primary">Embajador BlueWave</h1>
                <p class="text-muted">El compromiso total: acción en la costa, apoyo económico y voz en las redes.</p>
            </div>

            <div class="card border-primary border-2 shadow p-4 p-md-5">
                <!--FORMULARIO-->
                <form action="../controladores/embajador.php" method="post">
                    
                    <h5 class="text-primary border-bottom pb-2 mb-4">1. Datos de Acción</h5>
                    
                    <div class="mb-4">
                        <!--COSTA PRINCIPAL-->
                        <label for="zona_costera" class="form-label fw-bold">Tu costa principal</label>
                        <select id="zona_costera" name="zona_costera" class="form-select">
                            <option value="" disabled selected>Selecciona una zona...</option>
                            <option value="costa_brava">Costa Brava</option>
                            <option value="costa_blanca">Costa Blanca</option>
                            <option value="costa_sol">Costa del Sol</option>
                            <option value="norte">Costa Norte / Galicia</option>
                            <option value="islas">Islas</option>
                        </select>
                    </div>

                    <h5 class="text-primary border-bottom pb-2 mb-4 mt-5">2. Compromiso Económico</h5>

                    <div class="mb-4">
                        <!--CUOTA MENSUAL-->
                        <label class="form-label fw-bold">Cuota mensual de Embajador</label>
                        <div class="p-3 bg-primary bg-opacity-10 border border-primary rounded d-flex justify-content-between align-items-center">
                            <span>Suscripción "Blue Heart"</span>
                            <span class="fw-bold fs-5">25€ / mes</span>
                            <input type="hidden" name="cuota" value="25">
                        </div>
                        <div class="form-text mt-2">Como embajador, tu cuota es fija e incluye el kit de bienvenida.</div>
                    </div>

                    <div class="mb-4">
                        <!--CUENTA BANCARIA-->
                        <label for="iban" class="form-label fw-bold">Cuenta Bancaria (IBAN)</label>
                        <input type="text" id="iban" name="iban" class="form-control" maxlength="24" placeholder="ES00 0000...">
                    </div>

                    <h5 class="text-primary border-bottom pb-2 mb-4 mt-5">3. Difusión y Comunidad</h5>

                    <div class="mb-4">
                        <!--NOMBRE USUARIO INSTAGRAM/TIK TOK-->
                        <label for="redes" class="form-label fw-bold">Usuario de Instagram / TikTok</label>
                        <div class="input-group">
                            <span class="input-group-text">@</span>
                            <input type="text" id="redes" name="redes" class="form-control" placeholder="tu_usuario">
                        </div>
                        <div class="form-text small">Para mencionarte en nuestras limpiezas oficiales.</div>
                    </div>

                    <div class="mb-4">
                        <!--MOTIVACIONES-->
                        <label for="motivacion" class="form-label fw-bold">¿Por qué quieres ser embajador?</label>
                        <textarea id="motivacion" name="motivacion" class="form-control" rows="3" placeholder="Cuéntanos brevemente tu motivación..."></textarea>
                    </div>

                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold shadow">
                            ¡QUIERO EMPEZAR YA!
                        </button>
                    </div>

                </form>
            </div>

            <div class="text-center mt-4">
                <a href="../vistas/voluntarios_V.php" class="text-decoration-none text-muted">
                    <i class="bi bi-arrow-left"></i> Volver a opciones
                </a>
            </div>

        </div>
    </div>
</main>

<?php


if (!empty($_SESSION['error_embajador'])) {
    echo "<h1 style = 'color:red'>ERRORES</h1><ul>";
        foreach($_SESSION['error_embajador'] as $error) {
            echo "<li>$error</li>";
    }
    echo "</ul>";
    unset($_SESSION['error_embajador']);
    unset($_SESSION['guardado_embajador']);
}

if (!empty($_SESSION['guardado_embajador'])) {
    echo "<h1 style = 'color:green'>ENHORABUENA</h1><ul>";
        foreach($_SESSION['guardado_embajador'] as $mensaje) {
            echo "<li>$mensaje</li>";
    }
    echo "</ul>";
    unset($_SESSION['guardado_embajador']);
}

?>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <p class="mb-0 small">© 2026 BlueWave · Todos los derechos reservados</p>
</footer>

</body>
</html>