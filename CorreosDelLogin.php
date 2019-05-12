<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "ezelorenzog@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "Mensaje: $mensaje";

// Enviando Mensaje
if(mail($destinatario, $asunto, $carta)){
  include 'RegistrarseC.html';
}
else{
  include 'RegistrarseC.html';
}
?>
