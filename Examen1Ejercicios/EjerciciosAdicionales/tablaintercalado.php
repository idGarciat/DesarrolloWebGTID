<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        .rojo { background-color: red; }
        .amarillo { background-color: yellow; }
        .verde { background-color: green; }
        td, th { 
            border: 1px solid black; 
            padding: 10px; text-align: center; 
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Tabla Inter Calada</h1>
    <?php
        if(isset($_POST['filas']) && isset($_POST['columnas'])){
            $filas = (int)$_POST['filas'];
            $columnas = (int)$_POST['columnas'];

            echo "<table>";
            for ($i = 1; $i <= $filas; $i++) {
                $clase = ($i % 3 == 1) ? 'rojo' : (($i % 3 == 2) ? 'amarillo' : 'verde');
                echo "<tr class='$clase'>";
                for ($j = 1; $j <= $columnas; $j++) {
                    if ($j == 1) {
                        echo "<th></th>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>