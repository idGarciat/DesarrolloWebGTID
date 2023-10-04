<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php   
    include('conexion.php');
    $nro = $_POST['nro'];
    $bano_privado = $_POST['bano_privado'];
    $espacio = $_POST['espacio'];
    $precio = $_POST['precio'];
    $id_tipo_habitacion = $_POST['id_tipo_habitacion'];

    $sql = "INSERT INTO habitacion (nro, bano_privado, espacio, precio, id_tipo_habitacion) VALUES ('$nro', '$bano_privado', '$espacio', '$precio', $id_tipo_habitacion)";

    if ($con->query($sql) === TRUE){ ?>

    <div class="container bg-white color-white">
        <h2>Confirmado</h2>
    </div>

    <?php } else { 
        ?>
    <div class="container bg-white color-white">
        <h1>Hay un error pa'</h1>
        <h2>
            <?php echo $sql . "<br>" . $con->error; ?>
        </h2>
    </div>
    <?php
}

$con->close();
    ?>
    <meta http-equiv="refresh" content="3; url=read.php" />


</body>

</html>