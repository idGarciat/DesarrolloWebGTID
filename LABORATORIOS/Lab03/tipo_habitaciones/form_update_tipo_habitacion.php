<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Update</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
include("conexion.php");
$id = $_GET["id"];
$sql_tipo_habitacion = "SELECT descripcion, numero_camas FROM tipo_habitacion WHERE id = $id";
$resultado_tipo_habitacion = $con->query($sql_tipo_habitacion);
$row_tipo_habitacion = $resultado_tipo_habitacion->fetch_assoc();

?>

    <form class="container bg-white color-white" action="update.php" method="post">
        <div>
            <h1>Actualizar datos</h1>
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <input class="border-text" type="text" name="descripcion" value="<?php echo $row_tipo_habitacion["descripcion"] ?>">
        </div>
        <br>
        <div>
            <label for="numero_camas">Numero de camas</label>
            <input class="border-text" type="text" name="numero_camas" value="<?php echo $row_tipo_habitacion["numero_camas"] ?>">
        </div>

        <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Actualizar">


    </form>
</body>

</html>