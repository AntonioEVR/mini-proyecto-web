<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conéctate!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌊</text></svg>">

</head>
<?php 
if(isset( $_SESSION['mensaje'])){
  echo "<div class='mensaje'>". $_SESSION['mensaje']. "</div>";
  unset( $_SESSION['mensaje']);
}

if(isset($_SESSION['error'])){
  echo "<div class='mensaje'>".$_SESSION['error']. "</div>";
  unset($_SESSION['error']);
}


?>
<body>

    
    <form action="../controladores/inicio_sesion.php" method="post">

<!--         <img src="fondo.IS.png" class="foto">
 -->        <h1 name="titulo">Inicia sesión</h1>
        <h4 name="texto" class="texto">Accede a tu cuenta para continuar con tus actividades.</h4>
       <!--  <img src="fondo.IS.png" class="foto"> -->

        <h3>Correo electrónico</h3>
        <input type="email" name="email" placeholder="tu@email.com">
        
        <h3>Contraseña</h3>
        <input type="password" name="password" placeholder="Introduce tu contraseña">

        <button type="submit" name="button">Inicia sesión</button>

    </form>
    

</body>
</html>