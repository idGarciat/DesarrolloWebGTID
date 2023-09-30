

<?php
    if(isset($_COOKIE['numero'])){
        $numero = $_COOKIE['numero'];
        $factorial = 1;

        for($i = 1; $i <= $numero; $i++){
            $factorial *= $i;
        }

        echo "El factorial de $numero es $factorial.";
    } else {
        echo "No se ha ingresado un número válido.";
    }
?>