<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if(mail('pwbooks19@gmail.com' , $email, $mensaje)){
echo "Tu mensaje no se pudo Enviar";
}
else {
  echo "Correo no enviado";
}
public funtion plantilla(){
  include "..SugEnv.html";
}



?>
