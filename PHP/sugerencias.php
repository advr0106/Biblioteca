<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

mail('pwbooks19@gmail.com' , $asunto, $mensaje);

?>
