<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if(mail('pwbookss@pwbooks.site', $asunto, $mensaje)){
include 'SugerenciasEnviadas.html';
}
else {
  include 'SugerenciasNoEnviadas.html';
}

?>
