<?php
error_reporting(0);
session_start();
if($_POST['usuario']==""){
  $usuario="usuario";
}else{
  $usuario=$_POST['usuario'];
}

if($_POST['passwd']==""){
  $passwd = "vacio";
}else {
  $passwd = $_POST['passwd'];
}
$comp="".$usuario.":".$passwd.":".PHP_EOL;
$esCorrecte = FALSE;
$fp = fopen("passwd.txt","r");
while(!feof($fp)){
  $comp2 = fgets($fp);
  if(strcmp($comp, $comp2) === 0){
    $usuario = $_POST['usuario'];
    $esCorrecte = TRUE;
    break;
  }else{
    $usuario = "usuario";
  }
}
fclose($fp);
if($esCorrecte){
  $_SESSION['usuari'] = $usuario;
  header("Location: ../index.php");
  die();
}else{
  $_SESSION['usuari'] = "usuari";
  $msg = "Login incorrecte";
  header("Location: ../index.php?page=login.php&msg=$msg");
  die();
}

?>
