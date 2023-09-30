

<?php
    if(isset($_COOKIE['numero'])){
        $numero = $_COOKIE['numero'];
        $sumatoria = 0;

        for($i = 1; $i <= $numero; $i++){
            $sumatoria += $i;
        }

        echo "La sumatoria de los números hasta $numero es $sumatoria.";
    } else {
        echo "No se ha ingresado un número válido.";
    }
?>