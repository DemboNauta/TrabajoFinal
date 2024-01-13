<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-SneakUtopia</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon">

    <script src="js/general.js"></script>
</head>
<body>
    <header>
        <div class="imagen"><img src="img/logo2.jfif" alt="logo de la empresa" width="100px" height="100px" id="logo"></div>
          <div id="titulo"><h1 id="tituloH1"> </h1></div>
          <nav>
              <ul>
                  <li><a href="inicio.html">INICIO</a></li>
                  <li><a href="contacto.html">CONTACTO</a></li>
                  <li><a href="login.html">LOGIN</a></li>
                  <li><a href="ejemplo.html">EJEMPLO</a></li>
              </ul>
          </nav>
      </header>
      <hr>
    <main>
        <br>
        <h1>SNEAKUTOPIA</h1>
        <form action="#" method="post">
            <label for="usuario">Nombre o correo electrónico:</label>
            <input type="text" name="usuario" id="usuario" required placeholder="Nombre o correo electrónico" autofocus><br>
        
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required><br>
        
            <input type="submit" value="Entrar" id="entrar">
        
            <p id="alter">No estás registrado? <a href="registro.html">Únete!</a></p>
        </form>
        
    </main>
</body>
</html>

<?php
    if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
      echo "Prueba";  
    }
?>