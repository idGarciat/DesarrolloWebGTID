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
    include("conexion.php");
    $sql = "SELECT id,descripcion FROM tipo_habitacion";
    $resultado = $con->query($sql);

    ?>


    <div class="color-white">

        <form class="container bg-white color-white" action="create.php" method="post">
            <div>
                <h1>Insertar un alumno</h1>
            </div>
            <div>
                <label for="nro">Introduzca el numero</label>
                <input class="border-text" type="text" name="nro">
            </div>
            <br>
            <div><label for="bano_privado">Introduzca el baño privado (?)</label>
                <input class="border-text" type="text" name="bano_privado">
            </div>
            <br>
            <div><label for="espacio">Introduzca el espacio</label>
                <input class="border-text" type="text" name="espacio">
            </div>
            <br>
            <div><label for="precio">Introduzca el precio</label>
                <input class="border-text" type="text" name="precio">
            </div>
            <br>

            <div>
                <label for="id_tipo_habitacion">Tipo habitacion: </label>
                <select name="id_tipo_habitacion">
                    <?php
        while ($row_tipo_habitacion = $resultado->fetch_assoc()){?>

                    <option class="border-text" value="<?php echo $row_tipo_habitacion["id"] ?>">
                        <?php echo $row_tipo_habitacion["descripcion"]?></option>

                    <?php }
        ?>
                </select>
            </div>
            <br>
            <input type="submit" value="crear">
        </form>
    </div>

</body>

</html>