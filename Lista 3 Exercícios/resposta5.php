<?php 
header("Content-Type: text/html; charset=UTF-8");
    $numero = $_POST['numero'];
    $raiz_quadrada = sqrt($numero);
    echo "A raiz quadrada de $numero é: $raiz_quadrada";