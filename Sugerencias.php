<!DOCTYPE html>
<html lang="en">
  <head>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
   ></script>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/sugerencias.css">
    <link rel="icon" type="image/png" href="imgs/logo/logo-solo2.png" />
    <title>Sugerencias</title>
  </head>
  <body background="imgs/libros.gif">
    <!-- Menu de arriba  -->

      <nav>
      <EMBED SRC="Musica\Audio 4 20 min.mp3" HIDDEN="true" preload="auto">
        <div class="logo">
          <img src="imgs/logo/logo2.png" alt=""  >
        </div>
        <ul class="nav-links">
          <li>
            <a href="index.html" class="t1">
                <span class="icono">
                  <img src="imgs\home.png" alt="" width="20px" >
                </span>
              Inicio
            </a>
          </li>
          <li>
            <a href="sobrenosotros2.html" class="t2" align="center">
                <span class="icono">
                <img src="imgs\home.png" alt="" width="20px" >
                  </i>
                </span>
              Sobre nosotros
            </a>
          </li>
          <li>
            <a href="https://pwbooks2.blogspot.com/" class="t3" >
                <span class="icono">
                  <img src="imgs\wordpress.png" alt="" width="20px" >
                  </i>
                </span>
              Blog
            </a>
          </li>
          <li>
            <a href="https://pwbooks2.blogspot.com/" class="t4" >
                  <img src="imgs\open-book (3).png" alt="" width="20px" >
              Libros
            </a>
            <ul class="sub-libros">
              <li>
                <a href="BibliotecaMejorada.html">
                  Lo más popular
                </a>
              </li>
              <li>
                <a href="">
                  Buscar libro
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="t5">
                <span class="icono">
                  <img src="imgs\music-player.png" alt="" width="20px" >
                </span>
              Música
            </a>
            <ul class="sub-musica">
              <li>
                <a href="music.html">
                  Lo más popular
                </a>
              </li>
              <li>
                <a href="music.html">
                  Buscar música
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="Sugerencias.html" class="t6">
                <span class="icono">
                    <img src="imgs\suggestion.png" alt="">
                  </i>
                </span>
              Sugerencias
            </a>
          </li>
          <li>
            <a href="creditos.html" class="t7">
                <span class="icono">
                  <img src="imgs\suggestion.png" alt="" width="20px" >
                </span>
              Web Master
            </a>
          </li>
        </ul>
        <div class="burger">
          <div class="line1">
          </div>
          <div class="line2">
          </div>
          <div class="line3">
          </div>
        </div>
      </nav>
    <!-- Fin menu de arriba  -->


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="login-reg-panel">
<div class="login-info-box">
  <h2>¿Tienes sugerencias para nuevos libros?</h2>
  <p>Dale click aquí</p>
  <label id="label-register" for="log-reg-show">Libros</label>
  <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
</div>

<div class="register-info-box">
  <h2>¿Tienes alguna sugerencia de cambios en la página?</h2>
  <p>Dale click aquí</p>
  <label id="label-login" for="log-login-show">Página</label>
  <input type="radio" name="active-log-panel" id="log-login-show">
</div>
<form method="post" action="php/sugerencias.php">
<div class="white-panel">
  <div class="login-show">
    <h2>¿Que libro quieres que agreguemos?</h2>
    <input type="email" name="email" placeholder="E-mail">
    <textarea name="mensaje" id="" rows="10" cols="25" placeholder="Ingresa aquí el libro que quieres que agreguemos..."></textarea>
    <input type="submit" value="Enviar">
    <a href="">Forgot password?</a>
  </div>
</form>
<form method="post" action="php/sugerencias2.php">
  <div class="register-show">
    <h2>¿Qué cambios sugerieres para la página?</h2>
    <input type="email" placeholder="E-mail">
    <textarea name="mensaje" id="" rows="10" cols="25" placeholder="Ingresa aquí el cambio que quieres que hagamos a la página..."></textarea>
    <input type="submit" value="Enviar">
  </div>
</form>
</div>
</div>
<script>
$(document).ready(function(){
$('.login-info-box').fadeOut();
$('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
if($('#log-login-show').is(':checked')) {
    $('.register-info-box').fadeOut();
    $('.login-info-box').fadeIn();

    $('.white-panel').addClass('right-log');
    $('.register-show').addClass('show-log-panel');
    $('.login-show').removeClass('show-log-panel');

}
else if($('#log-reg-show').is(':checked')) {
    $('.register-info-box').fadeIn();
    $('.login-info-box').fadeOut();

    $('.white-panel').removeClass('right-log');

    $('.login-show').addClass('show-log-panel');
    $('.register-show').removeClass('show-log-panel');
}
});
</script>

<div class="footer">
<div class="footer-text">
<p>&copy; PWBooks | Informática| 2019. Todos los derechos reservados.</p>
</div>
<div class="footer-icon">
 <a href="#" class="fa fa-facebook"></a>
 <a href="#" class="fa fa-instagram"></a>

</div>
</div>
  </body>
</html>
