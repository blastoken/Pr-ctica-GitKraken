<?php
error_reporting(E_ERROR | E_WARNING );

if($_POST['partidas'] == ""){
	$part = "<p>No has jugado ninguna partida.</p>";
	$partidas = 0;
}else{
	$partidas = $_POST['partidas'];
	for($i = 0; $i < $_POST['partidas']; $i++){
		$part = $part . "<img src=\"..\/img\/mando.jpg\" width=\"20px\" heigth=\"20px\"></img>";
	}
};

$jocs = $_POST['jocs'];
for($i = 0; $i < count($jocs); $i++){
	switch ($jocs[$i]){
		case 1:
			$l_jocs = $l_jocs . "<img src=\"../img/lol.jpeg\" width=\"30px\" heigth=\"30px\"></img>";
			break;
		case 2:
			$l_jocs = $l_jocs . "<img src=\"../img/fifa.png\" width=\"30px\" heigth=\"30px\"></img>";
			break;
		case 3:
			$l_jocs = $l_jocs . "<img src=\"../img/buscaminas.jpg\" width=\"30px\" heigth=\"30px\"></img>";
			break;
		case 4:
			$l_jocs = $l_jocs . "<img src=\"../img/f1.jpg\" width=\"30px\" heigth=\"30px\"></img>";
			break;
		case 5:
			$l_jocs = $l_jocs . "<img src=\"../img/wow.jpg\" width=\"30px\" heigth=\"30px\"></img>";
			break;
	}
}

$com = $_POST['com'];
$long = strlen($com);
if($_POST['com'] == ""){
	$comentario = "<p>El teu comentari no té paraules.";
}else{
	$paraules = "<span class=\"par\">";
	$num_par = 1;
	for($i=0; $i < $long; $i++) {
		if($com[$i] == " "){
			$paraules = $paraules."</span><span class=\"par\">";
			$num_par++;
		}else{
			$cont++;
			$paraules = $paraules . $com[$i];
		}
	}
	$comentario = "<p>El teu comentari té ".$num_par." paraules.";
}

switch($_POST['puntuacio']){
	case 0:
		$puntuacio = "<img src=\"../img/0.png\" width=\"100px\" heigth=\"100px\"></img>";
		break;
	case 1:
		$puntuacio = "<img src=\"../img/1.png\" width=\"100px\" heigth=\"100px\"></img>";
		break;
	case 2:
		$puntuacio = "<img src=\"../img/2.png\" width=\"100px\" heigth=\"100px\"></img>";
		break;
	case 3:
		$puntuacio = "<img src=\"../img/3.png\" width=\"100px\" heigth=\"100px\"></img>";
		break;
	case 4:
		$puntuacio = "<img src=\"../img/4.png\" width=\"120px\" heigth=\"50px\"></img>";
		break;
	case 5:
		$puntuacio = "<img src=\"../img/5.png\" width=\"100px\" heigth=\"100px\"></img>";
		break;
}

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
		<p>Puntuación eSports:</p>
		".$puntuacio."
	</div>
	<div>
		<p>Has jugado ".$partidas." partidas competitivas este mes</p>
		".$part."
	</div>
	<div>
		<p>Has jugado a:</p> <bre />
		<p>".$l_jocs."</p>
	</div>
	<div>
		".$comentario."
		<br />
		".$paraules."
	</div>
</div>
<a href=\"../index.php?page=inici.php\" >Volver a Inicio</a>
</body>
</html>
";

?>
