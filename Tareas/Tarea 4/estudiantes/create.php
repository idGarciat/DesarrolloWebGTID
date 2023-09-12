<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php   
    include('conexion.php');
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $CU = $_POST['CU'];
    $id_carrera = $_POST['id_carrera'];

    $sql = "INSERT INTO alumno (nombres, apellidos, CU, id_carrera) VALUES ('$nombres', '$apellidos', '$CU', $id_carrera)";

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