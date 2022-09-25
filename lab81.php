<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>

<body>

    <?php

    include('class_lib.php');

    if (array_key_exists('enviar', $_POST)) {
        $porcentaje = $_POST['porcentaje'];
        if ($porcentaje) {
            $arrImg = array(
                "bien" => "img/feliz.png",
                "normal" => "img/normal.png",
                "malo" => "img/triste.png"
            );

            $ventas = new Ventas($porcentaje, $arrImg);
            $ventas->determinarImagen();
            $ventas->mostrarImagen();
        } else {
            echo "Por favor ingrese un valor.";
        }
    } else {
    ?>

        <form action="lab81.php" method="post">
            INGRESE EL PORCENTAJE DE VENTAS DEL ULTIMO MES
            <br>
            <input type="text" name="porcentaje" value="">
            <input type="submit" value="Enviar" name="enviar">
        </form>

    <?php } ?>
</body>

</html>