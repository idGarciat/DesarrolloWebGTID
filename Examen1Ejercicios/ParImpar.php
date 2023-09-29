<!DOCTYPE html>
<html>
<head>
    <title>Par o Impar</title>
</head>
<body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el número del formulario
            $numero = $_POST["numero"];

            // Verificar si el número es un entero positivo
            if (is_numeric($numero) && $numero > 0 && floor($numero) == $numero) {
                // Determinar si es par o impar
                if ($numero % 2 == 0) {
                    echo "El número $numero es par.";
                } else {
                    echo "El número $numero es impar.";
                }
            } else {
                echo "Por favor, ingrese un número entero positivo.";
            }
        }
    ?>
</body>
</html>
