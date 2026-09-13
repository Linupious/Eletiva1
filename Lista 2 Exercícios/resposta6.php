<?php
header("Content-Type: text/html; charset=UTF-8");
    $numero = $_POST['numero'];
    echo "Loop de 1 até $numero:<br>";
    
    $i = 1;
    while ($i <= $numero) {
        echo "Número: $i<br>";
        $i++;
    }
?>