<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "ezelorenzog@gmail.com";
$asunto = "Contacto desde nuestra web";

<<<<<<< HEAD
$carta = "Mensaje: $mensaje";
=======

>>>>>>> ff06a6937f0bed438f27d002061975314f7724a3

// Enviando Mensaje
if(mail($destinatario, $asunto, $carta)){
  include 'RegistrarseC.html';
}
else{
  include 'RegistrarseC.html';
}
?>
