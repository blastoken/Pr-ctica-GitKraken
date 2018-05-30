<?php
error_reporting(0);
session_start();
  $estil =$_SESSION['stil'];

  if($_GET['page']==""){
    $page="inici.php";
  }else {
    $page=$_GET['page'];
  }

  if($_SESSION['usuari']==""){
    $usuari="usuari";
  }else{
    $usuari=$_SESSION['usuari'];
  }
echo "
<!DOCTYPE html>
<head>
<meta charset=\"utf-8\"/>
<title>Proyecto PHP</title>
<link rel=\"stylesheet\" href=\"include/$estil\" />
<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\">
</head>
<body>
<div id=\"tot\">
<header id=\"cap\">";
include 'include/cap.php';
echo"
</header>
<div id=\"cos\">";
include ('include/cos.php');
echo"
<p class=\"alineat\">Benvingut $usuari!</p>
<div id=\"pagina\">";
include 'include/'.$page;
echo"
</div>
</div>
<footer id=\"peu\">";
include 'include/peu.php';
echo"
</footer>
</div>
</body>
</html>
";
?>
