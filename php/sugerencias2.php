<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if(mail('ezelorenzog@gmail.com' , $email. " 2"., $mensaje)){
echo "Correo enviado";
}
else {
  echo "Correo no enviado";
}
public funtion plantilla(){
  include "..SugEnv.html";
}



?>
