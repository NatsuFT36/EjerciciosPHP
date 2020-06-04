<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 7.1</h1>
<?php
    header ("Content-type: text/html; charset=\"utf-8\"");
    echo "<h1>".$_GET['numero']."</h1>";
    if (is_numeric($_GET['numero']) && $_GET['numero'] >=1)
    {
        if($_GET['numero']%2!=0)
        {
            echo "<h2>Es un numero primo ".$_GET['numero']."</h2>";
        }
        else
        {
            echo "<h2>No es un numero primo ".$_GET['numero']."</h2>";
        }
    }
?>
<form>
Escribe un numero:
<input name="numero" type="text" placeholder="Escribe cualquier numero">
<input type="submit" value="Iniciar">
</form>
</body>
</html>