<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    include("conexion.php");

    $sql = "SELECT u.id, u.nombre, u.correo,u.rol FROM usuario u";
    //echo $sql;
    $resultado = $con->query($sql);

    if ($resultado->num_rows > 0) { ?>

        <div class="container">
            <table>
                <tr style="">
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Operacion</th>

                </tr>

                <?php
                while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td>
                            <?php echo $row["nombre"]; ?>
                        </td>
                        <td>
                            <?php echo $row["correo"]; ?>
                        </td>
                        <td>
                            <?php echo $row["rol"]; ?>
                        </td>
                    </tr>

                <?php }

                ?>



            </table>
            <br>

        </div>


    <?php } else { ?>
        <br>
        <div class="container bg-white">No hay registros en la base de datos </div>
    <?php }








?>


</body>
</html>