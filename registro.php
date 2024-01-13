<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro-SneakUtopia</title>
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
            <label for="nombre"><p>Nombre:</p></label>
            <input type="text" name="nombre" id="nombre" required placeholder="Nombre" autofocus><br>
        
            <label for="apellidos"><p>Apellidos:</p></label>
            <input type="text" name="apellidos" id="apellidos" required placeholder="Apellidos"><br>
        
            <label for="correo"><p>Correo Electrónico:</p></label>
            <input type="email" name="correo" id="correo" required placeholder="Correo electrónico" ><br>
        
            <label for="nacimiento"><p>Fecha de Nacimiento:</p></label>
            <input type="date" name="nacimiento" id="nacimiento"><br>
        
            <label for="contraseña"><p>Contraseña:</p></label>
            <input type="password" name="password" id="password" placeholder="Contraseña" required><br>
        
            <input type="submit" value="Entrar" id="entrar">
        
            <p id="alter">¿Ya tienes cuenta? <a href="login.html">Accede!</a></p>
        </form>
        
    </main>
</body>
</html>

<?php
$servername="SneakUtopia";
    if(isset($_POST['usuario']) && isset($_POST['password'])){
      $conn=new mysqli("localhost","root","root","sneakutopia");
      $sql="SELECT EMAIL FROM USERS WHERE EMAIL=".$_POST['email'];
      $result=$conn->query($select);
      if($result->num_rows >0){
        echo "El usuario ya existe";
        }else{
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $fechaNacimiento = $_POST['nacimiento'];
            $password = $_POST['password'];
            $tipoUsuario = 'user'; 

            // Consulta de INSERT
            $sql = "INSERT INTO USERS (name, apellidos, email, fechaNacimiento, password, tipoUsuario) VALUES ('$nombre', '$apellidos', '$email', '$fechaNacimiento', '$password', '$tipoUsuario')";
            if ($conn->query($sql)) {
                echo "Nuevo usuario creado correctamente";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>