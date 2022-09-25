<?php

class Ventas
{
    private $rutaImagen;
    private $porcentaje;
    private $arrRutas;

    function __construct($porcentaje, $arrRutas)
    {
        $this->porcentaje = $porcentaje;
        $this->arrRutas = $arrRutas;
    }

    function determinarImagen()
    {
        $porcen = (int) $this->porcentaje;
        if ($porcen >= 80) {
            $this->rutaImagen = $this->arrRutas['bien'];
        } else if ($porcen >= 50) {
            $this->rutaImagen = $this->arrRutas['normal'];
        } else {
            $this->rutaImagen = $this->arrRutas['malo'];
        }
    }

    function mostrarImagen()
    {
        echo "<img src=\"$this->rutaImagen\" />";
    }
}

class Operaciones
{
    private $num;
    private $factorial;

    function __construct($num)
    {
        $this->num = (int) $num;
    }

    function calcularFactorial()
    {
        $fact = 1;
        for ($i = 1; $i <= $this->num; $i++) {
            $fact *= $i;
        }
        $this->factorial = $fact;
    }

    function mostrar()
    {
        echo "El factorial de $this->num es: $this->factorial";
    }
}


class Matriz
{
    private $orden;

    function __construct($orden)
    {
        $this->orden = (int)$orden;
    }

    function matrizIdentidad()
    {
        echo "<table border=1>";
        for ($n1 = 1; $n1 <= $this->orden; $n1++) {
            echo "<tr>";

            for ($n2 = 1; $n2 <= $this->orden; $n2++) {
                if ($n1 == $n2)
                    echo "<td>", 1, "</td>";
                else
                    echo "<td>", 0, "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
