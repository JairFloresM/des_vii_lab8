<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.5</title>
</head>

<body>

    <?php

    include('class_lib.php');
    if (array_key_exists('enviar', $_POST)) {
        $tam = $_POST['tamanio'];
        if (!empty($tam)) {
            if ($tam % 2 == 0) {
                $identidad = new Matriz($tam);
                $identidad->matrizIdentidad();
            } else {
                echo "El tamaño no es par";
            }
        } else {
            echo "Ingrese el tamanio de la matriz.";
        }
    } else {
    ?>

        <form action="lab83.php" method="post">
            MATRIZ IDENTIDAD
            <br>
            Ingrese el tamaño de la matriz:
            <input type="text" name="tamanio">
            <br>

            <input type="submit" value="Enviar" name="enviar">
        </form>

    <?php } ?>

</body>

</html>