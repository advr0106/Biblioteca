<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "ezelorenzog@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "Mensaje: $mensaje";

// Enviando Mensaje
if(mail($destinatario, $asunto, $carta)){
  include 'SugerenciasEnviadas.html';
}
else{
  include 'SugerenciasEnviadas.html';
}
?>
