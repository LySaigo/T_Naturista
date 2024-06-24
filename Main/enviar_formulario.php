<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $servicio = $_POST["servicio"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "correo@tudominio.com"; // Cambia esto por tu dirección de correo electrónico
    $asunto = "Nuevo mensaje de solicitud de servicio";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Servicio deseado: $servicio\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $headers = "From: $nombre <$email>";

    if (mail($destinatario, $asunto, $contenido, $headers)) {
        echo "<p>¡El mensaje se ha enviado correctamente! Nos pondremos en contacto contigo pronto.</p>";
    } else {
        echo "<p>Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</p>";
    }
}
?>
