<!DOCTYPE html>
<html>
<head>
    <title>Área del Triángulo</title>
</head>
<body>
    <h1>Área del Triángulo</h1>
    <?php
        // Verificamos si se enviaron los valores por el método GET
        if(isset($_GET['b']) && isset($_GET['h'])){
            // Obtenemos los valores de b y h
            $b = $_GET['b'];
            $h = $_GET['h'];
            
            // Verificamos si los valores son numéricos
            if(is_numeric($b) && is_numeric($h)){
                // Calculamos el área
                $area = ($b * $h) / 2;
                echo "Base (b) = $b <br>";
                echo "Altura (h) = $h <br>";
                echo "Área del Triángulo = $area";
            } else {
                echo "Los valores de b y h deben ser numéricos.";
            }
        } else {
            echo "Por favor, ingrese valores para b y h.";
        }
    ?>
</body>
</html>
