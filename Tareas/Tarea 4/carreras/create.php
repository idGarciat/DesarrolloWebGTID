<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
include("conexion.php");
$nombre= $_POST["nombre"];

$sql = "INSERT INTO carrera(nombre) VALUES('$nombre')";

 //echo $sql;
 if ($con->query($sql) === TRUE) {?>

    <div class="container bg-white color-white">
        <h1>Se registro bien bien</h1>
    </div>

    <?php } 

else {
    ?>
    <div class="container bg-white color-white">
        <div>
            <h1>Error</h1>
        </div>
        <h2>Error: <?php echo $sql."<br>". $con->error;?></h2>
    </div>
    <?php
}
$con->close()
?>
    <meta http-equiv="refresh" content="3; url=read.php" />

</body>

</html>