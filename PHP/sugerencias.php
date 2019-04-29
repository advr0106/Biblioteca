<?php
$email = $_POST['email'];
$curso = $_POST['curso'];
$mensaje = $_POST['mensaje'];

echo $nombre. "  ha dicho>: <br/>" $mensaje;

if(mail('ezelorenzog@gmail.com' , $email, $mensaje)){
echo "Tu mensaje no se pudo Enviar";
}else {
  echo "Correo no enviado";
}
public funtion plantilla(){
  include "..SugEnv.html";
}



?>
