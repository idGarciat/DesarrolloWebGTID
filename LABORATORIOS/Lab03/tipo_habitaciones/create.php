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
    $descripcion = $_POST['descripcion'];
    $numero_camas = $_POST['numero_camas'];

    $sql = "INSERT INTO tipo_habitacion (descripcion, numero_camas) VALUES ('$descripcion', '$numero_camas')";

    if ($con->query($sql) === TRUE){ ?>

    <div class="container bg-white color-white">
        <h2>Confirmado</h2>
    </div>

    <?php } else { 
        ?>
    <div class="container bg-white color-white">
        <h1>Hay un error'</h1>
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