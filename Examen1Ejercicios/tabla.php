<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: lightgray;
            font-weight: bold;
        }
    </style>

<body>
    
 <h1>Tabla de Multiplicación</h1>
    <?php
        if(isset($_POST['filas']) && isset($_POST['columnas'])){
            $filas = (int)$_POST['filas'];
            $columnas = (int)$_POST['columnas'];

            echo "<table>";
            for ($i = 0; $i <= $filas; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= $columnas; $j++) {
                    if ($i == 0 && $j == 0) {
                        echo "<th></th>";
                    } elseif ($i == 0) {
                        echo "<th><b>$j</b></th>";
                    } elseif ($j == 0) {
                        echo "<th><b>$i</b></th>";
                    } else {
                        $valor = $i * $j;
                        echo "<td>$valor</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>

</body>
</html>