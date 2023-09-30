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
        if(isset($_POST['cadena'])){
            $cadena = $_POST['cadena'];
            
            echo "Cadena ingresada: $cadena<br>";

            if (stripos($cadena, 'SCRIPT') !== false) {
                echo "Tiene la palabra 'SCRIPT'.<br>";
                $cadena = str_ireplace('SCRIPT', '', $cadena);
                echo "Cadena sin la palabra 'SCRIPT': $cadena";
            } else {
                echo "No contiene la palabra 'SCRIPT'.";
            }
        }
    ?>

    
</body>
</html>