<?php
// El nombre del archivo donde se guarda la URL
$archivo = 'url_actual.txt';

// Verifica si el archivo existe y es legible
if (file_exists($archivo) && is_readable($archivo)) {
    // Lee el contenido del archivo y lo imprime
    echo trim(file_get_contents($archivo));
} else {
    // Si el archivo no existe o no se puede leer, imprime un mensaje de error o una cadena vacía
    // Es mejor imprimir una cadena vacía para que el JavaScript no intente cargar una URL inválida.
    echo "";
    // Opcional: podrías loggear el error para depuración
    // error_log("Error: El archivo de URL no existe o no es legible.");
}
?>