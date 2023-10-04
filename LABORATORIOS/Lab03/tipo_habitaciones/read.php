<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="styles.css">
    <style>

    </style>
</head>

<body>

    <?php
    include("conexion.php");
    $sql = "SELECT t.id, t.descripcion, t.numero_camas FROM tipo_habitacion t";
    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) { ?>

        <div class="container">
            <table>
                <tr>

                    <th>Descripcion</th>
                    <th>Numero de camas</th>

                </tr>

                <?php
                while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php echo $row["descripcion"]; ?>
                        </td>
                        <td>
                            <?php echo $row["numero_camas"]; ?>
                        </td>

                        <td><a href="form_update_tipo_habitacion.php?id=<?php echo $row["id"]; ?>">
                                <h2>Actualizar</h2>
                            </a>
                            <a href="delete.php?id=<?php echo $row["id"] ?>">
                                <h2>
                                    Eliminar
                                </h2>
                            </a>
                        </td>
                    </tr>

                <?php }

                ?>

            </table>
            <br>
            <div class="container bg-white">
                <a href="form_create_tipo_habitacion.php">
                    <h2>
                        Añadir
                    </h2>
                </a>
            </div>

        </div>


    <?php } else { ?>
        <br>
        <div class="container bg-white">no hay registros en la base de datos </div>
    <?php }
    ?>

</body>

</html>