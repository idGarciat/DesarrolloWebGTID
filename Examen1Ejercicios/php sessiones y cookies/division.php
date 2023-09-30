

<?php
    if(isset($_COOKIE['numero'])){
        $numero = $_COOKIE['numero'];
        $division = $numero / 2;

        echo "La mitad de $numero es $division.";
    } else {
        echo "No se ha ingresado un número válido.";
    }
?>