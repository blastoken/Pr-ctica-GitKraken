<?php
error_reporting(E_ERROR | E_WARNING );
if($_POST['usuari'] == ""){
  $usuari = "Sense valor";
}else{
$usuari=$_POST['usuari'];
};

if($_POST['prb'] == ""){
	$tipo = "Sense valor";
}else{
	$tipo=$_POST['prb'];
	if($_POST['prb'] == "Juego"){
		$img = "
				<div id=\"ft\">
					<img src=\"../img/joc.png\" width=\"100px\" heigth=\"100px\"></img>
				</div>
				";

      }else if($_POST['prb'] == "Web"){
        $img = "
            <div>
              <img src=\"../img/web.png\" width=\"100px\" heigth=\"100px\"></img>
            </div>
            ";
      }else if($_POST['prb'] == "Usuario"){
        $img = "
            <div>
              <img src=\"../img/usuari.png\" width=\"100px\" heigth=\"100px\"></img>
            </div>
            ";

      }
    };

    if($_POST['desc'] == ""){
    	$descripcion = "Sense valor";
    }else{
    $descripcion=$_POST['desc'];
    };

    if($_POST['correu'] == ""){
    	$correo = "Sense valor";
    }else{
    $correo=$_POST['correu'];
    };

    echo "
    <!DOCTYPE html>
    <head>
    <meta charset=\"utf-8\"/>
    <title>Activitat Formulari</title>
    <link rel=\"stylesheet\" href=\"estil.css\" />
    </head>
    <body>
    <div id=\"informe\">
    	<div>
    		<h2>Informe de reporte enviado por: <span id=\"user\">".$usuari."</span></h1>
    	</div>
    	<div>
    		<p>Problemas con <span id=\"tipo\">".$tipo."</span>.</p>
    	</div>
    	".$img."
    	<div>
    		<h3>Descripción problema:</h3>
    		<p id=\"desc\">".$descripcion."</span></p>
    	</div>
    	<div>
    		<h3>Correo de contacto</h3>
    		<p id=\"correo\">".$correo."</span></p>
    	</div>
    </div>
    <a href=\"../index.php?page=inici.php\" rol=\"button\" >Volver a Inicio</a>
    </body>
    </html>
    ";

?>
