<?php
$email = $_POST['email'];
$curso = $_POST['curso'];
$mensaje = $_POST['mensaje'];



if(mail('alexvalenzuela0108@gmail.com' , $email, $mensaje)){
echo "Tu mensaje no se pudo Enviar";
}else {
  echo "Correo no enviado";
}
public funtion plantilla(){
  include "..SugEnv.html";
}



?>
