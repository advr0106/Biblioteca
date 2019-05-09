<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if(mail('_mainaccount@pwbooks.site', $asunto, $mensaje)){
include 'RegistraseC.html';
}
else {
  include 'RegistrarseIn.html';
}

?>
