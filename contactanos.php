<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if(mail('pwbooks19@gmail.com', $asunto, $mensaje)){
include 'SugerenciasEnviadas.html';
}
else {
  include 'SugerenciasNoEnviadas.html';
}

?>
