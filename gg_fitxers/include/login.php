<?php
if($_GET['msg'] == ""){
  $msg = "";
}else{
  $msg = $_GET['msg'];
}
echo"
<div id=\"login\">
<form action=\"include/processaLogin.php\" method=\"post\">
Usuario
<br/>
<input type=\"text\" name=\"usuario\" />
<br/>
Contraseña
<br/>
<input type=\"password\" name=\"passwd\" />
<br/>
<input type=\"submit\" value=\"Login\"/>
</form>
</div>
<p class=\"alineat\">$msg</p>
";
?>
