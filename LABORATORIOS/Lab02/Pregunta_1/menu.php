<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $a=$_GET['a'];
    $b=$_GET['b'];
    ?>

    <ul>
        <li><a href="operaciones.php?operacion=milimetro&a=<?php echo $a?>&b=<?php echo $b?>">milimetro</a></li>
        <li><a href="operaciones.php?operacion=centimetro&a=<?php echo $a?>&b=<?php echo $b?>">centimetro</a></li>
        <li><a href="operaciones.php?operacion=decimetro&a=<?php echo $a?>&b=<?php echo $b?>">decimetro</a></li>
        <li><a href="operaciones.php?operacion=metro&a=<?php echo $a?>&b=<?php echo $b?>">metro</a></li>
        <li><a href="operaciones.php?operacion=kilometro&a=<?php echo $a?>&b=<?php echo $b?>">kilometro</a></li>
    </ul>    

</body>
</html>