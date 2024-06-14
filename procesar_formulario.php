<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

  
    $para = "mailto:contacto@safetysolutions.com.mx"; 
    $titulo = "Consulta a Safety Solutions México";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje: $mensaje\n";

   
    mail($para, $titulo, $contenido);

    header("Location: tuformulario.html?enviado=true");
} else {
    header("Location: tuformulario.html");
}
?>