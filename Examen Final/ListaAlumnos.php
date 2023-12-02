<?php
class ListaAlumnos {
    public $lista = [];

    public function insertarAlumno($alumno) {
        $this->lista[] = $alumno;
    }

    public function eliminarAlumno() {
        array_pop($this->lista);
    }

    public function mostrarLista() {
        echo '<table border="1">
                <tr>
                    <th>CU</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Eliminar</th>
                </tr>';
        
        foreach ($this->lista as $alumno) {
            echo '<tr>
                    <td>' . $alumno->CU . '</td>
                    <td>' . $alumno->nombres . '</td>
                    <td>' . $alumno->apellidos . '</td>
                    <td><button onclick="eliminarAlumno(\'' . $alumno->CU . '\')">Eliminar</button></td>
                </tr>';
        }

        echo '</table>';
    }
}
?>
