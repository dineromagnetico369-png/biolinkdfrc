<?php
// Verifica si se ha enviado una URL a través del método POST
if (isset($_POST['url'])) {
    // Obtiene la URL y la limpia de espacios en blanco
    $url = trim($_POST['url']);
    
    // El nombre del archivo donde se guardará la URL
    $archivo = 'url_actual.txt';
    
    // Escribe la URL en el archivo. Esto sobrescribe el contenido anterior.
    // file_put_contents devuelve 'false' si falla.
    if (file_put_contents($archivo, $url) !== false) {
        echo "URL guardada con éxito.";
    } else {
        echo "Error: No se pudo escribir en el archivo.";
    }
} else {
    echo "Error: No se recibió ninguna URL.";
}
?>