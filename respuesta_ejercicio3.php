<?php    
    if (isset($_GET['datos'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $id = $_GET['id'];

        echo 
        'Nombre: '.$nombre.'<br>'.
        'Apellido: '.$apellido.'<br>'.
        'Cédula: '.$id;
    }     

    echo '<br>'; 
    echo '<br>';

    // estilos de Bootstrap
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">';

    // Botón para volver a la página anterior
    echo '<button onclick="volver()" class="btn btn-info fs-6">Volver</button>';
    echo '<script src="js/script.js"></script>';

?>     