<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
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
                        <a class="nav-link me-5 active" aria-current="page" href="ejercicio1.php">Ejercicio 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio2.php">Ejercicio 2</a>
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
        <form action="ejercicio1.php" method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="n1" class="form-label fs-5">Número 1</label>
                    <input type="number" step="any" name="n1" class="form-control fs-6" id="n1" style="font-size: 20px;" placeholder="Digite número 1" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="n2" class="form-label fs-5">Número 2</label>
                    <input type="number" step="any" name="n2" class="form-control fs-6" id="n2" style="font-size: 20px;" placeholder="Digite número 2" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="operacion" class="form-label fs-5">Operación a realizar</label>
                <select id="operacion" name="ope" class="form-control fs-6" required>
                    <option value="">Seleccione una operación...</option>
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Multiplicación</option>
                    <option value="4">División</option>
                </select>
            </div>
            <button type="submit" name="operar" class="btn btn-info fs-6">Operar</button>
        </form>
    </div>

    <?php        
    if (isset($_POST['operar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $ope = $_POST['ope'];

        switch ($ope) {
            case '1':
                $total = $n1 + $n2;
                $ope2 = 'suma'; 
                break;
            case '2':
                $total = $n1 - $n2;
                $ope2 = 'resta';
                break;
            case '3':
                $total = $n1 * $n2;
                $ope2 = 'multiplicación';
                break;
            case '4':
                $total = $n1 / $n2;
                $ope2 = 'división';
                break;
        }
    ?>

    <div class="container mt-5 mb-4">
        <h2 class="text-info ml-5">La 
            <?php echo $ope2; ?> 
            entre el número 
            <?php echo $n1; ?> 
            y el número 
            <?php echo $n2; ?> 
            es igual a = 
            <?php echo $total; ?></h2>
    </div>
        
    <?php
    }
    ?>

</body>
</html>