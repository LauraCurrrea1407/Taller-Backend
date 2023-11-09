<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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
                        <a class="nav-link me-5" aria-current="page" href="ejercicio2.php">Ejercicio 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5 active" aria-current="page" href="ejercicio3.php">Ejercicio 3</a>
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
        <form action="respuesta_ejercicio3.php" method="GET">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre" class="form-label fs-5">Nombre</label>
                        <input type="text" name="nombre" class="form-control fs-6" id="nombre" placeholder="Digite nombre" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellido" class="form-label fs-5">Apellido</label>
                        <input type="text" name="apellido" class="form-control fs-6" id="apellido" placeholder="Digite Apellido" required>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id" class="form-label fs-5">Cédula</label>
                        <input type="number" name="id" class="form-control fs-6" id="id" placeholder="Digite número de cédula" required>
                    </div>
                </div>
                <div class="col-md-6 mt-auto">
                    <button type="submit" name="datos" class="btn btn-info fs-6">Enviar</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>