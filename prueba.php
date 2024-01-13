<?php

    $conn=new mysqli("localhost","root","","sneakutopia");
    $nombre = "Edgar";
    $apellidos = "Milá";
    $email = "edgarmila_10@outlook.com";
    $fechaNacimiento = "19-11-2004";
    $password = "Prueba";
    $tipoUsuario = 'user'; 

  
    $sql = "INSERT INTO USERS (name, apellidos, email, fechaNacimiento, password, tipoUsuario) VALUES ('$nombre', '$apellidos', '$email', '$fechaNacimiento', '$password', '$tipoUsuario')";
    if ($conn->query($sql)) {
        echo "Nuevo usuario creado correctamente";
        }else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error;
            }
    
?>