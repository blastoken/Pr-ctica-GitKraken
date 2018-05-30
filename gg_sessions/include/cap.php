<?php
session_start();
echo "
<table>
  <tr>
    <td><p>3 d'abril de 2018</p></td>
    <td>
      <img src=\"img/lmao.jpg\" width=\"120px\" heigth=\"120px\" />
    </td>
    <td>
      <form action=\"include/procesaEstil.php\" method=\"post\">
        <label>Estils: </label>
        <input type=\"radio\" name=\"stil\" value=\"defecte\" />Defecto
        <input type=\"radio\" name=\"stil\" value=\"rojo\" />Rojo
        <input type=\"radio\" name=\"stil\" value=\"verde\" />Verde
        <input type=\"submit\" value=\"Canvia\"/>
      </form>
    </td>
  </tr>
</table>
";
?>
