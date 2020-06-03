<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 7</h1>
<?php
    $num=$_GET['numero'];
    $i=2;
    $primo=true;
    while ($primo && $i<$num)
    {
        $primo=($num%$i) !=0;
        $i++;
    }
    if ($primo)
    {
        echo "<h2>El numero $num es primo</h2>";
    }
    else
    {
        echo "<h2>El numero $num no es primo</h2>";
    }
?>
</body>
</html>