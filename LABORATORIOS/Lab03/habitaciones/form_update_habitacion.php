<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Update</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
include("conexion.php");
$id = $_GET["id"];
$sql_habitacion = "SELECT nro,bano_privado,espacio, precio ,id_tipo_habitacion FROM habitacion WHERE id = $id";
$resultado_habitacion = $con->query($sql_habitacion);
$row_habitacion = $resultado_habitacion->fetch_assoc();

$sql_tipo_habitacion = "SELECT id,descripcion FROM tipo_habitacion";
$resultado_tipo_habitacion = $con->query($sql_tipo_habitacion);

?>

    <form class="container bg-white color-white" action="update.php" method="post">
        <div>
            <h1>Actualizar datos</h1>
        </div>
        <div>
            <label for="nro">NRO</label>
            <input class="border-text" type="text" name="nro" value="<?php echo $row_habitacion["nro"] ?>">
        </div>
        <br>
        <div>
            <label for="bano_privado">Baño Privado</label>
            <input class="border-text" type="text" name="bano_privado" value="<?php echo $row_habitacion["bano_privado"] ?>">
        </div>
        <br>
        <div>
            <label for="espacio">Espacio</label>
            <input class="border-text" type="text" name="espacio" value="<?php echo $row_habitacion['espacio']; ?>">
        </div>
        <br>
        <div>
            <label for="precio">Precio</label>
            <input class="border-text" type="text" name="precio" value="<?php echo $row_habitacion['precio']; ?>">
        </div>
        <br>

        <div>
            <label for="id_tipo_habitacion">Tipo de habitacion: </label>
            <select name="id_tipo_habitacion">
                <?php
            while ($row_tipo_habitacion = $resultado_tipo_habitacion->fetch_assoc()){?>

                <option value="<?php echo $row_tipo_habitacion["id"] ?>"
                    <?php echo $row_tipo_habitacion['id']==$row_habitacion['id_tipo_habitacion']?"selected":"";  ?>>
                    <?php echo $row_tipo_habitacion["descripcion"]?></option>

                <?php }
            ?>
            </select>
        </div>

        <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Actualizar">


    </form>
</body>

</html>