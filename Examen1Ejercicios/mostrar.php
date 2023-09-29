<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
</head>
<body>
    <?php
        if(isset($_POST['nombre']) && isset($_POST['ciudad'])){
            $nombre = $_POST['nombre'];
            $ciudad = $_POST['ciudad'];

            echo "<p><strong>$nombre</strong> vive en <span style='color:red;'>$ciudad</span>.</p>";
        } else {
            echo "Por favor, ingresa tu nombre y ciudad.";
        }
    ?>
</body>
</html>
