<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if(mail('_mainaccount@pwbooks.site', $asunto, $mensaje)){
include 'SugerenciasEnviadas.html';
}
else {
  include 'SugerenciasNoEnviadas.html';
}

?>
