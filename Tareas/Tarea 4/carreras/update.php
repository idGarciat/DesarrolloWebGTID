<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
include("conexion.php");
$nombre=$_POST["nombre"];
$id=$_POST["id"];


$sql = "UPDATE carrera SET nombre='$nombre' WHERE id=$id";
$resultado = $con->query($sql);


if($resultado === true){?>

    <div class="container bg-white color-white">

        <h1>Se actualizo correctamente </h1>
    </div>


    <?php }
else{
    ?>
    <div class="container bg-white color-white">
        <div>
            <h1>Fallido</h1>
        </div>
        <h2>Error: <?php echo $sql."<br>". $con->error;?></h2>
    </div>
    <?php
}

$con->close();
?>
    <meta http-equiv="refresh" content="3; url=read.php" />

</body>

</html>