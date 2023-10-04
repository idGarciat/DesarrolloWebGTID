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
    include("conexion.php");
    $sql = "SELECT id,descripcion,numero_camas FROM tipo_habitacion";
    $resultado = $con->query($sql);

    ?>


    <div class="color-white">

        <form class="container bg-white color-white" action="create.php" method="post">
            <div>
                <h1>Insertar un tipo de tipo de habitacion</h1>
            </div>
            <div>
                <label for="descripcion">Introduzca la descripcion</label>
                <input class="border-text" type="text" name="descripcion">
            </div>
            <br>
            <div><label for="numero_camas">Introduzca el numero de camas</label>
                <input class="border-text" type="text" name="numero_camas">
            </div>
            <br>
            <input type="submit" value="crear">
        </form>
    </div>

</body>

</html>