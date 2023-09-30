<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

table, td, th {
  border: 1px solid;
}

table {
  border-collapse: collapse;
}

</style>
<body>


<?php
        if(isset($_GET['num1']) && isset($_GET['num2'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $color = $_GET['color'];
            // Verificamos si los valores son numéricos
            if(is_numeric($num1) && is_numeric($num2)){
                $resultado = $num1 + $num2;

                echo "<h2>Resultado de la suma:</h2>";
                echo "<table border='3' style='background-color: $color;'>";
                echo "<tr> <td>$num1</td> <td> + </td> <td>$num2</td> <td> = </td> <td>$resultado</td> </tr>";
                echo "</table>";
            } else {
                echo "Los valores deben ser numéricos.";
            }
        }
    ?>

</body>
</html>