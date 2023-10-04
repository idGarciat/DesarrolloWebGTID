<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Meses del año</h1>

<table>

<thead>
<tr>
      <th>Lun</th>
      <th>Mar</th>
      <th>Mié</th>
      <th>Jue</th>
      <th>Vie</th>
      <th>Sáb</th>
      <th>Dom</th>
    </tr>
</thead>

<tbody>


</tbody>


</table>


    <?php


    if (isset($_POST['mes']) || isset($_POST['anio'])) {

        $mes = $_POST['mes'];
        $anio = $_POST['anio'];

        //echo "Mes: $mes <br> tipo del mes: " . gettype($mes) . "<br>";
        //echo "Año: $anio <br> tipo del año: " . gettype($anio) . "<br>";

        //convertir mes y anio a entero
        if($mes == "Enero")
            $mes1 = 1;
        else if($mes == "Febrero")
            $mes1 = 2;
        else if($mes == "Marzo")
            $mes1 = 3;
        else if($mes == "Abril")
            $mes1 = 4;
        else if($mes == "Mayo")
            $mes1 = 5;
        else if($mes == "Junio")
            $mes1 = 6;
        else if($mes == "Julio")
            $mes1 = 7;
        else if($mes == "Agosto")
            $mes1 = 8;
        else if($mes == "Septiembre")
            $mes1 = 9;
        else if($mes == "Octubre")
            $mes1 = 10;
        else if($mes == "Noviembre")
            $mes1 = 11;
        else if($mes == "Diciembre")
            $mes1 = 12;

 
        $anio1 = intval($anio);


        //echo "Mes: $mes1 <br> tipo del mes: " . gettype($mes1) . "<br>";
        //echo "Año: $anio1 <br> tipo del año: " . gettype($anio1) . "<br>";


        $dias_mes = cal_days_in_month(CAL_GREGORIAN, $mes1, $anio1);


        //echo "<h2>Calendario del mes $mes del año $anio1 con dias $dias_mes </h2> <br>";

        for ($i = 1; $i <= $dias_mes; $i++) {
            echo "
            <table border='1' style='border-collapse: collapse;'>
            <tr>
            <td>$i</td>
            </tr>
            </table>
            ";
        }




    }


    ?>




</body>

</html>