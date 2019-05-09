<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if(mail('pwbooks19@gmail.com', $asunto, $mensaje)){
include 'RegistraseC.html';
}
else {
  include 'RegistrarseIn.html';
}

?>
