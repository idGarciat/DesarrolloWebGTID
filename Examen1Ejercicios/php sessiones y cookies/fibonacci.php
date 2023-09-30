

<?php
    if(isset($_COOKIE['numero'])){
        $numero = $_COOKIE['numero'];
        $fibonacci = [0, 1];

        for ($i = 2; $i <= $numero; $i++) {
            $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
            echo $fibonacci[$i], ", ";
        }

        echo "El $numero º valor de de Fibonacci es {$fibonacci[$numero]}.";
    } else {
        echo "No se ha ingresado un número válido.";
    }
?>