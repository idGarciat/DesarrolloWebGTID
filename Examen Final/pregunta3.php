<?php
session_start();

class Alumno {
    public $CU;
    public $nombres;
    public $apellidos;

    public function __construct($CU, $nombres, $apellidos) {
        $this->CU = $CU;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
}

class ListaAlumnos {
    public $lista = [];

    public function insertarAlumno($alumno) {
        $this->lista[] = $alumno;
    }

    public function eliminarAlumno($cu) {
        // Buscar el índice del alumno con el CU proporcionado
        $indice = -1;
        foreach ($this->lista as $key => $alumno) {
            if ($alumno->CU === $cu) {
                $indice = $key;
                break;
            }
        }

        // Eliminar el alumno si se encuentra
        if ($indice !== -1) {
            unset($this->lista[$indice]);
            // Reindexar el array después de eliminar el elemento
            $this->lista = array_values($this->lista);
        }
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

if (!isset($_SESSION['listaAlumnos'])) {
    $_SESSION['listaAlumnos'] = new ListaAlumnos();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion'])) {
        if ($_POST['accion'] === 'eliminar') {
            $cu = $_POST['cu'];
            // Lógica para eliminar el alumno con el CU proporcionado
            // ...

            // Actualizar la lista en la sesión
            $_SESSION['listaAlumnos']->eliminarAlumno($cu);
        } elseif ($_POST['accion'] === 'insertar') {
            $cu = $_POST['cu'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            // Lógica para insertar un nuevo alumno con los datos proporcionados
            // ...

            // Actualizar la lista en la sesión
            $_SESSION['listaAlumnos']->insertarAlumno(new Alumno($cu, $nombres, $apellidos));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 3</title>
    <script>
        function eliminarAlumno(cu) {
            

            location.reload();
        }

        function insertarAlumno() {

            location.reload();
        }
    </script>
</head>
<body>
    <h2>Lista de Alumnos</h2>
    <?php
    // Mostrar la lista de alumnos
    $_SESSION['listaAlumnos']->mostrarLista();
    ?>

    <h2>Insertar Alumno</h2>
    <form method="post" onsubmit="insertarAlumno()">
        <label for="cu">CU:</label>
        <input type="text" name="cu" required><br>
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" required><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required><br>
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
