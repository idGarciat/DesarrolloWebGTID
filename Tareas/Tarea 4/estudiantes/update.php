<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>



<?php
include("conexion.php");
$nombres=$_POST["nombres"];
$apellidos=$_POST["apellidos"];
$CU=$_POST["CU"];
$id=$_POST["id"];
$id_carrera=$_POST["idcarrera"];

$sql = "UPDATE alumno SET nombres='$nombres', apellidos='$apellidos',CU='$CU',idcarrera=$id_carrera  WHERE id=$id";
$resultado = $con->query($sql);

if($resultado === true){?>

    <div class="container bg-white color-white">
        Hecho
         <h1>Se actualizo correctamente </h1>
    </div>

<?php }
else{
    ?>
        <div class="container bg-white color-white">
            <div>Error</div>
            <h2>Error: <?php echo $sql."<br>". $con->error;?></h2>
        </div>
    <?php
}
$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" /> 

</body>
</html>