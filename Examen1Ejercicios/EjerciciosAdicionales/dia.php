<!DOCTYPE html>
<html>
<head>
    <title>Día de la Semana</title>
</head>
<body>
    <h1>Día de la Semana</h1>
    <?php

        // Verificamos si se envió el valor por el método GET
        if(isset($_GET['n'])){

            // Obtenemos el valor de n
            $n = $_GET['n'];
            
            // Verificamos si el valor es numérico y está dentro del rango
            if(is_numeric($n) && $n >= 1 && $n <= 7){

                // Definimos los días de la semana
                $dias = [
                    'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado','Domingo'
                ];
                
                // Obtenemos el nombre del día seleccionado
                $dia_seleccionado = $dias[$n - 1];
                
                // Mostramos la lista de selección
                echo "<label for='dias'>Día de la Semana:</label>";
                echo "<select id='dias' name='dias'>";
                foreach($dias as $dia){
                    $selected = ($dia == $dia_seleccionado) ? "selected" : "";
                    echo "<option value='$dia' $selected>$dia</option>";
                }
                echo "</select>";
            } else {
                echo "El valor de n debe ser un número entre 1 y 7.";
            }
        } else {
            echo "Por favor, ingrese un valor para n.";
        }
    ?>




</body>
</html>
