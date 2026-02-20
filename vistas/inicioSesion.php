<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conéctate!</title>
    <link rel="stylesheet" href="inicioSesion.css">
</head>
<body>  
  <form action="../controladores/inicioSesion.php" method="post">

    <a href="inicio_V.php" style="text-decoration: none; color: inherit;"><h1 name="titulo">Inicia sesión</h1></a>
    <h4 name="texto" class="texto">Accede a tu cuenta para continuar con tus actividades.</h4>

    <?php

    if(isset($_SESSION['error'])){
      echo "<div class='mensaje'>".$_SESSION['error']. "</div>";
      unset($_SESSION['error']);
    }   

    if(isset( $_SESSION['mensaje'])){
      echo "<div class='mensaje'>". $_SESSION['mensaje']. "</div>";
      unset( $_SESSION['mensaje']);
    }
    
    ?>

    <h3>Correo electrónico</h3>
    <input type="email" name="email" placeholder="tu@email.com">
        
    <h3>Contraseña</h3>
    <input type="password" name="password" placeholder="Introduce tu contraseña">

    <button type="submit" name="button">Inicia sesión</button>

    <p class="registro">
      ¿Todavía no tienes cuenta? 
      <a href="registro.php">Regístrate aquí</a>
    </p>

  </form>

</body>
</html>