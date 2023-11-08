<?php
$datos = array(
  array(
    'nro' => 1,
    'apellidos' => 'Perez',
    'nombres' => 'Juan',
    'edad' => 25,
    'materia' => 'SIS256',
    'nota' => 83
  ),
  array(
    'nro' => 2,
    'apellidos' => 'Ricardo',
    'nombres' => 'Luna',
    'edad' => 30,
    'materia' => 'SIS-258',
    'nota' => 70
  ),
  array(
    'nro' => 3,
    'apellidos' => 'Teresa',
    'nombres' => 'Tomasa',
    'edad' => 26,
    'materia' => 'SIS-256',
    'nota' => 84
  ),
  array(
    'nro' => 4,
    'apellidos' => 'Favian',
    'nombres' => 'Umbre',
    'edad' => 24,
    'materia' => 'SIS-258 ',
    'nota' => 70
  ),


);

echo json_encode($datos);

?>