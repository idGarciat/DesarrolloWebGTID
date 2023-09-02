<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la cadena de palabras del formulario
    $cadena = $_POST["cadena"];

    // Incluir la función PalabraMasLarga
    include("PalabraMasLarga.php");

    // Llamar a la función para encontrar la palabra más larga
    $palabraMasLarga = PalabraMasLarga($cadena);

    // Imprimir la palabra más larga
    echo "La palabra más larga es: " . $palabraMasLarga;
}
?>
