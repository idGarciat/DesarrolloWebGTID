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
    $sql = "SELECT id,nombre FROM carrera";
    $resultado = $con->query($sql);

    ?>


    <div class="color-white">

        <form class="container bg-white color-white" action="create.php" method="post">
            <div>
                <h1>Insertar un alumno</h1>
            </div>
            <div>
                <label for="nombres">Introduzca los nombres del universitario</label>
                <input class="border-text" type="text" name="nombres">
            </div>
            <br>
            <div><label for="apellidos">Introduzca los apellidos del universitario</label>
                <input class="border-text" type="text" name="apellidos">
            </div>
            <br>
            <div><label for="CU">Introduzca el CU del universitario</label>
                <input class="border-text" type="text" name="CU">
            </div>
            <br>

            <div>
                <label for="id_carrera">Carrera: </label>
                <select name="id_carrera">
                    <?php
        while ($row_carrera = $resultado->fetch_assoc()){?>

                    <option class="border-text" value="<?php echo $row_carrera["id"] ?>">
                        <?php echo $row_carrera["nombre"]?></option>

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