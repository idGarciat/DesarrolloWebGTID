<?php
$operacion = $_GET['operacion'];
$a = $_GET['a'];
$b = $_GET['b'];

switch ($operacion) {
    case "milimetro":
        $c = $a * 10000;
        break;
    case "centimetro":
        $c = $a - $b;
        break;
    case "decimetro":
        $c = $a * $b;
        break;
    case "metro":
        $c = $a / $b;
        break;
    case "kilometro":
        $c = $a / $b;
        break;
}

echo "el resultado es".$c;
?>
