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
$nro=$_POST["nro"];
$bano_privado=$_POST["bano_privado"];
$espacio=$_POST["espacio"];
$precio=$_POST["precio"];
$id=$_POST["id"];

$id_tipohabitacion=$_POST["id_tipo_habitacion"];

$sql = "UPDATE habitacion SET nro='$nro', bano_privado='$bano_privado', espacio='$espacio', precio='$precio', id_tipo_habitacion= $id_tipohabitacion  WHERE id=$id";
//echo $sql;
$resultado = $con->query($sql);

if($resultado === true){?>

    <div class="container bg-white color-white">
         <h1>Se actualizo correctamente </h1>
    </div>

<?php }
else{
    ?>
        <div class="container bg-white color-white">
            <div>Fallo</div>
            <h2>Error: <?php echo $sql."<br>". $con->error;?></h2>
        </div>
    <?php
}
$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" /> 

</body>
</html>