<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#">Taller Backend</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio1.php">Ejercicio 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5 active" aria-current="page" href="ejercicio2.php">Ejercicio 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio3.php">Ejercicio 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio4.php">Ejercicio 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio5.php">Ejercicio 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio6.php">Ejercicio 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio7.php">Ejercicio 7</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <form action="ejercicio2.php" method="POST">        
            <div class="form-row mb-3">
                <div class="form-group col-md-12">
                    <label for="edad" class="form-label fs-5">Edad</label>
                    <input type="number" name="edad" class="form-control fs-6" id="edad" placeholder="Edad" required>
                </div>
            </div>
            <button type="submit" name="calcular" class="btn btn-info fs-6">Calcular</button>
        </form>
    </div>
    
    <?php    
    if (isset($_POST['calcular'])) {
        $edad = $_POST['edad'];

        echo '<div class="container mt-5 mb-4">'; 
        
        if ($edad >= 18 && $edad <=100) {
            echo '<h2 class="mt-4 ml-4 text-info">Es mayor de edad</h2>';
        }if ($edad > 100){
            echo '<h2 class="mt-4 ml-4 text-danger">Valor incorrecto</h2>';
        }if ($edad < 18 && $edad > 0){
            echo '<h2 class="mt-4 ml-4 text-info">No es mayor de edad</h2>';
        }if ($edad <= 0){
            echo '<h2 class="mt-4 ml-4 text-danger">No ha nacido</h2>';
        } 

        echo '</div>';
    }
    ?>

</body>
</html>