<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Mostrar Sumatoria</h1>
    <?php
        include 'funciones.php';

        if(isset($_GET['n'])){
            $n = $_GET['n'];
            $sumatoria = fibonacci($n);

            echo "El Fibonacci del número $n es $sumatoria.";
        } else {
            echo "Por favor, introduce un valor para n.";
        }
    ?>

</body>
</html>