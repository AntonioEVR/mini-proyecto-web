<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Únete | BlueWave</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌊</text></svg>">

    <style>
        .full-height {
            min-height: 80vh;
            display: flex;
            align-items: center;
        }
        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }
    </style>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 shadow-sm">
    <a class="navbar-brand d-flex align-items-center gap-2" href="../vistas/inicio_V.php">
        🌊 <strong>BlueWave</strong>
    </a>
</nav>

<main class="container full-height py-5">
    <div class="row w-100 justify-content-center">
        <div class="col-12 text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Elige tu forma de ayudar</h1>
            <p class="lead">Cada pequeña acción cuenta para salvar nuestros océanos.</p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow text-center p-4">
                    <div class="card-body">
                        <div class="display-1 mb-3">🧹</div>
                        <h3 class="card-title fw-bold">Limpiaplayas</h3>
                        <p class="card-text text-muted">Únete a nuestras brigadas sobre el terreno. Acción directa, guantes y saco en mano.</p>
                        <a href="../vistas/limpiaplayas_V.php" class="btn btn-outline-primary stretched-link mt-3">Quiero limpiar playas</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow text-center p-4">
                    <div class="card-body">
                        <div class="display-1 mb-3">💳</div>
                        <h3 class="card-title fw-bold">Socio Colaborador</h3>
                        <p class="card-text text-muted">Tu aportación económica financia el material y la logística necesaria para las limpiezas.</p>
                        <a href="../vistas/socio_V.php" class="btn btn-outline-primary stretched-link mt-3">Quiero ser Socio</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-primary border-2 shadow text-center p-4 bg-primary text-white">
                    <div class="card-body">
                        <div class="display-1 mb-3">⭐</div>
                        <h3 class="card-title fw-bold">Embajador BlueWave</h3>
                        <p class="card-text">La ayuda total: vienes a las playas y además apoyas la causa mensualmente.</p>
                        <a href="../vistas/embajador_V.php" class="btn btn-light stretched-link mt-3 text-primary fw-bold">¡Quiero ser Embajador!</a>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="text-center mt-5">
            <a href="../vistas/inicio_V.php" class="text-decoration-none text-muted"><i class="bi bi-arrow-left"></i> Volver al inicio</a>
        </div>
    </div>
</main>

<footer class="bg-dark text-white text-center py-4 mt-auto">
    <p class="mb-0">© 2026 BlueWave · Todos los derechos reservados</p>
</footer>

</body>
</html>