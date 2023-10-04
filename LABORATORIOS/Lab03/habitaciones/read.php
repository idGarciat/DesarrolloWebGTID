<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>

    <?php
    include("conexion.php");
    $sql = "SELECT h.id, h.nro, h.bano_privado, h.espacio, h.precio, t.descripcion as descripcion FROM habitacion h LEFT JOIN tipo_habitacion t ON h.id_tipo_habitacion=t.id ";

    //echo $sql;

    $resultado = $con->query($sql);


    if ($resultado->num_rows > 0) { ?>

        <div class="container">
            <table>
                <tr>
                    <th>NRO</th>
                    <th>Baño privado</th>
                    <th>Espacio</th>
                    <th>Precio</th>
                    <th>Tipo de habitacion</th>
                    <th>Operaciones</th>

                </tr>

                <?php
                while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>


                    
                        <td>
                            <?php echo $row["nro"]; ?>
                        </td>
                        <td>
                            <?php echo $row["bano_privado"]; ?>
                        </td>
                        <td>
                            <?php echo $row["espacio"]; ?>
                        </td>

                        <td>
                            <?php echo $row["precio"]; ?>
                        </td>
    
                        <td>
                            <?php echo $row["descripcion"]; ?>
                        </td>

                        <td ><a href="form_update_habitacion.php?id=<?php echo $row["id"]; ?>">
                                <h3>Actualizar</h3>
                            </a>
                            <a href="delete.php?id=<?php echo $row["id"] ?>">
                                <h3>
                                    Eliminar
                                </h3>
                            </a>
                        </td>
                    </tr>

                <?php }

                ?>

            </table>
            <br>
            <div class="container bg-white">
                <a href="form_create_habitacion.php">
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