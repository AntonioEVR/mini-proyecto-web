<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Únete al Equipo!</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌊</text></svg>">

</head>
<body>
<form action="../controladores/registro.php" method="post">
  <h1 name="titulo">Registro</h1>
  <h4 name="texto" class="texto">Rellena el formulario para completar tu registro. </br>
  Los campos marcados con * son necesarios.</h4>

 <?php 

if(isset($_SESSION['errorCamposNecesarios'])){
  echo "<div class='mensaje'>".$_SESSION['errorCamposNecesarios']. "</div>";
  unset($_SESSION['errorCamposNecesarios']);
}

if(isset($_SESSION['errorDatos'])){
  echo "<div class='mensaje'>".$_SESSION['errorDatos']. "</div>";
  unset($_SESSION['errorDatos']);
}

if(isset( $_SESSION['mensajeCorrecto'])){
  echo "<div class='mensajeCorrecto'>". $_SESSION['mensajeCorrecto']. "</div>";
  unset( $_SESSION['mensajeCorrecto']);
}

if(isset( $_SESSION['mensaje'])){
  echo "<div class='mensaje'>". $_SESSION['mensaje']. "</div>";
  unset( $_SESSION['mensaje']);
}

?>
  <h3>Nombre*</h3>
  <input type="text" name="nombre" placeholder="Tu nombre"> 

  <h3>Apellidos*</h3>
  <input type="text" name="apellido" placeholder="Tus apellidos">

  <h3>Contraseña*</h3>
  <h4 name="textoPassword" class="textoPassword">Debe tener más de cinco carácteres.</h4>
  <input type="password" name="password" placeholder="Crea una contraeña">

  <h3>Correo electrónico*</h3>
  <input type="email" name="email" placeholder="tu@email.com">

  <h3>Edad</h3>
  <select name="edad" class="edad">
    <option value="" hidden selected>Selecciona tu edad</option> 
    <option value="16-25">16-25 años</option>
    <option value="26-35">26-35 años</option> 
    <option value="36-45">36-45 años</option>
    <option value="46-55">46-55 años</option> 
    <option value="55+">Más de 55 años</option>
  </select>

  <h3>Telefono</h3>
  <input type="tel" name="telefono" placeholder="+34 000 000 000">

  <button type="submit" name="button">Registrarse</button>
</form>

</body>
</html>