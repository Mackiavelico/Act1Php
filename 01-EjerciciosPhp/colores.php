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
                <a class="nav-link active" aria-current="page" href="colores.php">Botones de colores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="tabla.php">Tabla de multiplicar</a>
            </li>
        </ul>
    </nav>

    <section><!--Sección para el Switch de botones-->
        <header><br>
            <hr>
            <h2>Botones de colores</h2>
        </header>
        <!--Creación de los botones-->
        <!--es colocado como type submit para enviar al formulario-->
        <form action="colores.php" method="post">
            <button type="submit" class="btn btn-outline-danger" name="btn" id="btn1" value="Rojo">Rojo</button>
            <button type="submit" class="btn btn-outline-warning" name="btn" id="btn1" value="Amarillo">Amarillo</button>
            <button type="submit" class="btn btn-outline-success" name="btn" id="btn1" value="Verde">Verde</button>
            <button type="submit" class="btn btn-outline-primary" name="btn" id="btn1" value="Azul">Azul</button>
            <button type="submit" class="btn btn-outline-secondary" name="btn" id="btn1" value="Gris">Gris</button>
        </form>
    </section>

    <!--Código PHP-->
    <?php
    echo '<br>';
    if (isset($_POST['btn'])) {

        //Generando cálculos
        //Creación de variable
        $colorElegido = $_POST['btn'];


        //Cálculos del valor elegido
        switch ($colorElegido) {
            case 'Rojo':
                echo "El color seleccionado es Rojo.";break;
            case 'Amarillo':
                echo "El color seleccionado es Amarillo.";break;
            case 'Verde':
                echo "El color seleccionado es Verde.";break;
            case 'Azul':
                echo "El color seleccionado es Azul.";break;
            case 'Gris':
                echo "El color seleccionado es Gris.";break;
            default:
                echo "No has elegido ningún color";break;
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