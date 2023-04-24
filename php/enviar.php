<?php
    $detino= "info@rocherie.com.ar";
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $fecha = $_POST["fecha"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nTelefono: " . $telefono . "\nEmail: " . $email . "\nFecha: " . $fecha . "\nMensaje: " . $mensaje;
    mail($detino, "Contacto", $contenido);
    header("Location:../paginas/gracias.html");

?>