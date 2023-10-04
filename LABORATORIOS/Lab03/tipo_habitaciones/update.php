<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
include("conexion.php");
$descripcion=$_POST["descripcion"];
$numero_camas=$_POST["numero_camas"];
$id=$_POST["id"];

$sql = "UPDATE tipo_habitacion SET descripcion='$descripcion', numero_camas='$numero_camas' WHERE id=$id";
$resultado = $con->query($sql);

if($resultado === true){?>

    <div class="container bg-white color-white">
         <h1>Se actualizo correctamente </h1>
    </div>

<?php }
else{
    ?>
        <div class="container bg-white color-white">
            <h2>Error: <?php echo $sql."<br>". $con->error;?></h2>
        </div>
    <?php
}
$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" /> 

</body>
</html>