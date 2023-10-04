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
    $id = $_GET['id'];
    $sql = "DELETE FROM tipo_habitacion WHERE id = $id";

    if ($con->query($sql) === TRUE) { ?>
    <div class="container bg-white color-white">

        <h1>
            Se eliminó correctamente
        </h1>
    </div>

    <?php } else { ?>
    <div class="container bg-white color-white">
        <h1>Errorrrrrrrrrrrrrrrr</h1>

    </div>
    <?php
    }
    $con->close();
    ?>
    <meta http-equiv="refresh" content="3; url=read.php" />

</body>

</html>