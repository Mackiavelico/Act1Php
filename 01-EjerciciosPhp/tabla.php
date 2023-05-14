<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="IMG/files.png" type="image/x-icon">
</head>
<header>
    <h1>ACTIVIDAD EN PHP</h1>
</header>

<body>
    <nav>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="calculo.php">Cálculo matemático</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="comparacion.php">Comparación de números</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="colores.php">Botones de colores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="tabla.php">Tabla de multiplicar</a>
            </li>
        </ul>
    </nav>
    
    <section><!--Sección para la comparación de 2 números-->
        <header><br>
            <hr>
            <h2>Tabla de multiplicar</h2>
        </header>
        <!--Creación de 2 cuadros que reciben los números a calcular-->
        <form action="tabla.php" method="post">
            <div class="row g-2">
                <div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInputGrid" name="numero" min="0" required>
                        <label for="floatingInputGrid">Ingresa el número a multiplicar</label>
                    </div>
                </div>
                
                <div>
                    <div class="form-floating" id="borde1">
                        <input type="submit" class="form-control" id="floatingInputGrid" value="Generar">
                        <br>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!--Código PHP-->
    <?php
    if ($_POST) {

        //Generando cálculos
        //Creación de variable
        $numero = $_POST['numero'];
        

        //Cálculos del valor ingresado
        $i = 0;

        for ($i; $i < 13; $i++){
            echo $numero. " x ". $i. " = ". $i*$numero. " <br>";
        }
        
    }
    ?>
   <br>
    <hr>
    <hr>
    <footer>
        &copy; José Montecinos 2023
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>