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
$sql_alumno = "SELECT nombres,apellidos,CU,idcarrera FROM alumno WHERE id = $id";
$resultado_alumno = $con->query($sql_alumno);
$row_alumno = $resultado_alumno->fetch_assoc();

$sql_carrera = "SELECT id,nombre FROM carrera";
$resultado_carrera = $con->query($sql_carrera);

?>

    <form class="container bg-white color-white" action="update.php" method="post">
        <div>
            <h1>Actualizar datos</h1>
        </div>
        <div>
            <label for="nombres">Nombres</label>
            <input class="border-text" type="text" name="nombres" value="<?php echo $row_alumno["nombres"] ?>">
        </div>
        <br>
        <div>
            <label for="apellidos">Apellidos</label>
            <input class="border-text" type="text" name="apellidos" value="<?php echo $row_alumno["apellidos"] ?>">
        </div>
        <br>
        <div>
            <label for="CU">CU del estudiante</label>
            <input class="border-text" type="text" name="CU" value="<?php echo $row_alumno['CU']; ?>">
        </div>
        <br>

        <div>
            <label for="idcarrera">Carrera: </label>
            <select name="idcarrera">
                <?php
            while ($row_carrera = $resultado_carrera->fetch_assoc()){?>

                <option value="<?php echo $row_carrera["id"] ?>"
                    <?php echo $row_carrera['id']==$row_alumno['idcarrera']?"selected":"";  ?>>
                    <?php echo $row_carrera["nombre"]?></option>

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