<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("conexion.php");
$id=$_GET["id"];
$sql="DELETE FROM carrera WHERE id=$id";

if ($con->query($sql) === TRUE) {?>

    <div class="container bg-white color-white">
         <h1>Se elimino la wea correctamente </h1>
    </div>

<?php } 
else {
    ?>
    <div class="container bg-white color-white">
        <div><h1>Que si que hay error</h1></div>
        <h2>Error: <?php echo $sql."<br>". $con->error;?></h2>
    </div>
    <?php
}
$con->close()
?>
<meta http-equiv="refresh" content="3; url=read.php" />
</body>
</html>