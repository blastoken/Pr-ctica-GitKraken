<?php
session_start();
if($_POST['stil'] == ""){
  $_SESSION['stil'] = "defecte.css";
}else{
  $_SESSION['stil'] = $_POST['stil'].".css";
}
header("Location: ../index.php");
die();
?>
