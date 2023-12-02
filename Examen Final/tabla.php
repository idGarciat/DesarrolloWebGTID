
<?php
try {

    // Incluye el archivo de conexión a la base de datos
    include 'conexion.php';
    
    // Manejar las operaciones
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if (isset($_POST["listar"])) {
            $result = $con->query("SELECT * FROM libros");
    
            echo "<h2>Listado de Libros</h2>";
    
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Año</th>
                        <th>Acciones</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['imagen']}</td>
                        <td>{$row['titulo']}</td>
                        <td>{$row['autor']}</td>
                        <td>{$row['ideditorial']}</td>
                        <td>{$row['anio']}</td>
                        <td>
                            <a href='editar.php?id={$row['id']}'>Editar</a>
                            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                        </td>
                    </tr>";
            }
            echo "</table>";
        }
    
        else if (isset($_POST["insertar"])) {
    
            echo "<h2>Insertar Libro</h2>";
            echo "<form action='insertar.php' method='post'>
                    Título: <input type='text' name='titulo' required><br>
                    Autor: <input type='text' name='autor' required><br>
                    Editorial: <input type='text' name='editorial' required><br>
                    Año: <input type='text' name='anio' required><br>
                    <input type='submit' value='Insertar'>
                </form>";
        }
    }
    

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>