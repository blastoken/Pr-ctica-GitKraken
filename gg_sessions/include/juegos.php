<?php
session_start();
  echo"
  <div id=\"formulari\">
  <form action=\"include/processarJuegos.php\" method=\"post\">
  ¿Cuantas partidas has jugado este mes a juegos competitivos?
  <br />
  <input type=\"text\" name=\"partidas\" style=\"width:5%; height:5%\">
  <br />
  ¿Que juegos has jugado?
  <br />
  <input type=\"checkbox\" name=\"jocs[]\" value=\"1\" />LoL<br />
  <input type=\"checkbox\" name=\"jocs[]\" value=\"2\" />Fifa<br />
  <input type=\"checkbox\" name=\"jocs[]\" value=\"3\" />Buscaminas<br />
  <input type=\"checkbox\" name=\"jocs[]\" value=\"4\" />F1<br />
  <input type=\"checkbox\" name=\"jocs[]\" value=\"5\" />WoW
  <br />
  Comentario:
  <br />
  <textarea name=\"com\" style=\"width:30%; height:15%\" ></textarea>
  <br />
  ¡Puntua los eSports!
  <br />
  <select name=\"puntuacio\">
  <option value=\"0\" /> 0
  <br />
  <option value=\"1\" /> 1
  <br />
  <option value=\"2\" /> 2
  <br />
  <option value=\"3\" /> 3
  <br />
  <option value=\"4\" /> 4
  <br />
  <option value=\"5\" /> 5
  </select>
  <br />
  <br />
  <input type=\"submit\" name=\"enviar\" value=\"Enviar Informe\"></form>
  </div>"
  ;
  ?>
