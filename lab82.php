<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.2</title>
</head>

<body>
    <?php
    include('class_lib.php');
    if (array_key_exists('enviar', $_POST)) {
        $num = $_POST['fact'];
        if ($num) {
            $op = new Operaciones($num);
            $op->calcularFactorial();
            $op->mostrar();
        } else {
            echo "Por favor ingrese un valor.";
        }
    } else {
    ?>

        <form action="lab82.php" method="post">
            CALCULADORA DE FACTORIALES
            <br>
            <input type="text" name="fact" value="">
            <input type="submit" value="Enviar" name="enviar">
        </form>

    <?php } ?>

</body>

</html>