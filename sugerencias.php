<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if(mail('_mainaccount@pwbooks.site', $asunto, $mensaje)){
include 'SugerenciasEnviadas.html';
}
else {
  include 'SugerenciasNoEnviadas.html';
}

?>
