<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "ezelorenzog@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('SugerenciasEnviadas.html');



  mail($destinatario, $asunto, $carta);
  header('Location:mensaje-de-envio.html');
?>
