<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
include("conexion.php");
$sql = "SELECT id,nombre   FROM carrera";

//echo $sql;

$resultado = $con->query($sql);
if($resultado->num_rows>0){?>

<div class="container">
<table>
    <tr>
        <th>Nombre de la carrera</th>
        <th>Operaciones</th>
    </tr>

    <?php
    while ($row = $resultado->fetch_assoc()) {?>
        <tr>
            <td><?php echo $row["nombre"];?></td>
            <td class="iconos"><a href="form_update_career.php?id=<?php echo $row["id"]; ?>"><img src="Imagenes/editar.png" alt="Editar" width="17px" height="17px">
        </a>
                <a href="delete.php?id=<?php echo $row["id"]?>"><img src="Imagenes/eliminar.png" alt="Eliminar" width="17px" height="17px">
            </a></td>
        </tr>

    <?php }
    ?>
</table>
<br>
<div class="container bg-white">
        <a href="form_create_career.html"><img src="Imagenes/añadir.png" alt="añadir" width="100px" height="100px"></a>
        <div>añadir un nueva carrera</div>
    </div>
</div>

    
<?php }
else{?>
    <br>
    <div class="container bg-white">no hay registros en la base de datos </div>
<?php }
?>

</body>
</html>