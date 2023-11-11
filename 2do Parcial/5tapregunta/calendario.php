<?php

if (isset($_GET['mes']) && isset($_GET['anio'])) {
  $mes = $_GET['mes'];
  $anio = $_GET['anio'];

  $fecha = new DateTime("$anio-$mes-01");
  $nombreMes = $fecha->format('F');
  $primerDia = $fecha->format('N');
  $diasEnMes = $fecha->format('t');

  echo "<h2>$nombreMes $anio</h2>";
  echo "<table>";
  echo "<tr><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th></tr>";

  echo "<tr>";
  for ($i = 1; $i < $primerDia; $i++) {
    echo "<td></td>";
  }

  for ($i = 1; $i <= $diasEnMes; $i++) {
    if ($i == 1 || $i % 7 == 1) {
      echo "</tr><tr>";
    }
    echo "<td>$i</td>";
  }

  echo "</tr>";
  echo "</table>";
}

?>