<?php
header("Content-Type: text/html; charset=UTF-8");
    $numero = $_POST['numero'];
    echo "Fatorial de $numero:<br>";
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    echo "Resultado: $fatorial";