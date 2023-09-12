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
    $sql = "SELECT a.id, a.nombres, a.apellidos,a.CU,c.nombre  as carrera FROM alumno a LEFT JOIN carrera c ON a.idcarrera=c.id ";
    //echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) { ?>

    <div class="container">
        <table>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CU del estudiante</th>
                <th>Carrera</th>
                <th>Operaciones</th>

            </tr>

            <?php
                while ($row = $resultado->fetch_assoc()) { ?>
            <tr>
                <td>
                    <?php echo $row["nombres"]; ?>
                </td>
                <td>
                    <?php echo $row["apellidos"]; ?>
                </td>
                <td>
                    <?php echo $row["CU"]; ?>
                </td>
                <td>
                    <?php echo $row["carrera"]; ?>
                </td>
                <td class="iconos"><a href="formulario_update_alumno.php?id=<?php echo $row["id"]; ?>"><img
                            src="Imagenes/editar.png" alt="Editar" width="17px" height="17px"></a>
                    <a href="delete.php?id=<?php echo $row["id"] ?>"><img src="Imagenes/eliminar.png" alt="Eliminar"
                            width="17px" height="17px"></a>
                </td>
            </tr>

            <?php }

                ?>

        </table>
        <br>
        <div class="container bg-white">
            <h1>Añadiendo un nuevo Student</h1>
        </div>

    </div>


    <?php } else { ?>
    <br>
    <div class="container bg-white">no hay registros en la base de datos </div>
    <?php }
    ?>

</body>

</html>