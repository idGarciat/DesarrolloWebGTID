switch ($operacion) {
    case "suma":
        $c = $a + $b;
        break;
    case "resta":
        $c = $a - $b;
        break;
    case "multiplicacion":
        $c = $a * $b;
        break;
    case "division":
        $c = $a / $b;
        break;
}
echo "el resultado es".$c;
?>