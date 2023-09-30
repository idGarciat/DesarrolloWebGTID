<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Resultado</h1>
    <?php

            $cadena1 = $_POST['cadena1'];
            $cadena2 = $_POST['cadena2'];
        if(isset($_POST['cadena1'])){

            
            echo "Cadenas ingresadas: '$cadena1' y '$cadena2' <br>";

            if (stripos($cadena1, $cadena2) !== false) {

                echo "La palabra '$cadena1' tiene la palabra: '$cadena2'<br>";

            } else {

                echo "No contiene la palabra: $cadena2.";

            }
        }
    ?>

    
</body>
</html>