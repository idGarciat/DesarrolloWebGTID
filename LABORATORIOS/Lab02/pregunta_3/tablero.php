<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<style>

.casilla1{
    width: 50px;
    height: 50px;
}
.casilla2{
    width: 50px;
    height: 50px;
}




</style>


    <form method="post"action="">

        <label for="filas">numero de filas:</label>
        <input type="number" id="filas" name="filas" required><br>

        <label for="columnas">numero de columnas:</label>
        <input type="number" id="columnas" name="columnas" required><br>


        <input type="color" id="color1" name="color1" required><br>
        <input type="color" id="color2" name="color2" required><br>

        <input type="submit" value="Generar tablero">

    </form>

    <?php 

$filas = $_POST['filas'];
$columnas = $_POST['columnas'];
$color1 = $_POST['color1'];
$color2 = $_POST['color2'];

echo "<table border='1' style='
    border-collapse: collapse;
    width: 400px;
    height: 400px;
'>";
for($i = 0; $i < $filas; $i++){
    echo "<tr>";
    for($j = 0; $j < $columnas; $j++){
        if($i % 2 == 0){
            if($j % 2 == 0){
                echo "<td bgcolor='$color1'></td>";
            }else{
                echo "<td bgcolor='$color2'></td>";
            }
        }else{
            if($j % 2 == 0){
                echo "<td bgcolor='$color2'></td>";
            }else{
                echo "<td bgcolor='$color1'></td>";
            }
        }
    }
    echo "</tr>";
}

?>
</body>
</html>