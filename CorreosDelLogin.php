<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "ezelorenzog@gmail.com";
$asunto = "Contacto desde nuestra web";



// Enviando Mensaje
if(mail($destinatario, $asunto, $carta)){
  include 'RegistrarseC.html';
}
else{
  include 'RegistrarseC.html';
}
?>
