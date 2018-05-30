<?php
  echo"
  <div id=\"formulari\">
  <form action=\"include/processarDatos.php\" method=\"post\">
  Introduce un nombre:
  <br />
  <input type=\"text\" name=\"usuari\">
  <br />
  Tipo de problema:
  <br />
  <input type=\"radio\" name=\"prb\" value=\"Juego\" /> Problemas Juego
  <br />
  <input type=\"radio\" name=\"prb\" value=\"Web\" /> Problemas Web
  <br />
  <input type=\"radio\" name=\"prb\" value=\"Usuario\" /> Reportar Usuario
  <br />
  Descripción problema:
  <br />
  <textarea name=\"desc\" style=\"width:30%; height:15%\" ></textarea>
  <br />
  Correo de contacto:
  <br />
  <input type=\"text\" name=\"correu\">
  <br />
  <input type=\"submit\" name=\"enviar\" value=\"Enviar Informe\">
  </form>
  </div>
  ";
?>
