<?php
    include 'db/conexion.php';

    $query = mysqli_query($conexion, "SELECT * FROM usuarios")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Ejercicio 7</title>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
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
                        <a class="nav-link me-5" aria-current="page" href="ejercicio3.php">Ejercicio 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio4.php">Ejercicio 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio5.php">Ejercicio 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5 active" aria-current="page" href="ejercicio6.php">Ejercicio 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-5" aria-current="page" href="ejercicio7.php">Ejercicio 7</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="container">
            <div class="filter">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="show-row">                            
                            <select class="form-control fs-4">
                                <option value="5" selected="selected">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="search-row">
                            <input type="text" name="search" class="form-control fs-4" placeholder="Ingrese su palabra clave">
                        </div>
                    </div>
                </div>
            </div>
            <table id="music" class="table table-responsive table-hover">
                <thead>
                    <tr  class="myHead">
                        <th>#</th>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cédula</th>
                    </tr>
                </thead>                
                <tbody>                
                    <?php                    
                    while ($datos = mysqli_fetch_array($query)) {
                        $id = $datos['id'];
                        $nombre = $datos['nombre'];
                        $apellido = $datos['apellido'];
                        $cédula = $datos['cédula'];

                        echo'
                        <tr data-url="FQS7i2z1CoA">
                            <td></td>
                            <td>'.$id.'</td>
                            <td>'.$nombre.'</td>
                            <td>'.$apellido.'</td>
                            <td>'.$cédula.'</td>
                        </tr>
                        ';
                    }
                    ?>
                </tbody>
            </table>
            <div class="text-center controller">
                <ul class="pagination"></ul>
                <ul class="pager">
                    <li ><a href="javascript:void(0)" class="prev">Anterior</a></li>
                    <li><a href="javascript:void(0)" class="next">Siguiente</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>

</body>
</html>