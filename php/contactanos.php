<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if(mail('pwbooks19@gmail.com' , $email. " 2"., $mensaje)){
echo "Correo enviado";
}
else {
  echo "Correo no enviado";
}

?>