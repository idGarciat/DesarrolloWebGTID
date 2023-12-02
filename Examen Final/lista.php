<?php

require_once 'Alumno.php';

class ListaAlumnos {
    public $lista = array();

    public function insertarAlumno($CU, $nombres, $apellidos) {
        $alumno = new Alumno($CU, $nombres, $apellidos);
        array_push($this->lista, $alumno);
    }

    public function eliminarUltimoAlumno() {
        array_pop($this->lista);
    }

    public function mostrarLista() {
        echo '<table border="1">
                <tr>
                    <th>CU</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Acciones</th>
                </tr>';
        
        foreach ($this->lista as $alumno) {
            echo '<tr>';
            echo '<td>' . $alumno->CU . '</td>';
            echo '<td>' . $alumno->nombres . '</td>';
            echo '<td>' . $alumno->apellidos . '</td>';
            echo '<td><button onclick="eliminarAlumno(' . $alumno->CU . ')">Eliminar</button></td>';
            echo '</tr>';
        }
        
        echo '</table>';
    }
}
?>
