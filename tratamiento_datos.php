<?php

    session_start();

    $figura = $_POST['figura'];
    $a = $_POST['radio'];
    $b = $_POST['lado'];
    $c = $_POST['altura'];
    $d = $_POST['base'];
    $resultado = 0;

    $circulo = fn($a) => ($a ** 2) * M_PI;

    $cuadrado = fn($b) => $b * $b;

    $triangulo = fn($c, $d) => ($c * $d) / 2;

    switch ($figura) {
        case 'circulo':
            echo $circulo($a);
            break;
        case 'cuadrado':
            echo $cuadrado($b);
            break;
        case 'triangulo':
            echo $triangulo($c, $d);
            break;
    }

    $_SESSION['resultado'] = $resultado;

?>