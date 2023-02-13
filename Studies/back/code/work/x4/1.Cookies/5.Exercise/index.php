<?php
//#############PART 1#############
//Tiempo de la cookie y tiempo base.
$time = time()+(30);
$tiempobase = $time;

//añadir el tiempo base mas el tiempo de vida de la cookie.
setcookie("testCookie", "" . $tiempobase . "" , $time);
?>
  <html>
  <head><title>Enviar la cookie</title></head>
  <center>
    <body>
    <p> Envia la cookie </p>
    <form method="post" action="index.php" name="uno">
      <input type="submit" name="enviar" value="Pulsa para enviar">
    </form>
    </body>
  </center>
  </html>

<?php


//#############PART 2#############


//Comprueba que la cookie a sido enviada y muestra el tiempo en segundos
if(isset($_COOKIE['testCookie'])){

  echo "La cookie a sido enviada.<br />";
  if(($_COOKIE['testCookie']) - time() < 1){
    echo "La cookie a muerto.";
  }else{
    echo "La cookie morira en: " . (($_COOKIE['testCookie']) - time()) . " segundos";
  }

}else{
  echo "La Cookie no a sido enviada...";
}
?>