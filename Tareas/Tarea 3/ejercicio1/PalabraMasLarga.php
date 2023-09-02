<?php
function PalabraMasLarga($cadena) {
    // Dividir la cadena en palabras
    $palabras = explode(" ", $cadena);

    // Inicializar la longitud máxima y la palabra más larga
    $longitudMaxima = 0;
    //$palabraMasLarga = "";

    // Iterar a través de las palabras para encontrar la más larga
    foreach ($palabras as $palabra) {
        // Eliminar cualquier carácter especial (opcional)
        $palabra = preg_replace("/[^A-Za-z0-9 ]/", '', $palabra);

        // Obtener la longitud de la palabra
        $longitudPalabra = strlen($palabra);

        // Verificar si esta palabra es más larga que la actual máxima
        if ($longitudPalabra > $longitudMaxima) {
            $longitudMaxima = $longitudPalabra;
            $palabraMasLarga = $palabra;
        }
    }

    return $palabraMasLarga;
}
?>

