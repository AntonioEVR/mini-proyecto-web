<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="eventos.css">
</head>
<body>
    <div class="cabecera">
        <div class="contenedor">
            <div class="casilla-inicio">📅 Calendario</div>
        </div>
        <a href="inicio_V.php" style="text-decoration: none; color: inherit;"><h1>Próximos Eventos</h1></a>
        <h3>Encuentra tu próxima oportunidad de hacer la diferencia.</br>
        Tenemos eventos para todos los perfiles y disponibilidades.</h3>
    </div>

    <nav class="filtros">
        <a href="?cat=todos" class="<?= ($_GET['cat'] ?? 'todos') === 'todos' ? 'activo' : '' ?>">Todos</a>
        <a href="?cat=limpieza" class="<?= ($_GET['cat'] ?? '') === 'limpieza' ? 'activo' : '' ?>">Limpieza</a>
        <a href="?cat=familiar" class="<?= ($_GET['cat'] ?? '') === 'familiar' ? 'activo' : '' ?>">Familiar</a>
        <a href="?cat=taller" class="<?= ($_GET['cat'] ?? '') === 'taller' ? 'activo' : '' ?>">Taller</a>
        <a href="?cat=educacion" class="<?= ($_GET['cat'] ?? '') === 'educacion' ? 'activo' : '' ?>">Educación</a>
    </nav>

    <div class="linea-separadora"></div>

    <div class="casillas-menu">
    <?php
    $cat = $_GET['cat'] ?? 'limpieza';

    switch ($cat) {
        case 'todos':
            echo "<div class='casillas'>
                    <div class='limpieza1'>
                        <div class='fecha'>feb, 23</div>
                        <div class='categoria'><p>Limpieza</p></div>
                        <img src='../imagenes/eventos/limpieza1.jpg'>
                        <h4>Liempieza costa de Vejer</h3>
                        <h5>Limpieza de vertidos fecales de la costa.
                        (Se les entregará equipos especializados)</h5>
                        <h5>📆 Lunes, 23 de febrero</h5>
                        <h5>🕓 10:00h</h5>
                        <h5>📍 Vejer, Cádiz</h5>
                        <button>Apuntate!</button>
                    </div>
                </div>
                
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
                        <button>Apuntate!</button>
                    </div>
                </div>

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
                        <button>Apuntate!</button>
                    </div>
                </div>

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
                        <button>Apuntate!</button>
                    </div>
                </div>

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
                        <button>Apuntate!</button>
                    </div>
                </div>

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
                        <button>Apuntate!</button>
                    </div>
                </div>";
            break;
                
        case 'limpieza':
            echo "<div class='casillas'>
                    <div class='limpieza1'>
                        <div class='fecha'>feb, 23</div>
                        <div class='categoria'><p>Limpieza</p></div>
                        <img src='../imagenes/eventos/limpieza1.jpg'>
                        <h4>Liempieza costa de Vejer</h3>
                        <h5>Limpieza de vertidos fecales de la costa.
                        (Se les entregará equipos especializados)</h5>
                        <h5>📆 Lunes, 23 de febrero</h5>
                        <h5>🕓 10:00h</h5>
                        <h5>📍 Vejer, Cádiz</h5>
                        <button>Apuntate!</button>
                    </div>
                </div>
                
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
                        <button>Apuntate!</button>
                    </div>
                </div>
                
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
                        <button>Apuntate!</button>
                    </div>
                </div>";
            break;

        case 'familiar':
            echo "<div class='casillas'>
                    <div class='limpieza1'>
                        <div class='fecha'>marz, 6</div>
                        <div class='categoria'><p>Familiar</p></div>
                        <img src='../imagenes/eventos/familia1.jpg'>
                        <h4>Liempieza Playa La Antilla</h3>
                        <h5>Jornada de limpieza para toda la familia.</h5>
                        <h5>📆 Viernes, 6 de marzo</h5>
                        <h5>🕓 15:00h</h5>
                        <h5>📍 La Antilla, Huelva</h5>
                        <button>Apuntate!</button>
                    </div>
                </div>";
            break;

        case 'taller':
            echo "<div class='casillas'>
                    <div class='taller'>
                        <div class='fecha'>marz, 26</div>
                        <div class='categoria'><p>Taller</p></div>
                        <img src='../imagenes/eventos/taller1.jpg'>
                        <h4>Taller informativo de reciclaje</h3>
                        <h5>Taller de reciclaje, separación de residuos y puntos limpios</h5>
                        <h5>📆 Jueves, 26 de marzo</h5>
                        <h5>🕓 17:00h</h5>
                        <h5>📍 I.E.S La Arboleda,Lepe</h5>
                        <button>Apuntate!</button>
                    </div>
                </div>";
            break;

        case 'educacion':
            echo "<div class='casillas'>
                    <div class='Educación'>
                        <div class='fecha'>marz, 13</div>
                        <div class='categoria'><p>Educación</p></div>
                        <img src='../imagenes/eventos/charla1.jpg'>
                        <h4>Charla: El problema del plástico</h3>
                        <h5>Conferencia online sobre el impacto del plástico en las playas.</h5>
                        <h5>📆 viernes, 13 de marzo</h5>
                        <h5>🕓 18:00h</h5>
                        <h5>📍 Online</h5>
                        <button>Apuntate!</button>
                    </div>
                </div>";
            break;

        default:
            echo "<div class='panel'>Selecciona una categoría</div>";
    }
    ?>

</div>



</body>
</html>