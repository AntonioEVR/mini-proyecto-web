<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Socio Colaborador | BlueWave</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 shadow-sm">
    <a class="navbar-brand d-flex align-items-center gap-2" href="../vistas/inicio.html">
        🌊 <strong>BlueWave</strong>
    </a>
</nav>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="text-center mb-4">
                <h1 class="display-5 fw-bold text-primary">Socio Colaborador</h1>
                <p class="text-muted">Tu apoyo financiero permite que nuestras brigadas tengan el material necesario.</p>
            </div>

            <div class="card border-0 shadow-sm p-4 p-md-5">
                <form action="../controladores/socio.php" method="post">
                    
                    <div class="mb-4">
                        <label for="dni" class="form-label fw-bold">DNI / NIE</label>
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="12345678X" required>
                        <div class="form-text small">Necesario para el certificado de donaciones.</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Importe de la cuota</label>
                        <div class="row g-2">
                            <div class="col-4">
                                <input type="radio" class="btn-check" name="cuota" id="cuota10" value="10" checked>
                                <label class="btn btn-outline-primary w-100" for="cuota10">10€</label>
                            </div>
                            <div class="col-4">
                                <input type="radio" class="btn-check" name="cuota" id="cuota20" value="20">
                                <label class="btn btn-outline-primary w-100" for="cuota20">20€</label>
                            </div>
                            <div class="col-4">
                                <input type="number" class="form-control" name="cuota_libre" placeholder="Otro" min="1">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="periodicidad" class="form-label fw-bold">Periodicidad</label>
                        <select id="periodicidad" name="periodicidad" class="form-select" required>
                            <option value="mensual">Mensual</option>
                            <option value="trimestral">Trimestral</option>
                            <option value="anual">Anual</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="iban" class="form-label fw-bold">Cuenta Bancaria (IBAN)</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                            <input type="text" id="iban" name="iban" class="form-control" placeholder="ES00 0000 0000 0000..." maxlength="24" required>
                        </div>
                    </div>

                    <div class="d-grid gap-2 mt-5">
                        <button type="submit" class="btn btn-primary btn-lg fw-bold">
                            CONFIRMAR COLABORACIÓN
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

<footer class="bg-dark text-white text-center py-4 mt-5">
    <p class="mb-0 small">© 2026 BlueWave · Todos los derechos reservados</p>
</footer>

</body>
</html>