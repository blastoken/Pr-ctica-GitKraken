<?php
if($_GET['usuario'] == ""){
  $usuario = "usuari";
}else{
  $usuario = $_GET['usuario'];
}
echo "
<div id=\"enlaces\">
<a href=\"index.php?page=inici.php&usuario=$usuario\" rol=\"button\" class=\"btn btn-default\">Inicio</a>
<a href=\"index.php?page=datos.php&usuario=$usuario\" rol=\"button\" class=\"btn btn-default\">Datos</a>
<a href=\"index.php?page=juegos.php&usuario=$usuario\" rol=\"button\" class=\"btn btn-default\">Juegos</a>
<a href=\"index.php?page=login.php&usuario=$usuario\" rol=\"button\" class=\"btn btn-default\">Login</a>
</div>
"
;
?>
