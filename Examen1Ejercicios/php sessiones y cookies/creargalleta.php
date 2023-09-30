<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    if(isset($_POST['numero'])){
        $numero = $_POST['numero'];
        setcookie('numero', $numero, time() + 3600); // Crear cookie que expira en 1 hora
        header('Location: menu.php'); // Redirigir al menú
        exit();
    } else {
        echo "Por favor, ingresa un número.";
    }
?>


</body>
</html>

