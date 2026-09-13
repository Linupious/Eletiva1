<?php
header("Content-Type: text/html; charset=UTF-8");
    $numero = $_POST['numero'];
    echo "Loop de 1 até $numero:<br>";
    
    for ($i = 1; $i <= $numero; $i++) {
        echo "Número: $i<br>";
    }
?>