<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>BlueWave | Protegiendo nuestros océanos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <
<link href="inicio_V_eventos.css" rel="stylesheet"> 

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 shadow-sm fixed-top">
    <a class="navbar-brand d-flex align-items-center gap-2" href="../vistas/inicio_V.php">
        🌊 <strong>BlueWave</strong>
    </a>

    <div class="ms-auto">
        <a href="inicioSesion.php" class="btn btn-outline-light me-2 btn-sm">Iniciar sesión</a>
        <a href="registro.php" class="btn btn-light btn-sm">Registrarse</a>
    </div>
</nav>

<section class="text-center text-white d-flex align-items-center"
         style="height: 70vh; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1500&q=80') center/cover;">
    <div class="container p-5">
        <h1 class="display-3 fw-bold mb-3">Protejamos nuestras playas</h1>
        <p class="lead mb-4">Acciones reales para océanos más limpios y un futuro sostenible</p>
        <a href="../vistas/voluntarios_V.php" class="btn btn-primary btn-lg px-5 shadow">Únete como voluntario</a>
    </div>
</section>

<section class="container my-5 py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-7">
            <h2 class="text-primary mb-4 fw-bold">Nuestra Misión</h2>
            <p class="lead text-muted">Nacimos de un grupo de ciudadanos que se cansó de ver plástico en sus orillas favoritas.</p>
            <p>
                En <strong>BlueWave</strong>, no solo recogemos basura, restauramos ecosistemas. Somos una organización sin ánimo de lucro compuesta por ciudadanos comprometidos.
            </p>
            <p>
                Creemos que la transparencia y el esfuerzo colectivo son las herramientas más poderosas para combatir la contaminación plástica. Cada colilla, cada red y cada envase que retiramos es una victoria para la fauna marina.
            </p>
            
            <div class="d-flex gap-4 mt-4">
                <div>
                    <h3 class="fw-bold text-primary mb-0">+500</h3>
                    <small class="text-muted text-uppercase">Voluntarios</small>
                </div>
                <div class="vr"></div>
                <div>
                    <h3 class="fw-bold text-primary mb-0">12</h3>
                    <small class="text-muted text-uppercase">Costas Protegidas</small>
                </div>
                <div class="vr"></div>
                <div>
                    <h3 class="fw-bold text-primary mb-0">15t</h3>
                    <small class="text-muted text-uppercase">Residuos Retirados</small>
                </div>
            </div>
        </div>
        <div class="col-lg-5 text-center">
            <img src="https://images.unsplash.com/photo-1595278069441-2cf29f8005a4?auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3 shadow-lg" alt="Recogida de plásticos">
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="text-primary fw-bold">El reto que enfrentamos</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">Nuestras playas están gritando por ayuda. Si no actuamos ahora, en 2050 habrá más plástico que peces en el mar.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1621451537084-482c73073a0f?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Playa contaminada">
                    <div class="card-body p-4 border-top border-danger border-4">
                        <h4 class="fw-bold text-danger">La Amenaza</h4>
                        <p class="card-text text-muted">Cada año, 8 millones de toneladas de plástico llegan al océano. Esto afecta a más de 700 especies marinas que confunden desechos con alimento.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm overflow-hidden text-center">
                    <div class="card-body p-4 border-top border-primary border-4 d-flex flex-column justify-content-center">
                        <div class="display-3 text-primary mb-3"><i class="bi bi-water"></i></div>
                        <h4 class="fw-bold text-primary">Nuestra Acción</h4>
                        <p class="card-text text-muted">Organizamos brigadas para limpiar microplásticos y redes fantasma. Tu esfuerzo se traduce en playas seguras para todos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container my-5 py-5">
    <h2 class="text-center text-primary mb-5 fw-bold">Próximos Eventos</h2>

    <div id="eventosCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <div class="d-flex flex-wrap justify-content-center gap-4 evento-custom">


                    <!-- CASILLA 1 -->
                    <div class="casillas">
                        <div class="fecha">feb, 23</div>
                        <div class="categoria"><p>Limpieza</p></div>
                        <img src="../imagenes/eventos/limpieza1.jpg">
                        <h4>Limpieza costa de Vejer</h4>
                        <h5>Limpieza de vertidos fecales de la costa. (Se entregará equipo especializado)</h5>
                        <h5>📆 Lunes, 23 de febrero</h5>
                        <h5>🕓 10:00h</h5>
                        <h5>📍 Vejer, Cádiz</h5>
                        
                    </div>

                    <!-- CASILLA 2 -->
                   <div class='casillas'>
                    <div class='limpieza1'>
                        <div class='fecha'>marz, 6</div>
                        <div class='categoria'><p>Familiar</p></div>
                        <img src='../imagenes/eventos/familia1.jpg'>
                        <h4>Liempieza Playa La Antilla</h3>
                        <h5>Jornada de limpieza para toda la familia.</h5>
                        <h5>📆 Viernes, 6 de marzo</h5>
                        <h5>🕓 15:00h</h5>
                        <h5>📍 La Antilla, Huelva</h5>
                    </div>
                </div>

                    <!-- CASILLA 3 -->
                    <div class='casillas'>
                    <div class='limpieza1'>
                        <div class='fecha'>marz, 11</div>
                        <div class='categoria'><p>Limpieza</p></div>
                        <img src='../imagenes/eventos/limpieza3.jpg'>
                        <h4>Costa de Trafalgar</h3>
                        <h5>Jornada de limpieza de la playa de nuestra sede</h5>
                        <h5>📆 Miercoles, 11 de marzo</h5>
                        <h5>🕓 10:00h</h5>
                        <h5>📍 Trafalgar, Cádiz.</h5>           
                    </div>
                </div>

                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center gap-4 evento-custom">

                    <!-- CASILLA 4 -->
                    <div class='casillas'>
                    <div class='Educación'>
                        <div class='fecha'>marz, 13</div>
                        <div class='categoria'><p>Educación</p></div>
                        <img src='../imagenes/eventos/charla1.jpg'>
                        <h4>Charla: El problema del plástico</h3>
                        <h5>Conferencia online sobre el impacto del plástico en las playas.</h5>
                        <h5>📆 viernes, 13 de marzo</h5>
                        <h5>🕓 18:00h</h5>
                        <h5>📍 Online</h5>
                    </div>
                </div>

                    <!-- CASILLA 5 -->
                <div class='casillas'>
                    <div class='taller'>
                        <div class='fecha'>marz, 26</div>
                        <div class='categoria'><p>Taller</p></div>
                        <img src='../imagenes/eventos/taller1.jpg'>
                        <h4>Taller informativo de reciclaje</h3>
                        <h5>Taller de reciclaje, separación de residuos y puntos limpios</h5>
                        <h5>📆 Jueves, 26 de marzo</h5>
                        <h5>🕓 17:00h</h5>
                        <h5>📍 I.E.S La Arboleda,Lepe</h5>
                    </div>
                </div>

                <!-- CASILLA 6 -->
                    <div class='casillas'>
                    <div class='limpieza1'>
                        <div class='fecha'>marz, 31</div>
                        <div class='categoria'><p>Limpieza</p></div>
                        <img src='../imagenes/eventos/limpieza2.jpg'>
                        <h4>Liempieza Playa Algarrobico</h3>
                        <h5>Limpieza de la costa de Almería</h5>
                        <h5>📆 Martes, 31 de marzo</h5>
                        <h5>🕓 13:00h</h5>
                        <h5>📍 Algarrobico, Almería</h5>
                        
                    </div>
                </div>
                    <!-- Puedes añadir más casillas aquí si quieres -->
                </div>
            </div>

        </div>

        <!-- CONTROLES -->
        <button class="carousel-control-prev" type="button" data-bs-target="#eventosCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#eventosCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <div class="d-flex justify-content-center align-items-center" >
    <a href="eventos.php">
        <button class="boton">Ver todos los eventos</button>
    </a>
    </div>
</section>


<section class="bg-primary text-white text-center py-5 shadow-lg">
    <div class="container py-3">
        <h2 class="fw-bold display-5">¿Listo para mojarte los pies?</h2>
        <p class="lead mb-4">No necesitamos que seas experto, solo que tengas ganas de ayudar.</p>
        <a href="../vistas/voluntarios.html" class="btn btn-light btn-lg fw-bold text-primary px-5">Hazte voluntario hoy</a>
    </div>
</section>

<footer class="bg-dark text-white text-center py-5">
    <div class="container">
        <div class="mb-4">
            <a href="#" class="text-white fs-3 me-4"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white fs-3 me-4"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white fs-3 me-4"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="text-white fs-3"><i class="bi bi-linkedin"></i></a>
        </div>
        <p class="mb-2"><strong>BlueWave NGO</strong></p>
        <p class="small text-muted mb-0">© 2026 BlueWave · Protegiendo nuestros océanos</p>
        <p class="small text-muted">Todos los derechos reservados</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>