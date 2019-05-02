<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if(mail('pwbooks19@gmail.com' , $email, $mensaje)){
echo "Correo enviado";
<!DOCTYPE html>
<html lang ="en">
 <head>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="CSS/carga.css">
  </head>
  <body>
  </body>
  </html>
}
else{

}
