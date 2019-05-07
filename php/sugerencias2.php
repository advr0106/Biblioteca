<?php
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if(mail('pwbooks19@gmail.com' , $asunto, $mensaje)){
echo "Correo enviado";
<!DOCTYPE html>
<html lang ="en">
 <head>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="CSS/carga.css">
  </head>
  <body>
  <div class = "preload" id = "preload">
  <div class = "loader1" id = "loader1"></div>
  <div class = "loader2" id = "loader2"></div>
  </body>
  </html>
}
else{

}



?>
